<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_penerbit extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES PENERBIT
    public function listData()
    {   
        $query = $this->db->query("select * from m_penerbit order by id")->result(); 

        return $query;
    }


    public function showKinerja()
    {   
        $query = $this->db->query("select * from m_penerbit order by id")->result(); 

        return $query;
    }

    public function save($params = NULL, $name1 = null)
    {
        $valid = false;
            
            $this->db->set("kodePenerbit", $params->kodePenerbit);
            $this->db->set("nama", $params->nama); 
            $this->db->set("kota", $params->kota);
            $this->db->set("Created_by", $this->session->userdata('username'));
            $this->db->set("Created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('m_penerbit'); 

            
        return $valid;

    }

     public function update($params = NULL, $name1 = null)
    {

        $valid = false;
             
            $this->db->set("kodePenerbit", $params->kodePenerbit);
            $this->db->set("nama", $params->nama); 
            $this->db->set("kota", $params->kota);
            $this->db->set("Updated_by", $this->session->userdata('username'));
            $this->db->set("Updated_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('m_penerbit'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('m_penerbit');
    }

    public function cekKinerja($kd)
    {
        $query = $this->db->query("select * FROM m_penerbit WHERE id = '".$kd."' ");

        return $query;
    }

   
}