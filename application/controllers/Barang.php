<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Barang extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_barang');
        $this->load->library('session'); //perubahan

        if($this->session->nama==''){ //perubahan
            redirect('login');
        }
    }
    public function index()
    {
        $data['judul'] = '';
        $data['content'] = 'V_barang';
        $data['menu'] = 'V_menu';
        $data['data_barang'] = $this->M_barang->getData();
        $this->load->view('V_main', $data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_barang');
    } 
    public function formEdit($id)
    {
        $data['edit_barang'] = $this->M_barang->updateData($id);
        $this->load->view('V_edit_barang',$data);
    }
    public function tambahBarang()
    {
        $this->M_barang->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='<?php echo base_url('barang'); ?>';
            </script>
        <?php
    }
    public function editBarang()
    {
        $this->M_barang->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='<?php echo base_url('barang'); ?>';
            </script>
        <?php
    }
    public function hapusBarang($id)
    {
        $this->M_barang->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='<?php echo base_url('barang'); ?>';
            </script>
        <?php
    }     
}
?>