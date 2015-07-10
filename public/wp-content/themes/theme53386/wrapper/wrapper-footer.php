

<?php /* Wrapper Name: Footer */ ?>
<div class="footer-widgets">
	<div class="row">
		<div class="fb-like" data-href="https://www.facebook.com/pages/Gamemax/1453452344934315" data-width="1170" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	<div class="row">
		<div class="span3" style="width: 200px;" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
			<?php get_template_part("static/static-footer-nav"); ?>
		</div>
		<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
			<?php dynamic_sidebar("footer-sidebar-1"); ?>
		</div>
		<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
			<?php dynamic_sidebar("footer-sidebar-2"); ?>
		</div>
		<div class="span3" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
			<?php dynamic_sidebar("footer-sidebar-3"); ?>
		</div>

		<div class="span3" style="width: 200px;" style="width: 200px;" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		
			<div id="contato-1" class="visible-all-devices "><h4>Contato</h4>		
				
			<?php echo do_shortcode( '[contact-form-7 id="2102" title="Contato"]' ); ?>
		</div>


	</div>
	</div>
</div>
<div class="row copyright">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
</div>