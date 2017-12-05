<label class="col-sm-2 control-label no-padding-right"><?php echo $label; ?></label>
<div class="col-sm-10">
	<?php
	echo $this->Form->input($input, array(
		'required' => false,
		'placeholder' => !empty($placeholder) ? $placeholder : $label,
		'class' => !empty($class) ? $class : 'col-xs-6 col-sm-6',
		'label' => false,
		'type' => 'textarea',
		'style' => "height: 60px;"
		));																											
		?>
</div>