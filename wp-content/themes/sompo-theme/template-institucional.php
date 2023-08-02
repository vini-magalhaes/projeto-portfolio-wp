<?php 
//Template name: Institucional
global $institucional;

$institucional=get_field('institucional');

?>

<main id="institucional">
    <?php  
    
    get_template_part('/templates/institucional/timeline');
    get_template_part('/templates/institucional/conteudo');
    
    ?>
</main>