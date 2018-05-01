<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_produk extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES PRODUK
    public function listData()
    {   
        $query = $this->db->query("select * from m_produk order by id desc")->result(); 

        return $query;
    }

    public function listPenulis()
    {   
        $query = $this->db->query("select * from m_penulis order by kodePenulis asc")->result(); 

        return $query;
    }

    public function listPenerbit()
    {   
        $query = $this->db->query("select * from m_penerbit order by kodePenerbit asc")->result(); 

        return $query;
    }

    public function listKategori()
    {   
        $query = $this->db->query("select * from mkategori order by kategori asc")->result(); 

        return $query;
    }


    public function save($params = NULL, $big_image = null, $image = null, $id)
    {
            $this->db->set("kodeProduk", $params->kodeProduk);
            $this->db->set("kodePenulis", $params->kodePenulis);
            $this->db->set("kodePenerbit", $params->kodePenerbit);
            $this->db->set("ukuran", $params->ukuran); 
            $this->db->set("isbn", $params->isbn);
            $this->db->set("namaBuku", $params->namaBuku);
            $this->db->set("tanggal", $params->tanggal);
            $this->db->set("berat", $params->berat); 
            $this->db->set("tahunTerbit", $params->tahunTerbit);
            $this->db->set("kategori", $params->kategori); 
            $this->db->set("isi", $params->isi); 
            $this->db->set("deskripsi", $params->deskripsi); 
            $this->db->set("harga", $params->harga); 
            $this->db->set("diskon", $params->diskon);
            $this->db->set("totalHarga", $params->totalHarga); 
            $this->db->set("stok", $params->stok);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('m_produk'); 

            $this->db->set("foto", $big_image); 
            $this->db->set("fotoBesar", $image);
            $this->db->where('kodeProduk',$id);
            $valid =$this->db->update('m_produk'); 

            
        return $valid;

    }


     public function update($params = NULL, $big_image = null, $image = null, $id)
    {

        $valid = false;

            $this->db->set("kodeProduk", $params->kodeProduk);
            $this->db->set("kodePenulis", $params->kodePenulis);
            $this->db->set("kodePenerbit", $params->kodePenerbit);
            $this->db->set("ukuran", $params->ukuran); 
            $this->db->set("tanggal", $params->tanggal);
            $this->db->set("isbn", $params->isbn);
            $this->db->set("namaBuku", $params->namaBuku);
            $this->db->set("berat", $params->berat); 
            $this->db->set("tahunTerbit", $params->tahunTerbit);
            $this->db->set("isi", $params->isi); 
            $this->db->set("kategori", $params->kategori); 
            $this->db->set("deskripsi", $params->deskripsi); 
            $this->db->set("harga", $params->harga); 
            $this->db->set("diskon", $params->diskon);
            $this->db->set("totalHarga", $params->totalHarga); 
            $this->db->set("stok", $params->stok);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('m_produk'); 



            if ($big_image == '') {
                $valid;
            }else{
                $this->db->set("foto", $big_image); 
                $this->db->set("fotoBesar", $image);
                $this->db->where('kodeProduk',$id);
                $valid = $this->db->update('m_produk'); 
            }
            

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_produk');
    }

    public function getByID($kd)
    {
        $query = $this->db->query("select * FROM m_penulis WHERE kodePenulis = '".$kd."' ")->row();

        return $query;
    }


    public function status($params = NULL)
    {

        $valid = false;

            $this->db->set("status", $params->status);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $this->db->where("kodePenulis", $params->kodePenulis);
            $valid = $this->db->update('m_produk'); 
        return $valid;
    }

   
}