<?php
/**
* Template Name: Fullwidth Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">

			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>

				<div id="content" class="row">
					<div>
						<iframe src="/wp-content/themes/theme53386/mapa/map.php" width="100%" height="600" scrolling="no" frameborder="0" noresize></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>