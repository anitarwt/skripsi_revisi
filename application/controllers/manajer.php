<?php
session_start();
class Manajer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('mtabel_kriteria');
		$this->load->model('mtabel_pegawai');

		if ($this->session->userdata('username')=="") {
			redirect('/login');
		}elseif($this->session->userdata('level') == 'staff'){
			redirect('/staff/index');
		}
	}

	public function index()
	{
		 $data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		   $data['report'] = $this->mtabel_pegawai->report();
       $this->template->load('manajer/static_hrd', 'manajer/dashbord_user',$data);
		
	}

public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('/login');
	}
	
	 private function weighted_product($divisi){
        //proses weighted product

        //fetch semua alternatif
        foreach ($this->db->get("wp_alternatif")->result() as $alt){

            $id = $alt->id_alternatif;

            //cari vector s
            $data_bobot_kali_nilai = $this->db->query("
            select  
            n.nilai,bobot/(select sum(bobot) from wp_kriteria) as bobot 
            from wp_kriteria k 
            left join wp_nilai n 
            on k.id_kriteria=n.id_kriteria and n.id_alternatif=$id
             
            join wp_alternatif a on a.id_alternatif=n.id_alternatif
            ".($divisi?" and divisi='$divisi'" : ""))->result();

            $s = 1;

            foreach ($data_bobot_kali_nilai as $c){
                $s*=pow($c->nilai,$c->bobot);
            }

            //simpan vector s
            $this->db->set("vektor_s",$s)->where("id_alternatif",$id)->update("wp_alternatif");
        }
        $total_s = $this->db->query("select SUM(x.vektor_s) as total from wp_alternatif x")->row()->total;

        $total_s = $total_s==0 ? 1:$total_s;

        //insert vector v

        $this->db->query("update wp_alternatif set vektor_v = vektor_s/$total_s");
    }
    public function tampil_rangking($divisi="")
    {
        $this->weighted_product($divisi);
         if($divisi)
            $this->db->where("divisi",$divisi);
          $data['kriteria'] = $this->db->order_by("id_kriteria")->get("wp_kriteria")->result();
        $data['nilai'] = $this->mtabel_nilai->tampil();
        $data['rangking'] = $this->db->order_by("vektor_v","desc")->get("wp_alternatif")->result();
        $this->template->load('manajer/static_hrd', 'manajer/tampil_rangking', $data);
    }
     public function cetak($divisi=""){

$data = array( 'title' => 'Laporan Excel');
    $this->weighted_product($divisi);
        if($divisi)
        $this->db->where("divisi",$divisi);
          $data['kriteria'] = $this->db->order_by("id_kriteria")->get("wp_kriteria")->result();
        $data['nilai'] = $this->mtabel_nilai->tampil();
        $data['rangking'] = $this->db->order_by("vektor_v","desc")->get("wp_alternatif")->result();
        $this->load->view ('manajer/tampil_report', $data);
    }



}

		
