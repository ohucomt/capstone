<?php
	header('Access-Control-Allow-Origin: *'); 
	require("../classes/ModelUn.php");
	require("../config.php");
	class checkValid extends Model{
		public $q;


		public function checkEmail(){
			$this->q = $_GET['q'];
			$this->query = "select * from users where email ='$this->q'";
			$this->connectDB();
			$this->sendQuery();
			$count = $this->returnCount();
			if($count != 0){
				echo "This email has been already registered!";
			}
		}

		public function checkUsername(){
			$this->q = $_GET['q'];
			$this->query = "select * from users where username = '$this->q'";
			$this->connectDB();
			$this->sendQuery();
			$count = $this->returnCount();
			if($count != 0){
				echo "This username has been taken";
			}
		}
	}


	$r = $_GET['r'];
	$a = new checkValid();
	switch ($r) {
		case 'email':
			$a->checkEmail();
			break;
		
		case 'username':
			$a->checkUsername();
			break;
		default:
			# code...
			break;
	}

?>