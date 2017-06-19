<?php
	class MemoModel extends Model{
		protected function checkAuthozire($id){
			$user_id = $_SESSION['user_data']['id'];
			$this->query = "select share from memos where user_id = '$user_id' and id = '$id'";
			$this->connectDB();
			$this->sendQuery();

			$result = $this->getRow();
			if(!$result){
				Message::setMsg("You dont have right to do it", "danger");
				Helper::redirect("memo");
				exit();
			}
		}

		protected function isShare($id){
			$this->query = "select share from memos where id = '$id'";
			$this->connectDB();
			$this->sendQuery();

			$result = $this->getRow();
			$result = $result['share'];
			return $result;
		}
###########################################################################################

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
			$this->checkAuthozire($id);
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
			$this->checkAuthozire($id);
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

		public function share($id){
			$this->checkAuthozire($id);

			if(!$this->isShare($id)){
				$this->query = "
				update memos set share = '1' where id = '$id'
				";
				$this->connectDB();
				$this->sendQuery();

			}

			return $id;
		}


		public function view($id){
			if($this->isShare($id)){
				$this->query = "select * from memos where id = '$id'";
				$this->connectDB();
				$this->sendQuery();

				$result = $this->getRow();

				return $result;

			}else{
				return 0;
			}
		}

	}


?>
