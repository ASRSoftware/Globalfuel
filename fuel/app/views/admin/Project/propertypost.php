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


                                <label style="margin-left: 40px;"><b>Security Guard</b></label>

                                <label><input type="checkbox" name="securityguard" value="securityguard"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b> Swimming pull </b></label>
                                <label><input type="checkbox" name="swimmingpull" value="swimmingpull"></label>

                            </div>

                            <div class="form-group" >
                                <label style="margin-left: 50px;"><b>GYM </b></label>
                                <label><input type="checkbox" name="gym" value="gym"></label>
                            </div>
                            <div class="form-group" >
                                <label style="margin-left: 50px;"><b>WIFI </b></label>
                                <label><input type="checkbox" name="wifi" value="wifi"></label>
                            </div>

                            <div class="form-group" >


                                <label style="margin-left: 50px;"><b>Mandir</b></label>
                                <label><input type="checkbox" name="madir" value="mandir"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b>Kids Play Area</b></label>
                                <label><input type="checkbox" name="kidsplayarea" value="kidsplayarea"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b>Jogging Track</b></label>
                                <label><input type="checkbox" name="joggingtrack" value="joggingtrack"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b>Indoor Games</b></label>
                                <label><input type="checkbox" name="indoorgame" value="indoorgame"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b>Terrace Garden</b></label>
                                <label><input type="checkbox" name="terracegarden" value="terracegarden"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b>Internal Raod</b></label>
                                <label><input type="checkbox" name="internalroad" value="internalroad"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b> CCTV Camera </b></label>
                                <label><input type="checkbox" name="cctv" value="cctv"></label>
                            </div>
                            <div class="form-group" >


                                <label style="margin-left: 40px;"><b> Community hall </b></label>
                                <label><input type="checkbox" name="communityhall" value="communityhall"></label>
                            </div>
                            <div class="form-group">
                                <label> Amenities Images</label>
                                <input type="file" multiple name="AminitiesImages" class="form-control" value="" required>
                                <span id="validation" style="color: red"></span>
                            </div>   
                            
                           
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"value="check"> Every thing is OK
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    </div>
                    <!-- /.row -->
                    </div>