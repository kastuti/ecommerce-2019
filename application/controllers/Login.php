<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_login');    
    }
    
    public function index()
    {
        $this->load->view('V_login');
    }

    // function aksi_login(){

    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');
    //     $where = array(
    //         'username' => $username,
    //         'password' => md5($password)
    //         );
    //     $cek = $this->M_login->cek_login("admin",$where)->num_rows();
    //     if($cek > 0){
 
    //         $data_session = array(
    //             'nama' => $username,
    //             'status' => "login"
    //             );
 
    //         $this->session->set_userdata($data_session);
 
    //         redirect("dashboard");//mengarahkan mau kemana dia ini 
 
    //     }else{
    //         echo "Username dan password salah !";
    //     }
    // }

        function api_aksi_login(){

        $username = 'admin';
        $password = 'admin';
        
        // Set up and execute the curl process
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://localhost/APIs/api/login/actionlogin');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'username' => $username,
            'password' => $password
        ));
         
        // Optional, delete this line if your API is open
        curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
         
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
         
        $result = json_decode($buffer);
     
        if(isset($result->status) && $result->status == 'success')
        {
            echo 'User has been updated.';
            redirect("dashboard");
        }
         
        else
        {
            echo 'Something has gone wrong';
        }
            // $data = array(
            //     'username' => $this->input->post('username'), 
            //  'password' => $this->input->post('password')
            //         );
            // $string = http_build_query($data);
            // $ch = curl_init("http://localhost/APIs/api/login/actionlogin");
            // curl_setopt($ch, CURLOPT_POST, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $result_post =  curl_exec($ch);
            // curl_close($ch);
            // // var_dump(json_decode($result_post));
            // var_dump($result_post);

            // $result = json_decode($result_post);

            // // echo json_encode($result_post);
            // // echo json_decode($result_post);

            // var_dump($result);

            // if( $result->status == 'success'){

            //     echo "success login";
                
            // }else{

            //     echo "gagal login";
       
            // }
    }
 
     function ci_curl($username, $password)
    {
        // $data = array(
        //         'username' => $this->input->post('username'), 
        //         'password' => $this->input->post('password')
        //     );
         
        $this->load->library('curl');
         
        $this->curl->create('http://localhost/APIs/api/login/actionlogin');
         
        // Optional, delete this line if your API is open
        $this->curl->http_login($username, $password);
     
        $this->curl->post(array(
            'username' => $username,
            'password' => $password
        ));
         
        $result = json_decode($this->curl->execute());
     
        if(isset($result->status) && $result->status == 'success')
        {
            echo 'berhasil login';
        }
         
        else
        {
            echo 'gagal login';
        }
    }

    function rest_client_example($id){
        $this->load->library('rest', array(
            'server' => 'http://localhost/APIs/api/login/actionlogin',
            'http_user' => 'admin',
            'http_pass' => 'admin',
            'http_auth' => 'basic' // or 'digest'
        ));
         
        $user = $this->rest->get('admin', array('id' => $id), 'json');
         
        echo $user->name;
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
// https://code.tutsplus.com/id/tutorials/working-with-restful-services-in-codeigniter--net-8814