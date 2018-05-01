<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_penulis extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES PENULIS
    public function listData()
    {   
        $query = $this->db->query("select * from m_penulis order by id")->result(); 

        return $query;
    }


    public function save($params = NULL, $name1 = null)
    {
        $valid = false;
            
            $this->db->set("kodePenulis", $params->kodePenulis);
            $this->db->set("namaPenulis", $params->namaPenulis);
            $this->db->set("Created_by", $this->session->userdata('username'));
            $this->db->set("Created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('m_penulis'); 

            
        return $valid;

    }

     public function update($params = NULL, $name1 = null)
    {

        $valid = false;
             
            $this->db->set("kodePenulis", $params->kodePenulis);
            $this->db->set("namaPenulis", $params->namaPenulis);
            $this->db->set("Updated_by", $this->session->userdata('username'));
            $this->db->set("Updated_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('m_penulis'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_penulis');
    }

    public function cek($kd)
    {
        $query = $this->db->query("select * FROM m_penulis WHERE id = '".$kd."' ");

        return $query;
    }

   
}