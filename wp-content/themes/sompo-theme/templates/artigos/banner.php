<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3'
);
$loop = new WP_Query($args);
?>


<section id="banner">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">

            <?php $n=0; while($loop->have_posts()): $loop->the_post(); ?> 
            
                <style>
                    #banner .swiper-slide<?php echo $n; ?>{
                        background-image: url('<?php echo get_the_post_thumbnail_url()?>');
                    }
                    
                    @media (max-width:992px) {
                        #banner .swiper-slide<?php echo $n; ?> .imagem{
                            background-image: url('<?php echo get_the_post_thumbnail_url()?>');
                        }
                    }
                   
                </style>
                <div class="swiper-slide swiper-slide<?php echo $n; ?>">
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
                                       <h3><?php echo the_title() ?></h3>
                                    </div>
                                    <div class="link">
                                       <a href="<?php echo get_permalink() ?>" title="<?php echo the_title() ?>">
                                        Saiba mais
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/seta-branca.png' ?>" alt="" width="" height="">
                                       </a>
                                    </div>
                                </div>
                           </div> 
                        </div>
                    </div>        
                </div>
                <?php $n++;endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    
</section>