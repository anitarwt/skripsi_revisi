<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->template->load('static', 'profile');
		//$this->load->view('profile');
	}
	public function register(){

		 $this->template->load('static', 'register');
	}


    public function tambah_pegawaidb()
    {
        $this->load->model('mtabel_pegawai');
        // 
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('jk', 'jenis kelamin', 'trim|required');
       // $this->form_validation->set_rules('tanggal', 'tgl', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'valid_email|required|');
        $this->form_validation->set_rules('hp', 'no handpone', 'numeric|required|');
        $this->form_validation->set_rules('pendidikan', 'pendidikan terakhir', 'trim|required|');
        $this->form_validation->set_rules('pengalaman', 'pengalaman kerja', 'trim|required|');
        $this->form_validation->set_rules('divisi', 'divisi', 'trim|required|');


        if ($this->form_validation->run() == FALSE) {
            $this->template->load('static', 'register');
        } else {
            $this->load->library('upload');
            $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['upload_path'] = './uploads/'; //path folder
            $config['allowed_types'] = 'zip|rar|'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '3072'; //maksimum besar file 3M
            $config['file_name'] = $nmfile; //nama yang terupload nantinya

            $this->upload->initialize($config);

            // if($_FILES['filefoto']['name'])
            //{
            if ($this->upload->do_upload('file')) {
                $gbr = $this->upload->data();

                $this->mtabel_pegawai->tambah($data); //akses model untuk menyimpan ke database
                $hasil['hasil'] = 'true';
                echo json_encode($hasil);
                redirect('home/index'); //jika berhasil maka akan ditampilkan view upload
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdat
            } else {
                $hasil['hasil'] = 'false';
                 echo json_encode($hasil);
                redirect('home/index');  //jika gagal maka akan ditampilkan form upload

            }
        }
    }


}



/* End of file home.php */
/* Location: ./application/controllers/home.php */