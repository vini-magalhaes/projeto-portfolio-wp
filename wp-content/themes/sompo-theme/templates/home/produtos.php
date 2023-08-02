<?php

global $homepage;

$produtos = $homepage['produtos'];

?>

<section id="produtos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <div class="icone">
                        <img src='<?php echo $produtos['icone']['url'] ?>' width='<?php echo $produtos['icone']['width'] ?>' height='<?php echo $produtos['icone']['height'] ?>' alt='Artigos' />
                    </div>
                    <h2><?php echo $produtos['titulo'] ?></h2>
                </div>
            </div>
            <?php foreach ($produtos['produtos'] as $produto) :
                $post = $produto;
                setup_postdata($post);
            ?>
                <div class="col-12 col-lg-6">
                    <div class="produto">
                        <div class="imagem">
                            <a href="<?php echo get_permalink() ?>">
                                <?php the_post_thumbnail('medium') ?>
                            </a>
                        </div>
                        <div class="titulo-produto">
                            <a href="<?php echo get_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                                <p><?php echo get_the_excerpt() ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>