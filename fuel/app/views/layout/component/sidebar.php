<div class="col-md-4 sidebar-top-<?php echo $size; ?>">
    <div class="sidebar">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="search for property">
            <span class="input-group-btn">
                <button class="btn btn-Global" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
        <form>
            <h4 class="uppercase motive section-top"><strong>Find your new home</strong></h4>
            <br>
            <span class="select-box input-right" title="City">
                <select name="City" data-placeholder="City">
                    <option>City</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </span>
            
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