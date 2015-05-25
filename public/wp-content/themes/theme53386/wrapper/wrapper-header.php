<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span12" style="width: 50%;" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>

	<div style="float: right; width: 200px; background-color: red;">
		Buscar:
	</div>


</div>
<div class="nav-wrap">
	<div class="row">
		<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
			<?php get_template_part("static/static-nav"); ?>
		</div>
	</div>
</div>