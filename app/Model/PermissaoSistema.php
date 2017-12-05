<?php
App::uses('AppModel', 'Model');

class PermissaoSistema extends AppModel {

	public $useTable = 'permissao_sistema';
 
	public $belongsTo = array(
		'CaoUsuario' => array(
			'className' => 'CaoUsuario',
			'foreignKey' => 'co_usuario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


}
