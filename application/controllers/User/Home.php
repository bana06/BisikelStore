<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//untuk cek session
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }

	public function index()
	{
		$data['brg'] = $this->all->mengambil('tbl_brg')->result();
		// var_dump($data['brg']);
		// die;
		$this->lo->pageUser('dashboard', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/User/Home.php */