<?php
/*
*	Modelo para CaoUsuario
*/

App::uses('AppModel', 'Model');

class CaoUsuario extends AppModel {

	public $useTable = 'cao_usuario';
	public $primaryKey = 'co_usuario';
 
/* Relaciones definidas para el Modelo */
	public $hasMany = array(
		'PermissaoSistema' => array(
			'className' => 'PermissaoSistema',
			'foreignKey' => 'co_usuario'
		),
		'CaoOs' => array(
			'className' => 'CaoOs',
			'foreignKey' => 'co_usuario'
		)
	);

}
