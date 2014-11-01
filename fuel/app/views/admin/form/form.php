<div class="panel-body">
    <div class="row">
        <div class="col-lg-12">  
        
            <form role="form">
                <div class="form-group">
                    <label>Master Product Name</label>
                    <input class="form-control" name="masterProductName" value="" placeholder="Master Product Name" required>
                    <span id="validation" style="color: red"></span>
                </div>
                <div class="form-group">
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