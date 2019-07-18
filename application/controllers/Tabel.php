<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Tabel extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_tabel');  
    }
    public function index()
    {
        $data['content'] = 'V_tabel';
        $data['menu'] = 'V_menu';
        $data['judul'] = '';
        $data['content'] = 'V_tabel';
        $data['menu'] = 'V_menu';
        $data['data_tabel'] = $this->M_tabel->getData();
        $this->load->view('V_main', $data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_tabel');
    } 
    public function formEdit($id)
    {
        $data['edit_tabel'] = $this->M_tabel->updateData($id);
        $this->load->view('V_edit_tabel',$data);
    }
    public function tambahTabel()
    {
        $this->M_tabel->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='<?php echo base_url('tabel'); ?>';
            </script>
        <?php
    }
    public function editTabel()
    {
        $this->M_tabel->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='<?php echo base_url('tabel'); ?>';
            </script>
        <?php
    }
    public function hapusTabel($id)
    {
        $this->M_tabel->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='<?php echo base_url('tabel'); ?>';
            </script>
        <?php
    }     
}
?>