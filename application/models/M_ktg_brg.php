<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_ktg_brg extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM ktg_brg ORDER BY id DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$date = date('Y-m-d H:i:s');
			$data = array (
				'nama' => $this->input->post('nama'),
				'detail' => $this->input->post('detail'),
				'created_date' => $date
			);
			return $this->db->insert('ktg_brg', $data);
		}
		function updateData($id)
		{
			$query = $this->db->query("SELECT * FROM ktg_brg WHERE id='".$id."'");
			return $query->result();
		}
		function simpanUpdateData()
		{
			$id = $this->input->post('id');
			$data = array (
			'nama' => $this->input->post('nama'),
			'detail' => $this->input->post('detail'),
			);
			$this->db->where('id',$id);
			$this->db->update('ktg_brg',$data);
		}
		function hapus_data($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('ktg_brg');
		}
	}

?>