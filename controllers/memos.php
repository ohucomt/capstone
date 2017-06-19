<?php
	class Memo extends Controller{
		protected function index(){
			Helper::loginCheck();
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->index(), true);

		}

		protected function add(){
			Helper::loginCheck();
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->add(), false);
		}

		protected function delete(){
			Helper::loginCheck();
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->delete($this->request['id']), false);
		}

		protected function edit(){
			Helper::loginCheck();
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->edit($this->request['id']), true);
		}

		protected function share(){
			Helper::loginCheck();
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->share($this->request['id']), true);
		}

		protected function view(){
			$viewmodel = new MemoModel();
			$this->returnView($viewmodel->view($this->request['id']), true);
		}
	}
?>