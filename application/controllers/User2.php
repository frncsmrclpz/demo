<?php
	class User extends CI_controller{

		function index()
		{
			$this->load->model('usermodel');
			$data['userArray'] = $this->usermodel->returnusers();
			$this->load->view('userview',$data);
		}
	}



?>
