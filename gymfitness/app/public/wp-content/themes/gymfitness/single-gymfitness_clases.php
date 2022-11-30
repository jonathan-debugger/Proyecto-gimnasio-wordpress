<!--Template personalizado para este post type  -->
<?php get_header(); ?>

<main class="contenedor pagina seccion con-sidebar">
    <div class="contenido-principal">
        
    <?php get_template_part('template-parts/paginas');?>

    </div>
    
    <?php get_sidebar('clases');?>
    
    <!--aqui llamamos  al archivo 
    sidebar-clases.php pero no hay necesidad de escribir todo esto simplemente el espera el segundo nombre (-clases)-->
</main>

<?php get_footer(); ?>

