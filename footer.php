<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bravada
 */

?>
<?php cryout_absolute_bottom_hook(); ?>

<aside id="colophon" <?php cryout_schema_microdata('sidebar'); ?>>
	<div id="colophon-inside" <?php bravada_footer_colophon_class(); ?>>
		<?php get_sidebar('footer'); ?>
	</div>
</aside><!-- #colophon -->

<?php get_template_part('template/temp/footer/footer-services') ?>
</div><!-- #main -->


<footer id="footer" class="cryout" <?php cryout_schema_microdata('footer'); ?>>

	<?php cryout_master_topfooter_hook(); ?>
	<div id="footer-top">
		<div class="footer-inside">
			<?php get_template_part('template/temp/footer/footer-about') ?>
		</div><!-- #footer-inside -->
	</div><!-- #footer-top -->

	<?php cryout_master_topfooter_hook(); ?>
	<div id="footer-top">
		<div class="footer-inside">
			<?php get_template_part('template/temp/footer/footer-link') ?>
		</div><!-- #footer-inside -->
	</div><!-- #footer-top -->

	<?php cryout_master_topfooter_hook(); ?>
	<div id="footer-top">
		<div class="footer-inside">
			<?php get_template_part('template/temp/footer/footer') ?>
		</div><!-- #footer-inside -->
	</div><!-- #footer-top -->

</footer>
</div><!-- site-wrapper -->
<?php wp_footer(); ?>
</body>

</html>