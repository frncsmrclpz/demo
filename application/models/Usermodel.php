<?php
	class Usermodel extends CI_controller{

		function returnusers()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rule();
			$this->load->database();
			//$query = $this->db->query("SELECT * FROM user ");
			$query = $this->db->get('user');
			$query->result_array();
			
			return $query->result_array();
			
		}
	}


?>