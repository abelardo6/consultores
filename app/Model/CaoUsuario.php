<?php
App::uses('AppModel', 'Model');

class CaoUsuario extends AppModel {
	public $useTable = 'cao_usuario';
	public $primaryKey = 'co_usuario';

	public $hasMany = array(
			'PermissaoSistema' => array(
				'className' => 'PermissaoSistema',
				'foreignKey' => 'co_usuario',
				'dependent' => false,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'exclusive' => '',
				'finderQuery' => '',
				'counterQuery' => ''
		),
	);
	
}
