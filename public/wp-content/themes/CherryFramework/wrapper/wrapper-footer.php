<?php /* Wrapper Name: Footer */ ?>
<div class="row footer-widgets">
	<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
	<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div>

	<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
		<?php dynamic_sidebar("footer-sidebar-4"); ?>
	</div>

	<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		<?php dynamic_sidebar("footer-sidebar-3"); ?>
	</div>

	<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		
			<div id="contato-1" class="visible-all-devices "><h4>Contato:</h4>		
				
			Formulario
		</div>


	</div>
	
</div>

<div class="row copyright">
	<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
	<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
</div>


