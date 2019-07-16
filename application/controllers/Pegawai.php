<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawai extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_pegawai');      
    }
    public function index()
    {
        $data['judul'] = '';
        $data['data_pegawai'] = $this->M_pegawai->getData();
        $this->load->view('V_pegawai', $data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_pegawai');
    } 
    public function formEdit($id)
    {
        $data['edit_pegawai'] = $this->M_pegawai->updateData($id);
        $this->load->view('V_edit_pegawai',$data);
    }
    public function tambahPegawai()
    {
        $this->M_pegawai->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/codeigniter3/pegawai';
            </script>
        <?php
    }
    public function editPegawai()
    {
        $this->M_pegawai->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='http://localhost/codeigniter3/pegawai';
            </script>
        <?php
    }
    public function hapusPegawai($id)
    {
        $this->M_pegawai->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/codeigniter3/pegawai';
            </script>
        <?php
    }     
}
?>