<?php

class Auth extends CI_Controller
{
	

	public function logout()
	{
		unset($_SESSION);
		redirect("auth/login1","refresh");
	}

	public function login1()
	{	
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		if ($this->form_validation->run() == TRUE)
		{

			$username = $_POST['username'];
			$password = md5($_POST['password']);
			//chec user in database
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('username'=>$username));
			$query = $this->db->get();

			$user = $query->row();

			//if user exists
			if ($user->email)
			{
				//temporary message
				$this->session->set_flashdata("success","You are now logged in");

				//set session variable

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				//redirect to profile page
				redirect("user/profile","refresh");

			} else {
				$this->session->set_flashdata("error","No such account exists in database");
				redirect("auth/login1","refresh");

			}
		}


		$this->load->view('login');

	}
	public function register()
	{
		if(isset($_POST['register']))
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone','Phone','required|min_length[5]');

			//if form validation true
			if($this->form_validation->run() == TRUE)
			{
			//add user in database
			$data = array(
				'username'=>$_POST['username'],
				'email'=>$_POST['email'],
				'password'=>$_POST['password'],
				'gender'=>$_POST['gender'],
				'created_date'=>date('Y-m-d'),
				'phone'=>$_POST['phone'],
			);
			$this->db->insert('users',$data);

			$this->session->set_flashdata("success","Your account has been registered. You can now login");
			redirect("auth/register","refresh");
		}
	}

		//load view
		$this->load->view('register');
	}
}
?>