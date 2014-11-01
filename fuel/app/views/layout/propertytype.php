<label for="">Type of Property*:</label> 
<?php
$query = "select * from properties";

$result = mysql_query($query) or die('Query Die');
if (!$result) {
    echo 'not Successfuly' . mysql_error;
}
echo '<select class="form-control" required="required" name="propertytype">';
echo ' <option>Select Property Type</option>';


while ($row = mysql_fetch_array($result)) {
    if ($row['property_id'] == 1001) {
        echo '<optgroup label="ALL RESIDENTIAL"> </optgroup>';
    } else if ($row['property_id'] == 2001) {
        echo '<optgroup label="ALL COMMERCIAL"> </optgroup>';
    } else if ($row['property_id'] == 3001) {
        echo '<optgroup label="ALL AGRICULTURAL"> </optgroup>';
    }
    echo '<option value="' . $row['property_id'] . '">' . $row['property_name'] . '</option></br>';
}
echo '</select>';
//echo  '<h2>'.mysql_fetch_array($result).'</h2>';
?>


<br /><br>

