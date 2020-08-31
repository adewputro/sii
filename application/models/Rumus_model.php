<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumus_model extends CI_Model
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
         return $this->db->get('rumus_gaji');
    }
 
}