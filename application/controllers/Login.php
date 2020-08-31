<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('home_model');
     $this->load->model('fungsi');
  }

  function index(){
      if($this->session->userdata('level')==='1'){
             $data['datab'] = $this->home_model->tampil_data()->result();
            $this->load->view('Home/home',$data);

      }else{
        // $data1 = $this->db->query("SELECT *,DATE_ADD(tgl_akhir, INTERVAL - 30 DAY) as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_akhir, INTERVAL - 30 DAY), CURDATE()) as selisih FROM pkwt_peg")->row();
       

       

        // foreach ($data1 as $i) {
        //     $id = $i->id_peg;
        //     $selisih = $i->selisih;
        //     $update = array('selisih' => $selisih );
        //     $where = array('id_pkwt' => $id );
        //     $this->fungsi->update_data($where,$update,'pkwt_peg');
          
        // }
          // while($u=$data1)  {
          //   $id_pkwt = $u->id_pkwt;
            
           // $data1 = array(
           //  'selisih' => $selisih 
           //  );
          // }
           //
         $this->load->view('Login/login');
      }
   
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $email = $data['user_email'];
        $level = $data['status'];
        $unit = $data['unit'];
        $sesdata = array(
            'email'     => $email,
            'unit'     => $unit,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');

        // access login for staff
        }elseif($level === '2'){
            redirect('page/siswa');

        // access login for author
        }else{
            redirect('page/pustakawan');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
