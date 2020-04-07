<?php if (is_single()) : ?>

	<section>
		<?php the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail('big_thumb'); ?>
		<p><?php the_content(); ?></p>
	</section>

<?php elseif (is_page()) : ?>

	<section>
		<?php the_post(); ?>
		<h2>Halaman <?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</section>

<?php else : ?>

	<section>
		<?php the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>"> lanjut baca</a>
		</p>

		<p class="info_meta">Posted : 
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
			<?php echo " | "; the_time('F j, Y'); ?>
			<?php echo " at "; the_time('g:i a'); ?>
			<?php the_category(); ?>
		</p>

		<?php the_post_thumbnail('small_thumb'); ?>
	</section>

<?php endif; ?>