<?php

/** Consultas reutilizables, por eso se usan en un archivo aparte **/
require get_template_directory().'/inc/queries.php';
require get_template_directory(). '/inc/shortcodes.php';
//Cuando  el  tema es activado

function gymfitness_setup(){
    
    //Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos  SEO
    add_theme_support('title-tag');
    //Con esta linea se habilita los titulos del seo
      //video 86  
    //agregar imagenes  de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 850, 590, true);
    
}


add_action('after_setup_theme','gymfitness_setup');

function gymfitness_menus(){

//Funcion para registrar menus

//Le pasamos un array asociativo con el nombre del menu que se vera y el text domain
// Menus de navegación, agregar más utilizando  el  arreglo

register_nav_menus(
    array(
     'menu-principal'=> __('Menu Principal', 'gymfitness')   

         )
);

}

/*===========================
            Hooks
============================= */

//Esta funcion init se iniciara cuando wordpress arranque

add_action('init','gymfitness_menus');  


// Scripts y Styles

function gymfitness_scripts_styles(){

wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
 
wp_enqueue_style('slickNavCss', get_template_directory_uri().'/css/slicknav.min.css', array(),'1.0.10');//Array vacio por que no  requiere dependecias

wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap
', array(), '1.0.0');


/* Conditional tags */
/*Vamos a cargar solamente lightbox en la pagina de galeria video 71*/
    if(is_page('galeria')): //galeria es el slug el cual activamos o checkeamos en opciones de pantalla de la pagina galeria en wordpress
         wp_enqueue_style('lightboxCSS', get_template_directory_uri(). '/css/lightbox.min.css',array(),);
    endif;

    if(is_page('contacto')):
        wp_enqueue_style('leaftletCSS','https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(),'1.7.1');

    endif;    

    /*Registrar bx slider css*/
    if(is_page('inicio')):
        wp_enqueue_style('bxSliderCSS','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
    endif; 

    //La hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0'); //colocamos en el array normalize,googleFont como dependencias para que estos se cargen antes para que despues empiece a cargar  la hoja de  estilos
    //Ponemos  como dependencia jquery que ya  viene nativo  de wordpress
    wp_enqueue_script('slicknavJs',get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    
    if(is_page('galeria')):
        wp_enqueue_script('lightboxJS',get_template_directory_uri().'/js/lightbox.min.js',array('jquery'),'1.0.0',true);
    endif;

    if(is_page('contacto')):
        wp_enqueue_script('leaftletJS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js' ,array(), '1.7.1' );
    endif;

    /*Registrar bx slider css*/
    if(is_page('inicio')):
        wp_enqueue_script('bxSliderJS','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
    endif; 


    //scripts  personalizados
    wp_enqueue_script('script', get_template_directory_uri().'/js/scripts.js', array('jquery','slicknavJs'), '1.0.10', true);

}

add_action('wp_enqueue_scripts','gymfitness_scripts_styles');


// Definir Zona de widgets
function gymfitness_widgets(){
    //Los widgets se pueden utilizar donde se desee  en el header en el footer solo que  la funcion se llama register_sidebar
    //widget significa artilugio o pequeña  aplicación
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id'  => 'sidebar_1',   
        'before_widget' =>'<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-primario">',  
        'after_title'   => '</h3>' 

    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id'  => 'sidebar_2',   
        'before_widget' =>'<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-primario">',  
        'after_title'   => '</h3>' 

    ));
}
add_action('widgets_init','gymfitness_widgets');


/**Imagen Hero pagina de inicio**/

function gymfitness_hero_image(){

    //Obtener id pagina principal
    $front_page_id = get_option('page_on_front');
    //Obtener id imagen
    $id_imagen = get_field('imagen_hero',$front_page_id);
    //Obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen,'full')[0];
    
    //Style CSS
    wp_register_style('custom',false); // le pasamos false para  decirle que no vamos a pasar un archivo si no le vamos  a inyectar codigo css

    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .site-header{
            background-image: linear-gradient( rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url($imagen);
        }
    ";
    wp_add_inline_style('custom',$imagen_destacada_css);
}

add_action('init','gymfitness_hero_image');