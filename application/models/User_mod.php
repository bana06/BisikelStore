<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mod extends CI_Model {

	private function relasinya()
	{
	    $this->db->join('tbl_brg tb', 'tb.id_brg = tc.id_brg', 'left');
	}

	public function GetWithJoin()
	{
	    $this->db->select('tc.*');
	    $this->db->select('tb.*');
	    $this->db->from('tbl_cart tc');
	    $this->relasinya();

	    return $this->db->get();
	}

	public function getDetailProduk($id_brg)
	{
	    $this->db->select('tb.*');
	    $this->db->select('tbr.brand');
	    $this->db->select('tkb.kategori_brg');
	    $this->db->from('tbl_brg tb');
	    $this->db->join('tbl_brand tbr', 'tbr.id_brand = tb.id_brand', 'left');
	    $this->db->join('tbl_kategori_brg tkb', 'tkb.id_kategori_brg = tb.id_kategori_brg', 'left');
	    $this->db->where('id_brg', $id_brg);

	    return $this->db->get();
	}

}

/* End of file User_mod.php */
/* Location: ./application/models/User_mod.php */