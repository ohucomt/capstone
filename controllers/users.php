<?php
	class User extends Controller{
		protected function register(){
			$viewmodel = new UserModel();
			$this->returnView($viewmodel->register(), true);
		}



		protected function login(){
			$viewmodel = new UserModel();

			$this->returnView($viewmodel->login(), true);
		}



		protected function logout(){
			unset($_SESSION['user_data']);
			$_SESSION['is_login'] = false;
			Message::setMsg("logged out", "success");
			Helper::redirect();
		}

		protected function profile(){
			$viewmodel = new UserModel();
			if($this->request['id'] !== $_SESSION['user_data']['id']){
				Message::setMsg("Bad input", "danger");
				Helper::redirect();
				exit();
			}
			$this->returnView($viewmodel->profile($this->request['id']), true);
		}
	}
?>