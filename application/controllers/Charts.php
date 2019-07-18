<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Charts extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_charts');  
    }
    public function index()
    {
        $data ['content'] = 'V_charts';
        $data ['menu'] = 'V_menu';
        //$data['judul'] = '';
        $data['data_charts'] = $this->M_charts->getData();
        $this->load->view('V_main', $data);//$data);
    }
}
?>