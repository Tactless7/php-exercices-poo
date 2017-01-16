<?php 

	class User{
		private $_firstName;
		private $_lastName;

		public function __construct($method, $first, $last){
			$this->firstName = $method[$first];
			$this->lastName = $method[$last];
		}

		public function displayUser(){
			echo "Le nom de l'utilisateur est : $this->firstName $this->lastName";
		}
	}

	$juliane = new User($_GET,'first_name', 'last_name');
	$juliane->displayUser();
