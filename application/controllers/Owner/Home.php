<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	// config tabel
	private $table = 'tbl_user';

	// view halaman awal ketika sudah login
	public function index()
	{
		$data['tajuk']    = 'BS Admin - Dashboard';
		// data user sebagai get data from DB
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['allUser']     = $this->all->mengambil($this->table)->num_rows();

		$data['fullname'] = $data['user']->fullname;
		
		$this->lo->page('dashboard', $data);
		// $this->load->view('Owner/index', $data);
	}

	// jika tidak ada halaman
	public function notfound()
	{
	    $data['tajuk']    = 'BS Admin - 404';
		// data user sebagai get data from DB
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		
		$this->lo->page('notfound', $data);
	}

	// hal profile
	public function myprofile()
	{
		$data['tajuk']     = 'BS Admin - Profil saya';
		// data user sebagai get data from DB
		$data['user']      = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		//utk menampilkan data from DB
		$data['fullname']  = $data['user']->fullname;
		$data['email']     = $data['user']->email;
		$data['no_hp']     = $data['user']->no_hp;
		$data['jk']        = $data['user']->jk;
		$data['tgl_lahir'] = $data['user']->tgl_lahir;
		$data['profile']   = $data['user']->photo_user;
		
		$this->lo->page('profile', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Owner/Home.php */