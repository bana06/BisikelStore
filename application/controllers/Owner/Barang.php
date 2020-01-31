<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	private $table = 'tbl_brg';

	public function index()
	{
		$data['tajuk']    = 'BS Admin - Barang saya';

		$data['user']     = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['brg']      = $this->all->mengambil($this->table)->result();

	    $this->lo->page('barang_saya', $data);
	}

	public function add_index()
	{
	    $data['tajuk']    = 'BS Admin - Tambah Barang saya';
		$data['user']     = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;


	    $this->lo->page('tambah_barang', $data);
	}

	public function edit_index($id_brg)
	{
	    $data['tajuk']    = 'BS Admin - Edit Barang saya';
		$data['user']     = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		//get barang utk diubah
		$data['brg'] = $this->all->mengambil($this->table, ['id_brg'=>$id_brg])->row();

	    $this->lo->page('ubah_barang', $data);
	}

	public function add_stok($id_brg)
	{
	    $data['tajuk']    = 'BS Admin - Tambah Stok Barang saya';
		$data['user']     = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		//get barang utk diubah
		$data['brg'] = $this->all->mengambil($this->table, ['id_brg'=>$id_brg])->row();

	    $this->lo->page('tambah_stok_barang', $data);
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Owner/Barang.php */