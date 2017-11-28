<?php
App::uses('AppController', 'Controller');

class CaoUsuariosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$var = $this->CaoUsuario->PermissaoSistema->find('all', [
			'conditions' => [
				'PermissaoSistema.co_sistema' => 1,
				'PermissaoSistema.in_ativo' => 'S',
				'PermissaoSistema.co_tipo_usuario' => [0,1,2]
			]
		]);

		pr($var);
		
		
	}

	
}
