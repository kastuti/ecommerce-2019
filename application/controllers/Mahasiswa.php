<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_mahasiswa');      
    }
    public function index()
    {
        $data['judul'] = '';
        $data['data_mahasiswa'] = $this->M_mahasiswa->getData();
        $this->load->view('V_mahasiswa', $data);
    }
    public function formAdd()
    {
        $this->load->view('V_add_mahasiswa');
    } 
    public function formEdit($id)
    {
        $data['edit_mahasiswa'] = $this->M_mahasiswa->updateData($id);
        $this->load->view('V_edit_mahasiswa',$data);
    }
    public function tambahMahasiswa()
    {
        $this->M_mahasiswa->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/codeigniter3/mahasiswa';
            </script>
        <?php
    }
    public function editMahasiswa()
    {
        $this->M_mahasiswa->simpanUpdateData();
        ?>
            <script type="text/javascript">
            alert('Data berhasil diupdate');
            document.location='http://localhost/codeigniter3/mahasiswa';
            </script>
        <?php
    }
    public function hapusMahasiswa($id)
    {
        $this->M_mahasiswa->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/codeigniter3/mahasiswa';
            </script>
        <?php
    }     
}
?>