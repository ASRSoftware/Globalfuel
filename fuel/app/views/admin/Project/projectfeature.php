<html>
    <head>
       <link rel="stylesheet" type="text/css" href="<?php echo Uri::base(false);?>checkboxcss/bootstrap-select.css">
  <script type="text/javascript" src="<?php echo Uri::base(false);?>checlboxjs/bootstrap-select.js"></script>
       <?php echo Fuel\Core\Asset::js('multiple select.js') ?>
    </head>
    <body>
<div class="row">
    <label style="margin-left:  120px;">Flat Plan</label>
</div>
<div class="row">
    <div class="col-md-6">


        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                1RK
            </label>

        </div>
        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                1BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label  >
                <input type="checkbox" value="">
                2BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label >
                <input type="checkbox" value="">
                3BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                4BHK 
            </label>

        </div>
    </div>
    <div class="col-md-6">
        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                1.5BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label >
                <input type="checkbox" value="">
                2.5BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label >
                <input type="checkbox" value="">
                3.5BHK
            </label>

        </div>
        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                4.5BHK 
            </label>

        </div>
        <div class="checkbox"> 
            <label>
                <input type="checkbox" value="">
                5BHK 
            </label>

        </div>
    </div>
</div>
<div class="row">
    <label style="margin-left:  80px;">Facilities of the flat</label>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>No of Bathroom</label>

            <select name="bathroom"   class="form-control" class="selectpicker" multiple required>
                <option value="">No of Bathroom</option>
                <?php foreach ($number as $key => $value) { ?>
                    <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                <?php } ?>  


            </select>
        </div>
        <div class="form-group">
            <label>Flat Loading % </label><br/>

            <select name="loading"  class="form-control" required>
                <option value="">Loading % ?</option>
                <?php foreach ($number as $key => $value) { ?>
                    <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                <?php } ?> 
            </select>
        </div>
        <div class="form-group">
            <label>Available Floor </label>
            <select name="avilablefloor"  class="form-control" required>
                <option value="">Available Floor</option>

                <?php foreach ($number as $key => $value) { ?>
                    <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                <?php } ?> 
            </select>
        </div>


    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>No of Balconies</label>

            <select name="balconies"  class="form-control" required>
                <option value="">No of Balconies</option>
                <?php foreach ($number as $key => $value) { ?>
                    <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                <?php } ?>  
            </select>
        </div>
        <div class="form-group">
            <label>No of Balconies</label>

            <select name="location"  class="form-control" required>
                <option value="">No of Balconies</option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Total No Of the Floor</label>
            <select name="totalfloor" class="form-control"  class="selectpicker"multiple required>
                <option value="">Total Floor</option>
                <?php foreach ($number as $key => $value) { ?>
                    <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                <?php } ?>     
            </select>

        </div>
    </div>
</div>
<div class="row">
    <label style="margin-left:  120px;">Images</label>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Flat Images</label>
            <input type="file" multiple name="flatimage" class="form-control" value="" required>
            <span id="validation" style="color: red"></span>
        </div>   
        <div class="form-group">
            <label>Images Of Floor Plan</label>
            <input type="file" multiple name="AminitiesImages" class="form-control" value="" required>
            <span id="validation" style="color: red"></span>
        </div>  
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Images Of master plan</label>
            <input type="file" multiple name="AminitiesImages" class="form-control" value="" required>
            <span id="validation" style="color: red"></span>
        </div> 
        <div class="form-group">
            <label>Other Images</label>
            <input type="file" multiple name="AminitiesImages" class="form-control" value="" required>
            <span id="validation" style="color: red"></span>
        </div>  
    </div>
</div>
<div class="row">
    <label style="margin-left:  160px;">Area</label>

</div>


<div class="row">
    <div class="col-md-3"><label for="Property_area" >Total area:</label></div>
    <div class="col-md-5"><input type="number" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Plot area" name="total_area" ></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" >
            <?php foreach ($unit as $key => $value) { ?>
                <option value="<?php echo $value['unit_id'] ?>"><?php echo $value['unit_name'] ?></option>
            <?php } ?>
        </select>
    </div>

</div><br />




<div class="row">
    <div class="col-md-3"><label for="Property_area" >Plot area:</label></div>
    <div class="col-md-5"><input type="number" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Plot area" name="plot_area" ></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" >
            <?php foreach ($unit as $key => $value) { ?>
                <option value="<?php echo $value['unit_id'] ?>"><?php echo $value['unit_name'] ?></option>
            <?php } ?>
        </select>
    </div>

</div><br />
<div class="row">
    <div class="col-md-3"><label for="Property_area" >Carpet area:</label></div>
    <div class="col-md-5"><input type="number" class="form-control col-xs-4" id="exampleInputEmail1" placeholder="Plot area" name="total_area" ></div>
    <div class="col-md-4">
        <select name="" id="" class="form-control" >
            <?php foreach ($unit as $key => $value) { ?>
                <option value="<?php echo $value['unit_id'] ?>"><?php echo $value['unit_name'] ?></option>
            <?php } ?>
        </select>
    </div>

</div><br />
<!--<div class="row">
    <label style="margin-left:  140px;">Budget</label>

</div>-->
<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-3" ><b>Expected Price*:</b></div>
            <div class="col-md-3">
                 <label>Crore</label>
                <select name="" id="crore" class="form-control" required>
                    <option value="0">Crore</option>
                    <?php foreach ($number as $key => $value) { ?>
                        <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                    <?php } ?>  
                </select>
            </div>
            <div class="col-md-3">
                <label>Lac</label>
                <select name="" id="lac" class="form-control" required>
                    <option value="0">Lac</option>
                    <?php foreach ($number as $key => $value) { ?>
                        <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                    <?php } ?>  
                </select>
            </div>
            <div class="col-md-3">
                <label>Thousands</label>
                <select name="" id="thousand" class="form-control" required>
                    <option value="0">Thousands</option>
                    <?php foreach ($number as $key => $value) { ?>
                        <option value="<?php echo $value['number_id'] ?>"><?php echo $value['number'] ?></option>
                    <?php } ?>
                </select>
            </div <br />
            <br /><br /><br />
            <div class="row">
               
                <br /><div class="col-md-2 col-md-offset-3"> <label for="inptprice">Or</label></col-md-3></div>
                <div class="col-md-5"><label for="inptprice"><input type="text" class="form-control"id="price" name='price' placeholder="Enter price" /></label></div>
            </div><br/>


        </div>
    </div>
</div>

<div class="col-md6">
    <div class="row">
        <label>Price per Unit*</label>

        <input type="text" class="form-control" name='perunit'style="width: 200px" placeholder="Enter price" />
    </div><br/>
    <div class="row">
        <div class="form-group">
            <label>Enter Some Effective Description Here*</label><br/>
            <textarea class="form-control" style="width: 414px; height:131px;  "placeholder="Enter the MeaningFull  Description Here"></textarea>
        </div>
    </div>
</div><br/>





<div class="checkbox">
    <div class="form-group">
        <label>
            <input type="checkbox" name="check"value="check" > Every thing is OK
        </label>
    </div>
</div>
<br/>
<button type="submit" class="btn btn-primary btn-lg" style="margin-bottom: 40px;">Save Your Post</button>

</body>
</html>