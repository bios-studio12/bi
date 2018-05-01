<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

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
		$this->load->model('Model_penulis');
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
	}

	public function formData()
	{	
		if ( $this->logged) 
		{
			$data = NULL;           
            $KodeEdit = $this->input->get('id');          
            if (!empty($KodeEdit)) {
                $q = $this->db->get_where("m_penulis", array("id" => $KodeEdit));
                $data = $q->row();
            }    
    
            $this->content["data"] = $data;
			$this->twig->display('formPenulis.html', $this->content);
		}
		else 
		{
			redirect("main/auth/");
		}
	}

	public function showData()
	{	
		if ( $this->logged) 
		{
			$this->twig->display('listPenulis.html', $this->content);
		}
		else 
		{
			redirect("main/auth/");
		}
	}

	public function listData()
	{	
		
		$params = $columns = $totalRecords = $data = array();
		$params = $_REQUEST;
		$query = $this->Model_penulis->listData();
		$x = 0;
		$i=0;
		foreach ($query as $proses) {
			$x++;
			$row = array();
			$row[] = $x;
 			$row[] = (!empty($proses->kodePenulis) ? $proses->kodePenulis : "NULL");
 			$row[] = (!empty($proses->namaPenulis) ? $proses->namaPenulis : "NULL");

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" title="Edit" href="'.base_url().'sys/Penulis/formData/?id='.$proses->id.'"><i class="fa fa-pencil"></i> Edit</a> <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$proses->id."'".')"><i class="fa fa-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
                         "data" => $data
				);
		//output to json format
		echo json_encode($output);
	}

	
	public function addData()
	{
		if ( $this->logged) 
		{	
			$params = (object)$this->input->post();
		 	$data = $this->Model_penulis->save($params);
		 	echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function updateData()
	{
		if ( $this->logged) 
		{	
			$params = (object)$this->input->post();
			$data = $this->Model_penulis->update($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function deleteData($id = NULL)
	{
		$this->Model_penulis->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function getData($id = NULL)
	{    
		if ( $this->logged) 
		{
			$data = $this->Model_penulis->getByID($id);
			echo json_encode($data);
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	
}
