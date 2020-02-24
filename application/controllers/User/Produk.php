<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function detail($id_brg)
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$data['brg'] = $this->um->getDetailProduk($id_brg)->row();
		$this->lo->pageUser('detail_produk', $data);
		// if ($id_brg != NULL) {
		// } else {
		// 	// redirect($_SERVER['HTTP_REFERER'],'refresh');
		// }
		

	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/User/Produk.php */