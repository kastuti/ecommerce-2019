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
			$query = $this->db->query("SELECT * FROM barang ORDER BY id DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'detail' => $this->input->post('detail'),
			);
			return $this->db->insert('barang', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM barang WHERE id='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$id = $this->input->post('id');
			$data = array (
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'detail' => $this->input->post('detail'),
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