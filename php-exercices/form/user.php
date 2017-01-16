<?php 

	class User{
		private $_firstName;
		private $_lastName;

		public function __construct($method, $first, $last){
			$this->_firstName = $method[$first];
			$this->_lastName = $method[$last];
		}

		public function displayUser(){
			echo "<div>Le nom de l'utilisateur est : $this->_firstName $this->_lastName.</div>";
		}
	}

	$juliane = new User($_GET,'first_name', 'last_name');
	$juliane->displayUser();

	$newUser = new User($_POST, 'first_name', 'last_name');
	$newUser->displayUser();
