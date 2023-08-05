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
        <?php
        $slides = get_post_meta( get_the_ID(  ), 'banner_group_metabox_group', true );

        if( isset( $slides ) && !empty( $slides ) ):

            foreach( $slides as $slide ):
            ?>
            <!-- Item del banner repetible -->
            <div class="item" style="background: url();">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8">
                            <div class="banner-inner style-white">
                                <h1 class="b-animate-2 title">
                                    <?php echo esc_html( $slide['title'] ); ?>
                                </h1>
                                <p class="b-animate-3 content">
                                    <?php echo esc_html( $slide['description'] ); ?>
                                </p>
                                <div class="btn-wrap">
                                    <a class="btn btn-base b-animate-4" href="<?php echo esc_attr( $slide['url_one'] ); ?>"><?php echo esc_html( $slide['button_one'] ); ?></a>
                                    <a class="btn btn-base b-animate-4" href="<?php echo esc_attr( $slide['url_two'] ); ?>"><?php echo esc_html( $slide['button_two'] ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item del banner repetible end -->
            <?php
            endforeach;
            
        endif;
        ?>
    </div>
</div>
<!-- banner end -->  