<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
		$this->load->model('Model_kategori');
		$this->logs = $this->session->all_userdata();
		$this->logged = $this->session->userdata('userLogged');
		$this->kategori = $this->session->userdata('kategori');
		$this->content = array(
			"base_url" => base_url(),
			"logs" => $this->session->all_userdata(),
			"logged" => $this->session->userdata('userLogged'),
		);
	}

	public function kategori()
	{	

		$this->load->library('pagination');
		$search = ($this->input->post("kategori"))? $this->input->post("kategori") : "NIL";

        $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;

        // pagination settings
        $config = array();
        $config['base_url'] = site_url("main/Kategori/kategori/$search");
        $config['total_rows'] = $this->Model_kategori->jumlahDataKategori($search);
        $config['per_page'] = "4";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $session_id = $this->session->userdata('cart_session');

		// menampilkan data cart
		$query = $this->db->query("select * FROM mcart WHERE cart_session = '".$session_id."' ")->result();

		// menampilkan jumlah data
		$jumlah = $this->db->query("select * from mcart where cart_session = '".$session_id."' ")->num_rows();
		if ($jumlah == null) {
			$jumlahData = 0;
		}else{
			$jumlahData = $jumlah;
		}

		// menampilkan total harga
		$totalHarga = $this->db->query("select sum(totalHarga) as totalHarga from mcart where cart_session = '".$session_id."' ")->result();




		$this->content['totalHarga'] = $totalHarga[0]->totalHarga;
		$this->content['jumlahData'] = $jumlahData;
		$this->content['test'] = $query;

   		$this->content['p'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$this->content['perizinan'] = $this->Model_kategori->allKategori($config['per_page'], $this->content['p'], $search);
		$this->content['relate'] = $this->Model_kategori->relateBook();
		$this->content['page'] = $this->pagination->create_links();
        $this->content["data"] = $this->Model_kategori->allKategori($config['per_page'], $this->content['p'], $search);
		$this->content['kategori'] = $this->Model_kategori->listKategori();
		$this->twig->display('kategori.html', $this->content);
		
	}

	
	
}
