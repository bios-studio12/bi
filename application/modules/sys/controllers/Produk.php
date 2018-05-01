<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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
		$this->load->model('Model_produk');
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
                $q = $this->db->get_where("m_produk", array("id" => $KodeEdit));
                $data = $q->row();
            }   

            $this->content['penerbit'] = $this->Model_produk->listPenerbit();
            $this->content['kategori'] = $this->Model_produk->listKategori();
            $this->content['penulis'] = $this->Model_produk->listPenulis();
            $this->content['data'] = $data;
			$this->twig->display('formProduk.html', $this->content);
		}
		else 
		{
			redirect("sys/auth/");
		}
	}

	public function showData()
	{	
		if ( $this->logged) 
		{
			$this->twig->display('listProduk.html', $this->content);
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
		$query = $this->Model_produk->listData();
		$x = 0;
		$i=0;
		foreach ($query as $proses) {
			$x++;
			$row = array();
			$row[] = $x;
 			$row[] = (!empty($proses->kodeProduk) ? $proses->kodeProduk : "NULL");
 			$row[] = (!empty($proses->kodePenerbit) ? $proses->kodePenerbit : "NULL");
 			$row[] = (!empty($proses->kodePenulis) ? $proses->kodePenulis : "NULL");
 			$row[] = (!empty($proses->isbn) ? $proses->isbn : "NULL");
 			$row[] = (!empty($proses->namaBuku) ? $proses->namaBuku : "NULL");
 			$row[] = (!empty($proses->tanggal) ? $proses->tanggal : "NULL");
 			$row[] = (!empty($proses->tahunTerbit) ? $proses->tahunTerbit : "NULL");
 			$row[] = (!empty($proses->kategori) ? $proses->kategori : "NULL");
 			$row[] = (!empty($proses->isi) ? $proses->isi : "0");
 			$row[] = (!empty($proses->ukuran) ? $proses->ukuran : "NULL");
 			$row[] = (!empty($proses->berat) ? $proses->berat : "NULL");
 			$row[] = (!empty($proses->deskripsi) ? $proses->deskripsi : "NULL");
 			$row[] = (!empty($proses->stok) ? $proses->stok : "NULL");
 			$row[] = (!empty($proses->harga) ? $proses->harga : "NULL");
 			$row[] = (!empty($proses->diskon) ? $proses->diskon : "NULL");
 			$row[] = (!empty($proses->totalHarga) ? $proses->totalHarga : "NULL");
 			$row[] = (!empty($proses->foto) ? $proses->foto : "NULL");
 			$row[] = (!empty($proses->fotoBesar) ? $proses->fotoBesar : "NULL");
 			$row[] = (!empty($proses->status) ? $proses->status : "NULL");

			//add html for action
			// $row[] = '';
			$row[] = '<a class="btn btn-sm btn-success" href="javascript:void(0)" title="Status" onclick="getData('."'".$proses->kodePenulis."'".')"><i class="fa fa-pencil"></i> Status</a> <a class="btn btn-sm btn-primary" title="Edit" href="'.base_url().'sys/Produk/formData/?id='.$proses->id.'"><i class="fa fa-pencil"></i> Edit</a> <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$proses->id."'".')"><i class="fa fa-trash"></i> Delete</a>';
		
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
			$id = $this->input->post('kodeProduk');
		 	// echo json_encode(array("status" => TRUE));
			
			include("assets/3rdparty/imageManipulation.php");
					include("assets/3rdparty/resize-class.php");
					
					$type		=	substr(strtolower($_FILES['file']['name']),-4);
					$img_name	= 	substr($this->input->post('kodeProduk'),0,20);
					$img_name 	= 	str_replace(" ","_",$img_name) ."_". $id;
					$big_image 	=	"assets/admin/img/produk/".$img_name.".".$type;
					$image 		=	"assets/admin/img/produk/".$img_name."_big.".$type;
					// $thumbnail 	=	"assets/img/".$img_name."_small.".$type;
								
						copy($_FILES['file']['tmp_name'],$big_image);
							// $resizeObj = new resize($big_image);
							// $resizeObj -> resizeImage(75, 75, 'auto');
							// $resizeObj -> saveImage($thumbnail, 100);
							
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(303, 412, 'auto');
							$resizeObj -> saveImage($image, 100);
							
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(303, 412, 'auto');
							$resizeObj -> saveImage($big_image, 100);
						
					
					$data = $this->Model_produk->save($params,$big_image,$image,$id);
					echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("sys/auth/logout");
		}
	}


	public function updateData()
	{
		if ( $this->logged) 
		{	

			$params = (object)$this->input->post();
			$id = $this->input->post('kodeProduk');
		 	// echo json_encode(array("status" => TRUE));
			
			include("assets/3rdparty/imageManipulation.php");
			include("assets/3rdparty/resize-class.php");
				
					$type		=	substr(strtolower($_FILES['file']['name']),-4);
					$img_name	= 	substr($this->input->post('kodeProduk'),0,20);
					$img_name 	= 	str_replace(" ","_",$img_name) ."_". $id;
					$big_image 	=	"assets/admin/img/produk/".$img_name.".".$type;
					$image 		=	"assets/admin/img/produk/".$img_name."_big.".$type;
					// $thumbnail 	=	"assets/img/".$img_name."_small.".$type;
						if(!empty($_FILES['file']['name']))
	            {		
						copy($_FILES['file']['tmp_name'],$big_image);
							// $resizeObj = new resize($big_image);
							// $resizeObj -> resizeImage(75, 75, 'auto');
							// $resizeObj -> saveImage($thumbnail, 100);
							
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(781, 1337, 'auto');
							$resizeObj -> saveImage($image, 100);
							
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(194, 262, 'auto');
							$resizeObj -> saveImage($big_image, 100);
						}
					
					$data = $this->Model_produk->update($params,$big_image,$image,$id);
					echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("sys/auth/logout");
		}
	}


	public function deleteData($id = NULL)
	{
		$this->Model_produk->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function statusData()
	{
		if ( $this->logged ) 
		{	
			$params = (object)$this->input->post();
			$data = $this->Model_produk->status($params);
			echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("auth/logout");
		}
	}

	public function getData($id = NULL)
	{    
		if ( $this->logged) 
		{
			$data = $this->Model_produk->getByID($id);
	
			echo json_encode($data);
		}
		else 
		{	
			redirect("auth/logout");
		}
	}


	
}
