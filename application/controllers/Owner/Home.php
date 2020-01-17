<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $table = 'tbl_user';

	public function index()
	{
		$data['user'] = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		echo "tes home ".$data['user']->fullname;
		echo "<a href=".site_url('Auth/logout').">Keluar OM!</a>";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Owner/Home.php */