<!DOCTYPE html>
<html>

<!-- Mirrored from brick.html.themeforest.createit.pl/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Sep 2014 05:20:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="author" content="CreateIT">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php echo Asset::js('modernizr.custom.js')?>
    <?php echo Asset::js('device.min.js')?>

    <title>Brick - Real Estate Template</title>

    <?php echo Asset::css('style.css')?>
    <!-- <link rel="stylesheet" type="text/css" href="assets/motives/red.css"> -->

    <!--[if lt IE 9]>
    <script src="assets/bootstrap/js/html5shiv.js"></script>
    <script src="assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="withAnimation withNavTop">
<div class="wrapper">
    <header>

    </header>

    <div class="container">

    </div>

    <div class="nav-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table pull-right">
                        <div class="table-cell">
                            <a href="#"><i class="fa fa-home"></i> <span class="i-label">Submit Property</span></a>
                        </div>
                        <div class="table-cell">
                            <a href="#"><i class="fa fa-list"></i> <span class="i-label">My Properties</span></a>
                        </div>
                        <div class="table-cell">
                            <a href="#"><i class="fa fa-user"></i> <span class="i-label">Profile</span></a>
                        </div>
                        <div class="table-cell">
                            <a href="#"> <i class="fa fa-sign-out"></i> <span class="i-label">Logout</span></a>
                        </div>
                        <div class="table-cell hidden-xs">
                            <ul class="socials">
                                <li>
                                    <a href="https://www.facebook.com/createITpl" target="_blank" data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/createitpl" target="_blank" data-toggle="tooltip" data-placement="left" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Google +"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="RSS"><i class="fa fa-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-brick navbar-fixed-top" role="navigation">
        <div class="container ">
            <div class="row">
                <div class="col-md-4 text-center">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" data-href="#" class="navbar-toggle toggle-sidebar pull-left" >
                            <i class="icon-house"></i>
                        </button>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand visible-sm visible-xs" href="#"><?php echo Asset::img('bricklogo-smal.png');?></a>
                        <a class="logo-small invisible hidden-xs hidden-sm" href="#"><?php echo Asset::img('bricklogo-smal.png');?></a>
                    </div>
                    <p class="navbar-text scroll-move visible-md visible-lg">Contact Us: <strong>1-800-765-BRICK</strong></p>
                    <div class="navbar-logo visible-md visible-lg">
                        <div class="logo" data-bg="assets/images/bricklogo.png" data-height="150"></div>
                    </div>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
              
                <?php echo $menu; ?>
                <!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">

    </div>

    <section class="flexslider std-slider" data-map-slide="0" data-height="570" data-direction="horizontal" data-animation="fade" data-loop="true" data-smooth="false" data-slideshow="true" data-speed="25000" data-animspeed="550" data-controls="true" data-dircontrols="true">
        <div class="search-block">
            <div class="container">
                <div class="block">
                    <div class="table">
                        <div class="left">
                            <div class="table-cell">
                                            <span class="select-box input-right" title="Location">
                                                <select name="Location" data-placeholder="Location">
                                                    <option>Location</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                            </div>
                            <div class="table-cell">
                                            <span class="select-box input-right" title="Type">
                                                <select name="Type" data-placeholder="Type">
                                                    <option>Type</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                            </div>
                            <div class="table-cell">
                                            <span class="select-box input-right" title="Bedrooms">
                                                <select name="Bedrooms" data-placeholder="Bedrooms">
                                                    <option>Bedrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                            </div>
                            <div class="table-cell">
                                            <span class="select-box input-right" title="Bathrooms">
                                                <select name="Bathrooms" data-placeholder="Bathrooms">
                                                    <option>Bathrooms</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="left">
                                <div class="slider-range-container">
                                    <div class="row">
                                        <div class="header">
                                            <div class="col-xs-6">
                                                <input type="text" id="amount-min-map">
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" id="amount-max-map">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="slider-range-map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <a href="#" class="btn btn-lg btn-filter uppercase">Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="slides">
            <li>
                <section class="property-map">
                    <div class="googleMapGroup" data-height="570" data-offset="0"></div>
                </section>
            </li>
            <li data-bg="assets/images/demo-content/house.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-4 col-md-offset-4">
                                <div class="object animated big" data-top="200px" data-fx="fadeInUp">Welcome<br> home!</div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <img class="object animated" data-top="136px" data-fx="fadeInRightBig" src="assets/images/demo-content/family.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-bg="assets/images/demo-content/house2.jpg">
                <div class="inner">
                    <img class="object animated absolute hidden-xs" data-top="0" data-right="0" data-fx="fadeInRightBig" src="assets/images/demo-content/keyhands.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7 col-md-7 col-md-offset-4">
                                <div class="object animated big" data-top="200px" data-fx="fadeInUp">Open the door<br> to your dreams!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-bg="assets/images/demo-content/house3.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-7">
                                <div class="object animated hidden-xs" data-top="180px" data-fx="fadeInUp">
                                    <div class="well">
                                        <div class="caption">
                                            <h2 class="uppercase">Casa de la Luz<br>
                                                <small>Spain, Mallorca</small></h2>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                            </ul>
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right important"><strong>$1.450.000</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <div class="flex-control-container">
            <div class="fill-helper pull-left hidden-xs hidden-sm"></div>
            <div class="container">
                <div class="fill-helper hidden-xs hidden-sm"></div>
                <ol class="flex-control-nav">
                    <li><div class="helper">Properties Map</div></li>
                    <li><div class="helper">Property 1</div></li>
                    <li><div class="helper">Property 2</div></li>
                    <li><div class="helper">Property 3</div></li>
                </ol>
            </div>
            <div class="fill-helper hidden-xs hidden-sm pull-right"></div>
        </div>
    </section>

    <div class="container">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 sidebar-top">
                <div class="sidebar">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search for property">
                          <span class="input-group-btn">
                            <button class="btn btn-brick" type="button"><i class="fa fa-search"></i></button>
                          </span>
                    </div>
                    <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
                    <br>
                    <span class="select-box input-right" title="Location">
                        <select name="Location" data-placeholder="Location">
                            <option>Location</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </span>
                    <span class="select-box input-right" title="RentBuy">
                        <select name="RentBuy" data-placeholder="Rent or Buy">
                            <option>Children</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </span>
                    <span class="select-box input-right" title="Type">
                        <select name="Type" data-placeholder="Type">
                            <option>Type</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </span>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="select-box input-right" title="Bedrooms">
                                <select name="Bedrooms" data-placeholder="Bedrooms">
                                    <option>Bedrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="select-box input-right" title="Bathrooms">
                                <select name="Bathrooms" data-placeholder="Bathrooms">
                                    <option>Bathrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="slider-range-container">
                        <div class="row">
                            <div class="header">
                                <div class="col-xs-6">
                                    <input type="text" id="amount-min">
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" id="amount-max">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="slider-range"></div>
                            </div>
                            <div class="col-xs-6">
                                <label for="amount-min" class="uppercase">Price Min.</label>
                            </div>
                            <div class="col-xs-6">
                                <label for="amount-max" class="uppercase pull-right">Price Max.</label>
                            </div>
                        </div>
                    </div>

                    <a class="btn light-grey flat btn-block uppercase">
                        Find Property
                    </a>

                    <a id="slider1-btn" class="btn btn-brick flat btn-block uppercase">
                        <i class="fa fa-th"></i> Loan Calculator
                    </a>

                    <a href="#featured" class="btn dark-grey flat btn-block uppercase btn-scroll">
                        Featured Properties
                    </a>

                    <div id="slider1" class="sidebar-slider loan-calculator">
                        <h4 class="uppercase text-center"><strong>Loan Calculator</strong></h4>
                        <br>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">Principal</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputPrincipal" placeholder="">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">Taxes</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputTaxes" placeholder="">
                                    <span class="form-control-feedback">/YR</span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">PMI</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputPMI" placeholder="">
                                    <span class="form-control-feedback">/MO</span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">Interest</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputInterest" placeholder="">
                                    <span class="form-control-feedback">%</span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">Insur.</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputInsur" placeholder="">
                                    <span class="form-control-feedback">/YR</span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-5 col-xs-offset-1 control-label uppercase">Extra</label>
                                <div class="col-xs-5">
                                    <input type="number" class="form-control" id="calculatorInputExtra" placeholder="">
                                    <span class="form-control-feedback">/MO</span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xs-offset-3">
                                <button type="submit" class="btn btn-brick flat btn-block uppercase">Calculate</button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="uppercase text-center motive section"><strong>Features & Functions</strong></h4>
                    <h4 class="uppercase">Designed for your business</h4>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="media-body">
                            <p>Pellentesque habitant morbi tristique senectus et netus et male suada fames ac turpis egestas.</p>
                            <a href="#" class="btn btn-link motive"><i>read more >></i></a>
                        </div>
                    </div>
                    <hr>
                    <h4 class="uppercase">Responsive example included</h4>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="media-body">
                            <p>Pellentesque habitant morbi tristique senectus et netus et male suada fames ac turpis egestas.</p>
                            <a href="#" class="btn btn-link motive"><i>read more >></i></a>
                        </div>
                    </div>
                    <hr>
                    <h4 class="uppercase">Easy Customization</h4>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="media-body">
                            <p>Pellentesque habitant morbi tristique senectus et netus et male suada fames ac turpis egestas.</p>
                            <a href="#" class="btn btn-link motive"><i>read more >></i></a>
                        </div>
                    </div>
                    <hr>
                    <h4 class="uppercase">Structures and color coded</h4>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="media-body">
                            <p>Pellentesque habitant morbi tristique senectus et netus et male suada fames ac turpis egestas.</p>
                            <a href="#" class="btn btn-link motive"><i>read more >></i></a>
                        </div>
                    </div>
                    <hr class="sidebar-separator">
                    <div id="featured" class="flexslider title-slider" data-animation="fade" data-loop="true">
                        <div class="title clear-title">
                            Featured Properties
                        </div>
                        <ul class="slides">
                            <li>
                                <div class="thumbnail clean">
                                    <div class="listing-image">
                                        <span class="listing-tag important">Reduced</span>
                                        <img src="assets/images/demo-content/listing1.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="assets/images/demo-content/listing2.jpg" data-lightbox="related-10">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                            <div class="right">
                                                <a class="inner" href="03-portfolio-detail.html">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image-tags">
                                            <ul class="property-tags">
                                                <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Villa Överby<br>
                                            <small>Sweden, Stockholm</small></h4>

                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                    <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
                                    <ul class="property-tags">
                                        <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                        <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                        <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="thumbnail clean">
                                    <div class="listing-image">
                                        <span class="listing-tag important">Reduced</span>
                                        <img src="assets/images/demo-content/listing2.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="assets/images/demo-content/listing2.jpg" data-lightbox="related-9">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                            <div class="right">
                                                <a class="inner" href="03-portfolio-detail.html">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image-tags">
                                            <ul class="property-tags">
                                                <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4>Villa Överby<br>
                                            <small>Sweden, Stockholm</small></h4>

                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                    <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
                                    <ul class="property-tags">
                                        <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                        <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                        <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bellow-sidebar">
                    <div class="flexslider title-slider hidden-xs" data-animation="fade" data-loop="true">
                        <div class="title">
                            Our Agents
                        </div>
                        <ul class="slides">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent1.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Anna Maria Kaufmann
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent2.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Floyd Rickenbacher
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent7.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Clare Denns
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent3.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Sebastian Riser
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent1.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Anna Maria Kaufmann
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent3.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Sebastian Riser
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent2.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Floyd Rickenbacher
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="person-box">
                                            <div class="person-image">
                                                <div class="person-image-content">
                                                    <div class="inner">
                                                        <img src="assets/images/demo-content/agent7.jpg" alt="Listing">
                                                    </div>
                                                    <div class="image-tags">
                                                        <ul class="socials">
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://www.facebook.com/createITpl" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="https://twitter.com/createitpl" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="helper">
                                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <a href="#" class="uppercase name">
                                                    Clare Denns
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr class="hidden-md hidden-lg hidden-xs">
            <div class="col-md-8">
                <section>
                    <div class="flexslider title-slider" data-animation="fade" data-loop="true">
                        <div class="title">
                            Recent Listings
                        </div>
                        <ul class="slides">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">Reduced</span>
                                                <img src="assets/images/demo-content/listing1.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing1.jpg" data-lightbox="related-1">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Villa Överby<br>
                                                    <small>Sweden, Stockholm</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">For Sale</span>
                                                <img src="assets/images/demo-content/listing2.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing2.jpg" data-lightbox="related-2">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Gatineau Hills<br>
                                                    <small>Canada, Quebec</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right important"><strong>$1.450.000</strong></span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag">Pending</span>
                                                <img src="assets/images/demo-content/listing3.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing3.jpg" data-lightbox="related-3">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Casa de la Luz<br>
                                                    <small>Spain, Mallorca</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$1.800</strong> /month</span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">For Rent</span>
                                                <img src="assets/images/demo-content/listing4.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing4.jpg" data-lightbox="related-11">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Cosgriff House<br>
                                                    <small>Australia, Sydney</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.550</strong> /month</span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">For Rent</span>
                                                <img src="assets/images/demo-content/listing4.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing4.jpg" data-lightbox="related-4">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Cosgriff House<br>
                                                    <small>Australia, Sydney</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.550</strong> /month</span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">Reduced</span>
                                                <img src="assets/images/demo-content/listing1.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing1.jpg" data-lightbox="related-5">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Villa Överby<br>
                                                    <small>Sweden, Stockholm</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag">Pending</span>
                                                <img src="assets/images/demo-content/listing3.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing3.jpg" data-lightbox="related-6">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Casa de la Luz<br>
                                                    <small>Spain, Mallorca</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$1.800</strong> /month</span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail clean">
                                            <div class="listing-image">
                                                <span class="listing-tag important">For Sale</span>
                                                <img src="assets/images/demo-content/listing2.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing2.jpg" data-lightbox="related-7">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h4>Gatineau Hills<br>
                                                    <small>Canada, Quebec</small></h4>

                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                            <a href="#" class="btn btn-link " role="button">+ Show Details</a> <span class="price-tag pull-right important"><strong>$1.450.000</strong></span>
                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <hr>
                <section class="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                The Deck House - This is a Standard Post
                            </div>
                            <div class="post-info">
                                <p>Post by <a href="#">John Doe</a> in <a href="#">general</a> on <strong>12.03.2013</strong></p>
                                <hr>
                                <p class="date">Last updated on <strong>12.03.2013</strong></p>
                            </div>
                            <div class="description">
                                <img class="pull-left" src="assets/images/demo-content/listing5.jpg" alt="">
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>
                                <p>
                                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam.
                                </p>
                                <a href="#" class="btn btn-xs btn-brick large-padding">read more</a>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="visible-xs">
                <section class="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                The Deck House - This is a Standard Post
                            </div>
                            <div class="post-info">
                                <p>Post by <a href="#">John Doe</a> in <a href="#">general</a> on <strong>12.03.2013</strong></p>
                                <hr>
                                <p class="date">Last updated on <strong>12.03.2013</strong></p>
                            </div>
                            <div class="description">
                                <div class="flexslider blog-small-slider pull-left">
                                    <ul class="slides">
                                        <li>
                                            <div class="listing-image-slider">
                                                <!-- If you want you can also place in this small slider listing tag. -->

                                                <!--
                                                <span class="listing-tag important">Reduced</span>
                                                -->
                                                <img src="assets/images/demo-content/listing6.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing6.jpg" data-lightbox="related-8">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- If you want you can also place in this small slider property tags. -->

                                                <!--<div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-image-slider">
                                                <img src="assets/images/demo-content/listing3.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing3.jpg" data-lightbox="related-8">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- If you want you can also place in this small slider property tags. -->

                                                <!--<div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-image-slider">
                                                <img src="assets/images/demo-content/listing4.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="assets/images/demo-content/listing4.jpg" data-lightbox="related-8">
                                                            <i class="fa fa-camera"></i>
                                                        </a>
                                                    </div>
                                                    <div class="right">
                                                        <a class="inner" href="03-portfolio-detail.html">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- If you want you can also place in this small slider property tags. -->

                                                <!--<div class="image-tags">
                                                    <ul class="property-tags">
                                                        <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                                                        <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                                                        <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                    Tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies  lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus.
                                </p>
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                </p>
                                <p>
                                    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.
                                </p>
                                <p>
                                    Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat. volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
                                </p>
                                <a href="#" class="btn btn-xs btn-brick large-padding">read more</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <div class="table-row">
                        <div class="table-cell text">
                            <h4 class="uppercase">
                                Casa will help you grow your business
                            </h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                        </div>
                        <div class="table-cell">
                            <a href="#" class="btn btn-brick large-padding pull-right">get it now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>

    <section class="full-width-map">
        <div class="googleMap" data-location="331 w 4th Street, New York" data-height="300" data-offset="0"></div>
    </section>

    <div class="container">

    </div>

    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4 class="uppercase">About Casa Real Estate</h4>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p class="text-center">
                        <img src="assets/images/bricklogo.png" alt="">
                    </p>
                    <br>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <!--<div class="info-icons">
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-map-marker motive"></i>
                            </div>
                            <div class="table-cell">
                                331 W 4th St, New York, NY
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-phone motive"></i>
                            </div>
                            <div class="table-cell">
                                (049)  +1 212-242-9502
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-envelope motive"></i>
                            </div>
                            <div class="table-cell">
                                <a href="mailto:hello@brick.com">hello@brick.com</a>
                            </div>
                        </div>
                    </div>-->
                </div>
                <hr class="visible-xs">
                <div class="col-md-3 col-sm-6">
                    <h4 class="uppercase">Get In Contact</h4>
                    <br>
                    <div class="info-icons">
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-phone motive"></i>
                            </div>
                            <div class="table-cell">
                                Phone1: +1 212-242-9502
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-phone motive"></i>
                            </div>
                            <div class="table-cell">
                                Phone2: +1 212-242-9503
                            </div>
                        </div>
                        <br>
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-map-marker motive"></i>
                            </div>
                            <div class="table-cell">
                                331 W 4th St, New York, NY<br>
                                Phone +1 212-242-9502
                            </div>
                        </div>
                        <br>
                        <div class="table-row">
                            <div class="table-cell text-center">
                                <i class="fa fa-envelope motive"></i>
                            </div>
                            <div class="table-cell">
                                <a href="mailto:hello@brick.com">hello@brick.com</a><br>
                                www.casa-template.com
                            </div>
                        </div>
                    </div>
                    <h6>Lets stay in contact</h6>
                    <ul class="socials">
                        <li>
                            <a href="https://www.facebook.com/createITpl" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/createitpl" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google +"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix visible-sm"></div>
                <hr class="visible-xs">
                <div class="col-md-6">
                    <h4 class="uppercase">Quick Contact</h4>
                    <p>Posuere velit aliquet duis mollis, est non commodo luctus et normal.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="successMessage alert alert-success" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>Thank You! We will contact you shortly.</p>
                            </div>
                            <div class="errorMessage alert alert-danger" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>Ups! An error occured. Please try again later.</p>
                            </div>
                        </div>

                    </div>

                    <form role="form" action="http://brick.html.themeforest.createit.pl/assets/form/send.php" method="post" class="contactForm validateIt"
                          data-email-subject="Contact Form" data-show-errors="true">
                        <div class="row padding-xs-top">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input required type="text" name="field[]" class="form-control"
                                           placeholder="Name *">
                                </div>
                                <div class="form-group">
                                    <input required type="tel" name="field[]" class="form-control"
                                           placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input required type="email" name="field[]" class="form-control"
                                           placeholder="Email *">
                                </div>
                                <div class="form-group">
                                    <input required type="tel" name="field[]" class="form-control"
                                           placeholder="Fax">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" name="field[]" required
                                              placeholder="Your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-grey btn-lg  pull-right">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="quick-links">
                        <div class="quick-link">
                            Countries:
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">
                                    Quick Link <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="quick-link">
                            Towns:
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">
                                    Quick Link <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer-bottom">
                    <div class="col-md-10">
                        <nav class="navigation-footer">
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Cookie Policy</a>
                                </li>
                                <li>
                                    <a href="#">Social Media Terms</a>
                                </li>
                                <li>
                                    <a href="#">Satutory Information</a>
                                </li>
                                <li>
                                    <a href="#">Supply Chain</a>
                                </li>
                                <li>
                                    <a href="#">Sitemap</a>
                                </li>
                                <li>
                                    <a href="#">Mobile Site</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-2 text-right ">
                        © createIT 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>

</div>
    <!-- SCRIPTS -->
        <?php echo Asset::js('jquery.min.js')?>
        <?php echo Asset::js('bootstrap/bootstrap.min.js')?>
        <?php echo Asset::js('modernizr.custom.js')?>
        <?php echo Asset::js('jquery-ui.js')?>
        <?php echo Asset::js('lightbox-2.6.min.js')?>
        <?php echo Asset::js('device.min.js')?>
        <?php echo Asset::js('jquery.browser.min.js')?>
        <?php echo Asset::js('jquery.appear.js')?>
        <?php echo Asset::js('gmap3.min.js')?>
        <?php echo Asset::js('jquery.flexslider-min.js')?>
      
        <?php echo Asset::js('main.js') ?>


<!-- switcher -->

<!-- end switcher -->
<!-- frame -->

<!-- end frame -->
</body>

<!-- Mirrored from brick.html.themeforest.createit.pl/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Sep 2014 05:22:10 GMT -->
</html>