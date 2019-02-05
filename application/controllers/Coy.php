<?php
	class Coy extends CI_Controller{
		
		public function index(){
			$this->load->view('coy');
		}

		public function user_login()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run())
              {
             	   	$username = $this->input->post('username');
             	   	$password = $this->input->post('password');
             	   	$this->load->model('Queries');
             	   	$user_id = $this->Queries->login_user($username, $password);
             	   	if($user_id)
             	   	{
             	   		$this->session->set_userdata(['user_id'=>$user_id]);
             	   		return redirect('dashboard');
             	   	}
             	   	else
             	   	{
             	   		$this->session->set_flashdata('login_response','Invalid Username/Password');
             	   		return redirect('login');
             	   	}
              }
            else
              {
                    $this->load->view('login');
              }
		}

	}
?>