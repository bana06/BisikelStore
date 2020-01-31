<?php

	function is_logged_in()
	{
		//config instance
		$ci =& get_instance();

		// jika session kosong
		if (!$ci->session->userdata('email')) {
			redirect('User/Home','refresh');
		} else {
			$id_level = $ci->session->userdata('id_level');

			$menu = $ci->uri->segment(1);

			if ($id_level == 1) {
				if ($menu != 'Owner') {
					# code...
					redirect('Owner/Home/notfound','refresh');
				}
			} else {
				if ($menu != 'User') {
					redirect('User/Home','refresh');
					// echo "access ditolak";
				}
				
			}
			
		}
		
	}