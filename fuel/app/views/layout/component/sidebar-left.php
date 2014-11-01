    <div class="container">  <!-- Sidebar start here -->
        <div class="row">
            <div class="col-md-4 sidebar-top-small">
                <div class="sidebar" style="margin-bottom:10px;">
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
                                        
                                        <img <?php echo Asset::img('demo-content/listing1.jpg')?>/>
                                        <div class="image-links">
                                            <div class="left">
                                                <a class="inner" href="assets/images/demo-content/listing1.jpg" data-lightbox="related-10">
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
                                        <h4>Villa �verby<br>
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
                                        
                                        <img <?php echo Asset::img('demo-content/listing2.jpg')?>/>
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
                                        <h4>Villa �verby<br>
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
            </div> <!-- Sidebar end here-->