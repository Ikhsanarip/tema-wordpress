
<?php get_header(); ?>

<div class="container" id="main_page">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : ?>

			<?php get_template_part('content'); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>
	
<?php get_footer(); ?>