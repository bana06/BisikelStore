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
		$data['tajuk']         = 'BS Admin - Barang saya';
		
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		$data['brg']           = $this->brg->getWithJoin()->result();

		// var_dump($this->brg->getWithJoin()->result());
		// die;
		
		$this->lo->page('barang_saya', $data);
	}

	public function add_index()
	{
		$data['error'] = '';

		$data['tajuk']         = 'BS Admin - Tambah Barang saya';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		$data['brand']         = $this->all->mengambil('tbl_brand')->result();
		$data['kategori']         = $this->all->mengambil('tbl_kategori_brg')->result();
		
		$this->lo->page('tambah_barang', $data);
	}

	public function edit_index($id_brg)
	{
		$data['tajuk']         = 'BS Admin - Edit Barang saya';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		//get barang utk diubah
		$data['brg']           = $this->all->mengambil($this->table, ['id_brg'=>$id_brg])->row();
		
		$this->lo->page('ubah_barang', $data);
	}

	public function add_stok($id_brg)
	{

		$data['tajuk']         = 'BS Admin - Tambah Stok Barang saya';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		//get barang utk diubah
		$data['brg']           = $this->all->mengambil($this->table, ['id_brg'=>$id_brg])->row();
		
		$this->lo->page('tambah_stok_barang', $data);
	}

	//query
	public function add_brg()
    {
	    $config['upload_path']          = './assets/img/barang/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['max_size']             = 0;
	    $config['max_width']            = 0;
	    $config['max_height']           = 0;
	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('photo_brg')){
	            $error = array('error' => $this->upload->display_errors());
	            $this->load->view('Owner/Barang/add_index', $error);
	    }else{
	        $_data = array('upload_data' => $this->upload->data());
	         $data = array(
				'nama_brg'        => $this->input->post('nama_brg'),
				'harga_brg'       => $this->input->post('harga_brg'),
				'stok'            => $this->input->post('stok'),
				'id_brand'        => $this->input->post('id_brand'),
				'id_kategori_brg' => $this->input->post('id_kategori_brg'),
				'deskripsi'       => $this->input->post('deskripsi'),
				'id_status'       => 1,
				'photo_brg'       => $_data['upload_data']['file_name']
	            );
	        $query = $this->all->menambah($this->table, $data);
	        if($query){
	            echo 'berhasil di upload';
	            redirect(site_url('Owner/Barang'));
	        }else{
	            echo 'gagal upload';
	        }
	    }
	}

	public function tambah_stok()
	{
	    $id_brg = $this->input->post('id_brg');
	    $stok_baru = $this->input->post('stok_baru');
	    $stok = $this->input->post('stok');

	    $tambah = $stok+$stok_baru;
	    $data['stok'] = $tambah;

	    $this->all->update($this->table, ['id_brg'=>$id_brg], $data);
	    redirect(site_url('Owner/Barang'),'refresh');

	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Owner/Barang.php */