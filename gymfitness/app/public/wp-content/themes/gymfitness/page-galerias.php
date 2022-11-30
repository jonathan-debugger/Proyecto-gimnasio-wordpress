<?php
/*
Template name: Template para galerias
*/
get_header(); ?>

<main class="contenedor pagina seccion">
    <div class="contenido-principal">
        
        <?php while (have_posts()) :the_post(); ?>
                <h1 class="text-center texto-primario">
                    <?php the_title(); ?>
                </h1>

                <?php 
                    //Obtener la galeria de la pagina actual
                    $galeria= get_post_gallery(get_the_ID(), false);
                    //Obtener los ids de las imagenes
                    $galeria_imagenes_ID = explode(',', $galeria['ids']);    
                ?>

                <ul class="galeria-imagenes">
                    <?php
                        $i=1;
                        foreach ($galeria_imagenes_ID as $id):
                            $size = ($i==4 || $i==6 )? 'portrait' : 'square' ;
                            $imagenThumb = wp_get_attachment_image_src($id, $size )[0]; //le  pasamos el id de la imagen y el  tamaño ya asignados  en el fuctions y la posicion de la url de la imagen
                            $imagen = wp_get_attachment_image_src($id, 'large')[0];  
                              
                    ?>     
                    
                        <li>
                            <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
                            <img src="<?php echo $imagenThumb;?>" alt="imagen">
                            </a>
                        </li>

                    <?php
                         $i++; endforeach;        
                    ?>
                </ul>

        <?php endwhile; ?>


    </div>
</main>

<?php get_footer(); ?>

//video 74
