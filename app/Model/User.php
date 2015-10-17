<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $validate = array(
		'username' => array(
			'notBlank' => array(
				'rule' => 'notBlank'
			)
		),
		'password' => array(
			'notBlank' => array(
				'rule' => 'notBlank'
			),
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric'
			),
			'between' => array(
				'rule' => array('between',4,16)
			)
		)
	);

	public function beforeSave($option = array()){
		if(isset($this->data[$this->alias]['password'])){
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
}

?>