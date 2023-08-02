<?php 

global $post;
global $produto;
the_post();

$produto = get_field('produto');

?>
<main id="single-produtos">
<?php 

get_template_part('templates/produtos/banner');
get_template_part('templates/produtos/descricao-diferenciais');
get_template_part('templates/produtos/infos');

?>
</main>