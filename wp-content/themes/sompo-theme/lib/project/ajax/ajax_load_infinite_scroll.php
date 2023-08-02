<?php

$offset=(($_POST['page']-1)*6);

$args=array(
	'post_type'=>$_POST['cpt'],
	'offset'=>$offset,
	'posts_per_page' => 6,
	
	
);


if(!empty($_POST['cat'])){
	$args['category_name']= $_POST['cat'];
}

if(!empty($_POST['busca'])){
	$args['s']= $_POST['busca'];
}


$posts=get_posts($args);
if(is_array($posts)&&count($posts)):
	global $post;
	foreach($posts as $post):
		setup_postdata($post);
		$cat = get_the_category();
		?>
			
			<div class="col-lg-4 col-12">
                    <div class="post">
                        <div class="imagem">
                            <a href="<?php echo get_permalink() ?>">
                                <?php the_post_thumbnail('medium') ?>
                                <span class="cat">
                                    <?php echo $cat[0]->name; ?>
                                </span>
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
                </div>
		
		<?php
	endforeach;
	
endif;