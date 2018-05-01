<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_kategori extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES KATEGORI
    public function listData()
    {   
        $query = $this->db->query("select * from mkategori order by id")->result(); 

        return $query;
    }


    public function save($params = NULL)
    {
        $valid = false;
            
            $this->db->set("kategori", $params->kategori);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('mkategori'); 

            
        return $valid;

    }

     public function update($params = NULL)
    {

        $valid = false;
             
            $this->db->set("kategori", $params->kategori);
            $this->db->set("updated_by", $this->session->userdata('username'));
            $this->db->set("updated_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('mkategori'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mkategori');
    }

    public function cekKinerja($kd)
    {
        $query = $this->db->query("select * FROM mkategori WHERE id = '".$kd."' ");

        return $query;
    }

   
}