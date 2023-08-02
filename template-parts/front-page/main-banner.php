<?php
/**
 * Template part for displaying the banner in the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capacitacion_Pedro
 */

 printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID(  ) ), true ) );

?>

<!-- banner start -->
<div class="banner-area banner-area-1">
    <div class="banner-slider owl-carousel">
        <!-- Item del banner repetible -->
        <div class="item" style="background: url(<?php echo esc_attr( esc_html( get_post_meta( get_the_ID(  ), 'imagen_fondo', true ) ) ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8">
                        <div class="banner-inner style-white">
                            <h1 class="b-animate-2 title">
                                <?php echo esc_html( get_post_meta( get_the_ID(  ), 'banner_metabox_title', true ) ); ?>
                            </h1><!-- agregar a cmb2 -->
                            <p class="b-animate-3 content">
                                <?php echo esc_html( get_post_meta( get_the_ID(  ), 'banner_metabox_subtitle', true ) ); ?>
                            </p><!-- agregar a CMB2 -->
                            <div class="btn-wrap">
                                <a class="btn btn-base b-animate-4" href="service.html"> Explore The Services</a><!-- agregar texto y url a cmb2 -->
                                <a class="btn btn-white b-animate-4" href="contact.html">Contact Us</a><!-- agregar texto y url a cmb2 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item del banner repetible end -->
    </div>
</div>
<!-- banner end -->  