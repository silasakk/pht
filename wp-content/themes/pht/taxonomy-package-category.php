<?php get_header();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$current_tax = get_query_var('package-category');
$term = get_term_by('slug',$current_tax,'package-category');


?>

    <div class="container">
        <div class="page-package">
            <h1><?php echo $term->name?></h1>
            <div class="row package-list">
                <?php
                $args = array(
                    'post_type' => 'package-list',
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'package-category',
                            'field'    => 'slug',
                            'terms'    => array($current_tax),
                        )
                    ),
                );
                $query = new WP_Query( $args );
                // the query
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-sm-4">
                            <a href="<?php the_permalink()?>" class="card">
                                <div class="thumb">
                                    <?php the_post_thumbnail('post-thumbnail',array('class'=>'img-responsive'))?>
                                </div>
                                <div class="title">
                                    <?php echo get_the_title() ?>
                                </div>
                                <div class="detail">
                                    <?php $content = get_the_excerpt() ; echo mb_strimwidth($content,0,100,'...') ?>
                                </div>
                            </a>
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