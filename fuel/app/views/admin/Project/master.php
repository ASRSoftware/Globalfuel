<div class="panel-body">

    <div class="row">
        <form role="form" id="insert" action="http://localhost/Globalfuel/public/admin/insertcheck/" method="post" >
            <div class="col-md-6">  



                <div class="row">
                    <label style="margin-left: 60px;"><h3><b><font color="#4285f4">Personal Details</font></b></h3></label>

                    <?php echo  $form ?>  

                </div>
                <div class="row">
                    <label style="margin-left: 60px;"> <h3> <b> <font color="#4285f4">Project Amenities</font> </b> </h3></label>

                    <?php echo $aminities ?>  

                </div>


            </div>
            <div class="col-md-6">
                <label style="margin-left: 60px;"><h3><b><font color="#4285f4">Project Feature</font></b></h3></label><br/>

                <?php echo $projectfeature ?>

            </div>
        </form>
    </div>
    <!-- /.row -->
</div>