<legend>Property Features</legend>
<div class="row">
    <div class="col-md-4"><label> No. of Bedroom*:</label></div>
    <div class="col-md-4">
        <select name="no_bedroom" id="" class="form-control" required>
            <option value="">Bedroom</option>
            <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
</div><br />
<div class="row">
    <div class="col-md-4"><label> No. of Bathroom*:</label></div>
    <div class="col-md-4">
        <select name="no_bathroom" id="" class="form-control" required>
            <option value="">Bathroom</option>
             <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
</div><br />
<div class="row">
    <div class="col-md-4"><label> No. of Balconies*:</label></div>
    <div class="col-md-4">
        <select name="no_balconies" id="" class="form-control">
            <option value="">Balconies</option>
             <?php foreach ($number as $key => $value) { ?>
                <option value="<?php echo $value['number_id'] ?>" ><?php echo $value['number'] ?></option>
            <?php } ?>
        </select>
    </div>
</div><br />
<div class="row">
    <div class="col-md-4"><label> Is property furnished*:</label></div>
    <div class="col-md-4">
        <select name="furnishedstatus" id="" class="form-control" >
            <option value=" ">Select Furnished Status</option>
            <option value="1">Furnished</option>
            <option value="2">Semi Furnished</option>
            <option value="3">Unfurnished</option>

        </select>
    </div>
</div><br />
<legend>Description</legend>
<div class="row">
    <div class="col-md-4">
        <p>Add interesting details of your property: (minimum 50 characters)</p>
    </div>
    <div class="col-md-8">
        <textarea class="form-control" name="description" rows="3" placeholder="e.g. East-facing, fully furnished bungalow with 5 BHK and power back-up, located in premium locality, for immediate sale"></textarea>
    </div>
</div>
<legend>Add images</legend>
<div class="form-group">
    <label for="exampleInputFile">Upload Bungalow Image</label>
    <input type="file" id="exampleInputFile" multiple="multiple" name="image1">
    <input type="file" id="exampleInputFile" multiple="multiple" name="image2">
    <input type="file" id="exampleInputFile" multiple="multiple" name="image3">
    <p class="help-block">To Upload Multiple images, press <kbd>ctrl</kbd></p>
</div>
