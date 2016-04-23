<section class="section-footer">
	<div class="container">
		<div class="col-sm-4 footer-col">
			<div class="title">About</div>
			<div class="detail">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</div>
		</div>
		<div class="col-sm-4 footer-col">
			<div class="title">Top Booking</div>
			<div class="detail">
				<ul>
					<li><a href="">Lorem ipsum dolor sit amet</a></li>
					<li><a href="">Lorem ipsum dolor sit amet</a></li>
					<li><a href="">Lorem ipsum dolor sit amet</a></li>
					<li><a href="">Lorem ipsum dolor sit amet</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4 footer-col">
			<div class="title">Contact</div>
			<div class="detail">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</div>
		</div>
	</div>
</section>
<div class="copyright">
	COPYRIGHT © 2016 PHUKET HAPPINESS TRIP Public Company Limited ALL RIGHTS RESERVED.
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php echo get_template_directory_uri()?>/js/angular.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/lightgallery-all.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">

	jQuery('.nav-mobile').on('click',function(){
		jQuery('.nav-menu').slideToggle('fast');
	});

	$.getScript('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js',function(){

		/* activate jquery isotope */
		$('.posts').imagesLoaded( function(){
			$('.posts').isotope({
				itemSelector : '.item'
			});
		});


		$('.gallery-menu a').click(function(){
			$('.posts').isotope({
				filter: this.getAttribute('data-filter')
			});
		});

	});

	$(document).ready(function() {
		jQuery('.fa-cir').on('click',function(){
			jQuery(this).parent().parent().find('.t-gall').toggle();

		});



		$(".posts").lightGallery({
			selector: '.item a',
			'thumbnail' : false
		});
	});

	var app = angular.module('phtApp', []);





</script>

</body>
</html>