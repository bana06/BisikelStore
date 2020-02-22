<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//untuk cek session
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	// config tabel
	private $table = 'tbl_user';

	// view halaman awal ketika sudah login
	public function index()
	{
		$data['tajuk']    = 'BS Admin - Dashboard';
		// data user sebagai get data from DB
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['allUser']     = $this->all->mengambil($this->table)->num_rows();
		$data['allBarang']     = $this->all->mengambil('tbl_brg')->num_rows();
		
		$this->lo->page('dashboard', $data);
		// $this->load->view('Owner/index', $data);
	}

	// jika tidak ada halaman
	public function notfound()
	{
	    $data['tajuk']    = 'BS Admin - 404';
		// data user sebagai get data from DB
		$data['user']     = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname'] = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		
		$this->lo->page('notfound', $data);
	}

	// hal profile
	public function myprofile()
	{
		$data['tajuk']     = 'BS Admin - Profil saya';
		// data user sebagai get data from DB
		$data['user']      = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		//utk menampilkan data from DB
		$data['fullname']  = $data['user']->fullname;
		$data['email']     = $data['user']->email;
		$data['no_hp']     = $data['user']->no_hp;
		$data['jk']        = $data['user']->jk;
		$data['tgl_lahir'] = $data['user']->tgl_lahir;
		$data['profile']   = $data['user']->photo_user;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		
		$this->lo->page('profile', $data);
	}
	// tampilan edit myprofile
	public function edit_index($id_user = null)
	{
		$data['tajuk']         = 'BS Admin - Edit myprofile';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		// $data['brand']         = $this->all->mengambil('tbl_brand')->result();
		// $data['kategori']      = $this->all->mengambil('tbl_kategori_brg')->result();
		//get barang utk diubah
		 // $data['brg']           = $this->brg->getWithJoin($id_user)->row();
		 $data['brg']           = $this->all->mengambil('tbl_user')->row();
		
		$this->lo->page('ubah_myprofile', $data);
	}

	public function edit_myprofile()
	{
		
	    $id_user = $this->input->post('id_user');

	    $config['upload_path']          = './assets/img/profile/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['max_size']             = 0;
	    $config['max_width']            = 0;
	    $config['max_height']           = 0;
	    $config['overwrite']           = TRUE;
	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('photo_user')){
            $data = array(
				'fullname'        => $this->input->post('fullname'),
				'email'       => $this->input->post('email'),
				'no_hp'            => $this->input->post('no_hp'),
				'jk'        => $this->input->post('jk'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				// 'profile'       => $this->input->post('profile'),
				// 'id_status'       => 1,
            );
	        $query = $this->all->update($this->table, ['id_user'=>$id_user], $data);
	        if($query){
	            echo 'berhasil di upload';
	            redirect(site_url('Owner/Home/myprofile'));
	        }else{
	            echo 'gagal upload';
	        }
	    }else{
	        $_data = array('upload_data' => $this->upload->data());
	         $data = array(
				'fullname'        => $this->input->post('fullname'),
				'email'       => $this->input->post('email'),
				'no_hp'            => $this->input->post('no_hp'),
				'jk'        => $this->input->post('jk'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				// 'profile'       => $this->input->post('profile'),
				// 'id_status'       => 1,
				'photo_user'       => $_data['upload_data']['file_name']
	            );
	        $query = $this->all->update($this->table, ['id_user'=>$id_user], $data);
	        if($query){
	            echo 'berhasil di upload';
	            redirect(site_url('Owner/Home/myprofile'));
	        }else{
	            echo 'gagal upload';
	        }
	    }
	}

	public function reset_password()
	{
		$data['tajuk']     = 'BS Admin - Ubah Password';
		// data user sebagai get data from DB
		$data['user']      = $this->all->mengambil($this->table, ['id_user'=> $this->session->userdata('id_user')] )->row();
		//utk menampilkan data from DB
		$data['fullname']  = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		


		$this->lo->page('ubah_password', $data);
	}

	//query reset password
	public function edit_password()
	{
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

		if ($password != $password2) {
			echo "<script>alert('tes')</script>";
		} else {
			$id_user = $this->session->userdata('id_user');
		    $isi = [
		    	'password' => password_hash($password, PASSWORD_DEFAULT),
		    ];
			// var_dump($isi);
			// die;

			$this->all->update($this->table, ['id_user'=>$id_user], $isi);
			redirect(site_url('Owner/Home'),'refresh');
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Owner/Home.php */