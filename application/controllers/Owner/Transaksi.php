<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	private $table = 'tbl_user';

	public function index($id_order = NULL)
	{
		$data['tajuk']    = 'BS Admin - Transaksi';
		// data user sebagai get data from DB
		$id_user = $this->session->userdata('id_user');
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $id_user] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['getOrder'] = $this->brg->getTransaksiWithLike()->result();
		$data['getAlamat'] = $this->all->mengambil('tbl_alamat')->result();

		if ($id_order != NULL) {
			# code...
			$data['getOrder'] = $this->all->mengambil('tbl_order', ['id_order'=>$id_order])->row();
		}
		
		
		$this->lo->page('transaksi', $data);
		// $this->load->view('Owner/index', $data);
	}

	public function updateStatusTransaksi($id_order)
	{
		$getOrder = $this->all->mengambil('tbl_order', ['id_order'=>$id_order])->row();
	
		if ($getOrder->status_transaksi == 2) {
			$data = [
				'status_transaksi' => 3
			];
			$this->all->update('tbl_order', ['id_order'=>$id_order], $data);

			redirect('Owner/Transaksi','refresh');
		} else if($getOrder->status_transaksi == 3){
			$data = [
				'status_transaksi' => 4
			];

			$this->all->update('tbl_order', ['id_order'=>$id_order], $data);

			redirect('Owner/Transaksi','refresh'); 
		}
		
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Owner/Transaksi.php */