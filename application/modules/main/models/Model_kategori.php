<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_kategori extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }


    public function listKategori()
    {   
        $query = $this->db->query("select * FROM mkategori ORDER BY `kategori` DESC ")->result(); 

        return $query;
    }


    public function relateBook()
    {   
        $query = $this->db->query("select m_produk.diskon,m_produk.totalHarga,m_produk.id, m_produk.counter, m_produk.`harga`, m_produk.foto, m_produk.`namaBuku`, m_penulis.`namaPenulis`
        FROM m_penulis, m_produk WHERE m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`counter` DESC LIMIT 6 ")->result(); 

        return $query;
    }


    public function allKategori($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "SELECT m_produk.*, m_penulis.namaPenulis FROM m_produk, m_penulis WHERE m_produk.`kodePenulis` = m_penulis.`kodePenulis` and m_produk.kategori = '".$st."' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function jumlahDataKategori($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from m_produk where kategori = '".$st."' ";
        $query = $this->db->query($sql);
        
        return $query->num_rows();
    }



}
