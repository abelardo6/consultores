<?php
App::uses('AppModel', 'Model');

class PermissaoSistema extends AppModel {
	public $useTable = 'permissao_sistema';
	public $primaryKey = 'co_usuario';

	public $validate = array();

public $belongsTo = array(
		'CaoUsuario' => array(
			'className' => 'CaoUsuario',
			'foreignKey' => 'co_usuario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
	
}
