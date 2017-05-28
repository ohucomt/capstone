<?php
	class Profile extends Controller{
		public function chgpwd(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->chgpwd(), true);
		}

		public function name(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->name(), true);
		}

		public function email(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->email(), true);
		}

		public function dob(){
			Helper::loginCheck();
			$viewmodel = new ProfileModel();
			$this->returnView($viewmodel->dob(), true);
		}
	}
?>