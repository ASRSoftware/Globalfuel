<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bootstrap Admin</title>
        <!-- Bootstrap Core CSS -->
        <?php echo Asset::css('admin/bootstrap.css'); ?>

        <!-- MetisMenu CSS -->
        <?php echo Asset::css('admin/plugins/metisMenu/metisMenu.min.css'); ?>

        <!-- Timeline CSS -->
        <?php echo Asset::css('admin/plugins/timeline.css'); ?>

        <!-- Custom CSS -->
        <?php echo Asset::css('admin/sb-admin-2.css'); ?>

        <!-- Custom Fonts -->
        <?php echo Asset::css('admin/font-awesome-4.1.0/css/font-awesome.min.css'); ?>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <?php echo $menu;?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo $container;?>

                                <!-- /.table-responsive -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <!-- jQuery Version 1.11.0 -->
        <?php echo Asset::js('admin/jquery-1.11.0.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo Asset::js('admin/bootstrap.min.js'); ?>
        <!-- Metis Menu Plugin JavaScript -->
        <?php echo Asset::js('admin/plugins/metisMenu/metisMenu.min.js'); ?>

        <!-- Morris Charts JavaScript -->


        <!-- Custom Theme JavaScript -->
        <?php echo Asset::js('admin/sb-admin-2.js'); ?>

    </body>

</html>
