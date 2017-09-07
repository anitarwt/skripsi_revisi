<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_kriteria extends CI_Model
{

    public function tambah()
    {
        $data = array(
            'nama_kriteria' => $this->input->post('kriteria'),
            'tipe_kriteria' => $this->input->post('tipe_kriteria'),
            'bobot' => $this->input->post('bobot'),

        );
        $query = $this->db->insert('wp_kriteria', $data);
        return $query;

    }

    public function tampil()
    {
        $query = $this->db->get('wp_kriteria');
        return $query;
    }

    function tampil_id($data)
    {
        $this->db->select('*');
        $this->db->from('wp_kriteria');
        $this->db->where('id_kriteria', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function edit($id, $data)
    {

        $id = $this->input->post('id');
        $us = $this->input->post('kriteria');
        $b = $this->input->post('tipe_kriteria');

        $data = array(
            'nama_kriteria' => $us,
            'tipe_kriteria' => $b,
            "bobot"=>$this->input->post('bobot')

        );
        $this->db->where('id_kriteria', $id);
        $this->db->update('wp_kriteria', $data);

    }

    public function hapus($id)
    {
        return $this->db->delete('wp_kriteria', array('id_kriteria' => $id));
    }


}

