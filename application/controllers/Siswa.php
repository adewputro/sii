<?php
class Siswa extends CI_Controller{
  function __construct(){
    parent::__construct();
      
        $this->load->helper('url');
   
  }

  function index(){
    //Allowing akses to admin only
    $this->load->view('Home/head');   
            $this->load->view('DataSiswa/v_siswa');
            $this->load->view('Home/footer');


  }

 

}
