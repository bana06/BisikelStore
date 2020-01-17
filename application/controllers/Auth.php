<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private $table = 'tbl_user';

	public function index()
	{
		return redirect(site_url('Auth/login'));
	}

	public function validation()
	{
	    $this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required|min_length[12]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
	}

	public function login()
	{
		$this->validation();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Auth/login');
			// echo $this->input->post('email');
			// echo $this->input->post('password');
			// $this->session->set_flashdata('message', '<div class="alert alert-danger">Lah ko salah! Validasinya ngapa si!</div>');
		} else {
			$this->_login;
		}
		
	}

	public function _login()
	{
	    $email    = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->all->mengambil($this->table, ['email'=>$email] )->row();

		var_dump($email);
		die;

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'fullname'  => $user->fullname,
					'email'     => $email,
					'password'  => $password,
					'id_level'  => $user->id_level
				];

				$this->session->set_userdata($data);
				redirect('Owner/Home','refresh');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Password salah!</div>');
				redirect('Auth','refresh');
			}
			
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Email Anda belum terdaftar!</div>');
		}
	}

	public function forgotPassword()
	{
	    $this->load->view('Auth/forgot_password');
	}

	public function register()
	{
		$this->validation();

		if ($this->form_validation->run() == FALSE) {
			# code...
		    $this->load->view('Auth/register');
		} else {
			# code...
			$data = [
				'fullname'  => $this->input->post('fullname'),
				'email'     => $this->input->post('email'),
				'no_hp'     => $this->input->post('no_hp'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk'        => $this->input->post('jk'),
				'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'id_level'  => 1,
				// 'photo_user' => NULL,
			];

			$this->all->menambah($this->table, $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Selamat! Anda Berhasil mendaftar. Silahkan Masuk untuk melanjutkan</div>');

			return redirect('Auth','refresh');
		}
		

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */