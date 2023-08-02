<?php

global $homepage;

$video = $homepage['video'];

?>


<section id="video">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="youtube-container">
                    <div class="imagem-capa">
                        <img src='<?php echo $video['capa_video']['url'] ?>' width='<?php echo $video['capa_video']['width'] ?>' height='<?php echo $video['capa_video']['height'] ?>' alt='' />
                        <div class="play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/botao-play.png' ?>" alt="">                            
                        </div>
                        <div class="assista">
                            <h3><?php echo $video['texto'] ?></h3>
                        </div>
                        <div class="titulo">
                            <h2><?php echo $video['titulo'] ?></h2>
                        </div>
                    </div>
                    <div class="youtube-player" data-id="<?php echo $video['id_do_video']?>" data-width="100%" data-height="100%"></div>
                </div>
            </div>
        </div>
    </div>
</section>