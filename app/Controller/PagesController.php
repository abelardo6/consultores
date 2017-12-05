<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	public $uses = ['CaoUsuario', 'PermissaoSistema', 'CaoFatura', 'CaoOs', 'CaoSalario'];

/**
 * This controller does not use a model
 *
 * @var array
 */
	

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {

		$path = func_get_args();

		$count = count($path);

		if (!$count) {
			return $this->redirect('/');
		}

		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

/**
 * consultores method
 * 
 * Lista de Consultores
 * @return $consultores
 */
	public function consultores() {

		$options['joins'] = array(
			array('table' => 'permissao_sistema',
			    'alias' => 'PermissaoSistema',
			    'type' => 'inner',
			    'conditions' => array(
			        'PermissaoSistema.co_usuario = CaoUsuario.co_usuario',
			        'PermissaoSistema.co_sistema' => 1,
			        'PermissaoSistema.in_ativo' => 'S',
			        'PermissaoSistema.co_tipo_usuario' => [ 0, 1, 2 ]
			    )
			)
		);

		$consultores = $this->CaoUsuario->find('all', $options);

		return $consultores;

	}


/**
 * consulta_salario method
 *
 * @param  $co_usuario
 * @return $query_salario['CaoSalario']['brut_salario']
 */
	public function consulta_salario($co_usuario = null) {

		$query_salario = $this->CaoSalario->find('first', [
			'CaoSalario.co_usuario' => $co_usuario
			]
		);

		if (!empty($query_salario)) {
			return $query_salario['CaoSalario']['brut_salario'];	
		}
		return 0;

	}

/**
 * home function
 * 
 * Página default para realizar las consultas
 * @return void
 */
	public function home() {

		$data = [];

		$consultores = $this->consultores();

		if ($this->request->is('post')) {
			
			$start = $this->request->data['start'];
			$end = $this->request->data['end'];
			@$cb = $this->request->data['Consultores_box'];

			if (!empty($cb)) {

				foreach ($cb as $key => $value) {
					
					$result = $this->CaoOs->Find('all', [
						'conditions' => [
							'CaoOs.co_usuario' => $cb[$key],
								'CaoFatura.data_emissao BETWEEN ? and ?' => array( $start, $end )
							],
						'order' => ['CaoFatura.data_emissao' => 'Asc' ]
						]
						
					);

					$mes_prev = 0; $mes_act = 0; $ganancia_liquida = 0;

					foreach ($result as $k => $value) {

						$fecha = explode('-', $result[$k]['CaoFatura']['data_emissao']);
						$mes_act = $fecha[1];
						$anio = $fecha[0];

						if ($mes_act == $mes_prev) {

							$ganancia_liquida += $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

						} else {

							$ganancia_liquida = $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

						}

						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['ganancia_liquida'] =  $ganancia_liquida;
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['brut_salario'] =  $this->consulta_salario($cb[$key]);
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['comision'] =  $ganancia_liquida * ($result[$k]['CaoFatura']['comissao_cn'] / 100);
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['lucro'] =  $ganancia_liquida - ( $this->consulta_salario($cb[$key]) + ($ganancia_liquida * ($result[$k]['CaoFatura']['comissao_cn'] / 100)) );
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['anio'] =  $anio;
						$mes_prev = $mes_act;

					}
				}
			}
		}

		$this->set(compact('consultores', 'data'));

	}

/**
 * grilla method
 * 
 * Resultados de la Grilla
 * @return void
 */
	public function grilla() {

		$data = [];

		$consultores = $this->consultores();

		if ($this->request->is('post')) {
			
			$start = $this->request->data['start'];
			$end = $this->request->data['end'];
			@$cb = $this->request->data['Consultores_box'];

			if (!empty($cb)) {

				foreach ($cb as $key => $value) {
					
					$result = $this->CaoOs->Find('all', [
						'conditions' => [
							'CaoOs.co_usuario' => $cb[$key],
								'CaoFatura.data_emissao BETWEEN ? and ?' => array( $start, $end )
							],
						'order' => ['CaoFatura.data_emissao' => 'Asc' ]
						]
						
					);

					$mes_prev = 0; $mes_act = 0; $ganancia_liquida = 0;

					foreach ($result as $k => $value) {

						$fecha = explode('-', $result[$k]['CaoFatura']['data_emissao']);
						$mes_act = $fecha[1];
						$anio = $fecha[0];

						if ($mes_act == $mes_prev) {

							$ganancia_liquida += $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

						} else {

							$ganancia_liquida = $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

						}

						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['ganancia_liquida'] =  $ganancia_liquida;
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['brut_salario'] =  $this->consulta_salario($cb[$key]);
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['comision'] =  $ganancia_liquida * ($result[$k]['CaoFatura']['comissao_cn'] / 100);
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['lucro'] =  $ganancia_liquida - ( $this->consulta_salario($cb[$key]) + ($ganancia_liquida * ($result[$k]['CaoFatura']['comissao_cn'] / 100)) );
						$data[$result[$key]['CaoUsuario']['no_usuario']][$mes_act]['anio'] =  $anio;
						$mes_prev = $mes_act;

					}
				}
			}
		}

		$this->set(compact('consultores', 'data'));

	}

/**
 * grafico_barra method
 * 
 * Gráfico de Barras
 * @return void
 */
	public function grafico_barra() {

		$consultores = $this->consultores();

		if ($this->request->is('post')) {
			
			$start = $this->request->data['start'];
			$end = $this->request->data['end'];			
			$cb = $this->request->data['Consultores_box'];
			$meses = ['01' => 'Jan', '02' => 'Fev', '03' => 'Mar', '04' => 'Abr', '05' => 'Mai', '06' => 'Jun', '07' => 'Jul', '08' => 'Ago', '09' => 'Set', '10' => 'Out', '11' => 'Nov', '12' => 'Dez'];
			$acum_brut_salario = 0;
			$total_consultores = count($cb);

			foreach ($cb as $key => $value) {

				$result = $this->CaoOs->Find('all', [
					'conditions' => [
						'CaoOs.co_usuario' => $cb[$key],
							'CaoFatura.data_emissao BETWEEN ? and ?' => array( $start, $end )
						],
					'order' => ['CaoFatura.data_emissao' => 'Asc' ]
					]
					
				);

				$acum_brut_salario += $this->consulta_salario($value);

				$mes_prev = 0; $mes_act = 0; $ganancia_liquida = 0;

				foreach ($result as $k => $value) {

					$fecha = explode('-', $result[$k]['CaoFatura']['data_emissao']);
					$mes_act = $fecha[1];

					if ($mes_act == $mes_prev) {

						$ganancia_liquida += $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );
						
					} else {

						$array_meses[$mes_act] = "'".$meses[$mes_act]."'";
						$ganancia_liquida = $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

					}
					
					$datos_grafico[$result[$key]['CaoUsuario']['no_usuario']][$mes_act] =  $ganancia_liquida;
					$mes_prev = $mes_act;

				}				
			}

			$prom_brut_salario = $acum_brut_salario / $total_consultores;
			$array_brut_salario = array_fill_keys($array_meses, $prom_brut_salario);
			$string_brut_salario = implode(',', $array_brut_salario);

			foreach ($datos_grafico as $key => $value) {

				$diff_meses = array_diff_key($array_meses, $value);

				if (!empty($diff_meses)) {

					$fill_meses_vacios = array_fill_keys(array_keys($diff_meses), 0);
					$real_value = $value + $fill_meses_vacios;
					ksort($real_value);
					$value = $real_value;

				}

				$data[$key] = implode(',', $value);
				
			}

			$string_meses = implode(',', $array_meses);

		}

		$this->set(compact('consultores', 'data', 'string_brut_salario', 'string_meses'));

	}

