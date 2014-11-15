<div class="col-md-8">
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                Sell/Rent Your Property: Over 5 lac buyers trust Global Real Estste. <br />

            </div>
            <h6 class="text-center">There's no better place to sell/rent your property. Start filling property info: </h6>
        </div>
    </div>
    <div class="row">


        <!DOCTYPE HTML>
        <html lang="en-US">
            <head>
                <meta charset="UTF-8">
                <title>Bunglow Post</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
                <style type="text/css">
                    legend{
                        color: #7EC5F8;
                    }

                </style>


                <?php echo Fuel\Core\Asset::js('jquery.min.js') ?>
                <?php echo Fuel\Core\Asset::js('city_area.js') ?>
                <?php echo Fuel\Core\Asset::js('propertyTypes.js') ?>
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="post" action="http://localhost/Globalfuel/public/admin/sell" >
                                <ul class="nav nav-tabs type2">
                                    <li class="active"><a href="#propertymaster" data-toggle="tab">Property info</a></li>
                                    <li><a href="#feature" data-toggle="tab">Feature</a></li>
<!--                                    <li><a href="#aminities" data-toggle="tab">Aminities</a></li>-->


                                </ul>
                                <div class="tab-pane fade in active" id="propertymaster">
                                    <div class="col-md-8">

                                        <legend>Property Info</legend>
                                        <?php echo $propertymaster ?>



                                    </div>
                                </div>
                                <div class="tab-pane fade" id="feature">
                                    <div class="col-md-8" >

                                        <?php echo $propertyfeature ?>
                                        <legend>Amenities</legend>

                                        <?php echo $aminities ?>
                                        
                                            
                                            <button type="submit" class="btn btn-primary btn-lg" class="text-center" style="margin-left: 185px; margin-bottom: 9px;">Save Your Post</button>
                                       

                                    </div>
                                </div>
                                



                            </form>
                        </div>
                    </div>
                </div>

            </body>
        </html>

    </div>
</div>