<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Auth extends MX_Controller
{
	
	var $content;
	var $logged;
	var $logs;	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_auth');
		$this->logs = $this->session->all_userdata();
		$this->logged = $this->session->userdata('userLogged');
		$this->kategori = $this->session->userdata('kategori');
		$this->content = array(
			"base_url" => base_url(),
			"logs" => $this->session->all_userdata(),
		);
	}

	public function index()
	{	
		if ( $this->logged) 
		{
			redirect("sys/auth/logout");
		}
		else 
		{
			if($_POST)
			{
				$params = (object)$this->input->post();
				$valid = $this->Model_auth->loginAuth($params->email, $params->password);
				if ($valid)
					redirect("sys/");
				else
					redirect("sys/auth/logout/");
			}		
			$this->twig->display("login.html", $this->content);
		}
	}

	public function logout()
	{
		$valid = $this->session->sess_destroy();
		session_destroy();
		redirect("sys/auth/");			
	}
}
?>