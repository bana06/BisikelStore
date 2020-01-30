<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibOwner
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function page($content, $data = NULL)
	{
	    $datas = [
			'header'       => $this->ci->load->view('Owner/Components/header', $data, true),
			'sidebar'      => $this->ci->load->view('Owner/Components/sidebar', $data, true),
			'topbar'       => $this->ci->load->view('Owner/Components/topbar', $data, true),
			'content'      => $this->ci->load->view('Owner/'.$content, $data, true),
			'footer'       => $this->ci->load->view('Owner/Components/footer', $data, true),
			'logout_modal' => $this->ci->load->view('Owner/Components/logout_modal', $data, true),
	    ];

	    return $this->ci->load->view('Owner/index', $datas);
	}

	public function pageUser($content, $data = NULL)
	{
	    $datas = [
	    	'header' => $this->ci->load->view('User/Components/header', $data, true),
	    	'topbar' => $this->ci->load->view('User/Components/topbar', $data, true),
	    	'content' => $this->ci->load->view('User/'.$content, $data, true),
	    ];

	    return $this->ci->load->view('User/index', $datas);
	}

}

/* End of file LibOwner.php */
/* Location: ./application/libraries/LibOwner.php */
