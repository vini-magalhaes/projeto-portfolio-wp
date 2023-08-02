<?php

global $institucional;

$conteudo =  $institucional['conteudo'];

?>

<section id="conteudo">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="texto-destaque">
                    <h2><?php echo $conteudo['texto_destaque'] ?></h2>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="texto">
                    <?php echo $conteudo['texto'] ?>
                </div>
                <div class="itens">
                    <?php foreach($conteudo['itens'] as $item): ?>
                        <div class="item">
                            <img src='<?php echo $item['icone']['url'] ?>' width='<?php echo $item['icone']['width'] ?>' height='<?php echo $item['icone']['height'] ?>' alt='<?php echo $item['texto'] ?>' />
                            <h4><?php echo $item['texto'] ?></h4>
                        </div> 
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="titulo-cta">
                    <h3><?php echo $conteudo['cta']['titulo'] ?></h3>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="texto-cta">
                    <?php echo $conteudo['cta']['texto'] ?>
                </div>
                <div class="link-cta">
                    <a href="<?php echo $conteudo['cta']['link']['url'] ?>" target="<?php echo $conteudo['cta']['link']['target'] ?>" title="<?php echo $conteudo['cta']['link']['title'] ?>">
                        <?php echo $conteudo['cta']['link']['title'] ?> <img src="<?php echo get_template_directory_uri().'/assets/img/seta-vermelha.png' ?>" alt="" width="26" height="19">
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="links">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="titulo-links">
                                <h3><?php echo $conteudo['links_importantes']['titulo'] ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="texto-links">
                                <?php echo $conteudo['links_importantes']['texto'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>