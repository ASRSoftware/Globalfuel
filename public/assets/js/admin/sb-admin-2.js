$(function () {

    $('#side-menu').metisMenu();

});
$('document').ready(function () {
    $('.rentandsaleselection input').click(
            function (arg) {
                if($(this).val() === 'rent'){
                    $('#container-rent').show().find('input, select').removeAttr('disabled');
                    $('#container-sale').hide().find('input, select').attr('disabled', 'true');
                }else{
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
