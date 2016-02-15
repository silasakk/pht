<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phuket Happiness Trip</title>
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">-->

    <link href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/css/flexslider.css" rel="stylesheet">
    <link  href="<?php echo get_template_directory_uri()?>/css/animate.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="section-nav">
    <div class="nav">
        <div class="container">
            <div class="nav-logo">
                <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="">
            </div>

            <div class="nav-mobile">
                <i class="fa fa-bars"></i>
            </div>
            <div class="nav-menu">
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="">Package</a></li>
                    <li><a href="">Testimonail</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-banner">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1><?php echo get_field('text_header')?></h1>
        <button type="button" class="btn btn-primary">BOOKING</button>
    </div>
</section>
<section class="section-package section-panel">
    <div class="container">
        <div class="title"><h2>POPULAR TOUR</h2></div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="package-item">
                    <div class="package-thumbnail">
                        <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
                    </div>
                    <div class="title"><a href="">Lorem ipsum dolor sit amet</a></div>
                    <div class="except">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="section-testimonail section-panel">
    <div class="container">
        <div class="title"><h2>TESTIMONAIL</h2></div>
        <hr>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
                <div class="test-item col-md-4">
                    <div class="col-xs-4">
                        <div class="test-thumbnail img-circle">
                            <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="info">FULLNAME</div>
                        <div class="info">Trip 1 , Trip 2</div>
                        <div class="except visible-xs visible-sm">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</div>
                    </div>
                    <div class="col-sm-12 hidden-xs hidden-sm">
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                    </div>

                </div>
                <div class="test-item col-md-4">
                    <div class="col-xs-4">
                        <div class="test-thumbnail img-circle">
                            <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="info">FULLNAME</div>
                        <div class="info">Trip 1 , Trip 2</div>
                        <div class="except visible-xs visible-sm">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</div>
                    </div>
                    <div class="col-sm-12 hidden-xs hidden-sm">
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                    </div>

                </div>
                <div class="test-item col-md-4">
                    <div class="col-xs-4">
                        <div class="test-thumbnail img-circle">
                            <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="info">FULLNAME</div>
                        <div class="info">Trip 1 , Trip 2</div>
                        <div class="except visible-xs visible-sm">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</div>
                    </div>
                    <div class="col-sm-12 hidden-xs hidden-sm">
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>
<section class="section-gallery section-panel">

    <div class="container">
        <div class="title"><h2>GALLERY</h2></div>
        <hr>
        <div class="row">
            <div class="col-sm-6 gall-itm">
                <a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 gall-itm"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a></div>
                    <div class="col-sm-6 gall-itm"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a></div>
                    <div class="col-sm-6 gall-itm"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a></div>
                    <div class="col-sm-6 gall-itm"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri()?>/images/800.png" alt=""></a></div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-banner section-panel">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1>Welcome to <br> Phuket Happiness</h1>
        <button type="button" class="btn btn-primary">BOOKING</button>
    </div>
</section>
<section class="section-pathner section-panel">
    <div class="container">
        <h1 class="title">OUR PATHER</h1>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-sm-3 pathner-logo"><a href=""><img class="img-responsive img-circle" width="150" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a></div>
            <div class="col-xs-6 col-sm-3 pathner-logo"><a href=""><img class="img-responsive img-circle" width="150" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a></div>
            <div class="col-xs-6 col-sm-3 pathner-logo"><a href=""><img class="img-responsive img-circle" width="150" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a></div>
            <div class="col-xs-6 col-sm-3 pathner-logo"><a href=""><img class="img-responsive img-circle" width="150" src="<?php echo get_template_directory_uri()?>/images/600.png" alt=""></a></div>
        </div>
    </div>
</section>
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
<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">

    jQuery('.nav-mobile').on('click',function(){
        jQuery('.nav-menu').slideToggle('fast');
    });
    /*new WOW().init();
     $(window).load(function() {

     $('.flexslider').flexslider({
     animation: "slide",

     });
     });*/
</script>

</body>
</html>