
<?php get_header(); ?>

<div class="container">

	<?php if ( have_posts() ) : ?>

		<p class="sub_judul">
			<?php if (is_category()) {
				echo "Ini halaman Arsip Kategori "; single_cat_title();
			} elseif (is_author()) {
				echo "Ini halaman Arsip Autor " . get_the_author();
			} else {
				echo "Ini halaman Arsip";
			}
			?>
		</p>

		<?php while ( have_posts() ) : ?>

				<?php get_template_part('content'); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>
	
<?php get_footer(); ?>