<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	var $content;
	var $key = "show me the code";
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
		$this->load->model('Model_user');
		$this->logs = $this->session->all_userdata();
		$this->logged = $this->session->userdata('userLogged');
		$this->kategori = $this->session->userdata('kategori');
		$this->content = array(
			"base_url" => base_url(),
			"logs" => $this->session->all_userdata(),
			"logged" => $this->session->userdata('userLogged'),
		);
	}

	public function index()
	{	
		if ( $this->logged && $this->kategori == 'admin' || $this->kategori == 'user') 
		{
			$this->twig->display('user.html', $this->content);
		}
		else 
		{
			redirect("auth/logout");
		}
	}

	public function listData()
	{
		$list = $this->Model_user->listUser();
		$data = array();
		$status = "";
		foreach ($list as $user) {
			if ($user->status == 1)
				$status = "Aktif";
			else
				$status = "Tidak Aktif";

			$row = array();
			$row[] = (!empty($user->username) ? $user->username : "NULL");
			$row[] = (!empty($user->email) ? $user->email : "NULL");
			$row[] = (!empty($user->kategori) ? $user->kategori : "NULL");
			$row[] = (!empty($user->nama_lengkap) ? $user->nama_lengkap : "NULL");
			$row[] = $status;


			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="updateData('."'".$user->id."'".')"><i class="fa fa-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$user->id."'".')"><i class="fa fa-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function addData()
	{
		if ( $this->logged && $this->kategori == 'admin' || $this->kategori == 'user' ) 
		{	
			$params = (object)$this->input->post();
			$data = $this->Model_user->saveUser($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function updateData()
	{
		if ( $this->logged && $this->kategori == 'admin' || $this->kategori == 'user' ) 
		{	
			$params = (object)$this->input->post();
			$data = $this->Model_user->updateUser($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function deleteData($id = NULL)
	{
		$this->Model_user->deleteUser($id);
		echo json_encode(array("status" => TRUE));
	}

	public function getData($id = NULL)
	{    
		if ( $this->logged && $this->kategori == 'admin' || $this->kategori == 'user' ) 
		{
			$data = $this->Model_user->getById($id);
			echo json_encode($data);
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

}
