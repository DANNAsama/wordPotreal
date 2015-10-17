<?php
class UserProfilesController extends AppController{
	//public $name = 'UserProfile';
	public $uses = array('UserProfile'); //モデルを使用

	function beforeFilter(){
        parent::beforeFilter();
    
    }
	
	

	public function index($user_id = null){
		//set('送信する変数名',$this->Model名->find('条件'));
        $user_id=$_GET['id'];
        //debug($user_id);
		$conditions = array('UserProfile.user_id'=>$user_id);
		$userprofile = $this->UserProfile->find('first', array(
            'conditions'=>$conditions,
            'order'=>array('modified'=>'desc'))
        );
		$this->set('userprofile', $userprofile);
        $current_id=$this->Auth->user('id');
        $this->set('current_id',$current_id);
		//$this->set('userword', $userword);
        //debug($userprofile);
	}

	

	public function edit($user_id = null){
        $user_id=$_GET['id'];
        //debug($user_id);
		$conditions = array('UserProfile.user_id'=>$user_id);
		$userprofile = $this->UserProfile->find('first', array('conditions'=>$conditions));
		$this->set('userprofile', $userprofile);
        //debug($userprofile);
		
	
        
        if($this->request->is(array('post', 'put'))){
        	$this->UserProfile->id=$this->request->data['id'];
<<<<<<< HEAD
            
=======
            //debug($_FILES);
>>>>>>> a7727a1e5b1ae1fb8b0c11cc41ec9682b2846e7f
            $fileName = $_FILES['image']['name'];
            /*if (!empty($fileName)) {
                $ext = substr($fileName, -3);
                
                }
            }*/

            if (empty($error)) {
               
                //画像アップロード
<<<<<<< HEAD
                $image = date('YmdHis').$_FILES['image']['name'];
=======
                $image = date('YmdHis') . $_FILES['image']['name'];
>>>>>>> a7727a1e5b1ae1fb8b0c11cc41ec9682b2846e7f
                //debug($image);
                move_uploaded_file($_FILES['image']['tmp_name'], '/home/wordpot/www/wordPot/app/webroot/memberpicture/'.$image);

                $this->request->data['UserProfile']['picture'] = $image; //画像をデータベースに格納
                
            }

            $editprofile=array(
                'UserProfile'=>array(
                    'user_id'=>$this->Auth->user('id'),
                    'nickname'=>$this->request->data['UserProfile']['nickname'],
                    'rank'=>'0',
                    'description'=>$this->request->data['UserProfile']['description'],
                    'picture'=>$image,
                    'created'=>date("Y-m-d H:i:s"),
                    'modified'=>date("Y-m-d H:i:s")
                )
            );

            $this->UserProfile->create();
            if($this->UserProfile->save($editprofile)){
                //$this->Session->setFlash(__('更新されました'));
                return $this->redirect('http://wordpot.sakura.ne.jp/wordPot/user_profiles/index?id='.$user_id);
            }
        }
 
        if(!$this->request->data){
            $this->request->data = $userprofile;
        }

        
    }
	

}

?>