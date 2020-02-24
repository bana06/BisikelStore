<?php

	function is_logged_in()
	{
		//config instance
		$ci =& get_instance();

		// jika session kosong
		if (!$ci->session->userdata('email')) {
			$ci->session->set_flashdata('message', '<div class="alert alert-danger">Anda belum login!</div>');

			redirect('Auth/login','refresh');
		} else {
			$id_level = $ci->session->userdata('id_level');

			$menu = $ci->uri->segment(1);

			if ($id_level == 1) {
				if ($menu != 'Owner') {
					$ci->session->set_flashdata('message', '<div class="alert alert-danger">Anda hanya boleh mengakses Halaman Owner!</div>');
					# code...
					redirect('Owner/Home','refresh');
				}
			} else {
				if ($menu != 'User') {
					$ci->session->set_flashdata('message', '<div class="alert alert-danger">Anda hanya boleh mengakses Halaman User!</div>');
					redirect('User/Home','refresh');
					// echo "access ditolak";
				}
				
			}
			
		}
		
	}