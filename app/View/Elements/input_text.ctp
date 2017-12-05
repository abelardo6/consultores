<label class="<?php echo $labelClass; ?>"><?php echo $label; ?></label>
<div class="<?php echo $divClass; ?>">
	<?php
	$evt = 'return acceptNum(event)';
	echo $this->Form->input($input, array(
		'required' => false,
		'placeholder' => !empty($placeholder) ? $placeholder : $label,
		'class' => $class,
		'type' => isset($type) ? $type : 'text',
		'label' => false,
		'onkeypress' =>  isset($numeric) ? $evt : '',
		'id' => !empty($id) ? $id : $input,
		'readonly' => isset($readonly) ? true : false,
		'disabled' => isset($disabled) ? true : false,
		'value' => isset($value) ? $value : @$value
		));																											
		?>
</div>