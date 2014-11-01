<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bobbyk Admin Panel</title>

     <!-- Bootstrap Core CSS -->
    <?php echo Asset::css(array('admin/bootstrap.min.css','admin/plugins/timeline.css','admin/plugins/metisMenu/metisMenu.min.css'));?>
    <?php echo Asset::css(array('admin/sb-admin-2.css','admin/plugins/morris.css','admin/font-awesome-4.1.0/css/font-awesome.min.css'));?>
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="user name" name="admin-username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="admin-password" type="password" value="">
                                </div>
                                <div> <?php echo $message; ?></div>
                                <input class="btn btn-lg btn-success btn-block" name="admin-submit" type="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- jQuery Version 1.11.0 -->
    <?php echo Asset::js(array('admin/jquery-1.11.0.js','admin/bootstrap.min.js','admin/plugins/metisMenu/metisMenu.min.js','admin/plugins/morris/raphael.min.js'));?>
    <?php echo Asset::js(array('admin/plugins/morris/morris.min.js','admin/plugins/morris/morris-data.js','admin/sb-admin-2.js'));?>
   

</body>

</html>
