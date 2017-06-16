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


		public function register(){
			if($_SESSION['is_login'] == 1){
				Helper::redirect('user/logout');
			}
			$user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$this->checkEmpty($user);
			if(!empty($user['submit'])){
				if($user['password'] == $user['re-password']){
					$this->query(
					"INSERT INTO users(first_name, last_name, email, username, password)
					VALUES(:first_name, :last_name, :email, :username, :password)"
					);
					$this->bind(":first_name", $user['first_name']);
					$this->bind(":last_name", $user['last_name']);
					$this->bind(":email", $user['email']);
					$this->bind(":username", $user['username']);
					$this->bind(":password", $user['password']);
					$this->execute();
					if($this->lastInsertId()){
						Message::setMsg("register success", "success");
						Helper::redirect("user/login");
						exit();
					}
				}else{
					Message::setMsg("Your Re-password does not match", "danger");
					Helper::redirect("user/register");
					exit();
				}
			}
			
		}

		public function Login(){
			print_r($_POST);
			$user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if(isset($user['submit'])){
				$this->query("
					SELECT * FROM users WHERE 
					username = :username and password = :password
					");
				$this->bind(":username", $user['username']);
				$this->bind(":password", $user['password']);
				$row = $this->singleResultSet();
				if(!empty($row)){
					Message::setMsg("logged id", "success");
					$_SESSION['is_login'] = true;
					$_SESSION['user_data'] = array(
						'username' => $row['username'],
						'first_name' => $row['first_name'],
						'last_name' => $row['last_name'],
						'email' => $row['email'],
						'id' => $row['id']
						);
					Helper::redirect("memo/index");
					exit();
				}else{
					Message::setMsg("Please enter you username and password correctly!", "danger");
					Helper::redirect("user/login");
					exit();

				}
			}
		}


	}
?>