<?php if ($type == "error") { ?>
	<h6 class="red well-error-login">
	    <span class='fa fa-times-circle fa-lg' style='float: center; margin-right: .3em;'></span>
	        <strong>Error! </strong><?php echo h($message); ?>
	</h6>

<?php }else if ($type == "success") { ?>
<h6 class="header blue lighter bigger">
    <span class='fa fa-check-circle fa-lg' style='float: center; margin-right: .3em;'></span>
        <strong>Muy Bien! </strong><?php echo h($message); ?>
</h6>
<script type="text/javascript">
$('#registro').each (function(){
  this.reset();
});
</script>

<?php }else if ($type == "success_recovery") { ?>
<h6 class="header blue lighter bigger">
    <span class='fa fa-check-circle fa-lg' style='float: center; margin-right: .3em;'></span>
        <strong>Muy Bien! </strong><?php echo h($message); ?>
</h6>
<script type="text/javascript">
$('#recovery').each (function(){
  this.reset();
});
</script>

<?php } ?>