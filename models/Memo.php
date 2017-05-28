<?php
	class MemoModel extends Model{
		public function index(){
			//return;
			$this->query('select * from memos where user_id = :id order by created_date desc');
			$this->bind(":id", $_SESSION['user_data']['id']);
			$rows = $this->resultSet();
			return $rows;
		}

		public function add(){
			// this line filte bad input
			// $memo = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$memo = $_POST;
			if(empty($memo['body'])){
				Helper::redirect("memo");
				exit;
				
			}
			// $memo['body'] = Helper::clear($memo['body']); //this one encode input
			$this->query("INSERT INTO memos(body, user_id) VALUES(:body, :user_id)");
			$this->bind(":body", $memo['body']);
			$this->bind(":user_id", $_SESSION['user_data']['id']);
			$this->execute();

			if($this->lastInsertId()){
				Message::setMsg("Register successfully", "sucess");
				header("Location: ".ROOT_PATH.'memo');
			}
		}


		public function delete($id){
			$this->checkAuthozire($id);
			$this->query("DELETE FROM memos WHERE id = :id");
			$this->bind(":id", $id);
			$this->execute();
			Message::setMsg("Deleted", "success");
			header("Location: ".ROOT_PATH."memo");
		}

		public function edit($id){
			$this->checkAuthozire($id);
			if(empty($id)){
				require("views/404.php");
				die();
			}
			$this->query("SELECT * FROM memos WHERE id = :id");
			$this->bind(":id",$id);
			$row = $this->resultSet();
			if(empty($row)){
				require("views/404.php");
				die();
			}
			if(isset($_POST['submit'])){
				$this->query("UPDATE memos SET body = :body WHERE id = :id");
				$this->bind(":body", $_POST['body']);
				$this->bind(":id", $id);
				$this->execute();
				Message::setMsg("Edited", "success");
				header("Location: ".ROOT_PATH.'memo');
			}
			return $row;
		}

		public function checkAuthozire($id){
			$this->query("SELECT * FROM memos WHERE id = :id and user_id = :user_id");
			$this->bind(":id", $id);
			$this->bind(":user_id", $_SESSION['user_data']['id']);
			$row = $this->singleResultSet();
			if(!$row){
				Helper::redirect("notAuthorize");
				exit;
			}
		}
	//#####################
	}
?>