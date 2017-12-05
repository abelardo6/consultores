<label class="col-sm-2 control-label no-padding-right"><?php echo $label; ?></label>
<div class="col-sm-10">
	<?php
	
	echo $this->Form->input($input, array(
		'required' => false,
		'class' => !empty($class) ? $class : 'form-control',
		'label' => false,
		'id' => !empty($id) ? $id : $input,
		'disabled' => isset($disabled) ? true : false
		));																											
		?>
</div>

<script type="text/javascript">
	$(function(){
	 	$('#'+'<?php echo $id; ?>').wysihtml5({
		    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
		    "emphasis": true, //Italics, bold, etc. Default true
		    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
		    "html": true, //Button which allows you to edit the generated HTML. Default false
		    "link": true, //Button to insert a link. Default true
		    "image": false, //Button to insert an image. Default true,
		    "color": false, //Button to change color of font  
		    "blockquote": true, //Blockquote  
		    //"size": <buttonsize> //default: none, other options are xs, sm, lg
		});
	});
</script>