<?php 
//Template name: Página Busca

?>
<section id="search-page">

	<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'roots' ), get_search_query() ); ?></h1>
				</header><!-- .page-header -->

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

				endif;
			?>
</section>