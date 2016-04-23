<?php get_header() ?>

<?php
$image = get_field('banner_contact','option');
if( !empty($image) ){
    $background = $image['url'];
}
?>

<div class="section-banner" <?php echo (isset($background)) ? "style='background:url(".$background.")'" : "" ?>>

</div>
<div class="page-content">

    <div class="container">
        <h1 class="head-web">Contact Us</h1>

        <div class="contact-page">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Phuket Happiness Trip</h1>
                    <div class="addr">889 Turtle Village Building, shop210,Tumbon Maikhao, Thalang, Phuket, 83110Thailand,</div>
                    <p>Tel : 076-314859, 084-8395733 Whatsapp 084-8395733</p>
                    <p>Fax : 076-314859</p>
                </div>
                <div class="col-sm-6">
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <div id="map" width="560" height="549">

                        </div>
                        <script>
                            var map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -34.397, lng: 150.644},
                                    zoom: 8
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAt9jMiD0eC44h_5pVSYq57GQNt_BV7EAc&callback=initMap"
                                async defer></script>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer() ?>
