<label class="<?php echo $labelClass; ?>"> <?php echo $label; ?> </label>
<div class="<?php echo $divClass; ?>">
	<?php
	echo $this->Form->input($input, array(
		'required' => false,
		'class' => $class,
		'empty' => 'Seleccione un item',
		'label' => false,
		'id' => $input,
		'disabled' => !empty($disabled) ? $disabled : '',
		'options' => !empty($options) ? $options : ''
		));																										
		?>
</div>
<script type="text/javascript">
	$(function(){
		$(".chosen-select").chosen();
		$(window)
		.off('resize.chosen')
		.on('resize.chosen', function() {
			$('.chosen-select').each(function() {
				 var $this = $(this);
				 $this.next().css({'width': $this.parent().width()});
			})
		}).trigger('resize.chosen');
		//resize chosen on sidebar collapse/expand
		$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
			if(event_name != 'sidebar_collapsed') return;
			$('.chosen-select').each(function() {
				 var $this = $(this);
				 $this.next().css({'width': $this.parent().width()});
			})
		});	
	});
</script>