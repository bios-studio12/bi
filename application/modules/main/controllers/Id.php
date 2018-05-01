<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id extends CI_Controller {

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
		$this->load->model('Model_id');
		$this->load->model('Model_cart');
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



		// $this->content['id'] = $query[0]->cart_session;
		$this->content['totalHarga'] = $totalHarga[0]->totalHarga;
		$this->content['jumlahData'] = $jumlahData;
		$this->content['test'] = $query;
		$this->content['best'] = $this->Model_id->bestSeller();
		$this->content['produk'] = $this->Model_id->listProduk();
		$this->twig->display('index.html', $this->content);
	}

	public function header()
	{	
		$this->content['kategori'] = $this->Model_id->listKategori();
		$this->twig->display('header.html', $this->content);
	}

	public function detail()
	{	
		$data = NULL; 
		$post = $this->input->get('id');          
            if (!empty($post)) {
                $q = $this->db->query("select m_produk.totalHarga, m_produk.diskon, m_produk.`kodeProduk`, m_produk.`id`, m_produk.isi, m_produk.deskripsi, m_produk.`harga`, m_produk.fotoBesar, m_produk.`namaBuku`, m_penulis.`namaPenulis`, m_produk.isbn
                    FROM m_penulis, m_produk WHERE m_produk.id = '".$post."' and m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`kodeProduk` DESC ");
                $data = $q->row();
           
            } 

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
        $this->content['relate'] = $this->Model_id->relateBook();
		$this->content['produk'] = $data;
		$this->twig->display('detail.html', $this->content);
	}

	public function getData($id = NULL)
	{    
			$data = $this->Model_id->counter($id);
			echo json_encode($data);
	}


	// checkout

	public function checkout()
	{	

		$data = NULL; 
		$post = $this->input->get('id');          
            if (!empty($post)) {
                $q = $this->db->query("select m_produk.`kodeProduk`, m_produk.`id`, m_produk.isi, m_produk.deskripsi, m_produk.`harga`, m_produk.fotoBesar, m_penulis.`namaBuku`, m_penulis.`namaPenulis`, m_produk.isbn
                    FROM m_penulis, m_produk WHERE m_produk.id = '".$post."' and m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`kodeProduk` DESC ");
                $data = $q->row();
           
            } 

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
        $this->content['relate'] = $this->Model_id->relateBook();
		$this->content['produk'] = $data;
		$this->twig->display('checkout.html', $this->content);
	}

	
}
