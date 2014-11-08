$(function () {

    $('#side-menu').metisMenu();

});
$('document').ready(function () {
    $('.rentandsaleselection input').click(
            function (arg) {
                if ($(this).val() === 'rent') {
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
                        

//sale property amount calculation done here.

 $(document).ready(function(){
     $('.rentlacs,.rentthousands,.renthundred').change(function(){
     });
     $(document).on('change', '.rentlacs,.rentthousands,.renthundred', function(){
         
      rentTotal();
     })
     function rentTotal(){
       var  a= parseInt($('.rentlacs').val())*100000;
        var b= parseInt($('.rentthousands').val())*1000;
        var c= parseInt($('.renthundred').val())*100;
        if( (a+b+c) === 0 ){
            var c = '';
        }else{
            var c = a+b+c;
        }
         $('.rentprice').val(c);
     }
     
 });


            
            
            
           

        

