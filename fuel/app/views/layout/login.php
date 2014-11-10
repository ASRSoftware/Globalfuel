



<?php echo $header ?>

    <section class="parallax parallax-header parallax-big" style="background-image: url('<?php echo Uri::base(false);?>assets/img/demo-content/properties_parallax.jpg')">
        <img class="animated hidden-xs pull-right" data-fx="fadeInRightBig" src="<?php echo Uri::base(false);?>assets/img/demo-content/keyhands.png" alt="">
    </section>

    <div class="container">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">Log in</div>
                    </div>
                    <div class="col-md-6 visible-md visible-lg">
                        <div class="title style2">Register</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="authentication">
                            <h3>Are you already a member?</h3>
                            <p>
                                If you're already a member, please use the form bellow to login.
                            </p>
                            <form role="form" action="#" method="post" class=""
                                  data-email-subject="Contact Form" data-show-errors="true">

                                <div class="form-group">
                                    <label for="username">Username <b>*</b></label>
                                    <input id="username" required type="text" name="field[]" class="form-control"
                                           placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <b>*</b></label>
                                    <input id="password" required type="password" name="field[]" class="form-control"
                                           placeholder="Enter your password">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-brick flat btn-lg">Login</button>
                            </form>
                            <br>
                            <br>
                            <a class="h4 motive" href="#">Can't remember your password?</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="title style2 visible-xs visible-sm">Register</div>

                        <div class="authentication style2">
                            <h3>Not a member yet?</h3>
                            <p>
                                To get all the features, please register your own user account. It will worth it.
                            </p>
                            <form role="form" action="#" method="post" class=""
                                  data-email-subject="Contact Form" data-show-errors="true">

                                <div class="form-group">
                                    <label for="username_register">Username <b>*</b></label>
                                    <input id="username_register" required type="text" name="field[]" class="form-control"
                                           placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label for="password_register">Password <b>*</b></label>
                                    <input id="password_register" required type="password" name="field[]" class="form-control"
                                           placeholder="Enter your password">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-grey flat btn-lg">Register</button>
                            </form>
                            <br>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>

  <?php echo $footer?>