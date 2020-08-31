<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
      
   
    $this->load->helper('url');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
      }
   
  }

  function index(){
    //Allowing akses to admin only
     
    if($this->session->userdata('level')==='1'){
     
      
          $this->load->view('Layout/home');

    }else{
        $this->load->view('index.php/login');

    } 


  }
  function siswa(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('Layout/home');
    }else{
        echo "Access Denied";
    }
  }

  function pustakawan(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('Layout/home');
    }else{
        echo "Access Denied";
    }
  }

 

}
