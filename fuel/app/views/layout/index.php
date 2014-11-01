<?php echo $header;?>
    <div class="container">

    </div>

    <section class="flexslider std-slider" data-height="570" data-direction="horizontal" data-animation="fade" data-loop="true" data-smooth="false" data-slideshow="true" data-speed="25000" data-animspeed="550" data-controls="false" data-dircontrols="true">
        <ul class="slides">
            <li data-bg="<?php echo Uri::base(false);?>assets/img/demo-content/house.jpg">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-4 col-md-offset-4">
                                <div class="object animated big" data-top="200px" data-fx="fadeInUp">Welcome<br> home!</div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <img class="object animated" data-top="136px" data-fx="fadeInRightBig" src="<?php echo Uri::base(false);?>assets/img/demo-content/family.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-bg="<?php echo Uri::base(false);?>assets/img/demo-content/house2.jpg">
                <div class="inner">
                    <img class="object animated absolute hidden-xs" data-top="0" data-right="0" data-fx="fadeInRightBig" src="<?php echo Asset::img('demo-content/keyhands.png');?>" >
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-7 col-md-7 col-md-offset-4">
                                <div class="object animated big" data-top="200px" data-fx="fadeInUp">Open the door<br> to your dreams!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li data-bg="<?php echo Uri::base(false);?>assets/img/demo-content/house3.jpg">
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
    </section>

    <div class="container">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 sidebar-top-max">
                <div class="sidebar">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search for property">
                              <span class="input-group-btn">
                                <button class="btn btn-Global" type="button"><i class="fa fa-search"></i></button>
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
                    <a class="btn btn-Global flat btn-block uppercase">

                        Find Property
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="caption">
                    <h3 class="uppercase">
                        Welcome to "Global Real Estate"
                    </h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-link dropdown-toggle uppercase" data-toggle="dropdown">
                        Show all offerings <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
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
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">New</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing5.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing5.jpg" data-lightbox="related-1">
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
                                            <div class="description">
                                                <h4>Alemanys 5<br>
                                                    <small>Australia, Caslecrag</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    2 750 000 USD
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">New</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing2.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing2.jpg" data-lightbox="related-3">
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
                                            <div class="description">
                                                <h4>Villa Överby<br>
                                                    <small>Sweden, Stockholm</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    1 250 000 USD
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">New</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing4.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing4.jpg" data-lightbox="related-4">
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
                                            <div class="description">
                                                <h4>Cosgriff House<br>
                                                    <small>Australia, Sydney</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    2 750 000 USD
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>

                                            <ul class="property-tags">
                                                <li><span data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-home"></i> 546 sqm</span></li>
                                                <li><span data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="icon-bed"></i> 3</span></li>
                                                <li><span data-toggle="tooltip" data-placement="right" title="Tooltip on right"><i class="icon-shower"></i> 5</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">New</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing9.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing9.jpg" data-lightbox="related-5">
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
                                            <div class="description">
                                                <h4>Casa Del Viento<br>
                                                    <small>Mexico, Morelos</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    2 750 000 USD
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section>
                    <div class="flexslider title-slider" data-animation="fade" data-loop="true">
                        <div class="title">
                            Best Offerings
                        </div>
                        <ul class="slides">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">Reduced</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing10.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing10.jpg" data-lightbox="related-6">
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
                                            <div class="description">
                                                <h4>Gatineau Hills<br>
                                                    <small>Canada, Quebec</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    1 600 USD/p month
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail boxed">
                                            <div class="listing-image">
                                                <span class="listing-tag important">New</span>
                                                <img src="<?php echo Uri::base(false);?>assets/img/demo-content/listing6.jpg" alt="Listing">
                                                <div class="image-links">
                                                    <div class="left">
                                                        <a class="inner" href="<?php echo Uri::base(false);?>assets/img/demo-content/listing5.jpg" data-lightbox="related-7">
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
                                            <div class="description">
                                                <h4>Alemanys 5<br>
                                                    <small>Australia, Caslecrag</small></h4>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <strong>Property Type:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Villa
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Property Size:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 000 Sq
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <strong>Rooms:</strong>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        6 Bed, 4 Bath
                                                    </div>
                                                </div>
                                                <hr>
                                                <span class="price-tag">
                                                    2 750 000 USD
                                                </span>
                                                <a href="#" class="btn btn-link " role="button">+ Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
    <!-- 

    <div class="parallax" style="background-image: url('<?php echo Uri::base(false);?>assets/img/demo-content/parallax3.jpg')">
    <div class="parainner">
        <div class="overlay-parallax"></div>
        <div class="inner">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-slider">
                            <ul class="slides">
                                <li>
                                    <span class="big-icon"><i class="fa fa-key"></i> </span>
                                    <br>
                                    <span class="h2 uppercase drop-shadow">Animated and awesome looking parallax sections</span>
                                    <br>
                                    <span class="h3 motive">John Doe, CEO Global  Company</span>
                                </li>
                                <li>
                                    <span class="h2 uppercase drop-shadow">Global real estate template is</span>
                                    <br>
                                    <p class="drop-shadow">
                                        <span class="heading">Responsive and looks great on all devices</span>
                                        <br>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 drop-shadow">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat et nibh id hendrerit. , et commodo nisl sodales vel. Etiam sit amet Duis pellentesque vulputate tortor, ac volutpat in. In ultrices metus purus comot es.
                                        </div>
                                    </div>
                                    <a href="#" class="btn-parallax">Learn more!</a>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-circle pull-left" alt="" src="<?php echo Uri::base(false);?>assets/img/demo-content/customer.jpg">
                                        <div class="media-body text-left">
                                            <h3 class="uppercase">Ear what our customers say</h3>
                                            <br>
                                            <p>
                                                "Global" is simply awesome and stunning. It helped me to grow my business in an very intense and great way! Thank you so much guys!”
                                            </p>
                                            <span class="h6 motive">Julia Densmore - A fake company</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>
-->
    <div class="container">

    </div>

    <div class="grey-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        Buying a property with Global Real Estate
                    </div>
                    <img src="<?php echo Uri::base(false);?>assets/img/demo-content/buyingproperty.jpg" alt="" class="fit-image">
                    <div class="caption">
                        <h3 class="uppercase">Welcome to your new home</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                    <a href="#" class="btn btn-brick btn-xs large-padding">learn more</a>
                </div>
                <hr class="visible-xs visible-sm">
                <div class="col-md-5 col-md-offset-2">
                    <div class="title">
                        My Global Real Estate Section
                    </div>
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#Global" data-toggle="tab">My House</a></li>
                        <li><a href="#why" data-toggle="tab">Why with us?</a></li>
                        <li><a href="#smooth" data-toggle="tab">Smooth move!</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="Global">
                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat et nibh id hendrerit. , et commodo nisl sodales vel. Etiam sit amet Duis pellentesque vulputate tortor, ac volutpat in. In ultrices metus purus comot es.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="why">
                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat et nibh id hendrerit. , et commodo nisl sodales vel. Etiam sit amet Duis pellentesque vulputate tortor, ac volutpat in. In ultrices metus purus comot es.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="smooth">
                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat et nibh id hendrerit. , et commodo nisl sodales vel. Etiam sit amet Duis pellentesque vulputate tortor, ac volutpat in. In ultrices metus purus comot es.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <h3 class="uppercase">Your area</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                    <a href="#" class="btn btn-brick btn-xs large-padding">log in</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    
    </div>

    

    <div class="container">

    </div>



    <div class="container">

    </div>

    
     <!-- footer  start here -->

    <?php echo $footer; ?>