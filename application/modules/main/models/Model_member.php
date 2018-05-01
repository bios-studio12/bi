<?php
class Model_member extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
    public function loginAuth($email, $password)
    {
        $valid = false;         
        $password = md5($password);
        
        $check = $this->db->get_where("member", array("email" => $email,"password" => $password));
            
        if ($check->num_rows() > 0) {            
            $data = $check->row();
			$session = array(
                    'id' => $data->id,
                    'nama' => $data->nama,
                    'email' => $data->email,
                    'password' => $data->password,
                    'kategori' => $data->kategori,
                    'userLogged' => TRUE
                );
                $valid = TRUE;
                $this->session->set_userdata($session);
        }

        return $valid;      
    }


    public function save($params = NULL)
    {
        $valid = false;

            $password = md5($params->password);

            $this->db->set("nama", $params->nama);
            $this->db->set("email", $params->email); 
            $this->db->set("password", $password);
            $this->db->set("kategori", 'user');
            // $this->db->set("created_by", $this->session->userdata('username'));
            $this->db->set("created_at", date("Y-m-d H:i:s"));
            $valid = $this->db->insert('member'); 

            
        return $valid;

    }

    public function cekEmail($kd)
    {
        $query = $this->db->query("select * FROM member WHERE email = '".$kd."' ");

        return $query;
    }   

    // public function gantiPassword($password)
    // {
    //     $log = $this->session->all_userdata();
    //     $userId = $this->session->userdata('userId');
    //     $valid = false; 
    
    //     $this->db->set("password", $password);
    //     $this->db->where("id_user", $userId);
    //     $valid = $this->db->update("mst_user");
            
    //     $session = array(
    //           'userPassword' => $password,
    //     );
            
    //     $this->session->set_userdata($session);
        
    //     return $valid;
    // }
}
?>