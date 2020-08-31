<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fng_model extends CI_Model
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
         return $this->db->get('mesin_peg');
    }
    //laporan lembur

    ///
       function tampil_log9(){
      return $this->db->query("SELECT *,pegawai.nama,  MIN(jam_masuk) as jam_datang, MAX(jam_masuk) as jam_pulang FROM absensi_peg inner join pegawai on pegawai.id = absensi_peg.id_peg GROUP BY tanggal, id_peg");
    }
    //absensi laporan
    function tampil_log($tgla,$tglk){
      return $this->db->query("SELECT absensi_peg.tanggal FROM absensi_peg WHERE (tanggal BETWEEN '$tgla' AND '$tglk') group by tanggal");
    }
     function tampil_log2($tanggal,$id_peg){
      return $this->db->query("SELECT MIN(jam_masuk) as jam_datang, MAX(jam_masuk) as jam_pulang FROM absensi_peg Where tanggal = '$tanggal' and id_peg='$id_peg'");
    }


     function tampil_log3($bagian){
      return $this->db->query("SELECT absensi_peg.id_peg,pegawai.nama,pegawai.bagian FROM absensi_peg inner join pegawai on pegawai.id = absensi_peg.id_peg where pegawai.bagian='$bagian' group by id_peg");
    }
    function tampil_g(){
        
          return $this->db->query("SELECT sum(lembur.LH1) as lembur1,SUM(lembur.LH2) as lembur2,SUM(lembur.LH) as lhitung,lembur.id_peg,pegawai.nama,tempo_gaji.masuk,tempo_ijin.keterangan,absen.ket_absen,ijin_peg_t.ket_ijin,potongan_peg.nominal  FROM pegawai inner join lembur on lembur.id_peg = pegawai.id inner join tempo_gaji on tempo_gaji.id_peg = pegawai.id inner join tempo_ijin on tempo_ijin.id_peg = pegawai.id inner join absen on absen.id_peg=pegawai.id inner join ijin_peg_t on ijin_peg_t.id_peg=pegawai.id inner join potongan_peg on potongan_peg.id_peg = pegawai.id GROUP BY id ");
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
}