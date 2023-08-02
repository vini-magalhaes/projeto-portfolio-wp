<?php

global $homepage;

$atendimento = $homepage['atendimento'];

?>

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