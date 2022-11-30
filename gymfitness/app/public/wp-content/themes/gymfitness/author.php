<?php get_header();?>

<main class="pagina seccion no-sidebars contenedor">

  <?php 
    $autor = get_queried_object(); //hace referencia  al objeto en este caso template donde estamos  y accedemos a sus propiedes
    // get_required_object me devolvera sobre que trata  esta pagina
    /*echo '<pre>';
    var_dump($autor);
    echo '</pre>';*/
  ?>
    <h2 class="text-center texto-primario">Autor: <?php echo $autor->data->display_name; ?> </h2>   
    <p class="text-center"><?php echo get_the_author_meta('description', $autor->data->ID); //como segundo paramentro le pasamos el id de el usuario  
    //description viene siendo la informacion bibliografica en el  apartado de users
                           ?>
    </p> 
        <ul class="listado-blog">
            <?php get_template_part('template-parts/loop','blog'); ?>
            
        </ul> 


</main>

<?php get_footer();?>