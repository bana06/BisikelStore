<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_brg_mod extends CI_Model {

	private function relasinya(){
		$this->db->join('tbl_brand tbr', 'tbr.id_brand = tb.id_brand', 'left');
		$this->db->join('tbl_kategori_brg tkb', 'tkb.id_kategori_brg = tb.id_kategori_brg', 'left');
	}

	public function getWithJoin($id_brg = NULL)
	{
		$this->db->select('tb.*');
		$this->db->select('tbr.brand');
		$this->db->select('tkb.kategori_brg');
		$this->db->from('tbl_brg tb');
		$this->relasinya();

		if ($id_brg != NULL) {
			$this->db->where('id_brg', $id_brg);
		}
		

		return $this->db->get();
	}

	public function getTransaksiWithLike()
	{
		$this->db->order_by('id_order', 'desc');
	    $this->db->like('to.status_transaksi', 1);
	    $this->db->or_like('to.status_transaksi', 2);
	    $this->db->or_like('to.status_transaksi', 3);
	    $this->db->or_like('to.status_transaksi', 4);
	    $this->db->select('to.*');
	    $this->db->select('tu.*');
	    $this->db->from('tbl_order to');
	    $this->db->join('tbl_user tu', 'tu.id_user = to.id_user', 'left');
		
		return $this->db->get();
	}

	public function getRiwayatTransaksiWithLike()
	{
		$this->db->order_by('id_order', 'desc');
	    $this->db->like('to.status_transaksi', 5);
	    $this->db->select('to.*');
	    $this->db->select('tu.*');
	    $this->db->from('tbl_order to');
	    $this->db->join('tbl_user tu', 'tu.id_user = to.id_user', 'left');
		
		return $this->db->get();
	}

}

/* End of file Barang.php */
/* Location: ./application/models/Owner_mod/Barang.php */