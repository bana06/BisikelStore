<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatTransaksi extends CI_Controller {

	private $table = 'tbl_user';

	public function index()
	{
		$data['tajuk']    = 'BS Admin - Riwayat Transaksi';
		// data user sebagai get data from DB
		$id_user = $this->session->userdata('id_user');
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $id_user] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['getOrder'] = $this->brg->getRiwayatTransaksiWithLike()->result();
		$data['getAlamat'] = $this->all->mengambil('tbl_alamat')->result();
		
		$this->lo->page('riwayat_transaksi', $data);
		// $this->load->view('Owner/index', $data);		
	}

}

/* End of file RiwayatTransaksi.php */
/* Location: ./application/controllers/Owner/RiwayatTransaksi.php */