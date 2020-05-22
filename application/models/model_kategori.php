<?php 


class Model_kategori extends CI_Model{

	public function data_makanan(){
		return $this->db->get_where("produk",array('kategori'=>'makanan'));
	}

	public function data_rumah(){
		return $this->db->get_where("produk",array('kategori'=>'rumah'));
	}
 }
