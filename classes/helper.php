<?php
	class Helper{
		public static function redirect($dst){
			if(empty($dst)){
				header("Location: ".ROOT_PATH);
			}else{
				header("Location: ".ROOT_PATH.$dst);
			}
		}

		public static function loginCheck(){

			if(!$_SESSION['is_login']){
				Message::setMsg("You must login first", "danger");
				Helper::redirect("user/login");
				exit;
			}
		}

		public static function clear($string){
			return htmlentities($string);
		}


	}
?>