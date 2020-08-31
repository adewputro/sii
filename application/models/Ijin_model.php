<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_model extends CI_Model
{
	
    function tampil_data(){

         return $this->db->get('pegawai');
    }
     function tampil_d(){

         return $this->db->query("SELECT *,pegawai.nama From ijin_peg inner join pegawai on pegawai.id = ijin_peg.id_peg");
    }
 
}