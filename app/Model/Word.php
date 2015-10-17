<?php
class Word extends AppModel{
	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
		'word' => array(
			'type' => 'like'
			),
		);

	public $belongsTo = array(
		'UserWord' => array(
			'className' => 'UserWord',
			'foreignKey' => 'id'
			)
		);
}
?>