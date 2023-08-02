<?php

global $produto;

$infos = $produto['infos'];

?>


<section id="infos">
    <div class="bloco-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="titulo">
                        <h2><?php echo $infos['bloco_1']['titulo'] ?></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="texto">
                        <?php echo $infos['bloco_1']['texto'] ?>
                    </div>
                    <div class="link">
                        <a href="<?php echo $infos['bloco_1']['link']['url'] ?>" target="<?php echo $infos['bloco_1']['link']['target'] ?>" title="<?php echo $infos['bloco_1']['link']['title'] ?>">
                            <?php echo $infos['bloco_1']['link']['title'] ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/seta-branca.png' ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bloco-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="titulo">
                        <h2><?php echo $infos['bloco_2']['titulo'] ?></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="texto">
                        <?php echo $infos['bloco_2']['texto'] ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="bloco-3">
        <div class="imagem">
            <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-condicoes.png'?>" class="detalhe desktop" alt="">
            <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-banner-mobile-2.png'?>" class="detalhe mobile" alt="">
            <img src='<?php echo $infos['bloco_3']['imagem']['url'] ?>' width='<?php echo $infos['bloco_3']['imagem']['width'] ?>' height='<?php echo $infos['bloco_3']['imagem']['height'] ?>' alt=''  class="desktop"/>
            <img src='<?php echo $infos['bloco_3']['imagem_mobile']['url'] ?>' width='<?php echo $infos['bloco_3']['imagem_mobile']['width'] ?>' height='<?php echo $infos['bloco_3']['imagem_mobile']['height'] ?>' alt=''  class="mobile"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="conteudo">
                        <div class="titulo">
                            <h2><?php echo $infos['bloco_3']['titulo'] ?></h2>
                        </div>
                        <div class="link">
                            <a href="<?php echo $infos['bloco_3']['link']['url'] ?>" target="<?php echo $infos['bloco_3']['link']['target'] ?>" title="<?php echo $infos['bloco_3']['link']['title'] ?>">
                                <?php echo $infos['bloco_3']['link']['title'] ?> <img src="<?php echo get_template_directory_uri() . '/assets/img/seta-branca.png' ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>