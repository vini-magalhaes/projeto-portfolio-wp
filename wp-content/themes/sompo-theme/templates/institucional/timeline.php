<?php

global $institucional;

$timeline =  $institucional['timeline'];

?>


<section id="timeline">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($timeline as $k => $b) :

                $box = $b['box'];

            ?>
                <style>
                    #timeline .swiper-slide<?php echo $k; ?> {
                        background-image: url('<?php echo $b['imagem']['url'] ?>');
                    }

                   
                    @media (max-width:992px) {
                        #timeline .swiper-slide<?php echo $k; ?> {
                            background-image: none;
                        }
                    }

                    
                </style>

                <div class="swiper-slide swiper-slide<?php echo $k; ?> <?php echo ($k == 0) ? 'inicial' : '' ?> <?php echo ($k == (count($timeline) - 1)) ? 'final' : '' ?> ">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/mascara-banner.png' ?>" alt="" class="detalhe mascara desktop">
                    <?php if ($b['elipse']['exibir']) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/elipse-banner.png' ?>" alt="" class="detalhe elipse desktop <?php echo $b['elipse']['lado']  ?>">
                    <?php endif; ?>
                    <?php if ($k == 0) : ?>
                        <span class="iniciar desktop">
                            Iniciar
                        </span>
                    <?php endif; ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="imagem mobile altura-<?php echo ($b['altura_mobile'])?>">
                                    <?php if($b['altura_mobile'] == 2): ?>
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-banner-mobile-2.png'?>" alt="" class="detalhe mascara mobile">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/mascara-banner-mobile.png'?>" alt="" class="detalhe mascara mobile">
                                    <?php endif; ?>
                                    
                                    <?php if (!empty($b['imagem_mobile']['url'])) : ?>
                                    <img src='<?php echo $b['imagem_mobile']['url'] ?>' width='<?php echo $b['imagem_mobile']['width'] ?>' height='<?php echo $b['imagem_mobile']['height'] ?>' alt='' />
                                    <?php else: ?>
                                        <img src='<?php echo $b['imagem']['url'] ?>' width='<?php echo $b['imagem']['width'] ?>' height='<?php echo $b['imagem']['height'] ?>' alt='' />
                                    <?php endif; ?>
                                </div>
                                <div class="conteudo v-<?php echo $box['alinhamento_vertical']  ?> h-<?php echo $box['alinhamento_horizontal']  ?> l-<?php echo $box['largura']  ?> a-<?php echo $box['altura']  ?> altura-<?php echo ($b['altura_mobile'])?>">
                                    <div class="texto">
                                        <?php echo $b['texto'] ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div id="navegador">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="textos" style="display: none;">
                        <?php foreach ($timeline as $key => $texto) : ?>
                            <div class="texto" data-timeline="<?php echo $key ?>">
                                <?php echo $texto['texto_ano']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="seletor" style="position:relative">
                        <div class="range-value" id="rangeV"></div>
                        <input type="range" id="range" min="0" max="<?php echo count($timeline) - 1; ?>" step="1" value="0">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>