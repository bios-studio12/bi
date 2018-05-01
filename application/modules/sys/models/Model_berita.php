<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_berita extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES BERITA
    public function listBerita()
    {   
        $query = $this->db->query("select * from mberita order by id")->result(); 

        return $query;
    }

    public function showBerita()
    {   
        $query = $this->db->query("select * from mberita order by id")->result(); 

        return $query;
    }

    public function save($params = NULL)
    {
            $this->db->set("kodeBerita", $params->kodeBerita);
            $this->db->set("judul", $params->judul); 
            $this->db->set("tanggal", $params->tanggal);
            $this->db->set("subDeskripsi", $params->subDeskripsi); 
            $this->db->set("deskripsi", $params->deskripsi);
            // $this->db->set("komentar", $params->komentar); 
            // $this->db->set("user", $params->user); 
            // $this->db->set("foto", $name2); 
            // $this->db->set("foto_kecil", $name3);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('mberita'); 

            
        return $valid;

    }

    public function update_image_links($big_image, $thumbnail,$id)
    {
        
            $data = array(
            "foto_kecil" => $thumbnail,
            "foto" => $big_image);
            
            $this->db->where('id',$id);
            $this->db->update('mberita',$data); 
        
    }

     public function update($params = NULL, $name1 = null, $name2 = null)
    {

        $valid = false;
             
            $this->db->set("kodeBerita", $params->kodeBerita);
            $this->db->set("judul", $params->judul); 
            $this->db->set("tanggal", $params->tanggal);
            $this->db->set("subDeskripsi", $params->subDeskripsi); 
            $this->db->set("deskripsi", $params->deskripsi);
            $this->db->set("komentar", $params->komentar); 
            $this->db->set("user", $params->user); 
            $this->db->set("foto", $name2); 
            $this->db->set("foto_kecil", $name3);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('mberita'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mberita');
    }

    public function cekPpa($kd)
    {
        $query = $this->db->query("select * FROM mberita WHERE id = '".$kd."' ");

        return $query;
    }

   
}