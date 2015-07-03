<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=456589514493827";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="span12" style="width: 50%;" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
		<?php get_template_part("static/static-logo"); ?>
	</div>

	<div style="float: right; width: 400px; margin-top: 35px;">
		<input type="text" placeholder="buscar" style="width: 250px; height: 40px; border: solid 1px;">
		<input type="submit" value="Buscar" style="background-color: #7AA032; color: #FFFFFF; padding: 10px;height: 40px;
  margin-top: -10px;">
	</div>


</div>
<div class="nav-wrap">
	<div class="row">
		<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
			<?php get_template_part("static/static-nav"); ?>
		</div>
	</div>
</div>