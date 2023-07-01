




<?php






function renderizar_precio_producto_hook() {
    // Obtener el precio del producto
    global $product; // Asegurarse de tener acceso a la variable $product
    
    $precio = $product->get_price();

    $precio_formateado = number_format($precio, 0, ',', '.');

    echo $precio_formateado; 

}






function mostrar_flash_ofertas() {
    global $product;

    // Obtener el valor del campo personalizado "flash_ofertas" utilizando ACF
    $flash_ofertas = get_field('flash_ofertas', $product->get_id());

    // Mostrar el contenido del campo personalizado si existe
    if ($flash_ofertas) {
        echo '<div class="flash-ofertas">' . esc_html($flash_ofertas) . '</div>'; 
    }
} 
remove_action('woocommerce_after_shop_loop_item', 'mostrar_flash_ofertas', 5);
add_action('woocommerce_after_shop_loop_item', 'mostrar_flash_ofertas', 5);


function mostrar_cuotas() { 

    global $product;
    // Obtener el valor del campo personalizado "cuotas" utilizando ACF
    $cuotas = get_field('cuotas', $product->get_id());

    // Obtener el precio del producto
    $precio = $product->get_price();

    // Calcular el precio de cada cuota
    $precio_cuota = $precio / $cuotas;

    // Formatear el precio con separadores de miles y decimales
    $precio_cuota_formateado = number_format($precio_cuota, 0, ',', '.');

    // Mostrar el contenido del campo personalizado si existe
    if ($cuotas) {
        echo '<div class="cuotas">' . esc_html($cuotas) . "x" . ' $' . esc_html($precio_cuota_formateado) . " sin interés" . '</div>';

    } 

}

add_action('woocommerce_after_shop_loop_item_title', 'mostrar_cuotas', 15);


function mostrar_cuotas_single() {
    global $product;

    // Obtener el valor del campo personalizado "cuotas" utilizando ACF
    $cuotas = get_field('cuotas', $product->get_id());

    // Obtener el precio del producto
    $precio = $product->get_price();

    // Calcular el precio de cada cuota
    $precio_cuota = $precio / $cuotas;

    // Formatear el precio con separadores de miles y decimales
    $precio_cuota_formateado = number_format($precio_cuota, 0, ',', '.');

    // Mostrar el contenido del campo personalizado si existe
    if ($cuotas) {
        echo '<div class="cuotas">' . esc_html($cuotas) . ' cuotas de $' . esc_html($precio_cuota_formateado) . '</div>';
    }
}
add_action('woocommerce_after_add_to_cart_button', 'mostrar_cuotas_single', 25);
?> 

 <div class="product-container">
    <div class="product-image">
      <?php do_action('woocommerce_before_single_product_summary'); ?>
    </div>
    <div class="product-title">
      <?php do_action('woocommerce_single_product_summary'); ?>
    </div>
    <div class="product-price">
      <?php do_action('woocommerce_single_product_summary'); ?>
    </div>
    <div class="product-description">
      <?php do_action('woocommerce_single_product_summary'); ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
      // Ocultar elementos que no sean necesarios
      $('.product-container .price').hide();
      $('.product-container .woocommerce-tabs').hide();
    });
  </script>