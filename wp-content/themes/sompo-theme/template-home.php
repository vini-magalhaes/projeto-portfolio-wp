<?php 
//Template name: Home Page
global $homepage;

$homepage=get_field('home_page');

?>

<main id="home-page">
    <?php  
    
    get_template_part('/templates/home/banner');
    get_template_part('/templates/home/artigos');
    get_template_part('/templates/home/video');
    get_template_part('/templates/home/produtos');
    get_template_part('/templates/home/atendimento');
    
    ?>
</main>