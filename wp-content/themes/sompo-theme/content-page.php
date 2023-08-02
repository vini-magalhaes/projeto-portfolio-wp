<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<article class="entry-content">
		<?php the_content(); ?>
	</article><!-- .entry-content -->
	
</section><!-- #post-## -->