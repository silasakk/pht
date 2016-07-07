<?php get_header();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php $bb =  get_field('banner1') ?>
    <section class="section-banner" style="background-image: url('<?php echo $bb['url'] ?>')">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1><?php echo get_field('text_header') ?></h1>
            <?php
            // the query
            $args = array(
                'post_type' => 'package-list',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key'     => 'feature',
                        'value'   => 'on',
                        'compare' => 'LIKE',
                    ),
                ),
            );
            $the_query = new WP_Query( $args );

            ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="btn btn-yellow">BOOKING</a>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

            <?php endif; ?>



            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <section id="package" class="section-package section-panel">
        <div class="container">
            <div class="title"><h2>POPULAR TOUR</h2></div>
            <hr>
            <div class="row">
                <?php
                $args = array( 'hide_empty' => 0 );
                $terms = get_terms( 'package-category' , $args);
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

                    foreach ( $terms as $term ) : ?>
                        <div class="col-sm-4">
                            <div class="package-item">
                                <div class="package-thumbnail">
                                    <?php  $img = get_field('packages_category_picture',$term); ?>
                                    <a href="<?php echo get_term_link($term) ?>"><img class="img-responsive"
                                                    src="<?php echo $img["url"] ?>" alt=""></a>
                                </div>
                                <div class="title"><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></div>
                                <div class="except"><?php echo $term->description ?></div>
                            </div>
                        </div>

                    <?php endforeach;
                }
                ?>
            </div>
        </div>
    </section>
    <section class="section-testimonail section-panel">
        <div class="container">
            <div class="title"><h2>TESTIMONAIL</h2></div>
            <hr>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
                    <?php
                    $args = array(
                        "post_type" => "testimonial",
                        "posts_per_page" => 3
                    );
                    // the query
                    $the_query = new WP_Query($args); ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="test-item col-md-4">
                                <div class="col-xs-4">
                                    <div class="test-thumbnail">
                                        <a href="">

                                            <?php

                                            $image = get_field('user_image');

                                            if( !empty($image) ): ?>

                                                <img class="img-responsive img-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                            <?php else : ?>

                                                <img class="img-responsive"
                                                     src="<?php echo get_template_directory_uri() ?>/images/600.png" alt="">

                                            <?php endif; ?>



                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="info"><strong><?php the_title(); ?></strong></div>
                                    <?php $term_list = wp_get_post_terms(get_the_ID(), 'package-category', array("fields" => "names")); ?>
                                    <div class="info"><?php echo join(" , ", $term_list) ?></div>
                                    <div
                                        class="except visible-xs visible-sm"><?php echo mb_substr(get_the_content(), 0, 20) ?></div>
                                </div>
                                <div class="col-sm-12 hidden-xs hidden-sm">
                                    <?php echo mb_substr(get_the_content(), 0, 100) ?>
                                </div>

                            </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                </div>


            </div>
        </div>
    </section>
    <section class="section-gallery section-panel">

        <div class="container">
            <div class="title"><h2><a href="<?php echo site_url('gallery')?>">GALLERY</a></h2></div>
            <hr>
            <div class="row">

                <?php

                    while ( have_rows('gallery_pic',14) ) : the_row();

                        $image[] = get_sub_field('gallery_pic_',14);

                    endwhile;


                ?>

                <div class="col-sm-6 gall-itm"><a href="">
                        <img class="img-responsive full" src="<?php echo $image[0]["url"] ?>" alt=""></a>
                </div>


                <div class="col-sm-6">
                    <div class="row">


                        <div class="col-sm-6 gall-itm"><a href="">
                                <img class="img-responsive " src="<?php echo $image[1]["url"] ?>" alt=""></a>
                        </div>
                        <div class="col-sm-6 gall-itm"><a href="">
                                <img class="img-responsive" src="<?php echo $image[2]["url"] ?>" alt=""></a>
                        </div>
                        <div class="col-sm-6 gall-itm"><a href="">
                                <img class="img-responsive" src="<?php echo $image[3]["url"] ?>" alt=""></a>
                        </div>
                        <div class="col-sm-6 gall-itm"><a href="">
                                <img style="height: 164px;width: auto;  " class="img-responsive" src="<?php echo $image[4]["url"] ?>" alt=""></a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
<?php $bb =  get_field('banner2') ?>
    <section class="section-banner section-panel" style="background-image: url('<?php echo $bb['url'] ?>')">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1>Welcome to <br> Phuket Happiness</h1>
            <button type="button" class="btn btn-yellow">BOOKING</button>
        </div>
    </section>
    <section class="section-pathner section-panel">
        <div class="container">
            <h1 class="title">OUR PARTNER</h1>
            <hr>
            <div class="row">

                        <div class="flexslider partslider">
                            <div class="slides">
                                <?php while( have_rows('our_partner') ): the_row();

                                    // vars
                                    $image = get_sub_field('our_partner_pic');

                                    ?>

                                    <div class="pathner-logo">
                                        <a href="<?php echo get_sub_field('parther_link')?>"><img class="img-responsive img-circle"
                                                                                              width="150"
                                                                                              src="<?php echo $image["url"] ?>"
                                                                                              alt=""></a>
                                    </div>

                                <?php endwhile; ?>
                            </div>
                        </div>




            </div>
        </div>
    </section>
<?php get_footer() ?>