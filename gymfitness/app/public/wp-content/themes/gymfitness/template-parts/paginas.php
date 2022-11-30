<?php
//todo lo que  este dentro  del loop tiene acceso a los template tags
while (have_posts()) :
    the_post();
?>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()) :
        the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
    else :
    //echo "No hay nada";
    endif;
    ?>

    <?php
        //Revisa si el contenido a listar es de el post_type que creamos en el plugin gymfitness_post_type
        //si es verdadero lista el contendio de lo contrario no muestra nada asi no afecta a las demas entradas o post que tengamos
    if(get_post_type() === 'gymfitness_clases' ){
        $hora_inicio = get_field('hora_inicio');
        $hora_fin    = get_field('hora_fin');
    ?>
        <p class="informacion-clase"><?php the_field('dias_clase');?> - <?php echo $hora_inicio." a ".$hora_fin;?></p>
        
    <?php
    }
    ?>
    <?php the_content(); ?>
<?php endwhile; ?>