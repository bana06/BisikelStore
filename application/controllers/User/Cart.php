<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$data['cart'] = $this->um->getWithJoin()->result();
		$this->lo->pageUser('cart', $data);
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/User/Cart.php */