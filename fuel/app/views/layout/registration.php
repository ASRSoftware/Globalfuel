<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="login-registration-panel" style="display:none">
<form role="form" action="" method="post" class=""
      data-email-subject="" data-show-errors="true">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                
                <div class="login-registration-panel-inner">
                    
                    <div class="login-registration-panel-close"></div>
                    <div class="login-registration-panel-login">Login</div>
                    <div class="login-registration-panel-register">Register</div>
                        
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


            <div class="">
                <button type="submit" class="btn btn-brick btn-xs large-padding  pull-right">Register Me</button>
            </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>