<?php
class Buku extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->helper('url');
  }
  function index(){
    //Allowing akses to admin only
            $this->load->view('Layout/head');   
            $this->load->view('DataBuku/v_buku');
            $this->load->view('Layout/footer');


  }

  function tambah_buku(){
    $this->load->view('Layout/head');   
    $this->load->view('DataBuku/t_buku');
    $this->load->view('Layout/footer');
  }

}
