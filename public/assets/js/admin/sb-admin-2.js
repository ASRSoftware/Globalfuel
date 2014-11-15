$(function () {

    $('#side-menu').metisMenu();

});
$('document').ready(function () {
    $('.rentandsaleselection input').click(
            function (arg) {
                if ($(this).val() === '2') {
                    $('#container-rent').show().find('input, select').removeAttr('disabled');
                    $('#container-sale').hide().find('input, select').attr('disabled', 'true');
                } else {
                    $('#container-sale').show().find('input, select').removeAttr('disabled');
                    $('#container-rent').hide().find('input, select').attr('disabled', 'true');
                }
            }
    );
});
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1)
            height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })
})



var a, b, c, amount = 0;
$(document).ready(function () {

     $('#thousand, #lac, #crore').change(function () {
        calculateTotal();

    });
    
    
    function calculateTotal(){
        var crore = parseInt($('#crore').val())*10000000;
        var lac = parseInt($('#lac').val())*100000;
        var thousand = parseInt($('#thousand').val())*1000;
        
        $('#price').val((crore)+(lac)+thousand);
    }

});
$(document).ready(function () {

     $('#thousands, #lacs, #hundreds').change(function () {
        calculateTotalRent();

    });
    
    
    function calculateTotalRent(){
        
        var lac = parseInt($('#lacs').val())*100000;
        var thousand = parseInt($('#thousands').val())*1000;
        var hundred = parseInt($('#hundreds').val())*100;
        $('#pricerent').val((lac)+(thousand)+hundred);
    }

});
                        

//sale property amount calculation done here.



         /*   var a, b=0, c=0, amount=0;
            var flag=0;
            $(document).ready(function () {
                
                $('#crore').change(function () {
                    a = $('#crore :selected').val();

                    amount=a*10000000;
                    amount+=b*100000;
                    amount+=c*1000;
                    $('#price').val(amount);

                });
                 $('#lac').change(function () {
                    //var val = $('#price').val();
                    b = $('#lac :selected').val();
                     amount+=b*100000;
                    $('#price').val(amount);
                });
                $('#thousand').change(function () {
                    //var val = $('#price').val();

                    c = $('#thousand :selected').val();
                   
                     
                     amount+=c*1000;
                    $('#price').val(amount); 

            });

            });*/
            
            
           

        

