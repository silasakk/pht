<section class="section-footer">
	<div class="container">
		<div class="col-sm-5 footer-col">
			<div class="title">About</div>
			<div class="detail">
				<?php echo get_field('about_us','option')?>
			</div>
		</div>
		<div class="col-sm-3 footer-col">
			<div class="title">Top Booking</div>
			<div class="detail">




				<ul>
					<li><a href="">Diving</a></li>
					<li><a href="">Fishing Trip</a></li>
					<li><a href="">Island Sight Seeing</a></li>
					<li><a href="">Land Adventure Trip</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4 footer-col">
			<div class="title">Contact</div>
			<div class="detail">889 Turtle Village Building, shop210,Tumbon Maikhao, Thalang, Phuket, 83110Thailand,
				Tel : 076-314859, 084-8395733 Whatsapp 084-8395733

				Fax : 076-314859</div>
		</div>
	</div>
</section>
<div class="copyright">
	COPYRIGHT © 2016 PHUKET HAPPINESS TRIP Public Company Limited ALL RIGHTS RESERVED.
</div>

<?php wp_footer();?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php echo get_template_directory_uri()?>/js/angular.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/lightgallery-all.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">

	jQuery(window).load(function() {
		jQuery('.partslider').flexslider({
			animation: "slide",
			selector:".slides > .pathner-logo",
			animationLoop: false,
			directionNav : false,
			itemWidth: 210,
			itemMargin: 30,
			minItems: 2,
			maxItems: 5
		});

		jQuery('#package-gallery-co').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 110,
			itemMargin: 15,
			maxItems: 5,
			prevText:'',
			nextText:'',
			asNavFor: '#package-gallery'
		});

		jQuery('#package-gallery').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			prevText:'',
			nextText:'',
			sync: "#carousel"
		});
	});



	jQuery('.nav-mobile').on('click',function(){
		jQuery('.nav-menu').slideToggle('fast');
	});

	jQuery.getScript('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js',function(){

		/* activate jquery isotope */
		jQuery('.posts').imagesLoaded( function(){
			jQuery('.posts').isotope({
				itemSelector : '.item'
			});
		});


		jQuery('.gallery-menu a').click(function(){
			jQuery('.posts').isotope({
				filter: this.getAttribute('data-filter')
			});
		});

	});

	jQuery(document).ready(function() {
		jQuery('.fa-cir').on('click',function(){
			jQuery(this).parent().parent().find('.t-gall').toggle();

		});



		jQuery(".posts").lightGallery({
			selector: '.item a',
			'thumbnail' : false
		});
	});

	var app = angular.module('phtApp', []);

	jQuery(document).ready(function() {
		jQuery('#MyDate').datepicker({
			dateFormat : 'dd-mm-yy'
		});
	});


	jQuery('#booking').on('click',function(){

		jQuery('table .price').html(jQuery('#select_price option:selected').text());
		jQuery('#price').val(jQuery('#select_price').val())

	});



	jQuery('#save').on('click',function(){
		var va = 0;
		jQuery('.required').each(function(){


			if(jQuery(this).val() == ""){
				jQuery(this).parent().addClass('has-error');
				alert('Please input correct data');
				va++;
				return false;


			}

		});
		if(va){
			return false;
		}



		jQuery('#save img').show();
		var data = {
			package : jQuery('#package').val(),
			amount : jQuery('#price').val(),
			booking_date : '<?php date('Y-m-d H:i:s') ?>',
			departure_date : jQuery('#Mydate').val(),
			fullname : jQuery('#fullname').val(),
			email : jQuery('#email').val(),
			phone : jQuery('#phone').val(),
			address : jQuery('#address').val(),
			payment_status : 'Pending'

		};

		var token = '<?php echo base64_encode( 'pht' . ':' . 'V3LcYNZYDixni4P7' )  ?>';
		var req = {
			url: '<?php echo esc_url_raw( get_rest_url() ) ?>' + 'wp/v2/' + 'book',
			type: 'POST',
			data: {
				title: '',
				status: 'publish',
				fields: data
			},
			headers: {
				<?php if(is_user_logged_in()) :?>
				'X-WP-Nonce' : '<?php echo wp_create_nonce( 'wp_rest' )?>'
				<?php else:?>
				'Authorization': 'Basic ' + token
				<?php endif;?>
			},
			success: function(res) {
				//console.log(res.id);
				jQuery('#item_name').val(jQuery('#item_name').val()+" "+jQuery('.price').text());
				jQuery('#item_number').val(res.id);
				jQuery('#amount').val(jQuery('#price').val());

				jQuery('#frm_paypal').submit();
			}
		};
		jQuery.ajax(req);
	})







</script>



</body>
</html>