<?php
class FavoriteUserWordsController extends AppController {

    //お気に入りの追加
    public function add($fv_user_word_id = null){
    	$FavoriteUserWord['FavoriteUserWord']['user_id'] = $this->Auth->user('id');
		$FavoriteUserWord['FavoriteUserWord']['user_word_id'] = $fv_user_word_id;


    	if($this->FavoriteUserWord->save($FavoriteUserWord)){
    		$this->redirect(array('controller'=>'UserWords','action'=>'mypage'));
    	}
    }

    public function delete() {

    }

    public function index(){
    	
    }
}
?>