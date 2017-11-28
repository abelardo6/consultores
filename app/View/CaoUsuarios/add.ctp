<?php
$url = $this->name.'/'.$this->action;
$model = Inflector::camelize(Inflector::singularize($this->params['controller']));
echo $this->Form->create($model, array(
	'class' => 'form-horizontal',
	'id' => $this->action,
	'inputDefaults' => array(
		'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error-message')),
		)));  
?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="blue bigger">Nuevo Impuesto</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="form-group">
						<?php echo $this->Element('input_text', array(
						'label' => 'Impuesto',
						'input' => 'impuesto',
						'class' => 'col-xs-6 col-sm-6',
						'labelClass' => 'col-xs-12 col-sm-2 control-label no-padding-right',
						'divClass' => 'col-xs-12 col-sm-10'));
						?>
					</div>
					<div class="form-group">
						<?php echo $this->Element('input_text', array(
						'label' => 'Valor (%)',
						'input' => 'valor',
						'class' => 'col-xs-6 col-sm-6',
						'labelClass' => 'col-xs-12 col-sm-2 control-label no-padding-right',
						'divClass' => 'col-xs-12 col-sm-10'));
						?>
					</div>											
				</div>
			</div>
		</div>
		<?php echo $this->Element('submit_modal'); ?>
		<script type="text/javascript">
			$(function(){
				EnviarFormularioModal('content_modal', '<?php echo $url; ?>','<?php echo $this->name; ?>');
	});
		</script>