<?php
	class Employee extends CI_Controller
	{
		public function index()
		{

		}


		public function createEmployee()
		{
			$this->load->model('Queries');
			$result = $this->Queries->getUserRole();
			$this->load->view('createEmployee', ['result'=>$result]);

		}

		public function insertEmployee()
		{
			$this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username','required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('user_role_id', 'User Role', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run())
            {
            	$data = $this->input->post();
            	$this->load->model('Queries');
            	if ($this->Queries->addEmployee($data))
            	{
            		$this->session->set_flashdata('employee_added', 'Employee Added Successfully');
            	}
            	else
            		{
            		$this->session->set_flashdata('employee_added', 'Failed to add Employee');
            	}
            	return redirect('dashboard');


            }
            else
            {
            	$this->createEmployee();
            }
		}

		public function employeesList()
		{
				
		}
	}
?>