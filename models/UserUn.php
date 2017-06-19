<?php
	class UserModel extends Model{

		

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
			$memo = $_POST;
			Helper::checkEmpty($memo);
			if($memo['submit'] == 'submit'){
				if(strcmp($memo['password'], $memo['re-password']) !== 0){
					Message::setMsg("Your password does not match");
					Helper::redirect('user/register');
					exit();
				}else{
					$first_name = $memo['first_name'];
					$last_name = $memo['last_name'];
					$dob = $memo['dob'];
					$gender = $memo['gender'];
					$email = $memo['email'];
					$username = $memo['username'];
					$password = $memo['password'];

					$this->query = "
					INSERT INTO users(first_name, last_name, dob, gender, email, username, password)
					VALUES('$first_name', '$last_name', '$dob', '$gender', '$email', '$username', '$password')
					";	

					$this->connectDB();
					$this->sendQuery();

					Message::setMsg("Register successfully, please login!","success");
					Helper::redirect('user/login');
					exit();
				}
			}

			



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
							'gender' => $row['gender'],
							'avatar' => $row['avatar']
							);

					if(empty($_SESSION['user_data']['avatar'])){
						$_SESSION['user_data']['avatar'] = 'default.jpg';
					}
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