/**
 * grafico_torta method
 * 
 * Gráfico de Torta
 * @return void
 */
	public function grafico_torta() {

		$consultores = $this->consultores();

		if ($this->request->is('post')) {
			
			$start = $this->request->data['start'];
			$end = $this->request->data['end'];
			@$cb = $this->request->data['Consultores_box'];
			$meses = ['01' => 'Jan', '02' => 'Fev', '03' => 'Mar', '04' => 'Abr', '05' => 'Mai', '06' => 'Jun', '07' => 'Jul', '08' => 'Ago', '09' => 'Set', '10' => 'Out', '11' => 'Nov', '12' => 'Dez'];

			if (!empty($cb)) {

				foreach ($cb as $key => $value) {
					
					$result = $this->CaoOs->Find('all', [
						'conditions' => [
							'CaoOs.co_usuario' => $cb[$key],
								'CaoFatura.data_emissao BETWEEN ? and ?' => array( $start, $end )
							],
						'order' => ['CaoFatura.data_emissao' => 'Asc' ]
						]
						
					);

					$mes_prev = 0; $mes_act = 0; $ganancia_liquida = 0;

					foreach ($result as $k => $value) {

						$fecha = explode('-', $result[$k]['CaoFatura']['data_emissao']);
						$mes_act = $fecha[1];

						if ($mes_act == $mes_prev) {

							$ganancia_liquida += $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );
							
						} else {

							$meses_arr[$mes_act] = "'".$meses[$mes_act]."'";
							$ganancia_liquida = $result[$k]['CaoFatura']['valor'] - ($result[$k]['CaoFatura']['valor'] * ($result[$k]['CaoFatura']['total_imp_inc'] / 100) );

						}
						
						$datos[$result[$key]['CaoUsuario']['no_usuario']][$meses[$mes_act]] =  $ganancia_liquida;
						
						$mes_prev = $mes_act;

					}					
				}
			}

			$sum = 0;
			$datos_torta = [];
			$total = 0;
			
			if(!empty($datos)){
				foreach ($datos as $k => $val) {

					$sum = 0;

					foreach ($val as $key => $value) {

						$sum += $value;
						$total += $value;

					}

					$datos_torta[$k] = $sum;
					
				}
			}
		}
		
		$this->set(compact('consultores', 'datos_torta' , 'total', 'datos'));

	}
}