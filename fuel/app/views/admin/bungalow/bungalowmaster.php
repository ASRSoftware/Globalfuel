<div class="form-group">
    <label class="radio-inline">
        <input type="radio" required="" name="sale" id="inlineRadio1" value="sale" >For Sale
    </label>
    <label class="radio-inline">
        <input type="radio" name="sale" id="inlineRadio2" value="rent"> Rent
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
        <select name="" id="" class="form-control" required>
            <option value="">select unit</option>
            <option value="">sq. ft</option>
            <option value="">meter</option>
            <option value="">mile</option>
            <option value="">yard</option>
        </select>
    </div>

</div>
<legend>Location</legend>
<div class="form-group " >

    <label for="Baunglow_area">Location of Bungalow*:</label>
    <select  class="form-control" name="location" required>
        <option>Select Location</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>

<div class="form-group">
    <label for="Baunglow_area">City*:</label>
    <select  class="form-control" name="city" required>
        <option>Select city</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<legend>Sale Price</legend>
<div class="row">
    <div class="col-md-3">Expected Price*:</div>
    <div class="col-md-3">
        <select name="" id="" class="form-control" required>
            <option value="">Crore</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">more</option>
        </select>
    </div>
    <div class="col-md-3">
        <select name="" id="" class="form-control" required>
            <option value="">Lac</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">more</option>
        </select>
    </div>
    <div class="col-md-3">
        <select name="" id="" class="form-control" required>
            <option value="">Thousands</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">more</option>
        </select>
    </div>
    <br /><br /><br />
    <div class="row">
        <div class="col-md-2 col-md-offset-3"> <label for="inptprice">Or</label></col-md-3></div>
        <div class="col-md-5"><label for="inptprice"><input type="text" class="form-control" name='price' placeholder="Enter price" /></label></div>
    </div>
     
</div>
<div class="row">
    <div class="col-md-3"> Price per Sq-ft:</div>
    <div class="col-md-5"> <input type="text" class="form-control" name='pricesqft' placeholder="Enter price sq.ft" /></div>
</div>
<legend>Transaction Type , Property Availability or Age of Construction</legend>
<div class="row">
    <div class="col-md-4"><label>Transaction Type*:</label> </div>
    <div class="col-md-6">
        <label fo class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="New Bungalow"> New Bungalow
        </label>
        <label fo class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Resale Bungalow"> Resale Bungalow
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

