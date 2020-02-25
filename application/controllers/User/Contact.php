<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$data['getBrand'] = $this->all->mengambil('tbl_brand')->result();
		$data['getCategory'] = $this->all->mengambil('tbl_brand')->result();
		

		$this->lo->pageUser('contact', $data);
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

/* End of file Contact.php */
/* Location: ./application/controllers/User/Contact.php */
