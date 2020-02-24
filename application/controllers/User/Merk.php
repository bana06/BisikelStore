<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

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

		$data['brg'] = $this->um->getbrandBymerk()->result();
		$data['getCategory'] = $this->all->mengambil('tbl_brand')->result();

		// var_dump($data);
		// die;

		$this->lo->pageUser('merk', $data);
	}

	public function getProdukByCategori($id)
	{
	    $id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$data['getCategory'] = $this->all->mengambil('tbl_brand')->result();
		$data['brg'] = $this->um->getbrandBymerk($id)->result();

		$this->lo->pageUser('merk', $data);
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
