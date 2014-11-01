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
            
            <?php echo $sidebar ?>
           
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
            <?php echo $recent_listing ?>
            <?php echo $best_offer ?>
           
        </div>
    </div>

    <div class="container">

    </div>
   
    <div class="container">

    </div>

    
    
     <!-- footer  start here -->

    <?php echo $footer; ?>