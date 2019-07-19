<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_customer extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM customer ORDER BY id DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$session = $this->session->userdata('nama');
			$date = date('Y-m-d H:i:s');
			$data = array (
				'nama' => $this->input->post('nama'),
				'created_date' => $date,
				'created_by' => $session
				);
			return $this->db->insert('customer', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM customer WHERE id='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$session = $this->session->userdata('nama');
			$date = date('Y-m-d H:i:s');
			$id = $this->input->post('id');
			$data = array (
			'nama' => $this->input->post('nama'),
			'updated_date' => $date,
			'updated_by' => $session
			);
			$this->db->where('id',$id);
			$this->db->update('customer',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('customer');
		}
	}

?>