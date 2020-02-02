<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	private $table = 'tbl_brand';

	public function index()
	{
		$data['tajuk']         = 'BS Admin - Brand';
		
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		$data['brand']           = $this->all->mengambil($this->table)->result();

	    $this->lo->page('brand_saya', $data);
	}

	public function add_index()
	{
		$data['tajuk']         = 'BS Admin - Tambah Brand';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;
		
		
		$this->lo->page('tambah_brand', $data);
	}

	public function edit_index($id_brand)
	{
		$data['tajuk']         = 'BS Admin - Tambah Brand';
		$data['user']          = $this->all->mengambil('tbl_user', ['id_user'=> $this->session->userdata('id_user')] )->row();
		$data['fullname']      = $data['user']->fullname;
		$data['photo_profile'] = site_url('assets/img/profile/').$data['user']->photo_user;

		$data['brand'] = $this->all->mengambil($this->table, ['id_brand'=>$id_brand])->result();
		
		
		$this->lo->page('ubah_brand', $data);
	}

	//query
	
	//upload image
	private function _uploadImage()
	{
	    $config['upload_path'] = './assets/img/brand/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
	    $config['max_size']  = '3000';
	    $config['overwrite']  = TRUE;
	    // $config['max_size']  = TRUE;
	    // $config['max_width']  = '1024';
	    // $config['max_height']  = '768';
	    
	    $this->load->library('upload', $config);
	    
	    if ( ! $this->upload->do_upload()){
	    	$error = array('error' => $this->upload->display_errors());
	    	var_dump($error);
			die;
			return 'default_img.png';
	    }
	    else{
	    	$file = $this->upload->data();
          //mengambil data di form
          $data = ['logo_brand' => $file['file_name']];
          var_dump($error);
			die;
	    }
	}

	public function add_brand()
	{
	    $isi = [
	    	'brand' => $this->input->post('brand'),
	    ];
    	// $img = $this->_uploadImage();
    	// $isi['logo_brand'] = $img;
	    // if (!empty($_FILES['logo_brand']['name'])) {
	    // }
	    

	    $this->all->menambah($this->table, $isi);
	    redirect('Owner/Brand','refresh');
	}

	public function edit_brand()
	{
		$post = $this->input->post();

	    $id_brand = $post['id_brand'];
		
		$isi = [
			'brand' => $post['brand']
		];

		$this->all->update($this->table, ['id_brand'=>$id_brand], $isi);
	    redirect('Owner/Brand','refresh');

	}

	public function delete_brand($id_brand)
	{
		$q = $this->all->delete($this->table, ['id_brand'=>$id_brand]);

	    if ($q) {
		    redirect('Owner/Brand','refresh');
	    }
	    
	}

}

/* End of file Brand.php */
/* Location: ./application/controllers/Owner/Brand.php */