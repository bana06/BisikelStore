<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$q = $this->um->getTotal($id_user)->result();
		foreach ($q as $key) {
			$data['total'] = $key->total; 
		}

		$data['cart'] = $this->um->getWithJoin($id_user)->result();
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

	    // var_dump($data);
	    // die;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$datas = array(
				'id_cart' => $id
				
			);
		$this->all->delete('tbl_cart',$datas);

		redirect('User/Cart','refresh');
	}

	public function checkout($id_brg = NULL)
	{
		$id_user = $this->session->userdata('id_user');
		$data['id_user'] = $id_user;
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();
		$data['getAlamat'] = $this->all->mengambil('tbl_alamat', [
			'id_user' => $id_user,
			'is_primary' => 1
		])->row();
		$data['id_brg'] = $id_brg;

		// $id_order = $this->um->get_kode_order();

			if ($id_brg != NULL) {
				$cartRow = $this->um->getWithJoin($id_user, $id_brg)->row();
				$data['cart'] = $cartRow;
				$data['total'] = $cartRow->harga_brg * $cartRow->jumlah_pesanan;

			} else {
				$q = $this->um->getTotal($id_user)->result();
				foreach ($q as $key) {
					$data['total'] = $key->total;

				}

				$getCartRow = $this->um->getWithJoin($id_user, $id_brg)->row();
				$data['cartRow'] = $getCartRow;

				$totalItem = $this->um->getWithJoin($id_user)->num_rows();
				$getCart = $this->um->getWithJoin($id_user)->result();
				$data['cart'] = $getCart;
			}
		
		$this->lo->pageUser('checkout', $data);
	}

	public function UpdateCart($id_brg)
	{
		$id_user = $this->session->userdata('id_user');
		$cart = $this->um->getWithJoin($id_user, $id_brg)->row();

		$jumlah_pesanan = $this->input->post('jumlah_pesanan');

		$harga_brg = $cart->harga_brg;
		$total          = $jumlah_pesanan * $harga_brg;

	    // var_dump($total);
	    // die;
	    if ($jumlah_pesanan > 0) {
	    	$data = [
				'jumlah_pesanan' => $jumlah_pesanan,
				'total'          => $total,
		    ];
		    
		    $this->all->update('tbl_cart', ['id_brg'=>$id_brg], $data);

			redirect('User/Cart','refresh');
	    } else {
	    	echo "<script>alert('Qty tidak boleh NOL. jika ingin menghapus item tekan tombol Hapus!')</script>";
			redirect('User/Cart','refresh');
	    }

	}

	public function addAlamat($id_user)
	{
		$data['id_user'] = $id_user;
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$this->lo->pageUser('add_alamat', $data);
	    
	}

	public function tambahAlamat($id_user)
	{
	    $data = [
	    	'alamat' => $this->input->post('alamat'),
	    	'id_user' => $id_user,
	    	'is_primary' => 1
	    ];

	    $this->all->menambah('tbl_alamat', $data);

	    redirect('User/Cart','refresh');
	}
}

/* End of file Cart.php */
/* Location: ./application/controllers/User/Cart.php */