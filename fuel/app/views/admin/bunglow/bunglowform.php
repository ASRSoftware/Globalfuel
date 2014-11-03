
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Bunglow Post</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form role="form">
                <div class="row">
                    <div class="col-md-6">
                        <legend>Bunglow Post</legend>
                        <form role="form">
                            <?php echo $bunglowmaster ?>
                            <?php echo $bungalowfeature ?>

                            
                        
                    </div>
                    <div class="col-md-6">
                        <legend>Amenities</legend>

                        <?php echo $aminities ?>
                    </div>
                </div>
        </div>
         <button type="submit" class="btn btn-default">Submit</button>
    </form>

</body>
</html>