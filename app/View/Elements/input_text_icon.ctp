<label class="col-sm-2 control-label no-padding-right"><?php echo $label; ?></label>
<div class="col-sm-10">
	<div class="input-group">
		<span class="input-group-addon">
			<i class="fa fa-<?php echo $icon;?>"></i>
		</span>
	<?php
	$evt = 'return acceptNum(event)';
	echo $this->Form->input($input, array(
		'required' => false,
		'placeholder' => !empty($placeholder) ? $placeholder : $label,
		'class' => $class,
		'label' => false,
		'onkeypress' =>  isset($numeric) ? $evt : '',
		'id' => !empty($id) ? $id : $input,
		'disabled' => isset($disabled) ? true : false
		));																											
		?>
	</div>
</div>	