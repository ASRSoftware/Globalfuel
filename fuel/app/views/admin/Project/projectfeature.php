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

            <select name="location"   class="form-control" required>
                <option value="">No of Bathroom</option>
                 <?php for ($i=1;$i<=10;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
                 <?php } ?> 
               
                
            </select>
        </div>
        <div class="form-group">
            <label>Flat Loading % </label><br/>

            <select name="location"  class="form-control" required>
                <option value="">Loading % ?</option>
                <?php for ($i=10;$i<=50;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
                 <?php } ?> 
            </select>
        </div>
        <div class="form-group">
             <label>Available Floor </label>
             <select name="avilablefloor"  class="form-control" required>
           <option value="">Available Floor</option>

              <?php for ($i=1;$i<=60;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
                 <?php } ?> 
            </select>
        </div>


    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>No of Balconies</label>

            <select name="balconies"  class="form-control" required>
                 <option value="">No of Balconies</option>
                <?php for ($i=1;$i<=10;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
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

            <select name="totalfloor" class="form-control"   required>
                <option value="">Total Floor</option>
                 <?php for ($i=1;$i<=70;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
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
    <label style="margin-left:  140px;">Area</label>

</div>
<div class="row">
    <div class="col-md-6">

        <div class="form-group">
            <label for="mobilenumber">Area of the Property</label>
            <input type="number" class="form-control" id="areaofproperty" placeholder="Area of the Property" required>
        </div>




    </div>
    <div class="col-md-6">

        <div class="form-group">
            <label>Select Unit*</label><br/>

            <select name="location"  class="form-control" required>
                <option value="">Select Unit*</option>
                <option value="Sq-ft">Sq-ft</option>
                <option value="Sq-yrd">Sq-yrd</option>
                <option value="Sq-m">Sq-m</option>
                <option value="Acre">Acre</option>
                <option value="Bigha">Bigha</option>
                <option value="Hectare">Hectare</option>
                <option value="Marla">Marla</option>
                <option value="Kanal">Kanal</option>
                <option value="Biswa">Biswa1</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <label style="margin-left:  140px;">Budget</label>

</div>
<div class="row">
    <div class="col-md-12">

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

