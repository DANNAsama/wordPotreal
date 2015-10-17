<?php

class UsersController extends AppController {

	//public $components = array('Session');

	public $uses = array('UserProfile', 'User');

	public function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('signup');
	}

	public function top() {
		$this->layout = 'topLayout';
	}

	public function login() {
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash(__('ユーザー名かパスワードが違います。もう一度入力してください。'));
				$this->redirect(array('action'=>'top'));
			}
		}else{
			$this->redirect(array('action'=>'top'));
		}

	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function signup() {
		if($this->request->is('post')){
			$this->User->create();
			//debug($this->request->data);
			if($this->User->save($this->request->data)){
				$this->UserProfile->create();
				$AddProfile=array(
					'UserProfile'=>array(
						'user_id'=>$this->User->getLastInsertID(),
						'nickname'=>$this->request->data['User']['username'],
						'created'=>date("Y-m-d H:i:s"),
						'modified'=>date("Y-m-d H:i:s"),
						'rank'=>0,
						'description'=>'',
						'picture'=>''
					)
				);
				$this->UserProfile->save($AddProfile);

				$this->redirect(array('action'=>'top'));
				$this->Session->setFlash(__('ユーザー登録されました'));
			}else{
				$this->Session->setFlash(__('ユーザー登録できませんでした。再度登録してください。'));
			}

			//$AddUser = $this->request->data;

		}
	}

}
