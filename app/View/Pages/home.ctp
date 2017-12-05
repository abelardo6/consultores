<div class="row">
	<div class="col-sm-12">
		<!-- PAGE CONTENT BEGINS -->

		<?php
			echo $this->Form->create('Consultores', array(
				'class' => 'form-horizontal',
				'id' => 'formu',
				'inputDefaults' => array(
					'error' => array('attributes' => array('wrap' => 'span', 'class' => 'error-message')),
			)));
		?>
			
			<div class="form-group">
				<div class="col-sm-12">
					<label class="col-sm-3 control-label no-padding-top"> Periodo </label>
					<div class="input-daterange input-group col-sm-6">
						<input type="text" class="input-sm form-control" name="start"/>
						<span class="input-group-addon">
							<i class="fa fa-exchange"></i>
						</span>
						<input type="text" class="input-sm form-control" name="end"/>
					</div>
				</div>
			</div>

			<div class="hr hr-16 hr-dotted"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-top" for="duallist"> Consultores </label>

				<div class="col-sm-6">
					<!-- #section:plugins/input.duallist -->
					<select multiple="multiple" size="10" name="Consultores.box[]" id="duallist">
						
						<?php
							foreach ($consultores as $key => $value) { 
						?>
								<option value="<?php echo $consultores[$key]['CaoUsuario']['co_usuario']; ?>"><?php echo $consultores[$key]['CaoUsuario']['no_usuario']; ?></option>		
						<?php }	?>

					</select>
					<!-- /section:plugins/input.duallist -->
					<div class="hr hr-16 hr-dotted"></div>
				</div>
				<br>
				<div class="col-sm-3">
					<button class="btn btn-white btn-info btn-bold" id="grids">
						<i class="ace-icon fa fa-file-text-o bigger-120 blue"></i>
						Relatório
					</button>
					<br><br>
					<button class="btn btn-white btn-info btn-bold" id="graph">
						<i class="ace-icon fa fa-bar-chart-o bigger-120 blue"></i>
						Gráfico&nbsp;&nbsp;&nbsp;
					</button>
					<br><br>
					<button class="btn btn-white btn-info btn-bold" id="pizza">
						<i class="ace-icon fa fa-pie-chart bigger-120 blue"></i>
						Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</button>
				</div>
			</div>
			
			<?php echo $this->Form->end(); ?>

			<div id="reports">			
				<div id="graphics"></div>	
			</div>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<script type="text/javascript">
	jQuery(function($){
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true,
		})
		//show datepicker when clicking on the icon
		.next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
	    //or change it into a date range picker
		$('.input-daterange').datepicker({
			autoclose:true,
			format: 'yyyy-mm-dd',
		});

	    var demo1 = $('select[name="Consultores.box[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});

		var container1 = demo1.bootstrapDualListbox('getContainer');
		container1.find('.btn').addClass('btn-white btn-info btn-bold');

		$(document).one('ajaxloadstart.page', function(e) {
			$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
		});

		$('#pizza').click(function(){
			$('#graphics').empty();
			return EnviarFormulario('graphics', 'pages/grafico_torta', 'formu');
		});

		$('#graph').click(function(){
			$('#graphics').empty();
			return EnviarFormulario('graphics', 'pages/grafico_barra', 'formu');
		});

		$('#grids').click(function(){
			$('#graphics').empty();
			return EnviarFormulario('graphics', 'pages/grilla', 'formu');
		});

	});
</script>