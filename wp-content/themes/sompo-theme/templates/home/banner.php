<?php

global $homepage;

$banner =  $homepage['banner'];

?>


<section id="banner">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($banner as $k => $b): ?>
                <style>
                    #banner .swiper-slide<?php echo $k; ?>{
                        background-image: url('<?php echo $b['imagem']['url']?>');
                    }
                    <?php if(!empty($b['imagem_mobile']['url'])):?>
                        @media (max-width:992px) {
                            #banner .swiper-slide<?php echo $k; ?> .imagem{
                                background-image: url('<?php echo $b['imagem_mobile']['url']?>');
                            }
                        }
                    <?php else: ?>
                        @media (max-width:992px) {
                            #banner .swiper-slide<?php echo $k; ?> .imagem{
                                background-image: url('<?php echo $b['imagem']['url']?>');
                            }
                        }
                    <?php endif; ?>
                </style>
                <div class="swiper-slide swiper-slide<?php echo $k; ?>">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-banner.png'?>" alt="" class="detalhe mascara desktop">                   
                    <img src="<?php echo get_template_directory_uri().'/assets/img/elipse-banner.png'?>" alt="" class="detalhe elipse desktop">
                    <div class="imagem mobile">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-banner-mobile.png'?>" alt="" class="detalhe mascara mobile">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/elipse-banner.png'?>" alt="" class="detalhe elipse mobile">
                    </div>
                    <div class="container">
                        <div class="row">
                           <div class="col-12">
                                <div class="conteudo">
                                    <div class="texto">
                                        <?php echo $b['texto'] ?>
                                    </div>
                                    <div class="link">
                                       <a href="<?php echo $b['link']['url'] ?>" title="<?php echo $b['link']['title'] ?>" target="<?php echo $b['link']['target'] ?>">
                                        <?php echo $b['link']['title'] ?>
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/seta-branca.png' ?>" alt="" width="" height="">
                                       </a>
                                    </div>
                                </div>
                           </div> 
                        </div>
                    </div>        
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div id="scroll" class="desktop">
       <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rolagem">
                    <div class="icone">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/icon-rolagem.png'?>" alt="Role a página" width="24" height="51">                        
                    </div>
                    <p>Role a página</p>
                </div>
            </div>
        </div>
       </div> 
    </div>
</section>