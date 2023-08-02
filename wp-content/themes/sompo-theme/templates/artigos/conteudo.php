<?php


$args = array(
    'post_type' => 'post',
    'posts_per_page' => '6',

);

if(get_query_var('busca-artigo')){
    $args['s'] = get_query_var('busca-artigo');
}


if(get_query_var('categoria-artigo')){
    $args['category_name'] = get_query_var('categoria-artigo');
}

$loop = new WP_Query($args);

$posts = get_field('artigos_geral', 'option');

$categories = get_categories();
?>


<section id="conteudo">
    <div class="container">
        <div class="row row-posts">
            <div class="col-12">
                <div class="titulo">
                    <div class="icone">
                        <img src='<?php echo $posts['icone']['url'] ?>' width='<?php echo $posts['icone']['width'] ?>' height='<?php echo $posts['icone']['height'] ?>' alt='Artigos' />
                    </div>
                    <h2><?php echo $posts['titulo'] ?></h2>
                </div>
                <div class="filtro-busca">
                    <form action="" id="filtro-artigos">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="busca">

                                    <input type="text" name="busca-artigo" id="texto-busca" value="<?php echo get_query_var('busca-artigo')?>" placeholder="Digite o termo que busca">
                                    <button id="enviar" disabled>
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-busca.png'?>" alt="Buscar">
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="seletor">
                                    <select name="categoria-artigo" id="categoria">
                                        <option value="0">Exibir todas categorias</option>
                                        <?php foreach ($categories as $cat) : ?>
                                            <option value="<?php echo $cat->slug ?>" <?php echo ($cat->slug == get_query_var('categoria-artigo'))?'selected': '' ?>>
                                                <?php echo $cat->name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if($loop->have_posts()): ?> 
            
            <?php while ($loop->have_posts()) : $loop->the_post();
            $cat = get_the_category();
            
            ?>
                <div class="col-lg-4 col-12">
                    <div class="post">
                        <div class="imagem">
                            <a href="<?php echo get_permalink() ?>">
                                <?php the_post_thumbnail('medium') ?>
                                <span class="cat">
                                    <?php echo $cat[0]->name; ?>
                                </span>
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
            <?php else: ?>
                <div class="col-12">
                    <div class="nao-encontrado">
                        <h4>Não foram encontrados artigos, com esses critérios.</h4>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="loadmore" data-page="1" data-pages="<?php echo $loop->max_num_pages; ?>" data-cpt="post" data-busca="<?php echo (get_query_var('categoria-artigo'))?get_query_var('busca-artigo'): 0 ?>" data-cat="<?php echo (get_query_var('categoria-artigo'))?get_query_var('categoria-artigo'): 0 ?>" data-target=".row-posts">
                    <?php


                    echo get_next_posts_link('Carregar mais', $loop->max_num_pages);
                    ?>
                </div>
                <div class="loadmoreProcessing" style="display: none;">
                    <div class="loader">Carregando...</div>
                </div>
            </div>
            <div class="col-12">
                <!-- <div class="compartilhamento">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="texto">
                                <h3><?php echo $posts['texto_compartilhe'] ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="compartilhe-links">
                                <?php echo do_shortcode('[addtoany]') ?>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

