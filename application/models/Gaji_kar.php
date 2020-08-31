<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_kar extends CI_Model
{
	//fungsi cek session
    function tampil_data($id){
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
        $this->db->query("SET @@lc_time_names ='id_ID'");
         return $this->db->query("SELECT *,pegawai.nama,  MIN(jam_masuk) as jam_datang, MAX(jam_masuk) as jam_pulang, DAYNAME(coba.tanggal) as hari,SUM(jam) as tjam FROM coba inner join pegawai on pegawai.id = coba.id_peg WHERE coba.id_peg ='$id' GROUP BY coba.tanggal, coba.id_peg");
    }
     function tampil_data1($id){
      return $this->db->query("select * from pegawai where id='$id'");
     }
  }