
<?php get_header(); ?>

<div class="container">

	<?php if ( have_posts() ) : ?>
		
		<p class="sub_judul">
			Halaman Pencari
		</p>

		<?php while ( have_posts() ) : 
			if ($post->post_type == 'page') continue; ?>

			<?php get_template_part('content'); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>
	
<?php get_footer(); ?>