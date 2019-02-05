<?php

	class Dashboard extends CI_Controller
	{
		public function index()
		{
			if(!$this->session->userdata('user_id'))
			{
				return redirect('login');
			}
			else
			{
				$this->load->view('Dashboard');

			// 		$this->load->model('Queries');
			// $this->load->library('pagination');
			// $config = [
			// 	'base_url' => base_url("dashboard/index"),
			// 	'per_page' => 5,
			// 	'total_rows' => $this->Queries->get_num_rows(),
			// 	'uri_segment' => 3,
			// 	'full_tag_open' => "<ul class='pagination'>",
			// 	'full_tag_close' => "</ul>",
			// 	'next_tag_open' => '<li>',
			// 	'next_tag_close' => '</li>',
			// 	'prev_tag_open' => '</li>',
			// 	'prev_tag_close' => '</li>',
			// 	'num_tag_open' => '</li>',
			// 	'num_tag_close' => '</li>',
			// 	'cur_tag_open' => "<li class='active'><a>",
			// 	'cur_tag_close' => '</a></li>',

			// ];

			// $this->pagination->initialize($config);
			// $result = $this->Queries->getAllUsers( $config['per_page'], $this->uri->segment(3));
			// $this->load->view('dashboard',['result'=>$result]);

			}
			
		}
	}

?>