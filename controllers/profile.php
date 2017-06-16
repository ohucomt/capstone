<?php
	class Profile extends Controller{

		public function changeName(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->changename(), true);
		}

		public function changeEmail(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->changeemail(), true);
		}

		public function changeDoB(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->changedob(), true);
		}

		public function changeAvatar(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->changeAvatar($_FILES), false);
		}

		public function changePassword(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->changePassword(), true);
		}
	}
?>