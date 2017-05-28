<?php
	class MemoModel extends Model{
		public function index(){
			//return;
			$id = $_SESSION['user_data']['id'];
			$this->connectDB();
			$this->query = "select * from memos where user_id = '$id' order by created_date desc";

			$this->sendQuery();
			$rows = $this->getAllRow();
			return $rows;
			
		}

		public function edit($id){
			$this->query = "select * from memos where id = '$id'";
			$this->connectDB();
			$this->sendQuery();
			$row = $this->getRow();
			
			if($_POST['submit']){
				$memo = $_POST;
				$body = $memo['body'];
				$color = $memo['group1'];
				$title = $memo['title'];
				$id = $_GET['id'];
				$this->query = "update memos set title = '$title', body = '$body', color = '$color' where id = '$id'";
				$this->sendQuery();
				Message::setMsg("Memo edited", "success");
				Helper::redirect("memo");
				exit();
			}
			return $row;
		}

		public function delete($id){
			$this->query = "delete from memos where id = '$id'";
			$this->connectDB();
			$this->sendQuery();
			Message::setMsg("Deleted");
			Helper::redirect("memo");
			exit();
		}

		public function add(){
			$memo = $_POST;

			if(empty($memo['body'])){
				Message::setMsg("Body shouldn't be empty", "danger");
				Helper::redirect("memo/index");
				exit();
			}else{
				$this->connectDB();
				$body = $memo['body'];
				$id = $_SESSION['user_data']['id'];
				$color = $memo['group1'];
				$title = $memo['title'];
				$this->query = "insert into memos(title, body, user_id, color) values('$title','$body', '$id', '$color')";
				$this->sendQuery();
				Message::setMsg("New memo added successfully", "success");
				Helper::redirect("memo/index");
				exit();
			}
		}
	}


?>
