<?php
class WordsController extends AppController {

	public $helpers = array('Html', 'Form');

	public $components = array('Search.Prg');

	public $uses = array('Word','UserWord', 'UserProfile');

    public function searchindex(){

        $this->Prg->commonProcess();

        if(empty($this->passedArgs)){
            $word_friends = $this->Word->find('all',array('order'=>array('UserWord.created' => 'desc')));
        }else{
            $conditions_w = $this->Word->parseCriteria($this->passedArgs);

            //$this->set('searchfriends', $this->Word->find('all',array('conditions'=>$conditions_w,'order'=>array('UserWord.created DESC'))));
            
            //$this->set('tests',$this->Word->find('all'));

            $word_friends = $this->Word->find('all',array('conditions'=>$conditions_w,'order'=>array('UserWord.created' => 'desc'))); //$word_friendsにテーブルwordsのデータを代入
        }


        $num=0;

		foreach($word_friends as $word_friend){

    		$conditions = array('UserProfile.user_id' => array($word_friend['UserWord']['user_id']));
            //それぞれのUserWordのuser_idでUserProfileのuser_idを検索したい　そのための変数
            $search_user_profile = $this->UserProfile->find('first',array(
                'conditions' => $conditions,
                'order' => array('modified'=>'desc')));

            $word_friends[$num]['UserProfile'] = $search_user_profile['UserProfile'];

            $num++;
    	}

        $this->set('word_friends',$word_friends);

        $searched_word = $this->request->data('Word.word');

        $this->set('searched_word',$searched_word);

        //debug($word_friends);
    }
}
?>