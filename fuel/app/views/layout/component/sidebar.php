
        <?php echo Fuel\Core\Asset::js('jquery.min.js') ?>
        <?php  echo Fuel\Core\Asset::js('city_area.js') ?>

        <div class="col-md-4 sidebar-top-<?php echo $size; ?>">
            <div class="sidebar">
                <!--        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search for property">
                            <span class="input-group-btn">
                                <button class="btn btn-Global" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>-->

                <form>
                    <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
                    <br>
                    <span class="select-box input-right" title="City">
                        <select name="City" data-placeholder="City"  onchange="<?php echo '<script type="text/javascript">    loadCityArea();      </script>' ?>">
                            <option>City</option>
                            <?php
                            $cityname = new loadData();
                            $city = $cityname->get_city_data();
                            foreach ($city as $value) {
                                echo '<option value=' . $value['city_id'] . '>' . $value['city_name'] . '</option>';
                            }
                            ?> 
                        </select>
                    </span>

                    <span class="select-box input-right" title="Location">
                        <select name="Location" id="location" data-placeholder="Location">
                            <option>Location</option>

                        </select>
                    </span>


                    <span class="select-box input-right" title="Bathrooms">
                        <select name="area" data-placeholder="area">
                            <option>Area</option>

                        </select>
                    </span>

                    <span title="buyrent">
                        <input type="radio" name="buyrent" value="buy">Buy
                        <input type="radio" name="buyrent" value="rent">Rent
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