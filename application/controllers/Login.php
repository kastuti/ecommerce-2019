<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_login');      
    }
    public function index()
    {
        //data['judul'] = '';
        //$data['data_mahasiswa'] = $this->M_mahasiswa->getData();
        $this->load->view('V_login');
    }
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->M_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect("dashboard");//mengarahkan mau kemana dia ini 
 
        }else{
            echo "Username dan password salah !";
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
?>