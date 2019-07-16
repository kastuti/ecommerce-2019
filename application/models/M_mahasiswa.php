<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_mahasiswa extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => $this->input->post('kelas')
			);
			return $this->db->insert('mahasiswa', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM mahasiswa WHERE id_mahasiswa='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$id = $this->input->post('id');
			$data = array (
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'kelas' => $this->input->post('kelas')
			);
			$this->db->where('id_mahasiswa',$id);
			$this->db->update('mahasiswa',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id_mahasiswa', $id);
			$this->db->delete('mahasiswa');
		}
	}

?>