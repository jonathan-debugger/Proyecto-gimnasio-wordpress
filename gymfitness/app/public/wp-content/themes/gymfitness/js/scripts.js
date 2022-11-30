 jQuery(document).ready(function($){
    $('.site-header .menu-principal .menu').slicknav({
        label:'',
        appendTo:'.site-header'
    });


    //Agregar Slider
    if($('.listado-testimoniales').length>0){
        
        $('.listado-testimoniales').bxSlider({
            auto:true,
            mode:'fade',
            controls: false
        });
    }





 });

// agrega posicion fija en  el header al hacer scroll
const tagline=document.querySelector('.tagline');
if(tagline){
window.onscroll =()=>{
    const scroll = window.scrollY;
    const headerNav =document.querySelector('.barra-navegacion');


    //si la cantidad de scroll es  mayor a, agregar una clase
    if(scroll>300){

        headerNav.classList.add('fixed-top');
        tagline.classList.add('tagline-activo');
    }else{
        tagline.classList.remove('tagline-activo');
        headerNav.classList.remove('fixed-top');
    }
}
}