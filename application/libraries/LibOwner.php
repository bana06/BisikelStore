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
			'header'  => $this->ci->load->view('Auth/Components/header', $data, true),
			'content' => $this->ci->load->view('Auth/'.$content, $data, FALSE),
			'footer'  => $this->ci->load->view('Auth/Components/footer', $data, FALSE)
	    ];

	    return $this->ci->load->view('Auth/cores', $datas);
	}

}

/* End of file LibOwner.php */
/* Location: ./application/libraries/LibOwner.php */
