<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_nilai extends CI_Model
{


    public function tambah()
    {
        $id = $this->input->post('id_alternatif');

        foreach ( $this->db->select("id_kriteria")->get("wp_kriteria")->result() as $kriteria){
            $data= [];
            $data["id_alternatif"] = $id;
            $data["id_kriteria"] = $kriteria->id_kriteria;
            $data["nilai"] = $this->input->post("kriteria".$kriteria->id_kriteria);
            $this->db->insert('wp_nilai', $data);
        }

        return true;
    }

    public function nilaiPeralternatif($id_alternatif){

        return $this->db
            ->select("id_nilai,k.nama_kriteria,nilai,k.id_kriteria")
            ->join("wp_kriteria k","k.id_kriteria=n.id_kriteria and n.id_alternatif=$id_alternatif","right")
            ->order_by("k.id_kriteria")
            ->get("wp_nilai n")->result();
    }


    public function tampil()
    {
        $data = $this->db->get('wp_alternatif')->result();

        foreach ($data as $d){
            $d->nilai = $this->nilaiPeralternatif($d->id_alternatif);
        }

        return $data;
    }

    function tampil_id($data)
    {
        $this->db->select('*');
        $this->db->from('wp_nilai');
        $this->db->where('id_nilai', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function edit()
    {
        $id = $this->input->post('id');

        $post = $this->input->post();

        unset($post["id"]);

        $this->db->delete("wp_nilai",["id_alternatif"=>$id]);

        foreach (array_keys($post) as $id_kriteria){
            echo $id_kriteria;
            $data= [];
            $data["id_alternatif"] = $id;
            
            $data["id_kriteria"] = $id_kriteria;
            $data["nilai"] = $post[$id_kriteria];
            $this->db->insert('wp_nilai', $data);
        }

    }

    public function hapus($id)
    {

 $this->db->where('id_alternatif', $id);
  $this->db->delete('wp_alternatif');
         
         
    }


}

