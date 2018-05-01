<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Member extends MX_Controller
{
	
	var $content;
	var $logged;
	var $logs;	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_member');
		$this->logs = $this->session->all_userdata();
		$this->logged = $this->session->userdata('userLogged');
		$this->kategori = $this->session->userdata('kategori');
		$this->email = $this->session->userdata('email');
		$this->content = array(
			"base_url" => base_url(),
			"logs" => $this->session->all_userdata(),
		);
	}

	public function index()
	{	
		if ( $this->logged) 
		{
			redirect("main/Member/logout");
		}
		else 
		{
			if($_POST)
			{
				$params = (object)$this->input->post();
				$valid = $this->Model_member->loginAuth($params->email, $params->password);

				if ($valid)
					redirect("main/Id/");
				else
					redirect("main/Member/logout/");
			}		


			
			if ( $this->logged) 
		{
			$this->twig->display("checkout.html", $this->content);
		}
		else 
		{
			redirect("main/Member/logout/");
		}
		}
	}

	public function logout()
	{
		$valid = $this->session->sess_destroy();
		session_destroy();
		redirect("main/Id/");			
	}

	public function addRegister()
	{
		 $email = $_POST['email'];
		 $params = (object)$this->input->post();
		 $kd = $this->Model_member->cekEmail($email);
		 if($kd->num_rows() == 0){
		 	$data = $this->Model_member->save($params);
		 	echo json_encode(array("status" => TRUE));
		 }else{
		 	echo json_encode(array("status" => FALSE));
		 }
	}
}
?>