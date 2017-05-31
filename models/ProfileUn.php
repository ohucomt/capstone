<?php
	class ProfileModel extends Model{
		public function chgpwd(){
			$memo = $_POST;

			if($memo['submit']){
				print_r($memo);
			}
		}

		public function name(){
			$memo = $_POST;

			if($memo['submit']){
				print_r($memo);
			}
		}

		public function email(){
			$memo = $_POST;

			if($memo['submit']){
				print_r($memo);
			}
		}

		public function dob(){
			$memo = $_POST;

			if($memo['submit']){
				print_r($memo);
			}
		}

		public function changeAvt($post){

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
	}
?>