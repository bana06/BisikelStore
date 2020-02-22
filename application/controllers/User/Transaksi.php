<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$id_user = $this->session->userdata('id_user');
		$data['transaksi'] = $this->all->mengambil('tbl_order')->result();

		$this->lo->pageUser('all_transaksi', $data);
	    
	}

	public function getView($id_brg = NULL)
	{
		$id_user = $this->session->userdata('id_user');
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

		// $data['cart'] = $this->um->getWithJoin($id_user)->result();
		$this->lo->pageUser('transaksi', $data);
	}

		public function getView2($id_order = NULL)
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();
		
		$q = $this->all->mengambil('tbl_order', ['id_order'=>$id_order])->row();
		$data['total'] = $q->total_bayar;

		// $data['cart'] = $this->um->getWithJoin($id_user)->result();
		$this->lo->pageUser('transaksi', $data);
	}

	public function insertOrder($id_brg = NULL)
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();
		$data['getAlamat'] = $this->all->mengambil('tbl_alamat', [
			'id_user' => $id_user,
			'is_primary' => 1
		])->row();
		$data['id_brg'] = $id_brg;

		$id_order = $this->um->get_kode_order();
		$totalItem = $this->um->getWithJoin($id_user)->num_rows();

		$q = $this->um->getTotal($id_user)->result();

		if ($id_brg != NULL) {
			$getCart = $this->um->getWithJoin($id_user, $id_brg)->row();
			$data['cart'] = $getCart;
			$data['total'] = $getCart->harga_brg * $getCart->jumlah_pesanan;

			$dataOrder = [
				'id_order'         => $id_order,
				'id_user'          => $id_user,
				'id_alamat'        => $data['getAlamat']->id_alamat,
				'tgl'              => date("Y-m-d"),
				'total_item'       => $totalItem,
				'total_bayar'      => $data['total'],
				'status_transaksi' => 1
			];

			$q = $this->um->InsertLastId('tbl_order', $dataOrder);

			$dataDetailOrder = [
				'id_order'   => $id_order,
				'id_cart'    => $getCart->id_cart,
				'keterangan' => '-',
			];

			$q2 = $this->all->menambah('tbl_detail_order', $dataDetailOrder);
		} else {
			foreach ($q as $key) {
				$data['total'] = $key->total;
			}
			$getCart = $this->um->getWithJoin($id_user)->result();
			$data['cart'] = $getCart;

			$dataOrder = [
				'id_order'         => $id_order,
				'id_user'          => $id_user,
				'id_alamat'        => $data['getAlamat']->id_alamat,
				'tgl'              => date("Y-m-d"),
				'total_item'       => $totalItem,
				'total_bayar'      => $data['total'],
				'status_transaksi' => 1
			];

			$q = $this->um->InsertLastId('tbl_order', $dataOrder);

			foreach ($getCart as $gc) {

				$dataDetailOrder = [];
				$index           = 0;

				array_push($dataDetailOrder, [
					'id_order'   => $id_order,
					'id_cart'    => $gc->id_cart,
					'keterangan' => '-',
				]);

				$index++;

				$q2 = $this->um->insert_batch('tbl_detail_order', $dataDetailOrder);

				// var_dump($id);
				// var_dump($dataDetailOrder);
				// die;
			}
		}
		redirect('User/Transaksi/getView/'.$id_brg,'refresh');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/User/Transaksi.php */