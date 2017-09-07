<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_vektor extends CI_Model {


		public function tampil(){
		$query=$this->db->get('wp_alternatif');
		return $query;

	}
	

}

/* End of file mtabel_vektor */
/* Location: ./application/models/mtabel_vektor */