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
	}
?>