<?php global $post; setup_postdata( $post ); ?>

<h1><?php the_title(); ?></h1>
<section class="post-content">
	<?php the_content(); ?>
</section>

