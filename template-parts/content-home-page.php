<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tienda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="container-fluid  p-0 m-0 ">
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://http2.mlstatic.com/D_NQ_626509-MLA69876226541_062023-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_889412-MLA69982324778_062023-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_974567-MLA70001139269_062023-OO.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div> 

<div class="container-fluid p-3 m-auto"> 




<section>

<div class="row align-items-center bg1  m-3 p-2">


<div class="col-md-3 bg4">
<h2>Paga Comodo y Seguro</h2> 
<p>con Mercado Pago</p>
</div>   

<div class="col-md-3 col-sm-12 bg-l"> 
  <div class="d-flex align-items-center gap-2">
  <div class="icon"> 
    <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/payments/credit-card.svg" alt="">
  </div>
<div class="text">
<h2>Hasta 12 cuotas sin interés</h2> 
<a href="">Ver más</a>
</div>
  </div>
</div>  

<div class="col-md-3 bg4"> 
  <div class="d-flex  align-items-center gap-2">
  <div class="icon"> 
    <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/payments/debit-card.svg" alt="">
  </div>
<div class="text">
<h2>Tarjeta de débito</h2> 
<a href="">Ver más</a>
</div>
  </div>
</div>  

<div class="col-md-3 bg4"> 
  <div class="d-flex align-items-center gap-2">
  <div class="icon"> 
    <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/payments/view-more.svg" alt="">
  </div>
<div class="text">
<h2>Más medios de pago</h2> 
<a href="">Ver más</a>
</div>
  </div>
</div> 



</div>

</section>



<section class="productos"> 



</section>
<section class="productos"> 

<?php include get_template_directory(). '/assets/modulos/modulo-productos/loop-productos.php';?> 

</section>  

<section class="productos"> 

<?php include get_template_directory(). '/assets/modulos/modulo-productos/loop-productos.php';?> 

</section>  

  
<section class="productos"> 

<?php include get_template_directory(). '/assets/modulos/modulo-productos/loop-productos.php';?> 

</section>  






<section> 

<div class="container bg3"> 

<div class="row">
<div class="bg2">
<div class="texto">
<h2>Suscríbete al nivel 6</h2> 
</div>
 <div class="texto">
 <p style="text-decoration:line-through;">15.990</p> 
 <p>5.999 /mes</p>
 </div>
</div>
</div>  

<div class="row p-3">
<h3>Consigue los mejores beneficios en Mercado Libre</h3>
</div> 

<div class="row align-item-center p-5" > 

<div class=" col-sm-12 col-md-4">
<div class="d-flex align-items-center gap-3 text-center">
  <img class="icon" src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/widget-l6/dplus.svg" alt=""> 
  <p>Disney+ sin cargo</p>
</div>
</div>  
<div class=" col-sm-12 col-md-4">
<div class="d-flex align-items-center gap-3 text-center">
  <img class="icon" src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/widget-l6/starplus.svg" alt=""> 
  <p>Star+ sin cargo</p>
</div>
</div> 
<div class="col-sm-12 col-md-4">
<div class="d-flex align-items-center gap-3 text-center">
  <img  class="icon" width="80" src="https://http2.mlstatic.com/resources/frontend/statics/loyal/v2/truckgiftv4@2x.png" alt=""> 
  <p>Envíos gratis y rápidos desde $ 19.990 y 40% OFF en envíos de menos de $ 19.990</p>
</div>
</div> 


</div> 
<div class="row p-3 ">
  <div class="d-flex justify-content-end text-center botones">
  <a href="" class="boton">suscribete</a>
  </div>
</div>

</div>
</section> 
 






<section>
<div class="container"> 

  <div class="row align-items-center ">
   <div class="d-flex align-items-center">
    <h3 class="title">Beneficios de Mercado Puntos</h3>
<a href="">Ver todos los beneficios</a>
  </div> 
  </div>  


  <div class="row bg5">
    <div class=" col-sm-12 col-md-4">
<img src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/hbo/widget/HBOMax_widgetmulti_mobdsk_mlc_@3x.jpg" alt="">
    </div> 
    <div class="  col-sm-12 col-md-4">
    <img src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/disney/hub-widget-disney-star/Widget_Multicontent_Latam_1152-x-849px.jpg" alt="">
    </div>
    <div class=" col-sm-12 col-md-4 ">
    <img src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/paramount/widgets/paramount_widgetmulti_mobdsk_chile_@3x.jpg" alt="">
    </div>
  </div>

</div>
</section>




<section>
  <div class="container p-5">
  <div class="row align-items-center bg7 p-0 " >
    <div class="col-md-8 p-0 "> 
  <img src="https://http2.mlstatic.com/D_NQ_735454-MLA69978439437_062023-OO.jpg" alt="">
    </div> 
    <div class=" col-md-4  p-3 "> 
      <p>Tienda Oficial</p> 
      <h4>HASTA 50% OFF <br>
        CALIDAD EUROPEA
      </h4> 
      <a href="">VER TIENDA<svg class="px-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
      </div>
  </div>
  </div>
</section>






</div>





	
</article><!-- #post-<?php the_ID(); ?> -->
