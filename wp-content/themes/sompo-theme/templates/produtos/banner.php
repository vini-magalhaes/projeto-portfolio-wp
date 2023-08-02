<?php

global $produto;

$banner = $produto['banner'];

?>

<style>
    #banner {
        background-image: url('<?php echo $banner['imagem']['url'] ?>');
    }
    <?php if(!empty($banner['imagem_mobile']['url'])): ?> 
    @media (max-width:992px) {
        #banner .imagem{
            background-image: url('<?php echo $banner['imagem_mobile']['url'] ?>');
        }
    }
    <?php else:?>
    @media (max-width:992px) {
        #banner .imagem{
            background-image: url('<?php echo $banner['imagem']['url'] ?>');
        }
    }
    <?php endif; ?>
</style>


<section id="banner">

    <img src="<?php echo get_template_directory_uri() . '/assets/img/mascara-banner.png' ?>" alt="" class="detalhe mascara desktop">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/elipse-banner.png' ?>" alt="" class="detalhe elipse desktop">
    <a href="<?php echo get_permalink(get_option('page_on_front')) ?>" title="voltar" class="voltar desktop">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/seta-vermelha-g.png' ?>" alt="" width="38" height="29">
    </a>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="imagem mobile">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/mascara-banner-mobile.png' ?>" alt="" class="detalhe mascara">
                </div>
                <div class="conteudo">
                    <div class="texto">
                       <h1> <?php the_title(); ?></h1>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


</section>