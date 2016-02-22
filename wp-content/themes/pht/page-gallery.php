<?php get_header() ?>
    <div class="section-banner"></div>
    <div class="container">
        <h1 class="head-web">GALLERY</h1>

        <div class="gallery-menu">
            <?php

            $args = array('hide_empty' => 0);
            $terms = get_terms('package-category', $args);
            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<ul class="list-unstyled">';
                echo '<li><a href="javascript:;" data-filter="*">Show all</a></li>';
                foreach ($terms as $term) {
                    echo '<li><a href="javascript:;" data-filter=".ids' . $term->term_id . '">' . $term->name . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <hr>


        <?php

        $rows = get_field('gallery_pic');
        if ($rows) {
            echo '<div class="row posts">';

            foreach ($rows as $row) {
                //echo '<li>sub_field_1 = ' . $row['sub_field_1'] . ', sub_field_2 = ' . $row['sub_field_2'] . ', etc</li>';
                $image = $row['gallery_pic_'];
                $term = $row['packages_gallery'];

                echo '<div class="item col-sm-3 ids' . $term[0] . '" >
                <a href = "' . $image['url'] . '" ><img class="img-responsive " src = "' . $image['url'] . '" ></a >
            </div >';
            }
            echo '</div>';
        }
        ?>

    </div>


<?php get_footer() ?>