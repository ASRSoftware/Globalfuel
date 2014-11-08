<html>
    <head>
        <?php echo Fuel\Core\Asset::js('jquery.min.js') ?>
        <?php  echo Fuel\Core\Asset::js('city_area.js') ?>
        <?php  echo Fuel\Core\Asset::js('propertyTypes.js') ?>
    </head> 
    <body>
<div class="form-group">
    <label>Project Name</label>
    <input class="form-control" name="project_name" value="" placeholder="Project Name" required>
    <span id="validation" style="color: red"></span>
</div>
<div class="form-group">
    <label>Developer Name</label>
    <input class="form-control" name="developer_name" value="" placeholder="Developer Name" required>
    <span id="validation" style="color: red"></span>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" required>
</div>

<div class="form-group">
    <label for="mobilenumber">Mobile Number</label>
    <input type="number" class="form-control" id="mobile_number" placeholder="Enter Mobile number" required>
</div>
<div class="col-md-12">
    <div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label>Project City</label>
        <select class="form-control" name="city" id="city" data-placeholder="City" onchange="loadCityArea(this.value)"  required> 
                            <option>Select City</option>

                    

                            <?php
                                $cityname = new loadData();
                                $city = $cityname->get_city_data();
                                foreach ($city as $value) {
                                    echo '<option value=' . $value['city_id'] . '>' . $value['city_name'] . '</option>';
                                }
                            ?> 
                        </select>

    </div>
</div>
        <div class="col-md-6">

    <div class="form-group">
        
         
        <label>Select Location</label>
                        <select class="form-control" name="location" id="location" data-placeholder="Location" onchange="loadlocality(this.value)">
                            <option>Location</option>
                        </select>
                   
    </div>
</div>
    </div>
    <div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label>Project Area</label>

         <select class="form-control" id="area" name="area" data-placeholder="area">
                            <option>Area</option>

                        </select>
    </div>
</div>
        <div class="col-md-6">
    <div class="form-group">

        <label>Project Type</label>
        <select name="propertytype" id="propertytype" class="form-control" onchange="getPropertySubType(this.value);"></select>
       <!-- <select name="" id="propertytype" class="form-control">
            <?php // foreach ($propertytype as $key => $value) { ?>
                <option value="<?php //echo $value['propertype_id'] ?>"><?php //echo $value['propertype_name'] ?></option>
            <?php// } ?>
        </select>-->
    </div>
            
</div>
    </div>
  <div class="row">
      <div class="col-md-12">
        <label >Sub type Of Property</label>
         <select name="propertysubtype" id="propertysubtype" class="form-control">
            
        </select>
      </div>
</div> <br/>  




    <div class="row">
        <label >Possession Date</label><br/>
</div>
    <div class="row">
        <div class="col-md-4">
            <label>Date</label>
             
            <select name="date" class="form-control" required>
                <option value="">Select Date</option>
             <?php for ($i=1;$i<=31;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
                 <?php } ?> 
        </select> 
              
        </div>
        <div class="col-md-4">
            <label>Month</label>
            
             
            <select name="month" class="form-control" required>
                <option value="">Select Month</option>
            
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
        </select> 
              
        </div>
        <div class="col-md-4">
            <label>Year</label>
                <select name="year" class="form-control" required>
                <option value="">Select Year</option>
             <?php for ($i=2015;$i<=2050;$i++) { ?>
            <option value="><?php echo $i ?>"><?php echo $i ?></option>
                 <?php } ?> 
        </select> 
              
        </div>
    </div>


<div class="form-group" >
    <label>Visible Project</label>
    <div class="radio">
        <label>
            <input type="radio" name="isVisibleMasterProduct" id="optionsRadios1" value="Yes" checked>Yes
        </label>
        <label>
            <input type="radio" name="isVisibleMasterProduct" id="optionsRadios1" value="No" >No
        </label>
    </div>
</div>


<div class="form-group">
    <label> Project Image</label>
    <input type="file" name="ProjectImage" class="form-control" value="" required>
    <span id="validation" style="color: red"></span>
</div>        
<div class="form-group">
    <label> Project Brochure</label>
    <input type="file" name="Projectbrochure" class="form-control" value="" required>
    <span id="validation" style="color: red"></span>
</div>
</div><br/>
    </body>
</html>

<!--  <button type="submit" class="btn btn-default">Save</button>-->

