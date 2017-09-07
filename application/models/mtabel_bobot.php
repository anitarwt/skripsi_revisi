<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_bobot extends CI_Model {

var $table_nama = "wp_bobot";


public function ambil_kriteria() {
$this->db->order_by('id_kriteria','ASC');
$kriteria= $this->db->get('wp_kriteria');
return $kriteria->result_array();


	}

public function ambil_nilai(){
$this->db->order_by('id_nilai','ASC');
$kriteria= $this->db->get('wp_nilai');
return $kriteria->result_array();

	
}

public function tambah(){
$a=$this->input->post('id_kriteria');
$b=$this->input->post('kriteria');
$c=$this->input->post('nilai');
    $hasil=$c+$c;

 	

                $data = array(
                  'id_kriteria' =>$a,
                  'nama_kriteria'=>$b,
                  'nilai_bobot' =>$c, 
                  
                );


    //$query="INSERT INTO wp_bobot SET nilai_bobot='$c',  hasil_bobot='$hasil'";
       
		$query=$this->db->insert('wp_bobot', $data);
		  	return $query; 

}

public function tampil(){
	$query=$this->db->get('wp_bobot');
	return $query;

}

public function tampil_id($data){

 $this->db->select('*');
 $this->db ->from('wp_kriteria');
 $this->db ->where('id_kriteria',$data);
 $query = $this->db->get();
 $result = $query->result();
    return $result;
	}

public function cobaaja(){
	$this->db->select_sum('nilai_bobot');
    $this->db->from('wp_bobot');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
}

public function rata() {
	$this->db->select_avg('nilai_bobot');
	$this->db->from('wp_bobot');
	$query = $this->db->get();
    $result = $query->result();
    return $result;
}

	

public function hapus($id){
		return $this->db->delete('wp_bobot', array('id_kriteria' => $id));
	}

public function edit($id,$data)
	{
		$id=$this->input->post('id');
		$a=$this->input->post('kt');
	    $b = $this->input->post('nilai');
    
    
         $data = array( 
         				'id_kriteria'=>$id,
         				'nama_kriteria'=>$a,
                        'nilai_bobot' =>$b
                   
                       );

        $this->db->where('id_kriteria',$id);
		$this->db->update('wp_bobot',$data);
	
 }

 function insert2($a,$b){
 		$a=$this->input->post('nama');
 		$b=$this->input->post('hsl');
$data=array('nama_kriteria'=>$a,
			'hasil_bobot'=>$b);
		$query = "update wp_bobot set hasil_bobot = '$a' where id_kriteria = '$b'";
		$execute=$query->result();
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}


}

/* function updateProduct($data, $condition)
	{
		//update produk
        $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
        $this->db->update('wp_bobot', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

} */

/* End of file mtabel_bobot */
/* Location: ./application/models/mtabel_bobot */