<?php

the_post();

$categoria = get_the_category();

$homepage = get_field('home_page',get_option('page_on_front'));

$atendimento = $homepage['atendimento'];

$posts = get_field('artigos_geral', 'option');

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post__not_in' => array(get_the_ID())
);

$relacionados = new WP_Query($args);


?>

<main id="single-artigo">
	<section id="banner">
	
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="imagem">
						<?php the_post_thumbnail() ?>

						<img src="<?php echo get_template_directory_uri().'/assets/img/elipse-banner.png'?>" alt="" class="detalhe elipse desktop">
						<a href="<?php echo get_permalink(get_option('page_for_posts')) ?>" title="voltar" class="voltar desktop">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/seta-vermelha.png' ?>" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="conteudo">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="categoria">
						<h5><?php echo $categoria[0]->name; ?></h5>
					</div>
					<div class="titulo">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="conteudo">
						<?php the_content(); ?>
					</div>
					<div class="compartilhe">
						<p>Compartilhe:</p>
						<?php echo do_shortcode('[addtoany]'); ?>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="relacionados">
						<div class="titulo">
							<div class="icone">
								<img src='<?php echo $posts['icone']['url'] ?>' width='<?php echo $posts['icone']['width'] ?>' height='<?php echo $posts['icone']['height'] ?>' alt='Artigos' />
							</div>
							<h3>Relacionados</h3>
						</div>
					<?php while ($relacionados->have_posts()) : $relacionados->the_post(); ?>
						
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
						
					<?php endwhile;
					wp_reset_postdata(); ?>
					<div class="link">
						<a href="<?php echo get_permalink(get_option('page_for_posts'))?>">
							Veja mais artigos
							<img src="<?php echo get_template_directory_uri() . '/assets/img/seta-branca.png' ?>" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<div id="continuar" class="mobile">
		<a href="#">
			Continuar a leitura
		</a>
	</div>

<section id="atendimento">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="conteudo">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="texto">
                                <?php echo $atendimento['texto'] ?>
                            </div>
                            <div class="link">
                                <a href="<?php echo $atendimento['link']['url'] ?>" target="<?php echo $atendimento['link']['target'] ?>">
                                    <?php echo $atendimento['link']['title'] ?> <img src="<?php echo get_template_directory_uri().'/assets/img/seta-vermelha-g.png'?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="imagem">
                                <span class="elipse">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/elipse-atendimento.png'?>" alt="">
                                </span>
                                <img src='<?php echo $atendimento['imagem']['url'] ?>' width='<?php echo $atendimento['imagem']['width'] ?>' height='<?php echo $atendimento['imagem']['height'] ?>' alt='' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>