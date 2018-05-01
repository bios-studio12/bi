<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_kinerja extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES KINERJA
    public function listKinerja()
    {   
        $query = $this->db->query("select * from mstkinerja order by id")->result(); 

        return $query;
    }

    public function namaBangunan()
    {   
        $query = $this->db->query("select * from mstppa order by namaBangunan asc")->result(); 

        return $query;
    }

    public function showKinerja()
    {   
        $query = $this->db->query("select * from mstkinerja order by id")->result(); 

        return $query;
    }

    public function save($params = NULL, $name1 = null)
    {
        $valid = false;
            // $this->db->set("ID", $params->ID); 
            $this->db->set("namaBangunan", $params->namaBangunan); 
            // $this->db->set("saluran", $params->saluran); 
            $this->db->set("koordinat", $params->koordinat);
            $this->db->set("desa", $params->desa); 
            $this->db->set("kecamatan", $params->kecamatan);
            $this->db->set("kondisi", $params->kondisi); 
            $this->db->set("fungsi", $params->fungsi);
            $this->db->set("nilai", $params->nilai);
            $this->db->set("foto", $name1);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('mstkinerja'); 

            
        return $valid;

    }

     public function update($params = NULL, $name1 = null)
    {

        $valid = false;
             
            $this->db->set("namaBangunan", $params->namaBangunan); 
            // $this->db->set("saluran", $params->saluran); 
            $this->db->set("koordinat", $params->koordinat);
            $this->db->set("desa", $params->desa); 
            $this->db->set("kecamatan", $params->kecamatan);
            $this->db->set("kondisi", $params->kondisi); 
            $this->db->set("fungsi", $params->fungsi);
            $this->db->set("nilai", $params->nilai);
            $this->db->set("foto", $name1);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('mstkinerja'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mstkinerja');
    }

    public function cekKinerja($kd)
    {
        $query = $this->db->query("select * FROM mstkinerja WHERE id = '".$kd."' ");

        return $query;
    }

   
}