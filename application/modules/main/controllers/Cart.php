<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	var $content;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_cart');
		$this->load->library('Owner');
		$this->load->library('Format');
		$this->logs = $this->session->all_userdata();
		$this->logged = $this->session->userdata('userLogged');
		$this->kategori = $this->session->userdata('kategori');
		$this->content = array(
			"base_url" => base_url(),
			"logs" => $this->session->all_userdata(),
			"logged" => $this->session->userdata('userLogged'),
		);

		
		@$cart_session= session_id();
		if($this->session->userdata('cart_session')=='')	$this->session->set_userdata('cart_session',$cart_session);	
	}

	public function formData()
	{	
		if ( $this->logged) 
		{
			$data = NULL;           
            $KodeEdit = $this->input->get('id');          
            if (!empty($KodeEdit)) {
                $q = $this->db->get_where("mcart", array("id" => $KodeEdit));
                $data = $q->row();
            }    
    
            $this->content["data"] = $data;
			$this->twig->display('formPenerbit.html', $this->content);
		}
		else 
		{
			redirect("main/auth/");
		}
	}

	public function showData()
	{	
			$this->twig->display('header.html', $this->content);

	}

	
	public function addData($id = null)
	{
		$session_id = $this->session->userdata('cart_session');
	 	
	 	// $split = explode(":", $id);
	 	// $id = $split[0];
	 	// $qty = $split[1];


	 	$kd = $this->Model_cart->cek($session_id,$id);
 
	 	if($kd->num_rows() == 0){
			 	$data = $this->Model_cart->save($id,$session_id);
			 	echo json_encode(array("status" => TRUE));
			 }else{
			 	echo json_encode(array("status" => FALSE));
			 }
		
	}

	public function updateData()
	{
		$params = (object)$this->input->post();
		$data = $this->Model_cart->update($params);
		echo json_encode(array("status" => TRUE));
		
	}

	public function deleteData($id = NULL)
	{
		$this->Model_cart->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function getData($id = NULL)
	{    
		if ( $this->logged) 
		{
			$data = $this->Model_cart->getByID($id);
			echo json_encode($data);
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	
}
