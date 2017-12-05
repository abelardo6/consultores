<script type="text/javascript">
    showMessage("<div style='font-family: sans-serif; text-align: left; margin-top:8px;'><?php echo $message; ?></div>", "<?php echo $type; ?>");
</script>
<?php if($type == 'success'){ 
		if(!isset($nohide)){ ?>
    <script type="text/javascript">
        $('#modal').modal('hide');
    </script>
<?php }} ?>


