<?php
class UserModel extends CI_Model{
 
    public function register($user){
        $this->db->insert('users', $user);
    }
 
    public function login_user($email,$pass){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $this->db->where('password',md5($pass));
 
        if($query=$this->db->get()){
          return $query->row_array();
        }
        else{
          return false;
        } 
    }

    public function email_check($email){
 
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $query=$this->db->get();
 
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
    }

    public function isLogin(){
      $user = $this->session->userdata;
      if (isset($user['email'])) {
        return true;
      }else{
        return false;
      }
    }
}
?>