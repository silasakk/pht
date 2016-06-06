<?php get_header() ?>

<?php
$image = get_field('banner_testimonial','option');
if( !empty($image) ){
  $background = $image['url'];
}
?>

<!--<div class="section-banner" <?php /*echo (isset($background)) ? "style='background:url(".$background.")'" : "" */?>>

</div>-->
<div class="page-content">

    <div class="container">
        <h1 class="head-web">TESTTIMONIAL</h1>
        <div class="con-test">
            <?php
            // the query
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => -1
            );
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="row">
                        <div class="test-item-list">
                            <div class="col-sm-4">
                                <div class="thumb-feature" >
                                    <img src="<?php  the_post_thumbnail_url() ?>" class="img-responsive  bg-user-t" alt="">
                                    <div class="ico-user">
                                        <?php

                                        $image = get_field('user_image');

                                        if( !empty($image) ): ?>

                                            <img src="<?php echo $image['url']; ?>" class="img-responsive img-circle" alt="<?php echo $image['alt']; ?>" />

                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="username"><?php the_title();?></div>
                                <div class="position"><?php echo get_field('position'); ?></div>
                                <div class="detail">
                                    <?php echo get_the_content() ?>
                                </div>

                            </div>
                            <div class="col-sm-1">
                                <i class="fa fa-cir fa-angle-down" onclick=""></i>
                            </div>

                            <div class="col-sm-12" >
                                <?php

                                $images = get_field('trip_gallery');

                                if( $images ): ?>
                                    <div  class="t-gall">
                                        <ul class="list-unstyled">
                                            <?php foreach( $images as $image ): ?>
                                                <li class="col-sm-2">
                                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                <?php endif; ?>


                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>


        </div>
    </div>
</div>
<?php get_footer() ?>
