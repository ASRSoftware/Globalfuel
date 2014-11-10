/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    
    $(".login-registration-panel-close").click(function (){
        $('#availableUser').html('');
        $('#availableEmail').html('');
        $('#name').html('');
        $('#phone').html('');
        $('#password').html('');
        $('#cnfpassword').html('');
        $('#email').html('');
       
    });
    
    
    $("#username").change(function () {
        $('#availableUser').html('');
        var username = $('#username').val();
        $.ajax({
            type: "GET",
            url: "http://localhost/Globalfuel/public/welcome/checkUser/" + username,
            datatype: 'string',
            success: function (data) {
                if(data==='no')
                {
                    $('#username').val('');
                    $('#username').focus();
                    $('#availableUser').append('Sorry,User name is not available!');
                }
            }
        });
    });
    
    
    
    
    
    $("#email").change(function () {
        $('#availableEmail').html('');
        var email = $('#email').val();
        
        
        $.ajax({
            type: "GET",
            url: "http://localhost/Globalfuel/public/welcome/checkEmail/" + $.trim(email),
            datatype: 'string',
            success: function (data) {
                
                if(data==='no')
                {
                    $('#availableEmail').append('Sorry! Email id is already registred.');
                    $('#email').val('');
                    $('#email').focus();
                }
            }
        });

    });
    
});