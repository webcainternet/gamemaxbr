<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<?php echo date('Y'); ?> © Gamemax - Todos os direitor reservados
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<?php echo date('Y'); ?> © Gamemax - Todos os direitor reservados
	<?php } ?>
</div>