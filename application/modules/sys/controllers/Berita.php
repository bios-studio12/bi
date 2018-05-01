<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		$this->load->model('Model_berita');
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
			$this->twig->display('formBerita.html', $this->content);
		}
		else 
		{
			redirect("sys/auth/");
		}
	}

	public function addData()
	{
		if ( $this->logged) 
		{	

			$params = (object)$this->input->post();

		 	$id = $this->Model_berita->save($params);
		 	// echo json_encode(array("status" => TRUE));
			
			include("assets/3rdparty/imageManipulation.php");
					include("assets/3rdparty/resize-class.php");
					
					$type		=	substr(strtolower($_FILES['file']['name']),-4);
					$img_name	= 	substr($this->input->post('judul'),0,20);
					$img_name 	= 	str_replace(" ","_",$img_name) ."_". $id;
					$big_image 	=	"assets/img/".$img_name.".".$type;
					// $med_image 	=	"assets/img/".$img_name."_med.".$type;
					$thumbnail 	=	"assets/img/".$img_name."_small.".$type;
								
						copy($_FILES['file']['tmp_name'],$big_image);
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(75, 75, 'auto');
							$resizeObj -> saveImage($thumbnail, 100);
							
							// $resizeObj = new resize($big_image);
							// $resizeObj -> resizeImage(220, 220, 'auto');
							// $resizeObj -> saveImage($med_image, 100);
							
							$resizeObj = new resize($big_image);
							$resizeObj -> resizeImage(300, 300, 'auto');
							$resizeObj -> saveImage($big_image, 100);
						
					
					$this->Model_berita->update_image_links($big_image,$thumbnail,$id);
					echo json_encode(array("status" => TRUE));
		}
		else 
		{	
			redirect("sys/auth/logout");
		}
	}


	
}
