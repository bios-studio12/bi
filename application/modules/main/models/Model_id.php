<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_id
 extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function listProduk()
    {   
        $query = $this->db->query("select m_produk.id,m_produk.diskon, m_produk.`harga`, m_produk.`totalHarga`, m_produk.foto, m_produk.`namaBuku`, m_penulis.`namaPenulis`
                    FROM m_penulis, m_produk WHERE m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`kodeProduk` DESC LIMIT 6 ")->result(); 

        return $query;
    }

    public function bestSeller()
    {   
        $query = $this->db->query("select m_produk.id, m_produk.`harga`, m_produk.foto, m_produk.`namaBuku`, m_penulis.`namaPenulis`
                    FROM m_penulis, m_produk WHERE m_penulis.`kodePenulis`= m_produk.`kodePenulis` and m_produk.status = 'Best Seller' ORDER BY m_produk.`kodeProduk` DESC LIMIT 6 ")->result(); 

        return $query;
    }

    public function relateBook()
    {   
        $query = $this->db->query("select m_produk.id, m_produk.counter, m_produk.`harga`, m_produk.foto, m_produk.`namaBuku`, m_penulis.`namaPenulis`
        FROM m_penulis, m_produk WHERE m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`counter` DESC LIMIT 6 ")->result(); 

        return $query;
    }

    public function listKategori()
    {   
        $query = $this->db->query("select m_produk.`namaBuku`, mkategori.`kategori`
        FROM m_penulis, mkategori, m_produk WHERE m_produk.kodePenulis=m_penulis.kodePenulis and mkategori.`kategori`= m_produk.`kategori` ORDER BY mkategori.`kategori` DESC ")->result(); 

        return $query;
    }


    public function counter($id)
    {
       $valid = false;

            $query = $this->db->query("select counter, kodeProduk from m_produk where id = '".$id."' order by id asc ")->row();
            $total = 0;
            $counter = $query->counter;
            $total = $counter + 1 ;

            $this->db->set("counter", $total);
            $this->db->where("id", $id);
            $valid = $this->db->update('m_produk'); 
        return $valid;
    }


    


}
