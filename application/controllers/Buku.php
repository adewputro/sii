<?php
class Buku extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->helper('url');
        $this->load->model('buku_model');
  }
  function index(){
    //Allowing akses to admin only
            $data['datab'] = $this->buku_model->tampil_data()->result();
            $this->load->view('Layout/head');   
            $this->load->view('DataBuku/v_buku',$data);
            $this->load->view('Layout/footer');


  }

  function tambah_buku(){
    $this->load->view('Layout/head');   
    $this->load->view('DataBuku/t_buku');
    $this->load->view('Layout/footer');
  }

  function tb_buku(){
    $no = $this->input->post('no');
    $judul = $this->input->post('judul');
    $penerbit = $this->input->post('penerbit');
    $nama = $this->input->post('nama');
    $isbn = $this->input->post('isbn');
    $tahun = $this->input->post('tahun');
  

    $data = array(
        'no_buku' => $no,
        'judul_buku' => $judul,
        'penerbit' => $penerbit,
        'nam_peng' => $nama,
        'isbn' => $isbn,
        'tahun' => $tahun,

    );

     $this->buku_model->input_data($data,'buku');
        redirect('buku/index');
}

}
