<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Test extends CI_controller
	{
		public function index()
		{
			$this->load->model('myindexview');
		}

		public function testt()
		{
			$this->load->model('modeltest');
			$name = $this->modeltest->firstName();
			echo "First Name = ", $name;
		}
	}

?>