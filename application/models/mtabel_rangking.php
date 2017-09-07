<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_rangking extends CI_Model
{


    public function ambil_kriteria()
    {
        $this->db->order_by('id_kriteria', 'ASC');
        $kriteria = $this->db->get('wp_kriteria');
        return $kriteria->result_array();

    }

    public function ambil_alternatif()
    {
        $this->db->order_by('id_alternatif', 'ASC');
        $alternatif = $this->db->get('wp_alternatif');
        return $alternatif->result_array();
    }


    public function tambah()
    {
        $a = $this->input->post('id_alternatif');
        $b = $this->input->post('alternatif');
        $c = $this->input->post('id_kriteria');
        $d = $this->input->post('kriteria');
        $e = $this->input->post('nilai');

        $data = array(
            'id_alternatif' => $a,
            'nama_alternatif' => $b,
            'id_kriteria' => $c,
            'nama_kriteria' => $d,
            'nilai_rangking' => $e
        );


        $query = $this->db->insert('wp_rangking', $data);
        $query2 = $this->db->get('wp_rangking');      //cek dulu apakah ada sudah ada kode di tabel.
        if ($data == $query2->num_rows()) {
            echo "string";
        } else {
            return $query;
        }
    }

    public function tampil()
    {
        $query = $this->db->get('wp_rangking');
        return $query;

    }


    public function tampil_id($data)
    {
        $this->db->select('*');
        $this->db->from('wp_rangking');
        $this->db->where("id_rangking", $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;


    }

    public function edit($id, $data)
    {

        $id = $this->input->post('id');
        $c = $this->input->post('nilai');

        $data = array(
            'nilai_rangking' => $c
        );
        $this->db->where('id_rangking', $id);

        $this->db->update('wp_rangking', $data);
    }

    public function hapus($id)
    {
        return $this->db->delete('wp_rangking', array('id_rangking' => $id));

    }


}



/* End of file mtabel_rangking.php */
/* Location: ./application/models/mtabel_rangking.php */