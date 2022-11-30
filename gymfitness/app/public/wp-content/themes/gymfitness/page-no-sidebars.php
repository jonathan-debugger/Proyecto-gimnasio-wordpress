
<?php get_header(); 
/*
Template Name: Contenido Centrado (No Sidebars)

*/
?>

<main class="contenedor pagina seccion  no-sidebar">
    <div class="contenido-principal">
    <?php get_template_part('template-parts/paginas');?> 
    <!--El contenido de las  paginas repetido  se puede almacenar en otra carpeta para  asi evitar  duplicar el contenido
     y se llama con la funcion get_emplate_part--->
    </div>

</main>

<?php get_footer(); ?>

