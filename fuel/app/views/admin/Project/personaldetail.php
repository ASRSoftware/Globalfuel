
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
<form role="form">
    <div class="form-group">
        <label for="mobilenumber">Mobile Number</label>
        <input type="number" class="form-control" id="mobile_number" placeholder="Enter Mobile number" required>
    </div>

    <div class="form-group">
        <label>Project Location</label>

        <select name="location" STYLE="width: 320px" required>
            <option value="">Select location</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="form-group">
        <label>City</label>

        <select name="city" STYLE="width: 410px"  required>
            <option value="">Select City</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div class="form-group">
        <label>Total Floor</label>

        <select name="city" STYLE="width: 360px"  required>
            <option value="">Select City</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
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
    <!--  <button type="submit" class="btn btn-default">Save</button>-->

