/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $(".login-registration-panel-close").click(function () {
        $('#availableUser').html('');
        $('#availableEmail').html('');
        $('#name').val('');
        $('#phone').val('');
        $('#password').val('');
        $('#cnfpassword').val('');
        $('#emailid').val('');
        $('#passwordwrong').html('');
    });


    $("#username").change(function () {
        $('#availableUser').html('');
        var username = $('#username').val();
        $.ajax({
            type: "GET",
            url: "http://localhost/Globalfuel/public/welcome/checkUser/" + username,
            datatype: 'string',
            success: function (data) {
                if (data === 'no')
                {
                    $('#username').val('');
                    $('#username').focus();
                    $('#availableUser').append('Sorry,User name is not available!');
                }
            }
        });
    });

    $("#emailid").change(function () {;
        $('#availableEmail').html('');
        var email = $('#emailid').val();
        var enemail = email.replace(".", "@dot@");
        $.ajax({
            type: "GET",
            url: "http://localhost/Globalfuel/public/welcome/checkEmail/" + enemail,
            datatype: 'string',
            success: function (data) {
                alert(data);
                if (data === 'no')
                {
                    $('#emailid').val('');
                    $('#emailid').focus();
                    $('#availableEmail').append('Sorry,Email id is already registred!');
                }
            }
        });
    });




    $('#registration').submit(function () {
        var password = $.trim($('#password').val());
        var cnfpassword = $.trim($('#cnfpassword').val());

        if (password !== cnfpassword) {
            $('#passwordwrong').append('Sorry,Password does not match!');
            $('#password').val('');
            $('#cnfpassword').val('');
            return false;
        }
    });
});