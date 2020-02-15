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
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['allUser']     = $this->all->mengambil($this->table)->num_rows();
		$data['allBarang']     = $this->all->mengambil('tbl_brg')->num_rows();
		
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
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		
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
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		
		$this->lo->page('profile', $data);
	}

	public function reset_password()
	{
		$data['tajuk']     = 'BS Admin - Ubah Password';
		// data user sebagai get data from DB
		$data['user']      = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		//utk menampilkan data from DB
		$data['fullname']  = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		


		$this->lo->page('ubah_password', $data);
	}

	//query reset password
	public function edit_password()
	{
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

		if ($password != $password2) {
			echo "<script>alert('tes')</script>";
		} else {
			$id_user = $this->session->userdata('id_user');
		    $isi = [
		    	'password' => password_hash($password, PASSWORD_DEFAULT),
		    ];
			// var_dump($isi);
			// die;

			$this->all->update($this->table, ['id_user'=>$id_user], $isi);
			redirect(site_url('Owner/Home'),'refresh');
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Owner/Home.php */