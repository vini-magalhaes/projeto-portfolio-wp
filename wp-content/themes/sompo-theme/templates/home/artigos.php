<?php

global $homepage;

$posts = $homepage['artigos'];

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3'
);

$loop = new WP_Query($args);
?>


<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <div class="icone">
                        <img src='<?php echo $posts['icone']['url'] ?>' width='<?php echo $posts['icone']['width'] ?>' height='<?php echo $posts['icone']['height'] ?>' alt='Artigos' />
                    </div>
                    <h2><?php echo $posts['titulo'] ?></h2>
                </div>
            </div>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-lg-4 col-12">
                    <div class="post">
                        <div class="imagem">
                            <a href="<?php echo get_permalink() ?>">
                                <?php the_post_thumbnail('medium') ?>
                            </a>
                        </div>
                        <div class="titulo-post">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="link-post">
                            <a href="<?php echo get_permalink() ?>">
                                Saiba mais <img src="<?php echo get_template_directory_uri() . '/assets/img/seta-vermelha.png' ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
            <div class="col-12">
                <div class="link">
                    <a href="<?php echo get_permalink() ?>" title="<?php echo $posts['texto_botao'] ?>">
                        <?php echo $posts['texto_botao'] ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/seta-branca.png' ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>