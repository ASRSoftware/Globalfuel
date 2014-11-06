 
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
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
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
        <select name="city" class="form-control" required>
             <option value="">Select City</option>
            <?php foreach ($cityname as $key => $value) { ?>
                <option value="<?php echo $value['city_id'] ?>"><?php echo $value['city_name'] ?></option>
            <?php } ?>
        </select>

    </div>
</div>
        <div class="col-md-6">

    <div class="form-group">
        <label>City Area</label>

        <select name="city" class="form-control"  required>
            <option value="">Select City Area</option>
            <option value="">Select City</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
</div>
    </div>
    <div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label>Project Location</label>

        <select name="location" class="form-control" required>
            <option value="">Select location</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
</div>
        <div class="col-md-6">
    <div class="form-group">

        <label>Project Type</label>
        <select name="" id="propertytype" class="form-control">
            <?php foreach ($propertytype as $key => $value) { ?>
                <option value="<?php echo $value['propertype_id'] ?>"><?php echo $value['propertype_name'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>
    </div>




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

<!--  <button type="submit" class="btn btn-default">Save</button>-->

