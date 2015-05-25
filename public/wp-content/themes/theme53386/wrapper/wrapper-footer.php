<div class="fb-like" data-href="https://www.facebook.com/pages/Gamemax/1453452344934315" data-width="1170" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<?php /* Wrapper Name: Footer */ ?>
<div class="footer-widgets">
	<div class="row">
		<div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
			<?php get_template_part("static/static-footer-nav"); ?>
		</div>
		<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
			<?php dynamic_sidebar("footer-sidebar-1"); ?>
		</div>
		<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
			<?php dynamic_sidebar("footer-sidebar-2"); ?>
		</div>
		<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
			<?php dynamic_sidebar("footer-sidebar-3"); ?>
		</div>
	</div>
</div>
<div class="row copyright">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
</div>