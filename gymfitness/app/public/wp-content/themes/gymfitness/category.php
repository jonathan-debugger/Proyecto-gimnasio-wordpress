<?php get_header();?>

<main class="pagina seccion no-sidebars contenedor">

  <?php 
    $categoria = get_queried_object(); //hace referencia  al objeto en este caso template donde estamos  y accedemos a sus propiedes
     // get_required_object me devolvera sobre que trata  esta pagina
 
 ?>

    <h2 class="text-center texto-primario">
        Categoria: <?php echo $categoria->name; ?>
    </h2>   
        <ul class="listado-blog">
        <?php while(have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/loop','blog'); ?>
        <?php endwhile; ?>
        </ul> 


</main>

<!--
Template de categorias  
Video 82
-->
<?php get_footer();?>