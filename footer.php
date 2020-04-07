
		<nav>
			<?php 
				$args = array('theme_location' => 'footer_menu' );
				wp_nav_menu($args); 
			?>
		</nav>

		<footer>
			&copy; <?php echo "copyright"; echo " "; ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a><?php  echo " "; echo date('Y');  ?>
		</footer>

		<?php wp_footer(); ?>




</body>
</html>