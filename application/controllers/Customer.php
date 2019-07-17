<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Customer extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_customer');  
    }
    public function index()
    {
        $data['judul'] = '';
        $data['data_customer'] = $this->M_customer->getData();
        $this->load->view('V_customer', $data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_customer');
    } 
    public function formEdit($id)
    {
        $data['edit_customer'] = $this->M_customer->updateData($id);
        $this->load->view('V_edit_customer',$data);
    }
    public function tambahCustomer()
    {
        $this->M_customer->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/codeigniter3/customer';
            </script>
        <?php
    }
    public function editCustomer()
    {
        $this->M_customer->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='http://localhost/codeigniter3/customer';
            </script>
        <?php
    }
    public function hapusCustomer($id)
    {
        $this->M_customer->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/codeigniter3/customer';
            </script>
        <?php
    }     
}
?>