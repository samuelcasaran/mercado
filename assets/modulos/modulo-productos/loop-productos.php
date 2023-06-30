

<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url ='<?php echo get_site_url() . '/wp-content/themes/tienda/assets/modulos/modulo-productos/modulo-product.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
} 

incrustar_hoja_estilos_comision();  


</script>


<!-- #seccion 5 contenidos -->
<section class="row d-flex  justify-content-between mt-5 mb-5 px-3">
    <h2 class="loop-title row">Ofertas De Electronica<span class="w-25"><a href="#">Ver todas</a></span></h2>

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

        <a class="tarjeta text-center  p-1 m-1 text-dark col-sm-12  text-center col-md-3 col-lg-2 col-xl-2" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-color:white;border-radius:5px">
            <figure class="card-img"> 
<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
            </figure>
            <figcaption class="card-text">
                <?php  renderizar_precio_producto_hook(); ?>
               <?php    mostrar_cuotas(); ?>
                <h5 class="titulo-producto display text-dark  "><?php echo get_the_title(); ?></h5>
                
            </figcaption>
        </a>


    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>

</section>
