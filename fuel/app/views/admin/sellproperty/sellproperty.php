
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
        <?php  echo Fuel\Core\Asset::js('city_area.js') ?>
        <?php  echo Fuel\Core\Asset::js('propertyTypes.js') ?>
    </head>
    <body>
        <div class="container">
            <form role="form">
                <div class="row">
                    <div class="col-md-6">
                        <legend>Property Info</legend>
                        <form role="form">
                            <?php echo $propertymaster ?>
                          
                            
                        
                    </div>
                    <div class="col-md-6">
                        
                            <?php echo $propertyfeature ?>
                        
                        <legend>Amenities</legend>

                        <?php echo $aminities ?>
                        

                    </div>
                </div>
               
        </div>
        <div class="text-center well">
            <hr />
         <button type="submit" class="btn btn-primary btn-lg" class="text-center">Save Your Post</button>
        </div>
    </form>

</body>
</html>
