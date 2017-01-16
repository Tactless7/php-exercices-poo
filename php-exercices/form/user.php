<?php 

	class User{
		private $_firstName;
		private $_lastName;

		public function __construct($first, $last){
			$this->firstName = $first;
			$this->lastName = $last;
		}

		public function displayUser(){
			echo "Le nom de l'utilisateur est : $this->firstName $this->lastName";
		}
	}

	$juliane = new User($_GET['first_name'], $_GET['last_name']);
	$juliane->displayUser();
