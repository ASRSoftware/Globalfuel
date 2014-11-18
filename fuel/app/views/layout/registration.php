<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php echo Asset::js('jquery.min.js') ?>
<?php echo Asset::js('ValididateRegistration.js') ?>

<div class="login-registration-panel" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="login-registration-panel-inner">
                    <div class="login-registration-panel-close"></div>
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-primary btn-lg user-login">Login</a>
                        <a class="btn btn-primary btn-lg user-register">Register</a>
                    </div>
                    <div style="height: 10px;"></div>


                    <div class="register-form">
                        <form role="form" action="<?php echo Uri::base(false);?>welcome/registration" method="post" data-show-errors="true">

                            <div class="form-group">
                                <input required type="text" id="name" name="name" class="form-control"
                                       placeholder="Name *">
                            </div>
                            <div class="form-group">
                                <input required type="tel" name="phone" id="phone" class="form-control"
                                       placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <input required type="email" name="email" id="email" class="form-control"
                                       placeholder="Email *">
                                <span id="availableEmail" style="color: red;"></span>
                            </div>


                            <div class="form-group">
                                <input required type="username" id="username" name="username" class="form-control"
                                       placeholder="User Name *">
                                <span id="availableUser" style="color: red;"></span>
                            </div>

                            <div class="form-group">
                                <input required type="password" name="password" id="password" class="form-control"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input required type="password" name="cnfpassword" id="cnfpassword" class="form-control"
                                       placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-brick btn-xs large-padding  pull-right">Register Me</button>

                        </form>
                    </div>
                    <div class="login-form">
                        <p>login form here</p>
                        <div class="form-group">
                            <form role="form" action="" method="post" class=""
                                  data-email-subject="" data-show-errors="true">

                                <div class="form-group">
                                    <input required type="text" name="username" class="form-control"
                                           placeholder="Name *">
                                </div>

                                <div class="form-group">
                                    <input required type="password" name="password" class="form-control"
                                           placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-brick btn-xs large-padding  pull-right">Login</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>