<?php
	
	class Modeltest extends CI_Model
	{
		public function firstName()
		{
			$lastName = $this->lastName();
			return "Marc " . $lastName;

		}

		private function lastName()
		{
			return "Lopez";
		}
	}

?>