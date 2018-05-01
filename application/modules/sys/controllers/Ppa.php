<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppa extends CI_Controller {

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
		$this->load->model('Model_ppa');
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

	public function formPpa()
	{	
		if ( $this->logged) 
		{
			$ppa = NULL;           
            $KodeEdit = $this->input->get('id');          
            if (!empty($KodeEdit)) {
                $q = $this->db->get_where("mstppa", array("id" => $KodeEdit));
                $ppa = $q->row();
            }           
            
            $this->content["ppa"] = $ppa;
			$this->twig->display('formppa.html', $this->content);
		}
		else 
		{
			redirect("main/auth/");
		}
	}

	public function listPpa()
	{	
		if ( $this->logged) 
		{
			$this->content["ppa"] = $this->Model_ppa->showPpa();
			$this->twig->display('listppa.html', $this->content);
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
		$query = $this->Model_ppa->listPpa();
		$x = 0;
		$i=0;
		foreach ($query as $proses) {
			$x++;
			$row = array();
			$row[] = $x;
			$row[] = (!empty($proses->nama) ? $proses->nama : "NULL");
 			$row[] = (!empty($proses->tempat) ? $proses->tempat : "NULL");
 			$row[] = (!empty($proses->tglLahir) ? $proses->tglLahir : "NULL");
 			$row[] = (!empty($proses->alamat) ? $proses->alamat : "NULL");
 			$row[] = (!empty($proses->lokasiKerja) ? $proses->lokasiKerja : "NULL");
 			$row[] = (!empty($proses->namaBangunan) ? $proses->namaBangunan : "NULL");
 			$row[] = (!empty($proses->ruasSaluran) ? $proses->ruasSaluran : "NULL");
 			$row[] = (!empty($proses->namaSaluran) ? $proses->namaSaluran : "NULL");
 			$row[] = (!empty($proses->kejuron) ? $proses->kejuron : "NULL");
 			$row[] = (!empty($proses->pengamat) ? $proses->pengamat : "NULL");
 			$row[] = (!empty($proses->seksi) ? $proses->seksi : "NULL");
 			$row[] = (!empty($proses->foto) ? $proses->foto : "NULL");
 			$row[] = (!empty($proses->gambar1) ? $proses->gambar1 : "NULL");
 			$row[] = (!empty($proses->gambar2) ? $proses->gambar2 : "NULL");
 			$row[] = (!empty($proses->gambar3) ? $proses->gambar3 : "NULL");
 			$row[] = (!empty($proses->gambar4) ? $proses->gambar4 : "NULL");
 			$row[] = (!empty($proses->gambar5) ? $proses->gambar5 : "NULL");
 			$row[] = (!empty($proses->gambar6) ? $proses->gambar6 : "NULL");

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
			 if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
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

	          if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name2 = "";

				if(!empty($_FILES['gambar1']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar1']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar1']['name']);
	                $name2 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name2;
	                move_uploaded_file($temp1, $target1);
	            }

	           if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name3 = "";

				if(!empty($_FILES['gambar2']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar2']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar2']['name']);
	                $name3 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name3;
	                move_uploaded_file($temp1, $target1);
	            }

	            if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name4 = "";

				if(!empty($_FILES['gambar3']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar3']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar3']['name']);
	                $name4 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name4;
	                move_uploaded_file($temp1, $target1);
	            }

	            if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name5 = "";

				if(!empty($_FILES['gambar4']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar4']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar4']['name']);
	                $name5 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name5;
	                move_uploaded_file($temp1, $target1);
	            }

	            if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name6 = "";

				if(!empty($_FILES['gambar5']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar5']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar5']['name']);
	                $name6 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name6;
	                move_uploaded_file($temp1, $target1);
	            }

	            if (!file_exists(getcwd().'/assets/img/galeri/')) {
			    mkdir(getcwd().'/assets/img/galeri/', 0777, true);
				}
				$path = getcwd().'/assets/img/galeri/';
				$name7 = "";

				if(!empty($_FILES['gambar6']['name']))
	            {
	            	$time1 = date('Y-m-d_H-i-s');
	                $temp1= $_FILES['gambar6']['tmp_name'];
	                $explode1 = explode(".", $_FILES['gambar6']['name']);
	                $name7 = $explode1[0].'_'.$time1.".".$explode1[1];
	                $target1 = $path.$name7;
	                move_uploaded_file($temp1, $target1);
	            }

			 $namaBangunan = $_POST['namaBangunan'];
			 $kd = $this->Model_ppa->cekPpa($namaBangunan);
			 if($kd->num_rows() == 0){
			 	$data = $this->Model_ppa->save($params , $name1, $name2, $name3, $name4 , $name5 , $name6, $name7);
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
			$data = $this->Model_ppa->update($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function deleteData($id = NULL)
	{
		$this->Model_ppa->delete($id);
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
