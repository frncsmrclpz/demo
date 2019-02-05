<?php
	class Queries extends CI_Model
	{
		public function login_user($username, $password)
		{
			$query = $this->db->where(['username'=>$username, 'password'=>$password])->get('users');
			if($query->num_rows() > 0)
			{
				return $query->row()->user_id;
			}
		}

		public function getUserRole()
		{
			$query = $this->db->where(['role_name'=> 'Employee'])->get('user_role');
			if($query->num_rows() > 0)
			{
				return $query->row()->id;
			}
		}

		public function addEmployee($data)
		{
			return $this->db->insert('users', $data);
		}
	}

?>