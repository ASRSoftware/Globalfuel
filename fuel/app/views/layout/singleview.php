<?php echo $header; ?>
<!--            header end here-->

<section class="parallax parallax-header" style="background-image: url('<?php echo Uri::base(false) ?>assets/img/demo-content/properties_parallax.jpg')">

</section>

<div class="container">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 sidebar-top-small">
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

                <hr>
                <div id="featured" class="flexslider title-slider" data-animation="fade" data-loop="true">
                    <div class="title clear-title">
                        Featured Properties
                    </div>
                    <ul class="slides">
                        <li>
                            <div class="thumbnail clean">
                                <div class="listing-image">
                                    <span class="listing-tag important">Reduced</span>
                                    <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/listing1.jpg" alt="Listing">
                                    <div class="image-links">
                                        <div class="left">
                                            <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/listing1.jpg" data-lightbox="related-10">
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
                                <a href="#" class="btn btn-link" role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
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
                                    <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/listing2.jpg" alt="Listing">
                                    <div class="image-links">
                                        <div class="left">
                                            <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/listing2.jpg" data-lightbox="related-9">
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
                                <a href="#" class="btn btn-link" role="button">+ Show Details</a> <span class="price-tag pull-right"><strong>$2.650.000</strong></span>
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
        </div>
        <div class="col-md-8">
            <div class="breadcrumbs">
                <ol class="breadcrumb text-right">
                    <li><a href="index-2.html">Home</a></li><li class="active">Property Detail</li>
                </ol>
            </div>
            <section>
                <div class="title">
                    Gatineau Hills - Living in the woods
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#property" data-toggle="tab">Property</a></li>
                    <li><a href="#interior" data-toggle="tab">Interior</a></li>
                    <li><a href="#baseplan" data-toggle="tab">Baseplan</a></li>
                    <li><a href="#location-map" data-toggle="tab">Location</a></li>
                    <li><a href="#video" data-toggle="tab">Video</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="property">
                        <div class="flexslider property-slider inner-slider">
                            <ul class="slides-inner">
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/listing10.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/listing10.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/listing8.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/listing8.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh01.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh01.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh02.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh02.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh04.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh04.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh06.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh06.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh07.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh07.jpg" data-lightbox="related-30">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="interior">
                        <div class="flexslider property-slider inner-slider">
                            <ul class="slides-inner">
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/listing13.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/listing13.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh10.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh10.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh11.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh11.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh13.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh13.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh12.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh12.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh16.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh16.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="listing-image-slider">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh17.jpg" alt="Listing">
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="<?php echo Uri::base(false) ?>assets/img/demo-content/gh17.jpg" data-lightbox="related-40">
                                                    <i class="fa fa-camera"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="baseplan">
                        <img class="fit-image" src="<?php echo Uri::base(false) ?>assets/img/demo-content/gh20.jpg" alt="Listing">
                    </div>
                    <div class="tab-pane fade" id="location-map">
                        <div class="googleMap" data-location="331 w 4th Street, New York" data-height="500" data-offset="0"></div>
                    </div>
                    <div class="tab-pane fade" id="video">
                        <div class="fit-video">
                            <iframe src="http://player.vimeo.com/video/60147471?title=0&amp;byline=0&amp;portrait=0" width="620" height="349" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </section>
            <section>
                <div class="caption">
                    <h3>Gatineau Hills - Living in an extraordinary place</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
                    <p>Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                </div>
                <br>
                <h4>STANDARD PROPERTY INFO (Single Family Residence)</h4>
                <br>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Last Updated</td>
                            <td>12.04.2013</td>
                        </tr>
                        <tr>
                            <td>Year Built</td>
                            <td>2010</td>
                        </tr>
                        <tr>
                            <td>Home Size</td>
                            <td>546 square Feet</td>
                        </tr>
                        <tr>
                            <td>Lot Size</td>
                            <td>2360 square Feet</td>
                        </tr>
                        <tr>
                            <td>Days in stock</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <ul class="property-tags important">
                    <li><span><i class="icon-house"></i> 546<br><span class="small">Square Feet</span></span></li>
                    <li><span><i class="icon-bed"></i> 5<br><span class="small">Bedrooms</span></span></li>
                    <li><span><i class="icon-shower"></i> 3<br><span class="small">Bathrooms</span></span></li>
                    <li><span><i class="icon-garage"></i> 1<br><span class="small">Garages</span></span></li>
                </ul>
                <br>
                <h4>Aditional Property Info</h4>
                <br>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Air Conditioned</td>
                            <td>Fully Air Conditioned</td>
                        </tr>
                        <tr>
                            <td>Acres Source</td>
                            <td>Accessor</td>
                        </tr>
                        <tr>
                            <td>AP#</td>
                            <td>999-888-777</td>
                        </tr>
                        <tr>
                            <td>Bedroom Features</td>
                            <td>Floor hear in Master Bedroom</td>
                        </tr>
                        <tr>
                            <td>City Inspect</td>
                            <td>Y</td>
                        </tr>
                        <tr>
                            <td>Consider Lease</td>
                            <td>N</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>USA</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>Cross Streets</td>
                            <td>Abbey Road</td>
                        </tr>
                        <tr>
                            <td>Dinning Area</td>
                            <td>Kitchen / Combo</td>
                        </tr>
                        <tr>
                            <td>Disability Access</td>
                            <td>Y</td>
                        </tr>
                        <tr>
                            <td>Entry Location</td>
                            <td>Ground Level with steps</td>
                        </tr>
                        <tr>
                            <td>Exterior Construction</td>
                            <td>Concrete / Wood</td>
                        </tr>
                        <tr>
                            <td>Fireplace</td>
                            <td>Y x2</td>
                        </tr>
                        <tr>
                            <td>Floors</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Heat</td>
                            <td>Floor Heat</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <span class="price-tag pull-right important"><strong>$2.650.000</strong></span>
                <div class="clearfix"></div>
                <hr>
            </section>
            <section>
                <div class="title">
                    Like this property? - Please contact our agent to schedule a showing
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="person-box">
                            <div class="person-image">
                                <div class="person-image-content">
                                    <div class="inner">
                                        <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/agent1.jpg" alt="Listing">
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
                            <p>
                                <span class="h6 uppercase motive">Contact 1</span><br>
                                Tel. 0049 40 98 76 54 - 3<br>
                                e-mail: amkaufman@brick.com
                            </p>
                            <p>
                                <span class="h6 uppercase motive">Contact 2</span><br>
                                Tel. 0049 40 98 76 54 - 3<br>
                                e-mail: amkaufman@brick.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
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

                        <form role="form" action="http://brick.html.themeforest.createit.pl/<?php echo Uri::base(false) ?>assets/form/send.php" method="post" class="contactForm validateIt"
                              data-email-subject="Contact Form" data-show-errors="true">
                            <div class="row padding-xs-top">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="propertyID">Property ID:</label>
                                        <input id="propertyID" required type="text" name="field[]" class="form-control"
                                               placeholder="999-888-777" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nameInput">Name: *</label>
                                        <input id="nameInput" required type="text" name="field[]" class="form-control"
                                               placeholder="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">Email: *</label>
                                        <input id="emailInput" required type="email" name="field[]" class="form-control"
                                               placeholder="hello@johndoe.com">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="phoneInput">Phone Nr.:</label>
                                        <input id="phoneInput" type="tel" name="field[]" class="form-control"
                                               placeholder="+49 (40) 98 65 43 21 -0">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="faxInput">Fax</label>
                                        <input id="faxInput" type="tel" name="field[]" class="form-control"
                                               placeholder="+49 (40) 98 65 43 21 -0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="messageInput">Message: *</label>
                                        <textarea id="messageInput" class="form-control" rows="5" name="field[]" required
                                                  placeholder="Your Message">Hello, im very interested in this property!
                                            Please send me info for a showing!

                                            Kind regards,
                                            John Doe</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-xs btn-brick large-padding pull-right">Send Message</button>
                                </div>
                            </div>
                        </form>
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
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="uppercase">We're proud to work with these partners</h3>
            <h4>Pellentesque habitant morbi tristique senectus et et malesuada fames ac turpis.</h4>
        </div>
    </div>
</div>

<section class="grey-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partners flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner1.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner3.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner5.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner7.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner4.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner2.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner6.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner7.png" alt="preview">
                        </li>
                        <li>
                            <img src="<?php echo Uri::base(false) ?>assets/img/demo-content/partner8.png" alt="preview">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">

</div>

<section class="full-width-map padding-top-medium">
    <div class="googleMap" data-location="331 w 4th Street, New York" data-height="300" data-offset="0"></div>
</section>

<div class="container">

</div>

<?php echo $footer; ?>