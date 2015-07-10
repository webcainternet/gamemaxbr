<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a> <span>&copy; <?php echo date('Y'); ?> <em>|</em> <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a></span>
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<?php echo date('Y'); ?> © Gamemax - Todos os direitor reservados
	<?php } ?>
</div>