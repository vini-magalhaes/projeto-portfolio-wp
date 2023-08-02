<?php

global $produto;

$sobre = $produto['sobre'];

$diferenciais = $produto['diferenciais'];

?>

<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="titulo">
                    <h2><?php echo $sobre['titulo'] ?></h2>
                </div>
                <div class="compartilhe desktop">
                    <p><?php echo $sobre['texto_compartilhamento'] ?></p>
                    <div class="links">
                        <?php echo do_shortcode('[addtoany]') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="texto">
                    <?php echo $sobre['texto'] ?>
                </div>
                <div class="compartilhe mobile">
                    <p><?php echo $sobre['texto_compartilhamento'] ?></p>
                    <div class="links">
                        <?php echo do_shortcode('[addtoany]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #diferenciais {
        background-image: url('<?php echo $diferenciais['imagem']['url'] ?>');
    }
    <?php if(!empty($diferenciais['imagem_mobile']['url'])): ?> 
    @media (max-width:992px) {
        #diferenciais {
            background-image: url('<?php echo $diferenciais['imagem_mobile']['url'] ?>');
        }
    }
    <?php endif; ?>
</style>

<section id="diferenciais">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <h2><?php echo $diferenciais['titulo'] ?></h2>
                </div>
                <div class="itens">
                    <ul>
                        <?php foreach($diferenciais['itens'] as $item): ?>
                            <li>
                                <?php echo $item['texto'] ?>
                            </li> 
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>