<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Coymaks extends CI_Controller
	{
		public function index()
		{
			$this->load->view('myindexview');

		}

		public function test()
		{
			echo "<h1>This is the test function from my controller..</h1>";
		}
	}


?>
