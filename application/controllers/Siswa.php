<?php
class Siswa extends CI_Controller{
  function __construct(){
    parent::__construct();
      
        $this->load->helper('url');
        $this->load->model('siswa_model');

  }

  function index(){
    $data['datab'] = $this->siswa_model->tampil_data()->result();
    //Allowing akses to admin only
    $this->load->view('Layout/head');   
    $this->load->view('DataSiswa/v_siswa',$data);
    $this->load->view('Layout/footer');


  }
  function tambah_siswa(){
    $this->load->view('Layout/head');   
    $this->load->view('DataSiswa/t_siswa');
    $this->load->view('Layout/footer');

  }
  function tb_siswa(){
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jk');
    $tempat = $this->input->post('tempat');
    $tgl = $this->input->post('tgl');
    $tgl=date('Y-m-d', strtotime($tgl));
    $alamat = $this->input->post('alamat');
    $agama = $this->input->post('agama');
  

    $data = array(
        'nama_siswa' => $nama,
        'jk' => $jk,
        'tempat' => $tempat,
        'tgl' => $tgl,
        'alamat' => $alamat,
        'agama' => $agama,

    );

     $this->siswa_model->input_data($data,'siswa');
        redirect('siswa/index');
}



}
