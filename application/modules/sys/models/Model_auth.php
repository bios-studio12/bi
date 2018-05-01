<?php
class Model_auth extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
    public function loginAuth($email, $password)
    {
        $valid = false;         
        $password = md5($password);
        
        $check = $this->db->get_where("muser", array("username" => $email,"password" => $password));
            
        if ($check->num_rows() > 0) {            
            $data = $check->row();
			$session = array(
                    'id' => $data->id,
                    'username' => $data->username,
                    'email' => $data->email,
                    'nama_lengkap' => $data->nama_lengkap,
                    'kategori' => $data->kategori,
                    'password' => $data->password,
                    'status' => $data->status,
                    'userLogged' => TRUE
                );
                $valid = TRUE;
                $this->session->set_userdata($session);
        }

        return $valid;      
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