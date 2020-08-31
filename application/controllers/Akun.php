<?php
class Akun extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->helper('url');
  }
  function index(){
    //Allowing akses to admin only
            $this->load->view('Layout/head');   
            $this->load->view('DataAkun/v_akun');
            $this->load->view('Layout/footer');


  }

}
