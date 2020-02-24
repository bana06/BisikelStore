<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();

		if ($id_user != NULL) {
			$data['transaksi'] = $this->all->mengambil('tbl_order', ['id_user'=>$id_user])->result();
			$data['getAlamat'] = $this->all->mengambil('tbl_alamat', ['id_user'=>$id_user])->result();
			// var_dump($data['q']);
			// var_dump($id_user);
			// die;
			$this->lo->pageUser('all_transaksi', $data);
		} else {
			redirect('Auth/login','refresh');
		}
	    
	}

	public function getView2($id_order = NULL)
	{
		$id_user                  = $this->session->userdata('id_user');
		$data['countCart']        = $this->um->getWithJoin($id_user)->num_rows();
		
		$q                        = $this->all->mengambil('tbl_order', ['id_order'=>$id_order]
		)->row();
		$data['total']            = $q->total_bayar;
		$data['status_transaksi'] = $q->status_transaksi;
		$data['id_order']         = $q->id_order;

		// $data['cart'] = $this->um->getWithJoin($id_user)->result();
		$this->lo->pageUser('transaksi', $data);
	}

	public function insertOrder($id_brg = NULL)
	{
		$id_user = $this->session->userdata('id_user');
		$data['countCart'] = $this->um->getWithJoin($id_user)->num_rows();
		$data['getAlamat'] = $this->all->mengambil('tbl_alamat', [
			'id_user' => $id_user,
			'is_primary' => 1
		])->row();
		$data['id_brg'] = $id_brg;

		$id_order = $this->um->get_kode_order();
		// $totalItem = $this->um->getWithJoin($id_user)->num_rows();

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
				'total_item'       => $getCart->jumlah_pesanan,
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

			//hapus gambar
			$dropDataCart = $this->all->delete('tbl_cart', [
				'id_brg'=>$id_brg,
				'id_user'=>$id_user,
			]);

		} else {
			foreach ($q as $key) {
				$data['total'] = $key->total;
			}
			$getCart = $this->um->getWithJoin($id_user)->result();
			$getTotalItem = $this->um->getSumJumlahPesanan($id_user)->row();
			$data['cart'] = $getCart;

			$dataOrder = [
				'id_order'         => $id_order,
				'id_user'          => $id_user,
				'id_alamat'        => $data['getAlamat']->id_alamat,
				'tgl'              => date("Y-m-d"),
				'total_item'       => $getTotalItem->jumlah_pesanan,
				'total_bayar'      => $data['total'],
				'status_transaksi' => 1
			];

			$q = $this->um->InsertLastId('tbl_order', $dataOrder);

			foreach ($getCart as $gc) {
				
			// var_dump($dataOrder);
			// die;

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

			//hapus gambar
			$dropDataCart = $this->all->delete('tbl_cart', [
				'id_user'=>$id_user,
			]);

		}
		redirect('User/Transaksi/getView2/'.$id_order,'refresh');
	}

	public function uploadBuktiBayar()
	{
	    $id_order = $this->input->post('id_order');
	    // $photo_bukti = $this->input->post('photo_bukti');

		$config['upload_path']   = './assets/img/bukti_pembayaran/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|GIF|JPEG';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$config['overwrite']     = TRUE;
		// $config['file_name']     = 'BuktiTransaksi_'.$id_order;

		$this->load->library('upload', $config);
	    if (!$this->upload->do_upload('photo_bukti')){
            // $error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal Upload Bukti Photo. Silahkan coba lagi...</div>');

			redirect('User/Transaksi/getView2/'.$id_order,'refresh');
	    }else{
	        $_data = array('upload_data' => $this->upload->data());
			$data  = array(
				'status_transaksi' => 2,
				'photo_bukti'      => $_data['upload_data']['file_name']
            );

            $this->all->update('tbl_order', ['id_order'=>$id_order], $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil Upload Bukti Photo. Silahkan cek status pembayaran disamping Total Pembayaran.</div>');
			redirect('User/Transaksi/getView2/'.$id_order,'refresh');
	    }
	}

	public function updateStatusTransfer($id_order)
	{
	    $getOrder = $this->all->mengambil('tbl_order', ['id_order'=>$id_order])->row();
	
		if ($getOrder->status_transaksi == 4) {
			$data = [
				'status_transaksi' => 5
			];
			$this->all->update('tbl_order', ['id_order'=>$id_order], $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success h2 p-3 text-center">Terimakasih sudah berbelanja di Toko Kami ^_^ Semoga Pelayanan kami memuaskan untuk Anda. <a href="'.site_url('User/Home').'">Mau Belanja Lagi? Klik disini</a></div>');
			redirect('User/Transaksi/getView2/'.$id_order,'refresh');
		}
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/User/Transaksi.php */