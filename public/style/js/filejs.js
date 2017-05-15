$(document).ready( function(){
    //tao nut back to top
    if($(".btn-top").length > 0){
        $(".btn-top").hide();
        $(window).scroll(function(){
            var e = $(window).scrollTop();
            if(e > 96){
                $(".btn-top").show();
            }else{
                $(".btn-top").hide();
            }
        });
        $(".btn-top").click(function(){
            $('body','html').animate({
                scrollTop: 0
            })
        })
    };
    //end_tao nut back to top
    //tao menu
    if($(".fixNav").length > 0){
        $(".fixNav").hide();
        $(window).scroll(function(){
            var e = $(window).scrollTop();
            if(e > 96){
                $(".header").hide();
                $(".fixNav").show();
            }else{
                $(".fixNav").hide();
                $(".header").show();
            }
        })
    };
    //End_tao menu
    //tao form login
    $('a.login-window').click(function() {
        //Getting the variable's value from a link
        var loginBox = $(this).attr('href');
        //Fade in the Popup
        $(loginBox).fadeIn("300");
        $('a.register-window').click(function(){
            var registerBox = $(this).attr('href');
            $(loginBox).fadeOut();
            $(registerBox).fadeIn("300");
            $('a.relogin-window').click(function(){
                var relogin = $(this).attr('href');
                $(registerBox).fadeOut();
                $(relogin).fadeIn(300);
            });
        });
        //var popMargTop = ($(loginBox).height() - 520) / 2;
        //var popMargLeft = ($(loginBox).width() - 1520) / 2;
        //
        //$(loginBox).css({
        //    'margin-top' : -popMargTop,
        //    'margin-left' : -popMargLeft
        //});
        // Add the mask to body
        $('body').append('<div id="over"></div>');
        $('#over').fadeIn(300);
        return false;
    });
        $(document).keyup(function(e){
            if(e.keyCode == '27'){
                $('#over, .login-box').fadeOut(300 , function() {
                    $('#over').remove();
                });
                return false;
            }
        });
        $(document).on('click', "a.close, #over", function() {
            $('#over, .login-box').fadeOut(300 , function() {
                $('#over').remove();
            });
            return false;
        });
    //end_tao form login
    //tao menu product
    // $('#new-product').click(function(e){
    //     //ngan load trang
    //     e.preventDefault();
    //     $('#content').load('newproduct.php');
    // });
    // $('#promotion-product').click(function(e){
    //     //ngan load trang
    //     e.preventDefault();
    //     $('#content').load('promotion.php');
    // });
    //end_tao menu product
});