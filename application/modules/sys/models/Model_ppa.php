<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("memory_limit","512M");
class Model_ppa extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

// MODULES PPA
    public function listPpa()
    {   
        $query = $this->db->query("select * from mstppa order by id")->result(); 

        return $query;
    }

    public function showPpa()
    {   
        $query = $this->db->query("select * from mstppa order by id")->result(); 

        return $query;
    }

    public function save($params = NULL, $name1 = null, $name2 = null, $name3 = null, $name4 = null, $name5 = null, $name6 = null, $name7 = null)
    {
        $valid = false;
            // $this->db->set("ID", $params->ID); 
            $this->db->set("nama", $params->nama);
            $this->db->set("tempat", $params->tempat); 
            $this->db->set("tglLahir", $params->tglLahir);
            $this->db->set("alamat", $params->alamat); 
            $this->db->set("lokasiKerja", $params->lokasiKerja);
            $this->db->set("namaBangunan", $params->namaBangunan); 
            $this->db->set("ruasSaluran", $params->ruasSaluran); 
            $this->db->set("namaSaluran", $params->namaSaluran);
            $this->db->set("kejuron", $params->kejuron); 
            $this->db->set("pengamat", $params->pengamat);
            $this->db->set("seksi", $params->seksi); 
            $this->db->set("koor", $params->koor);
            $this->db->set("foto", $name1);
            $this->db->set("gambar1", $name2); 
            $this->db->set("gambar2", $name3);
            $this->db->set("gambar3", $name4); 
            $this->db->set("gambar4", $name5);
            $this->db->set("gambar5", $name6); 
            $this->db->set("gambar6", $name7);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('mstppa'); 

            
        return $valid;

    }

     public function update($params = NULL, $name1 = null, $name2 = null, $name3 = null, $name4 = null, $name5 = null, $name6 = null, $name7 = null)
    {

        $valid = false;
             
            $this->db->set("nama", $params->nama);
            $this->db->set("tempat", $params->tempat); 
            $this->db->set("tglLahir", $params->tglLahir);
            $this->db->set("alamat", $params->alamat); 
            $this->db->set("lokasiKerja", $params->lokasiKerja);
            $this->db->set("namaBangunan", $params->namaBangunan); 
            $this->db->set("ruasSaluran", $params->ruasSaluran); 
            $this->db->set("namaSaluran", $params->namaSaluran);
            $this->db->set("kejuron", $params->kejuron); 
            $this->db->set("pengamat", $params->pengamat);
            $this->db->set("seksi", $params->seksi); 
            $this->db->set("koor", $params->koor);
            $this->db->set("foto", $name1);
            $this->db->set("gambar1", $name2); 
            $this->db->set("gambar2", $name3);
            $this->db->set("gambar3", $name4); 
            $this->db->set("gambar4", $name5);
            $this->db->set("gambar5", $name6); 
            $this->db->set("gambar6", $name7);
            $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $this->db->where("id", $params->id);
            $valid = $this->db->update('mstppa'); 

            

        return $valid;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mstppa');
    }

    public function cekPpa($kd)
    {
        $query = $this->db->query("select * FROM mstppa WHERE id = '".$kd."' ");

        return $query;
    }

   
}