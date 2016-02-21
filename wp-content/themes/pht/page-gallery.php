<?php get_header()?>
<div class="section-banner"></div>
    <div class="container">
        <h1 class="head-web">GALLERY</h1>

        <div class="gallery-menu">
            <?php

            $args = array( 'hide_empty' => 0);
            $terms = get_terms( 'package-category' , $args);
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                echo '<ul class="list-unstyled">';
                echo '<li><a href="javascript:;" data-filter="*">Show all</a></li>';
                foreach ( $terms as $term ) {
                    echo '<li><a href="javascript:;" data-filter=".ids'.$term->term_id.'">' . $term->name . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <hr>
        <div class="row posts">
            
            <div class="item col-sm-3 ids5">
                <a href="//lorempixel.com/600/800/business/"><img class="img-responsive " src="//lorempixel.com/600/800/business/"></a>
            </div>

            <div class="item col-sm-3">
                <a href="//lorempixel.com/800/600/city"><img class="img-responsive" src="//lorempixel.com/800/600/city"></a>
            </div>
            <div class="item col-sm-3">
                <a href="//lorempixel.com/600/800/business/"><img class="img-responsive" src="//lorempixel.com/600/800/business/"></a>
            </div>

            <div class="item col-sm-3">
                <a href="//lorempixel.com/800/600/city"><img class="img-responsive" src="//lorempixel.com/800/600/city"></a>
            </div>




            
        </div>
    </div>

<?php get_footer()?>