<style type="text/css">
    #rent{

    }
</style>

<div class="form-group rentandsaleselection">
    <label class="radio-inline">
        <input checked type="radio" required="" name="sale" id="inlineRadio1" value="sale" onchange="">For Sale
    </label>
    <label class="radio-inline">
        <input type="radio" name="sale" id="inlineRadio2" value="rent" onchange=""> Rent
    </label>
</div>
<div class="row">
    <div class="col-md-4"><label for="propertytype">Type of Property*:</label></div>
    <div class="col-md-8">
        <select name="" id="propertytype" class="form-control">
            <?php 
            foreach ($propertytype as $key=>$value){ ?>
                <option value="<?php  echo $value['property_id'] ?>"><?php echo $value['propertype_name']  ?></option>
           <?php }  ?>
        </select>
    </div>
</div><br />
<div class="row">
    <div class="col-md-4"><label for="propertytype">Property Sub type*:</label></div>
    <div class="col-md-8">
        <select name="" id="" class="form-control">
            <?php 
            foreach ($propertytype as $key=>$value){ ?>
                <option value="<?php  echo $value['property_id'] ?>"><?php echo $value['propertype_name']  ?></option>
           <?php }  ?>
        </select>
    </div>
</div>


<legend>Area</legend>
<div class="row">
    <div class="col-md-4"><label for="Property_area" >Covered area*:</label></div>
    <div class="col-md-4"><input type="text" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Covered area" name="covered_area" required></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" required>
            <option value="">select unit</option>
            <option value="">sq. ft</option>
            <option value="">meter</option>
            <option value="">mile</option>
            <option value="">yard</option>
        </select>
    </div>

</div><br />
<div class="row">
    <div class="col-md-4"><label for="Property_area" >Plot area:</label></div>
    <div class="col-md-4"><input type="text" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Plot area" name="plot_area" ></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" >
            <option value="">select unit</option>
            <option value="">sq. ft</option>
            <option value="">meter</option>
            <option value="">mile</option>
            <option value="">yard</option>
        </select>
    </div>

</div><br />
<div class="row">
    <div class="col-md-4"><label for="Property_area" >Carpet area:</label></div>
    <div class="col-md-4"><input type="text" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Carpet area" name="carpet_area" ></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" >
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

    <label for="Property_area">Location of Property*:</label>
    <select  class="form-control" name="location" required>
        <option>Select Location</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>

<div class="form-group">
    <label for="Property_area">City*:</label>
    <select  class="form-control" name="city" required>
        <option>Select city</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div class="form-group " >

    <label for="Property_area">Name of Project/Society:</label>
    <select  class="form-control" name="location" >
        <option>Select Project</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div id="container-sale">
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
</div>
<div id="container-rent" style="display:none">
    <legend>Monthly Rent</legend>
    <div class="row">
        <div class="col-md-3">Expected Rent*:</div>
        <div class="col-md-3">
            <select name="" id="" class="form-control" required>
                <option value="">Thousands</option>
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
        <div class="col-md-3">
            <select name="" id="" class="form-control" required>
                <option value="">Hundred</option>
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
</div>
<legend>Transaction Type , Property Availability or Age of Construction</legend>
<div class="row">
    <div class="col-md-4"><label>Transaction Type*:</label> </div>
    <div class="col-md-6">
        <label fo class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="New Property"> New Property
        </label>
        <label fo class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Resale Property"> Resale Property
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

