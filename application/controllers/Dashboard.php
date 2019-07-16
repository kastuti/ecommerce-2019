<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_dashboard');  
    }
    public function index()
    {
        //$data['judul'] = '';
        //$data['data_dashboard'] = $this->M_dashboard->getData();
        $this->load->view('V_dashboard');//$data);
    }
}
?>