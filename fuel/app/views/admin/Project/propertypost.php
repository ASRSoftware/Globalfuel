<div class="panel-body">
    <div class="row">
        <div class="col-md-6">  
            <label style="margin-left: 60px;"><h3><b>Personal Details</b></h3></label>
            <form role="form">
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
                <form role="form">
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
                        <button type="submit" class="btn btn-default">Save</button>
                    </form>
                    <!-- /.table-responsive -->
                    </div>
         <div class="col-md-6">
                      <label style="margin-left: 60px;"><h3><b>Project Amenities</b></h3></label>
                    <form role="form">
                        <div class="form-group" >
                            
                            <div class="radio">
                                <label><b>Security Guard</b></label>
                                <label>
                                    <input type="radio" name="security" id="optionsRadios1" value="Yes" checked>Yes
                                </label>
                                <label>
                                    <input type="radio" name="security" id="optionsRadios1" value="No" >No
                                </label>
                            </div>
                        </div>
                         <div class="form-group" >
                            
                            <div class="radio">
                                <label><b>Security Guard</b></label>
                                <label>
                                    <input type="radio" name="security" id="optionsRadios1" value="Yes" checked>Yes
                                </label>
                                <label>
                                    <input type="radio" name="security" id="optionsRadios1" value="No" >No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                    </div>
                    <!-- /.row -->
                    </div>