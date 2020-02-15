<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function detail($id_brg)
	{
		$data['brg'] = $this->um->getDetailProduk($id_brg)->row();

		$this->lo->pageUser('detail_produk', $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/User/Produk.php */