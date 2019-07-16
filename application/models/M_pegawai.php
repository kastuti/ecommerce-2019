<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_pegawai extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM pegawai ORDER BY id_pegawai DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'umur' => $this->input->post('umur'),
				'alamat' => $this->input->post('alamat')
			);
			return $this->db->insert('pegawai', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$id = $this->input->post('id');
			$data = array (
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat')
			);
			$this->db->where('id_pegawai',$id);
			$this->db->update('pegawai',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id_pegawai', $id);
			$this->db->delete('pegawai');
		}
	}

?>