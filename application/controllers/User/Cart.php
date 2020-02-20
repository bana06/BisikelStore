<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$data['cart'] = $this->um->getWithJoin()->result();
		$this->lo->pageUser('cart', $data);
	}

	public function inputToCart()
	{
		$post           = $this->input->post();
		$jumlah_pesanan = $post['jumlah_pesanan'];
		$id_status      = $post['id_status'];
		$stok           = $post['stok'];
		$harga_brg      = $post['harga_brg'];
		
		$total          = $jumlah_pesanan * $harga_brg;


		if ($id_status != 2) {
			$data = [
				'id_brg' => $post['id_brg'],
				'jumlah_pesanan' => $jumlah_pesanan,
				'total' => $total,
				'id_user' => $this->session->userdata('id_user'),
			];

			if ($this->all->menambah('tbl_cart', $data)) {
				echo "<script>alert('Berhasil menambah barang ke keranjang')</script>";
			} else {
				echo "<script>alert('Gagal menambah barang')</script>";
			}
			redirect($_SERVER['HTTP_REFERER'],'refresh');
			

		    // var_dump($data);
		    // die;
		} else {
			echo "<script>alert('Barang sedang kosong. Silahkan ganti pesanan Anda atau hubungi Customer Service kami')</script>";
			redirect($_SERVER['HTTP_REFERER'],'refresh');
		}

	    var_dump($data);
	    die;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$datas = array(
				'id_cart' => $id
				
			);
		$this->all->delete('tbl_cart',$datas);
		$data['cart'] = $this->um->getWithJoin()->result();
		$this->lo->pageUser('cart', $data);
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/User/Cart.php */