<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$data['brg'] = $this->um->getBarangByCategory()->result();
		$data['getCategory'] = $this->all->mengambil('tbl_kategori_brg')->result();
		$data['getBrand'] = $this->all->mengambil('tbl_brand')->result();
		

		$this->lo->pageUser('category', $data);
	}

	public function getProdukByCategori($id)
	{
	    $id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();
		$data['getBrand'] = $this->all->mengambil('tbl_brand')->result();

		$data['getCategory'] = $this->all->mengambil('tbl_kategori_brg')->result();
		$data['brg'] = $this->um->getBarangByCategory($id)->result();

		$this->lo->pageUser('category', $data);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Category.php */
/* Location: ./application/controllers/User/Category.php */
