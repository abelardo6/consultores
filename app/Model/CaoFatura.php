<?php
/*
*	Modelo para CaoOs
*/

App::uses('AppModel', 'Model');

class CaoFatura extends AppModel {

	public $useTable = 'cao_fatura';
	public $primaryKey = 'co_fatura';
 
 /* Relaciones definidas para el Modelo */
	public $belongsTo = array(
		'CaoOs' => array(
			'className' => 'CaoOs',
			'foreignKey' => 'co_os'
		),
	);
}
