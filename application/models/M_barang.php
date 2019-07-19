<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_barang extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("select b.*, kb.nama as nama_kategori
		                    from barang as b
		                    left join ktg_brg kb on b.id_kategori = kb.id
		                    where b.id is not null
		                    order by b.id desc");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		
		function insertData()
		{
			$date = date('Y-m-d H:i:s'); //tampilan created_date
			$kode = $this->input->post('kode');
			$nama = $this->input->post('nama');
			$detail = $this->input->post('detail');
			$data = array (
				'kode' => $kode,
				'nama' => $nama,
				'detail' => $detail,
				'created_date' => $date
			);
			$this->db->insert('barang', $data);
			return $this->db->insert_id();
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM barang WHERE id='".$id."'");
			return $query->result();
			
		}
		function simpanUpdateData()
		{
			$date = date('Y-m-d H:i:s');
			$id = $this->input->post('id');
			$data = array (
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'detail' => $this->input->post('detail'),
			'created_date' => $date
			);
			$this->db->where('id',$id);
			$this->db->update('barang',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('barang');
		}
	}

?>