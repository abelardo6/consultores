<!DOCTYPE html>
<html lang="en">
	<head>
	<?php echo $this->Html->charset(); ?>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Agence</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<?php echo $this->Html->css('../assets/css/bootstrap') . "\n"; ?>
 		<?php echo $this->Html->css('../assets/css/font-awesome') . "\n"; ?>

		<!-- page specific plugin styles -->
		<?php //echo $this->Html->css('../assets/css/jquery-ui') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/jquery-ui.custom') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/jquery.gritter') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/chosen') . "\n"; ?>
		<?php echo $this->Html->css('../assets/css/datepicker') . "\n"; ?>

		<?php echo $this->Html->css('../assets/css/bootstrap-duallistbox') . "\n"; ?>
		<?php echo $this->Html->css('../assets/css/bootstrap-multiselect') . "\n"; ?>
		<?php echo $this->Html->css('../assets/css/select2') . "\n"; ?>

		<?php //echo $this->Html->css('../assets/css/bootstrap-editable') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/bootstrap-timepicker') . "\n"; ?>
		<?php echo $this->Html->css('../assets/css/daterangepicker') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/bootstrap-datetimepicker') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/colorpicker') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/colorbox')."\n"; ?>

		<!-- text fonts -->
		<?php echo $this->Html->css('../assets/css/ace-fonts') . "\n"; ?>
        <?php echo $this->Html->css('error-message')."\n"; ?>
        <?php echo $this->Html->css('globales')."\n"; ?>
		<!-- ace styles -->
	    <?php echo $this->Html->css('../assets/css/ace', array('class' => 'ace-main-stylesheet', 'id' => 'main-ace-style')) . "\n"; ?>
	    <?php echo $this->Html->css('jquery.toastmessage')."\n"; ?>

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.js"></script>
		<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		<?php echo $this->Html->script('../assets/js/ace-extra')."\n"; ?>
		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='assets/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<?php echo $this->Html->script('scripts')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/bootstrap')."\n"; ?>

		<!-- page specific plugin scripts -->
		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.js"></script>
		<![endif]-->
		<?php //echo $this->Html->script('../assets/js/jquery-ui')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/jquery.bootstrap-duallistbox')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/jquery.raty')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/bootstrap-multiselect')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/select2')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/typeahead.jquery')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/date-time/bootstrap-datepicker')."\n"; ?>		
		<?php echo $this->Html->script('../assets/js/date-time/daterangepicker')."\n"; ?>

		
		<!-- ace scripts -->
		<?php echo $this->Html->script('../assets/js/ace/elements.scroller')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.colorpicker')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.fileinput')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.typeahead')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.wysiwyg')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.spinner')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.treeview')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.wizard')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/elements.aside')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.ajax-content')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.touch-drag')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.sidebar')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.sidebar-scroll-1')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.submenu-hover')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.widget-box')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.settings')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.settings-rtl')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.settings-skin')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.widget-on-reload')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.searchbox-autocomplete')."\n"; ?>
		
		<?php echo $this->Html->script('../assets/js/date-time/bootstrap-datepicker')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/date-time/bootstrap-timepicker')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/date-time/moment')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/date-time/daterangepicker')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/date-time/bootstrap-datetimepicker')."\n"; ?>


		







		
		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<?php echo $this->Html->css('../assets/css/ace.onpage-help') . "\n"; ?>
		<?php //echo $this->Html->css('../assets/css/ace.onpage-help') . "\n"; ?>
	
		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<?php echo $this->Html->script('../assets/js/ace/elements.onpage-help')."\n"; ?>
		<?php echo $this->Html->script('../assets/js/ace/ace.onpage-help')."\n"; ?>

		


		<?php echo $this->Html->script('http://code.highcharts.com/highcharts.js')."\n"; ?>
		<?php echo $this->Html->script('https://code.highcharts.com/highcharts-3d.js')."\n"; ?>
		<?php echo $this->Html->script('https://code.highcharts.com/modules/exporting.js')."\n"; ?>


		

	</head>
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar">
		<!-- # Para el menú lateral -->
		<!-- <div id="navbar" class="navbar navbar-default"> -->
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<!-- #Para el menú lateral -->
				<!-- <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button> -->
				<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>				
				<!-- /section:basics/sidebar.mobile.toggle -->
				<?php echo $this->Element('logo'); ?>
				<!-- #section:basics/navbar.dropdown -->
				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<!-- #section:basics/sidebar -->
			<!-- Menu expandido
			<div id="sidebar" class="sidebar responsive">
			-->
			<!-- <div id="sidebar2" class="sidebar responsive menu-min" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true"> Para el menú lateral -->
			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse menu-min">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
				<?php echo $this->Element('acceso_rapido'); ?>				
				<?php echo $this->Element('menu'); ?>
				<!-- #section:basics/sidebar.layout.minimize -->
				<!-- <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-right" data-icon2="ace-icon fa fa-angle-double-left"></i>
				</div> -->

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content" >
				<div id="modal" class="modal" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content" id="content_modal"></div>
						</div>
				</div>
				<div class="main-content-inner" id="content">
					<!-- #section:basics/content.breadcrumbs -->
					<!-- <?php //echo $this->Element('ruta', array('li_1' => 'Resumen del Sistema')); ?> -->
					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>  		
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-50">
							&copy; 2017 
							<span class="blue bolder">Agence</span> |	
							 Desarrollado por <a href="#" target="_blank" style="text-decoration:none" >Abelardo Pérez</a>
						</span>
						&nbsp; &nbsp;
						<!-- <span class="action-buttons">
							<a href="javascript:;">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="javascript:;">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="javascript:;">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span> -->
					</div>
					<!-- /section:basics/footer -->
				</div>
			</div>
			<a href="javascript:;" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->		
	</body>
</html>
