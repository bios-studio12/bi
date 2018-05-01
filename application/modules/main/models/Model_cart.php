<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_cart extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES Cart
    public function listData()
    {   
        $query = $this->db->query("select * from mcart order by id")->result(); 

        return $query;
    }

    public function getTotalCartPrice()
    {
        $session_id = $this->session->userdata('cart_session');
        $query = $this->db->query("select * FROM mcart WHERE cart_session = '".$session_id."' ")->result();
    }



    public function save($id,$session_id)
    {
        $valid = false;

            $query = $this->db->query("select m_produk.`kodeProduk`,m_produk.`id`, m_produk.isi, m_produk.deskripsi, m_produk.`totalHarga`, m_produk.foto, m_penulis.`namaBuku`, m_penulis.`namaPenulis`, m_produk.isbn
                    FROM m_penulis, m_produk WHERE m_produk.kodeProduk = '".$id."' and m_penulis.`kodePenulis`= m_produk.`kodePenulis` ORDER BY m_produk.`kodeProduk` DESC ")->row();

            
            $this->db->set("cart_session", $session_id);
            $this->db->set("kodeProduk", $query->kodeProduk);
            $this->db->set("harga", $query->totalHarga); 
            $this->db->set("namaBuku", $query->namaBuku);
            $this->db->set("qty", 1);
            $this->db->set("totalHarga", $query->totalHarga);
            $this->db->set("foto", $query->foto); 
            $this->db->set("created_by", $session_id);
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('mcart'); 

            
        return $valid;

    }

     public function update($params = NULL)
    {

        $valid = false;
       
        $total = 0;
        $total = $params->harga * $params->qty;
        
        $this->db->set("qty", $params->qty);
        $this->db->set("totalHarga", $total);
        $this->db->set("Updated_by", $this->session->userdata('username'));
        $this->db->set("Updated_at", date("Y-m-d H:i:s"));
        $this->db->where("id", $params->id);
        $this->db->where("cart_session", $params->cart_session);
        $valid = $this->db->update('mcart'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mcart');
    }

    public function cek($session_id,$id)
    {
        $query = $this->db->query("select * FROM mcart WHERE kodeProduk= '".$id."' and cart_session = '".$session_id."' ");



        return $query;
    }

   
}