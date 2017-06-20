<?php
	class ProfileModel extends Model{
		private function checkPasswordIsCorrect($str){
			$userId = $_SESSION['user_data']['id'];
			$this->query = "select password from users where id = '$userId'";
			$this->connectDB();
			$this->sendQuery();
			$oldPassword = $this->getRow();
			if(strcmp($str, $oldPassword['password']) !== 0){
				return false;
			}else{
				return true;
			}
		}


		public function changePassword(){
			if($_POST['submit']){
				$memo = $_POST;
				$isValid = $this->checkPasswordIsCorrect($memo['old-password']);

				if(!$isValid){
					Message::setMsg("Your password is incorrect!", "danger");
					Helper::redirect("profile/changePassword");
					exit();
				}else{
					if(strcmp($memo['new-password'], $memo['re-new-password']) !== 0){
						Message::setMsg("Your passwords are not match!", "danger");
						Helper::redirect("profile/changePassword");
						exit();
					}else{
						$newPassword = $memo['new-password'];
						$userId = $_SESSION['user_data']['id'];
						$this->query = "update users set password = '$newPassword' where id = '$userId'";
						$this->sendQuery();
							Message::setMsg("Your password has been changed!", "success");
							Helper::redirect("user/profile/".$_SESSION['user_data']['id']."/security");
							exit();
					}
				}
			}
		}

		public function changeName(){
			if($_POST['submit']){
				$memo = $_POST;
				
				//change first name
				$this->connectDB();
				$userId = $_SESSION['user_data']['id'];

				$firstName = $memo['first_name'];
				$this->query = "update users set first_name = '$firstName' where id = '$userId'";
				$this->sendQuery();
				$_SESSION['user_data']['first_name'] = $firstName; 

				//change lastname
				$lastName = $memo['last_name'];
				$this->query = "update users set last_name = '$lastName' where id = '$userId'";
				$this->sendQuery();
				$_SESSION['user_data']['last_name'] = $lastName;

				Message::setMsg("Your name has been changed!", "success");
				Helper::redirect("user/profile/".$_SESSION['user_data']['id']."/info");
				exit();
			}
		}

		public function changeEmail(){
			if($_POST['submit']){
				$memo = $_POST;
				$email = $memo['email'];
				$userId = $_SESSION['user_data']['id'];

				$this->connectDB();
				
				$this->query = "update users set email = '$email' where id = $userId";
				$this->sendQuery();
				$_SESSION['user_data']['email'] = $email;

				Message::setMsg("Your email has been changed!", "success");
				Helper::redirect("user/profile".$userId."/info");
				exit();
			}
		}

		public function changedob(){
			if($_POST['submit']){
				$memo = $_POST;
				$dob = $memo['dob'];
				$userId = $_SESSION['user_data']['id'];

				$this->connectDB();
				$this->query = "update users set dob = '$dob' where id = '$userId'";
				$this->sendQuery();
				$_SESSION['user_data']['dob'] = $dob;

				Message::setMsg("Your date of birth has been changed!", "success");
				Helper::redirect("user/profile".$userId."/info");
				exit();

			}
		}

		public function changeAvatar($post){

			$targetDir = 'uploads/user/avt/';
			$imgFileType = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
			$fileName =  basename("avt".$_SESSION['user_data']['id']. ".".$imgFileType);

			$targetFile = $targetDir.$fileName;
			$uploadOk = 1;


			// print_r($_FILES); die();
			
			if (isset($_POST['submit'])){
				$check = getimagesize($post['avatar']['tmp_name']);
				if($check !== false){
					$uploadOk = 1;
				}else{
					$uploadOk = 0;
				}
			}

			if($uploadOk = 1){
				if(move_uploaded_file($post['avatar']['tmp_name'], $targetFile)){
					$id = $_SESSION['user_data']['id'];
					$this->query = "update users set avatar = '$fileName' where id = '$id'";
					$this->connectDB();
					$this->sendQuery();
					$_SESSION['user_data']['avatar'] = $fileName;


					Message::setMsg("Your avatar has been changed!", "success");
					Helper::redirect("user/profile".$_SESSION['user_data']['id']);
					exit();
				}else{
					Message::setMsg("Something went wrong", "danger");
					Helper::redirect("user/profile".$_SESSION['user_data']['id']);
					exit();
				}
			}
		}

		public function changeGender(){
			if($_POST['submit']){
				$memo = $_POST;
				$gender = $memo['gender'];

				$userId = $_SESSION['user_data']['id'];

				$this->connectDB();
				$this->query = "update users set gender = '$gender' where id = '$userId'";
				$this->sendQuery();
				$_SESSION['user_data']['gender'] = $gender;

				Message::setMsg("Your gender has been changed!", "success");
				Helper::redirect("user/profile".$userId."/info");
				exit();

			}
		}

	}
?>