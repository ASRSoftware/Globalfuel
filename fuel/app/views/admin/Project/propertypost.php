<div class="panel-body">
    <div class="row">
        <div class="col-md-6">  

            <form role="form">
                <div class="form-group">
                    <label>Project Name</label>
                    <input class="form-control" name="project_name" value="" placeholder="Project Name" required>
                    <span id="validation" style="color: red"></span>
                </div>
                <div class="form-group">
                    <label>Project Location</label>
                   
                    <select name="location" STYLE="width: 370px" required>
                      <option value="">Select location</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>City</label>
                   
                    <select name="city" STYLE="width: 370px" required>
                      <option value="">Select City</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                
                <div class="form-group" >
                    <label>Visible Master Product</label>
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
                    <label>Master Product Image</label>
                    <input type="file" name="masterProductImage" class="form-control" value="" required>
                    <span id="validation" style="color: red"></span>
                </div>                         
                <button type="submit" class="btn btn-default">Save</button>
            </form>
            <!-- /.table-responsive -->
        </div>
    </div>
    <!-- /.row -->
</div>