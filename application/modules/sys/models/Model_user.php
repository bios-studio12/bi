<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_user extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES USER

    public function listUser()
    {
        $query = $this->db->query("select * from muser where  id order by id")->result();

        return $query;
    }


    public function saveUser($params = NULL)
    {
        $valid = false;
            $this->db->set("id", $params->id);  
            $this->db->set("username", $params->username);
            $this->db->set("password", md5($params->password));
            $this->db->set("email", $params->email);
            $this->db->set("status", $params->status);
            $this->db->set("kategori", $params->kategori);
            $this->db->set("nama_lengkap", $params->nama_lengkap);
            $this->db->set("Created_by", $this->session->userdata('username'));
            $this->db->set("Created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('muser'); 
        return $valid;
    }


    public function updateUser($params = NULL)
    {
        $valid = false; 
            $this->db->set("username", $params->username);
            $this->db->set("password", md5($params->password));
            $this->db->set("email", $params->email);
            $this->db->set("status", $params->status);
            $this->db->set("kategori", $params->kategori); 
            $this->db->set("nama_lengkap", $params->nama_lengkap);
            $this->db->set("Created_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('muser'); 
        return $valid;
    }

    public function getById($id = NULL)
    {
        $query = $this->db->query("select * from muser where id = '".$id."'")->row();    
        return $query;     
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('muser');
    }
}