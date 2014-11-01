<div class="col-md-8">
                <div class="breadcrumbs">
                    <ol class="breadcrumb text-right">
                        <li><a href="index-2.html">Home</a></li><li class="active">Financing</li>
                    </ol>
                </div>
                <section>
                    <article class="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    Sell/Rent Your Property: Over 5 lac buyers trust Global Real Estste.
                                 
                                </div>
                                <h6>There's no better place to sell/rent your property. Start filling property info: </h6>
                                <legend>Property Info </legend>
                                <div>
                                    <form role="form" action="postedproperty.php" method="post" enctype="multipart/form-data>
                                        <label for="">I Want to*</label>
                                        <label class="radio-inline">
                                          
                                           
                                     
                                            <input type="radio" name="salerent" id="buy" value="Buy"  required>Sale
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="salerent" id="rent" value="rent"required> Rent Out
                                          </label><br />
                                     
                                 <legend>Location</legend>   
                                     <label for="">City Area*:</label> 
                                     <?php 
                                        
                                        $query="select * from city";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select class="form-control" name="city">';
                                                   echo ' <option>Select City</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     
                                                     echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';

                                      ?>
                                     
                                      
                                     <br /><br>
                                      <label for="locality">Locality *:</label> 
                                      <input type="text" name="Locality" id="Locality" />
                                      
                                        <label for="Sub_locality" style="margin-left: 100px;">Sub Locality *:</label> 
                                        <input type="text" name="sub_Locality" id="sub_Locality" /><br /><br />
                                        <label for="locality">Name of Project/Society:</label> 
                                        <?php 
                                        
                                        $query="select * from project_society";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select class="form-control" name="Society/project">';
                                                   echo ' <option>Select Society/project</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     
                                                     echo '<option value="'.$row['project_society_id'].'">'.$row['project_society_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';

                                      ?>
                                        <br /> <br />
                                        <legend>Area</legend>   
                                     <label for="coveredarea">Covered Area*:</label> <input type="text" name="cvr_area" id="cvr_area" /> 
                                     <?php 
                                        
                                        $query="select * from unit";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select style="margin-left: 15px;" name="cvr_unit">';
                                                   echo ' <option>Select unit</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     
                                                     echo '<option value="'.$row['unit_id'].'">'.$row['unit_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';

                                      ?>
                                     <br /><br />
                                     <label for="plotarea">Plot Area:</label> <input type="text" name="plt_area" id="plt_area" style="margin-left: 32px;" /> 
                                     <?php 
                                        
                                        $query="select * from unit";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select style="margin-left: 15px;" name="plt_unit">';
                                                   echo ' <option>Select unit</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     
                                                     echo '<option value="'.$row['unit_id'].'">'.$row['unit_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';

                                      ?>
                                     <br /><br />
                                     <label for="carpetarea">Carpet Area:</label> <input type="text" name="cpt_area" id="cpt_area" style="margin-left: 17px;" /> 
                                     <?php 
                                        
                                        $query="select * from unit";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select style="margin-left: 15px;" name="cpt_unit">';
                                                   echo ' <option>Select unit</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     
                                                     echo '<option value="'.$row['unit_id'].'">'.$row['unit_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';

                                      ?>
                                     <legend>Sale Price</legend>
                                     <label for="expectedprice">Expected Price:</label>
                                     <?php 
                                        
                                        $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select style="margin-left: 15px;">';
                                                   echo ' <option>Crore</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     if($row['number_id']==11)
                                                         break;
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           //echo  '<h2>'.mysql_fetch_array($result).'</h2>';
                                               echo '<select style="margin-left: 15px;" >';
                                                   echo ' <option>Lac</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                 echo '</select>';
                                                 
                                                 
                                             ?> 
                                         <?php 
                                         $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                           echo '<select style="margin-left: 15px;">';
                                                   echo ' <option>Thousands</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                 echo '</select>';
                                                 
                                                 
                                             ?>
                                     <b style="margin-left: 40px;">OR</b>  <input type="text" name="saleamount" id="saleamount" placeholder="Enter amount in ruppes"/> <br /><br />
                                     <label for="pricesqft">Price Sq.f.t</label> <input type="text" name="pricesqft" id="saleamount" placeholder="Enter amount in ruppes" style="margin-left: 35px;"/>    
                                       
                                     <legend>Properties Feature</legend>
                                      <label for="bedroom">No. of Bedroom</label>
                                     <?php 
                                        
                                        $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                          if(!$result){
                                                 echo 'not Successfuly'.mysql_error;
                                              }
                                                   echo '<select style="margin-left: 15px;" name="Bedroom">';
                                                   echo ' <option>Bedroom</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     if($row['number_id']==11)
                                                         break;
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                                  echo '<label for="bedroom" style="margin-left: 25px;"; >No. of Bathroom</label>';
                                                  
                                                  ?>
                                      <?php
                                      $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="Bathroom">';
                                                   echo ' <option>Bathroom</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     if($row['number_id']==11)
                                                         break;
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                      ?>
                                      <?php
                                      echo '<label for="Balconies" style="margin-left: 25px;"; >No. of Balconies</label>';
                                      $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="Balconies">';
                                                   echo ' <option>Balconies</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                     if($row['number_id']==11)
                                                         break;
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                      ?>
                                      <br /><br />
                                      <?php
                                      echo '<label for="floorno" style="margin-left: 0px;"; >Floor No of your properties</label>';
                                      $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="floorno">';
                                                   echo ' <option>Flooor No.</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                                  
                                                  
                                      ?>
                                       <?php
                                      echo '<label for="floorno" style="margin-left: 10px;"; >Floor No of your properties</label>';
                                      $query="select * from number";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="tfloor">';
                                                   echo ' <option>Flooor No.</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['number_id'].'">'.$row['number'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                                  
                                                  
                                      ?>
                                      <br /><br />
                                       <?php
                                       echo '<label for="floorno" style="margin-left: px;"; >Is your properties Furnished</label>';
                                      $query="select * from furnished";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="fstatus">';
                                                   echo ' <option >Furnished Status</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['furnished_id'].'">'.$row['furnished_status'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                                  
                                                  
                                      ?>
                                      <br /><br /><legend>Transaction Type,Property Availability,or Age of Construction</legend>
                                      <label for="TransactionType">Transaction Type*:</label>
                                        <label class="radio-inline">
                                          <input type="radio" name="ttype" id="ttype" value="New Property" checked="checked">New Property
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="ttype" id="ttype" value="Resale"> Resale
                                          </label><br />
                                          
                                          <label for="possessionstatus">possession status*:</label>
                                        <label class="radio-inline">
                                          <input type="radio" name="pstatus" id="pstatus" value="Under Construction" checked="checked">Under Construction
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="pstatus" id="pstatus" value="Ready to Move"> Ready to Move
                                          </label><br />
                                           
                                        <label for="availabefrom">Available From </label>
                                           <?php 
                                             $query="select * from month";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="month">';
                                                   echo ' <option >Month</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['month_id'].'">'.$row['month_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           ?> 
                                         <?php 
                                             $query="select * from year";

                                        $result=mysql_query($query) or die('Query Die');
                                        echo '<select style="margin-left: 15px;" name="year">';
                                                   echo ' <option >Year</option>';
                                                   
                                                   
                                                 while($row=mysql_fetch_array($result)){
                                                    
                                                     echo '<option value="'.$row['year_id'].'">'.$row['year_name'].'</option></br>';
                                                          
                                                 }
                                                  echo '</select>';
                                           ?> 
                                        <br />
                                        <label for="Description">Description :</label>
                                        <textarea class="form-control" rows="3" name="text"></textarea> <br />
                                        <legend>Add Images (Optional)</legend>
                                        <p>Add photos in just 3 clicks & get up to 5 times more responses </p>
                                        <ul>
                                            <li>Use Original Photos to make your property stand out </li>
                                            <li>Add Multiple photos to attract user attention press ctrl button then select image</li>
                                        </ul>
                                        <input type="file" name="image" id="image" class="btn btn-default" value="Add Image" multiple="multiple"/>
                                        <p>(Accepted formats are .jpg, .gif, .bmp & .png.) Maximum size allowed is 1 MB</p>
                                        <button type="submit" class="btn btn-primary btn-lg ">Post Property Details</button> <br /><br />
                                    </form>
                                    
                                </div>
                                
                                 </div>
                            </div>
                           </article>
                           </section>
                        </div>
                    