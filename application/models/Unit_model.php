<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_model extends CI_Model
{
	//fungsi cek session
    function tampil_data(){
    	// $user_id = $this->session->userdata('user_id');
     //    // return $this->db->query("SELECT * FROM lamaran where id_user='$user_id'");
     //    	$data = array();
  			// $options = array('unit' => $user_id);
  			// $Q = $this->db->get_where('pegawai',$options,1);
    	// 	if ($Q->num_rows() > 0){
     //  		$data = $Q->row_array();
    	// 		}
  			// $Q->free_result();
  			// return $data;
         return $this->db->get('unit_peg');
          
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function edit_data($where,$table){    
      return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    } 
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}