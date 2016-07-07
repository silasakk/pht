<?php get_header();
the_post();


?>

    <div class="container">
        <div class="page-package">
            <h1 id="addpost_title"><?php the_title(); ?></h1>
            <div class="row">

                <div class="col-sm-5">
                    <?php

                    $images = get_field('package_gallery');

                    if ($images): ?>
                        <div id="package-gallery" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($images as $image): ?>
                                    <li>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                        <p><?php echo $image['caption']; ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="package-gallery-co" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($images as $image): ?>
                                    <li>
                                        <img src="<?php echo $image['sizes']['thumbnail']; ?>"
                                             alt="<?php echo $image['alt']; ?>"/>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="dis">


                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                             */
                            var disqus_config = function () {
                                this.page.url = '<?php echo get_permalink(); ?>';
                                this.page.identifier = '<?php echo get_the_ID();; ?>';
                            };
                            (function () {  // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');

                                s.src = '//phukethappinesstrip.disqus.com/embed.js';

                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                        <?php

                        //disqus_embed();

                        ?>
                    </div>
                </div>
                <div class="col-sm-7">

                    <div class="description">
                        <h3>Description</h3>
                        <br>
                        <?php the_content() ?>
                        <br>

                    </div>
                    <div class="pack-panel">

                        <div class="form-group">
                            <label for="">PRICE</label>
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'package-category');

                            if($terms[0]->slug == "transfer-service"):?>
                                <table class="table">
                                    <?php if (have_rows('transfer_list')): ?>
                                        <?php while (have_rows('transfer_list')): the_row(); ?>
                                            <tr>

                                                <td class="p_type" style="width: 40%;"><?php echo(get_sub_field('transfer_title')) ?></td>
                                                <td class="">
                                                    <?php if (have_rows('transfer_type')): ?>
                                                        <table class="" style="background: none;width: 100%;">
                                                        <?php while (have_rows('transfer_type')): the_row(); ?>

                                                                <tr class="cca">
                                                                    <td  class="p_sub_type" ><?php echo  get_sub_field('type')  ?></td>
                                                                    <td><?php echo  number_format(get_sub_field('price'))  ?></td>
                                                                    <td>
                                                                        <input type="hidden" class="price_cal" value="<?php echo (get_sub_field('price') > 0) ? get_sub_field('price') : 0 ?>">
                                                                        <input type="number" class="price_input" value="0" min="0" max="20" step="1"/></td>
                                                                </tr>


                                                        <?php endwhile ?>
                                                        </table>
                                                    <?php endif; ?>
                                                </td>


                                            </tr>
                                        <?php endwhile ?>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="">Total Price</td>
                                        <td colspan="" class="text-right">
                                            <input type="hidden" class="price_tt_cal">
                                            <span class="text-success price_tt">0</span>
                                        </td>
                                    </tr>
                                </table>
                            <?php else: ?>
                                <table class="table">
                                    <?php if (have_rows('price_list')): ?>
                                        <?php while (have_rows('price_list')): the_row(); ?>
                                            <tr class="cca">

                                                <td class="p_type"><?php echo(get_sub_field('price_type')) ?></td>
                                                <td><?php echo number_format( (get_sub_field('price_amount') > 0) ? get_sub_field('price_amount') : 0) ?> THB</td>
                                                <td><?php echo(get_sub_field('price_remark')) ?></td>
                                                <td width="80">
                                                    <input type="hidden" class="price_cal" value="<?php echo (get_sub_field('price_amount') > 0) ? get_sub_field('price_amount') : 0 ?>">
                                                    <input type="number" class="price_input" value="0" min="0" max="20" step="1"/>
                                                </td>

                                            </tr>
                                        <?php endwhile ?>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="2">Total Price</td>
                                        <td colspan="2" class="text-right">
                                            <input type="hidden" class="price_tt_cal">
                                            <span class="text-success price_tt">0</span>
                                        </td>
                                    </tr>
                                </table>
                            <?php endif ?>


                        </div>


                        <button type="button" id="booking" class="btn btn-yellow pull-right" data-toggle="modal"
                                data-target="#myModal">BOOKING
                        </button>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Information</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-sm-12">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>Package :</td>
                                                    <td>
                                                        <?php echo get_the_title() ?>
                                                        <input type="hidden" name="package" id="package"
                                                               value="<?php echo get_the_title() ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Price :</td>
                                                    <td>
                                                        <span class="price"></span>
                                                        <input type="hidden" name="price" id="price">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Detail : </td>
                                                    <td>
                                                        <div id="dtl">

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Departure Date</label>
                                                <input type="text" id="MyDate" class="form-control required"
                                                       name="departure_date">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" id="fullname" class="form-control required"
                                                       name="fullname">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" id="email" class="form-control required"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" id="phone" class="form-control required"
                                                       name="phone">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="address" id="address"
                                                          class="form-control required"></textarea>

                                            </div>
                                        </div>

                                        <!--                                                <div class="col-sm-6">-->
                                        <!--                                                    <div class="form-group">-->
                                        <!--                                                        <label>Country</label>-->
                                        <!--                                                        <select name="country" class="form-control" id=""></select>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->

                                        <!--                                            <div class="col-sm-6">-->
                                        <!--                                                <div class="form-group">-->
                                        <!--                                                    <label>State</label>-->
                                        <!--                                                    <select name="state" class="form-control" id=""></select>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                            <div class="col-sm-6">-->
                                        <!--                                                <div class="form-group">-->
                                        <!--                                                    <label>City</label>-->
                                        <!--                                                    <select name="city" class="form-control" id=""></select>-->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                            <div class="col-sm-6">-->
                                        <!--                                                <div class="form-group">-->
                                        <!--                                                    <label>Postcode</label>-->
                                        <!--                                                    <input type="text"  name="postcode" id="postcode" class="form-control">-->
                                        <!---->
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <div class="clearfix"></div>
                                        <div class="col-sm-12">
                                            <button type="button" id="save" class="btn btn-yellow pull-right">Submit
                                                <img width="20p" style="display:none;"
                                                     src="<?php echo get_template_directory_uri() ?>/images/loading.gif"
                                                     alt=""></button>

                                        </div>
                                        <div class="clearfix"></div>


                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix"></div>


                        <form id="frm_paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post"
                              target="_top">
                            <input type="hidden" id="cmd" name="cmd" value="_xclick">
                            <input type="hidden" id="business" name="business" value="jeerakanphukethappiness@gmail.com">
                            <input type="hidden" id="lc" name="lc" value="TH">
                            <input type="hidden" id="item_name" name="item_name" value="<?php echo get_the_title() ?> ">
                            <input type="hidden" id="item_number" name="item_number" value="">
                            <input type="hidden" id="amount" name="amount" value="100.00">
                            <input type="hidden" id="currency_code" name="currency_code" value="THB">
                            <input type="hidden" id="button_subtype" name="button_subtype" value="services">
                            <input type="hidden" id="bn" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                            <input type="hidden" id="return" name="return" value="<?php echo site_url('thankyou') ?>">
                            <input type="hidden" id="rm" name="rm" value="2">

                        </form>


                    </div>

                    <?php if (have_rows('itinerary_list')): ?>
                        <h3>Itinerary</h3>
                        <table class="table">
                            <tr>
                                <th>Time</th>
                                <th>Description</th>
                            </tr>
                            <?php while (have_rows('itinerary_list')) : the_row(); ?>

                                <tr>
                                    <td><?php the_sub_field('time'); ?></td>
                                    <td><?php the_sub_field('detail'); ?></td>
                                </tr>

                            <?php endwhile; ?>

                        </table>
                    <?php endif; ?>

                    <?php if (have_rows('remark_list')): ?>
                        <h3>Remark</h3>
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            <?php while (have_rows('remark_list')) : the_row(); ?>

                                <tr>
                                    <td><?php the_sub_field('title'); ?></td>
                                    <td><?php the_sub_field('detail'); ?></td>
                                </tr>

                            <?php endwhile; ?>

                        </table>
                    <?php endif; ?>
                </div>
            </div>


        </div>

    </div>

<?php get_footer() ?>