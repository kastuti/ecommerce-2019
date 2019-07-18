<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Ktg_brg extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_ktg_brg');  
    }
    public function index()
    {
        $data['content'] = 'V_ktg_brg';
        $data['menu'] = 'V_menu';
        $data['judul'] = '';
        $data['data_ktg_brg'] = $this->M_ktg_brg->getData();
        $this->load->view('V_main', $data);//$data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_ktgbrg');
    } 
    public function formEdit($id)
    {
        $data['edit_ktg_brg'] = $this->M_ktg_brg->updateData($id);
        $this->load->view('V_edit_ktgbrg',$data);
    }
    public function tambahTabel()
    {
        $this->M_ktg_brg->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='<?php echo base_url('ktg_brg'); ?>';
            </script>
        <?php
    }
    public function editTabel()
    {
        $this->M_ktg_brg->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='<?php echo base_url('ktg_brg'); ?>';
            </script>
        <?php
    }
    public function hapusTabel($id)
    {
        $this->M_ktg_brg->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='<?php echo base_url('ktg_brg'); ?>';
            </script>
        <?php
    }     
}
?>