<html>
    <head>
        <?php echo Fuel\Core\Asset::js('jquery.min.js') ?>
        <?php  echo Fuel\Core\Asset::js('city_area.js') ?>
    </head>
    <body>
        <div class="col-md-4 sidebar-top-<?php echo $size; ?>">
            <div class="sidebar">
                <form action ="<?php echo Uri::base(false);?>search" method="POST">
                    <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
                    <br>

                    <span class="input-right" title="City">
                        <select class="form-control" name="city" id="city" data-placeholder="City" onchange="loadCityArea(this.value)"> 
                            <option>Select City</option>

                    

                            <?php
                                $cityname = new loadData();
                                $city = $cityname->get_city_data();
                                foreach ($city as $value) {
                                    echo '<option value=' . $value['city_id'] . '>' . $value['city_name'] . '</option>';
                                }
                            ?> 
                        </select>
                    </span>
                    <br>
                    <span class=" input-right" title="Location">
                        <select class="form-control" name="location" id="location" data-placeholder="Location" onchange="loadlocality(this.value)">
                            <option>Location</option>
                        </select>
                    </span>
                   <br>


                    <span class="input-right" >
                        <select class="form-control" id="area" name="area" data-placeholder="area">
                            <option>Area</option>

                        </select>
                    </span>
<br>
                    <span title="buyrent">
                        <input type="radio" name="buyrent" value="buy">Buy
                        <input type="radio" name="buyrent" value="rent">Rent
                    </span> 
                    
                    <div class="row">
                        <div class="col-md-6">
                            <span class="input-right" title="Bedrooms">
                                <select class="form-control" id="bedrooms" name="bedrooms" data-placeholder="Bedrooms">
                                    <option>Bedrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="3">6</option>
                                    <option value="4">7</option>
                                    <option value="5">8</option>
                                    <option value="5">9</option>
                                    <option value="5">10</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="slider-range-container">
                        <div class="row">
                            <div class="header">
                                <div class="col-xs-6">
                                    <input type="text" id="amount-min" name="amount-min">
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" id="amount-max" name="amount-max">
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
                    <input type="submit" class="btn btn-brick flat btn-block uppercase" value="Find Property">
                </form>
            </div>
        </div>

    </body>
</html>