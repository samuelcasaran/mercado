
<script>
function incrustar_hoja_estilos() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/tienda_git/assets/modulos/modulo-productos/modulo-producto.css'; ?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
} 

incrustar_hoja_estilos();
</script>



<!-- #seccion 5 contenidos -->
<section class="row  d-flex justify-content-between mt-5 mb-5 px-3">
    <div class="d-flex  align-items-center gap-2 ">
<div class="title">
<h2 class="loop-title ">Basado en tu última visita</h2>
    
</div>
 <div class="link">
 <span class="f  align-items-center "><a href="#">Ver Historial</a></span>
 </div>
    </div>
    <?php
        $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'product',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page,
        );
        $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <a class="  p-3 text-dark  col-sm-12 col-md-3 col-lg-3 col-xl-3" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
           <div class="target">
           <figure class="card-img text-center" > 
<img src="<?php  echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
            </figure>
            <figcaption class="card-text">
               <p class="precio m-0"> $ <?php  renderizar_precio_producto_hook(); ?> </p>
               <p class="cuotas"><?php    mostrar_cuotas(); ?> </p>
                <h5 class="titulo-producto  "><?php echo get_the_title(); ?></h5>
                
            </figcaption>
           </div>
        </a>


    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>

</section>
