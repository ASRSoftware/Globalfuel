<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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
                <form role="form" action="" method="post" class=""
                data-email-subject="" data-show-errors="true">

                  <div class="form-group">
                    <input required type="text" name="name" class="form-control"
                    placeholder="Name *">
                </div>
                <div class="form-group">
                    <input required type="tel" name="phone" class="form-control"
                    placeholder="Phone">
                </div>

                <div class="form-group">
                    <input required type="email" name="email" class="form-control"
                    placeholder="Email *">
                </div>
                <div class="form-group">
                    <input required type="password" name="password" class="form-control"
                    placeholder="Password">
                </div>
                <div class="form-group">
                    <input required type="password" name="cnfpassword" class="form-control"
                    placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-brick btn-xs large-padding  pull-right">Register Me</button>

                </form>
              </div>
              <div class="login-form">
                <p>login form here</p>
              </div>
            </div>
        </div>
</div>
</div>
</div>