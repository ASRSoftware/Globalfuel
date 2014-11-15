<?php echo $msg?>
<div class="form-group rentandsaleselection">
    <label class="radio-inline">
        <input type="radio" required="" name="sale" id="inlineRadio1" value="1" >For Sale
    </label>
    <label class="radio-inline">
        <input type="radio" name="sale" id="inlineRadio2" value="2"> Rent
    </label>
</div>
<div class="form-group">
    <label for="bunglowname">Bungalow Name* :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bungalow name" name="bunglowname" required>
</div>
<div class="form-group">
    <label for="bunglowname">Developer Name* :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Developer name" name="developername" required>
</div>

<legend>Area</legend>
<div class="row">
    <div class="col-md-4"><label for="Bungalow_area" >Bungalow area*:</label></div>
    <div class="col-md-4"><input type="text" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Bungalow area" name="bungalow_area" required></div>
    <div class="col-md-4">
        <select name="unitname" id="" class="form-control" required>
            <?php foreach ($unit as $key => $value) { ?>
                <option value="<?php echo $value['unit_name']; ?>"><?php echo $value['unit_name'] ?> </option>
            <?php } ?>
        </select>
    </div>

</div>
<legend>Location</legend>
<div class="form-group">
    <label for="Baunglow_area">City*:</label>
    <span class="input-right" title="City">
        <select class="form-control" name="city" id="city" data-placeholder="City" onchange="loadCityArea(this.value);"> 
            <option value="">Select City</option>
            <?php
            $cityname = new loadData();
            $city = $cityname->get_city_data();
            foreach ($city as $value) {
                echo '<option value=' . $value['city_id'] . '>' . $value['city_name'] . '</option>';
            }
            ?> 
        </select>
    </span>
</div>

<span class=" input-right" title="Location">
    <label for="Property_area">City Area*:</label>
    <select class="form-control" name="location" name="city_area" id="location" data-placeholder="Location" onchange="loadlocality(this.value)">
        <option value="">Location</option>
    </select>
</span>
<br>
<br>


<span class="input-right" >
    <label for="locality">Locality*:</label>
    <select class="form-control" id="area" name="area" data-placeholder="area" onchange="loadProjectSociety(this.value);">
        <option>Area</option>

    </select>
</span>
<div id="container-sale">
<legend>Sale Price</legend>
<div class="row">
    <div class="col-md-3">Expected Price*:</div>
    <div class="col-md-3">
        <select name="0" id="crore" class="form-control" required>
            <option value="0">Crore</option>
            <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-3">
        <select name="" id="lac" class="form-control" required>
            <option value="0">Lac</option>
            <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-3">
        <select name="" id="thousand" class="form-control" required>
            <option value="0">Thousands</option>
            <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
    <br /><br /><br />
    <div class="row">
        <div class="col-md-2 col-md-offset-3"> <label for="inptprice">Or</label></col-md-3></div>
        <div class="col-md-5"><label for="inptprice"><input type="text" class="form-control" id="price" name='price' placeholder="Enter price" /></label></div>
    </div>
    <div class="row">
    <div class="col-md-3"> Price per Sq-ft:</div>
    <div class="col-md-5"> <input type="text" class="form-control" name='pricesqft' placeholder="Enter price sq.ft" /></div>
</div>

</div>
</div>
<div id="container-rent" style="display:none">
    <legend>Monthly Rent</legend>
    <div class="row">
        <div class="col-md-3">Expected Rent*:</div>
        <div class="col-md-3">
            <select name="lac"  class="form-control rentlacs" required id="lacs">
                <option value="0">Lac</option>
                <?php
                foreach ($number as $key => $value) {
                    echo '<option value="' . $value['number_id'] . '">' . $value['number'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <select name="thousand"  class="form-control rentthousands" required id="thousands">
                <option value="0">Thousands</option>

                <?php
                foreach ($number as $key => $value) {
                    echo '<option value="' . $value['number_id'] . '">' . $value['number'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <select name="hundred"  class="form-control renthundred" required id="hundreds">
                <option value="0">Hundred</option>
                <?php
                foreach ($number as $key => $value) {
                    echo '<option value="' . $value['number_id'] . '">' . $value['number'] . '</option>';
                }
                ?>
            </select>
        </div>
        <br /><br /><br />
        <div class="row">
            <div class="col-md-2 col-md-offset-3"> <label for="inptprice">Or</label></col-md-3></div>
            <div class="col-md-5"><label for="inptprice"><input type="text" class="form-control rentprice" id="pricerent" name='pricerent' placeholder="Enter price" /></label></div>
        </div>

    </div>
</div>

<legend>Transaction Type , Property Availability or Age of Construction</legend>
<div class="row">
    <div class="col-md-4"><label>Transaction Type*:</label> </div>
    <div class="col-md-6">
        <label fo class="radio-inline">
            <input type="radio" name="transaction_type" id="inlineRadio1" value="New Bungalow"> New Bungalow
        </label>
        <label fo class="radio-inline">
            <input type="radio" name="transaction_type" id="inlineRadio1" value="Resale Bungalow"> Resale Bungalow
        </label>
    </div>
</div>
<div class="row">
    <div class="col-md-4"><label>Possession Status*:</label></div>
    <div class="col-md-8">
        <label fo class="radio-inline">
            <input type="radio" name="Possession" id="inlineRadio1" value="Under Construction"> Under Construction
        </label>
        <label fo class="radio-inline">
            <input type="radio" name="Possession" id="inlineRadio1" value="Ready To Move"> Ready To Move
        </label>
    </div>
</div>

