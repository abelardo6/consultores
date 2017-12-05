<?php
/*
*	Modelo para CaoOs
*/

App::uses('AppModel', 'Model');

class CaoOs extends AppModel {

	public $useTable = 'cao_os';
	public $primaryKey = 'co_os';

/* Relaciones definidas para el Modelo */
 	public $belongsTo = array(
		'CaoUsuario' => array(
			'className' => 'CaoUsuario',
			'foreignKey' => 'co_usuario'
		)		
	);

	public $hasOne = array(
		'CaoFatura' => array(
			'className' => 'CaoFatura',
			'foreignKey' => 'co_os',
		)
	);

}
