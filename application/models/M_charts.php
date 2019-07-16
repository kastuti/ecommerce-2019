<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_charts extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM admin ORDER BY id DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			);
			return $this->db->insert('admin', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM admin WHERE id='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$id = $this->input->post('id');
			$data = array (
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			);
			$this->db->where('id',$id);
			$this->db->update('admin',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('admin');
		}
	}

?>