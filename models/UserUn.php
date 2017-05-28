<?php
	class UserModel extends Model{

		public function checkEmpty($post){
			if($post){
				foreach($post as $item => $value){
				if(empty($value)){
					Message::setMsg("You can not leave there fied blank", "danger");
					Helper::redirect("user/register");
					exit();
				}
			}
			}
		}

		public function checkValiable($str){
			$this->connectDB();
			$this->query = "select * from users where username = '$str'";
			$this->sendQuery();
			$countUser = $this->returnCount();
			//
			$this->query = "select * from users where email = '$str'";
			$this->sendQuery();
			$countEmail = $this->returnCount();

			if($countEmail != 0){
				Message::setMsg("This email is already registered!", 'danger');
				Helper::redirect("user/register");
				exit();
			}else if($countUser != 0){
				Message::setMsg("This username has been taken!", 'danger');
				Helper::redirect('user/register');
				exit();
			}
		}

		public function Register(){
			$this->checkValiable($_POST['username']);
			$this->checkValiable($_POST['email']);
		}

		public function profile($id){
			
		}



		public function Login(){


			if(isset($_POST['submit'])){
				$connect = $this->connectDB();

				$username = $_POST['username'];
				$password = $_POST['password'];
				$this->query = "select * from users where username = '$username' and password = '$password'";

				$this->sendQuery();

				$count = $this->returnCount();
				if($count){
					Message::setMsg("You are now login", "success");
					$row = $this->getRow();
					$_SESSION['is_login'] = 1;
					$_SESSION['user_data'] = array(
							'username' => $row['username'],
							'first_name' => $row['first_name'],
							'last_name' => $row['last_name'],
							'email' => $row['email'],
							'id' => $row['id'],
							'dob' => $row['dob'],
							'gender' => $row['gender']
							);
					Helper::redirect('memo/index');
					exit();
				}else{
					Message::setMsg("Wrong username or password", "danger");
					Helper::redirect("user/login");
					exit();
				}
			}
		}
	}
?>