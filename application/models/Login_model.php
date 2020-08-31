<?php
class Login_model extends CI_Model{

  function validate($email,$password){
    $this->db->where('username',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('user_peg',1);
    return $result;
  }

}
