<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {

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
		$this->load->model('Model_kinerja');
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

	public function formKinerja()
	{	
		if ( $this->logged) 
		{
			$kinerja = NULL;           
            $KodeEdit = $this->input->get('id');          
            if (!empty($KodeEdit)) {
                $q = $this->db->get_where("mstkinerja", array("id" => $KodeEdit));
                $kinerja = $q->row();
            }    

            $this->content["ppa"] = $this->Model_kinerja->namaBangunan();       
            $this->content["kinerja"] = $kinerja;
			$this->twig->display('formkinerja.html', $this->content);
		}
		else 
		{
			redirect("main/auth/");
		}
	}

	public function listKinerja()
	{	
		if ( $this->logged) 
		{
			$this->content["kinerja"] = $this->Model_kinerja->showKinerja();
			$this->twig->display('listkinerja.html', $this->content);
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
		$query = $this->Model_kinerja->listKinerja();
		$x = 0;
		$i=0;
		foreach ($query as $proses) {
			$x++;
			$row = array();
			$row[] = $x;
 			$row[] = (!empty($proses->namaBangunan) ? $proses->namaBangunan : "NULL");
 			// $row[] = (!empty($proses->saluran) ? $proses->saluran : "NULL");
 			$row[] = (!empty($proses->koordinat) ? $proses->koordinat : "NULL");
 			$row[] = (!empty($proses->desa) ? $proses->desa : "NULL");
 			$row[] = (!empty($proses->kecamatan) ? $proses->kecamatan : "NULL");
 			$row[] = (!empty($proses->kondisi) ? $proses->kondisi : "NULL");
 			$row[] = (!empty($proses->fungsi) ? $proses->fungsi : "NULL");
 			$row[] = (!empty($proses->nilai) ? $proses->nilai : "NULL");
 			$row[] = (!empty($proses->foto) ? $proses->foto : "NULL");

			//add html for action
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$proses->id."'".')"><i class="fa fa-trash"></i> Delete</a>';
		// <a class="btn btn-sm btn-primary" title="Edit" href="'.base_url().'main/Ppa/formPpa/?id='.$proses->id.'"><i class="fa fa-pencil"></i> Edit</a>
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
			 if (!file_exists(getcwd().'/assets/img/kinerja/')) {
			    mkdir(getcwd().'/assets/img/kinerja/', 0777, true);
				}
				$path = getcwd().'/assets/img/kinerja/';
				$name1 = "";

				if(!empty($_FILES['foto']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['foto']['tmp_name'];
	                $explode1 = explode(".", $_FILES['foto']['name']);
	                $name1 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name1;
	                move_uploaded_file($temp1, $target1);
	            }

			 $namaBangunan = $_POST['namaBangunan'];
			 $kd = $this->Model_kinerja->cekKinerja($namaBangunan);
			 if($kd->num_rows() == 0){
			 	$data = $this->Model_kinerja->save($params , $name1);
			 	echo json_encode(array("status" => TRUE));
			 }else{
			 	echo json_encode(array("status" => FALSE));
			 }
			
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
			$data = $this->Model_kinerja->update($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function deleteData($id = NULL)
	{
		$this->Model_kinerja->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function getData($id = NULL)
	{    
		if ( $this->logged) 
		{
			$data = $this->Model_kinerja->getByID($id);
			echo json_encode($data);
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	
}
