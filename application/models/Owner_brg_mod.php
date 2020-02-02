<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_brg_mod extends CI_Model {

	private function relasinya(){
	}

	public function getWithJoin()
	{
		$this->db->select('tb.*');
		$this->db->select('tbr.brand');
		$this->db->select('tkb.kategori_brg');
		$this->db->from('tbl_brg tb');
		$this->db->join('tbl_brand tbr', 'tbr.id_brand = tb.id_brand', 'left');
		$this->db->join('tbl_kategori_brg tkb', 'tkb.id_kategori_brg = tb.id_kategori_brg', 'left');
		// $this->relasinya();

		return $this->db->get();
	}

}

/* End of file Barang.php */
/* Location: ./application/models/Owner_mod/Barang.php */