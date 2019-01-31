$(document).ready(function () {
    $('.hamburg').click(function () {
        $('.menu_hidden').slideToggle(500);
    });

    $('.searc').click(function () {
        $('.search').fadeIn(500);
    });

    $('body').click(function () {
        $('.search').fadeOut(500);
    });

    $('.search').click(function (e) {
        e.stopPropagation();
    });

    $('.searc').click(function (e) {
        e.stopPropagation();
    });


    $('.acoun').click(function () {
        $('.acound').fadeIn(500);
    });

    $('body').click(function () {
        $('.acound').fadeOut(500);
    });

    $('.acound').click(function (e) {
        e.stopPropagation();
    });

    $('.acoun').click(function (e) {
        e.stopPropagation();
    });

    $('.shop_cart').click(function (e) {
        $('.korzina').fadeIn(500);
    });

    $('body').click(function (e) {
        $('.korzina').fadeOut(500);
    });

    $('.korzina').click(function (e) {
        e.stopPropagation();
    });

    $('.shop_cart').click(function (e) {
        e.stopPropagation();
    });
    $('.elektron').click(function () {
        $('.elek1').slideToggle(500);
    });
    $('.fash').click(function () {
        $('.moda1').slideToggle(500);
    });

    $('.pr_img2 img').hover(function () {
        var src=$(this).attr("src");
        $('.pr_img1 img').attr("src",src).css('transition','.5s');
    });

    $('.sidebar .side_open').click(function () {
        var clas=$(this).attr('class');
        var cls=clas.split(' ');
        $('ul.'+cls[0]).slideDown(500);
        $(this).css('transform','rotateX(90deg)');
        $(this).next().css('transform','rotateX(0deg)');
    });

    $('.sidebar .side_close').click(function () {
        var clas=$(this).attr('id');
        $('ul.'+clas).slideUp(500);
        $(this).css('transform','rotateX(90deg)');
        $(this).prev().css('transform','rotateX(0deg)');
        $('.'+clas+' .clear').css('display','none');
    });

    $(".sidebar ul input").click(function () {
        var clas=$(this).parent().parent().parent().parent().attr('class');
        var cls=clas.split(' ');
        $('ul.'+cls).addClass('check_type');
        if($('ul.'+cls).hasClass('check_type')){
            $('.'+cls+' .clear').slideDown(500);
        }
    });

    $('.clear').click(function () {
        var clas=$(this).parent().attr('class');
        $('ul.'+clas+' input').prop( "checked", false );
        $('ul.'+clas).removeClass('check_type');
        $(this).fadeOut(300);
    });

    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );

    $( function() {
        $( "#date_ex" ).datepicker();
        $( "#anim" ).on( "change", function() {
            $( "#date_ex" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    } );

    $('#korzina1').click(function () {
        var li_id=$(this).attr('id');
        $(".korzina1").css('display','block');
        $(".oplata").css('display','none');
        $(".delivery").css('display','none');
        $('.ul_border span').animate({left:0},300);
        $('.cart_menu li').removeClass('active');
        $(this).addClass('active');
    });

    $('#oplata').click(function () {
        $(".korzina1").css('display','none');
        $(".oplata").css('display','block');
        $(".delivery").css('display','none');
        var width= $('.ul_border>span').outerWidth();
        $('.ul_border span').animate({left:width+10},300);
        $('.cart_menu li').removeClass('active');
        $(this).addClass('active');
    });

    $('#delivery').click(function () {
        $(".korzina1").css('display','none');
        $(".oplata").css('display','none');
        $(".delivery").css('display','block');
        var width= $('.ul_border>span').outerWidth();
        $('.ul_border span').animate({left:width*2+20},300);
        $('.cart_menu li').removeClass('active');
        $(this).addClass('active');
    }) ;

    $('.radioo1').click(function () {
        $('.radioo i').css('display','none');
        $(this).children().css('display','block');
        $('#paypal').attr('checked',true);
        $('#creditcard').attr('checked',false);
    });

    $('.radioo2').click(function () {
        $('.radioo i').css('display','none');
        $(this).children().css('display','block');
        $('#paypal').attr('checked',false);
        $('#creditcard').attr('checked',true);
    });

    $('.pay').click(function () {
        $('.radioo2 i').css('display','none');
        $('.radioo1 i').css('display','block');
        $('#paypal').attr('checked',true);
        $('#creditcard').attr('checked',false);
    });

    $('.cred').click(function () {
        $('.radioo1 i').css('display','none');
        $('.radioo2 i').css('display','block');
        $('#paypal').attr('checked',false);
        $('#creditcard').attr('checked',true);
    });

    $('.minus').click(function(){
        var number=$('.change input').val();
        number--;
        $('.change input').val(number);
    });

    $('.plus').click(function(){
        var number=$('.change input').val();
        number++;
        $('.change input').val(number);
    });

    $(".open_cont").click(function () {
       $(this).parent().next().next().slideDown(300);
       $(this).css('display','none');
       $(this).prev().css('display','block');
    });

    $(".open_cont.minuss").click(function () {
       $(this).parent().next().next().slideUp(300);
       $(this).css('display','none');
       $(this).next().css('display','block');
    });

    $('.pers_cont li').click(function () {
        var li_class=$(this).attr('class');
        $('.dash_sec').css('display','none');
        $('div.'+li_class).css('display','block');
    });

    $(".desc_open").click(function () {
        $(this).parent().next().next().slideDown(300);
        $(this).css('display','none');
        $(this).next().css('display','block');
    });

    $(".desc_close").click(function () {
        $(this).parent().next().next().slideUp(300);
        $(this).css('display','none');
        $(this).prev().css('display','block');
    });

    $('.btngroup p').click(function () {
        var btn1=$(this).attr('class');
        var btn=btn1.split(' ');
        $('#sortable li>div').css('transform','rotateY(90deg');
        setTimeout(function () {
            $('div.'+  btn[0]).css('transform','rotateY(0deg');
        },900);
        $('.btngroup p').removeClass('active');
        $(this).addClass('active');

    });


    $('#alert').click(function () {
        $("div.message").css('display','none');
        $("div.uvedamlenie").css('display','none');
        $('.cart_menu li').removeClass('active');
        $("div.alert").css('display','block');
        $('.ul_border span').animate({left:'33%'},300);
        $(this).addClass('active');
        $('.alarm').css('display','block');
        $('.alarm_act').css('display','none');
    });

    $('#message').click(function () {
        $(".alert").css('display','none');
        $(".uvedamlenie").css('display','none');
        $('.cart_menu li').removeClass('active');
        $(".message").css('display','block');
        $('.ul_border span').animate({left:0},300);
        $(this).addClass('active');
        $('.alarm').css('display','block');
        $('.alarm_act').css('display','none');
    });
    $('#uvedamlenie').click(function () {
        $(".alert").css('display','none');
        $(".message").css('display','none');
        $('.cart_menu li').removeClass('active');
        $(".uvedamlenie").css('display','block');
        $('.ul_border span').animate({left:'66%'},300);
        $(this).addClass('active');
        $('.alarm').css('display','none');
        $('.alarm_act').css('display','block');

    });




    pulse();
setInterval(pulse,10000);
function pulse() {
    $('.pulse1').css({'box-shadow':'0 0 40px 45px rgba(50,37,103, .9)'});
    setTimeout(function () {
        $('.pulse2').css({'box-shadow':'0 0 40px 45px rgba(50,37,103, .9)'});
        setTimeout(function () {
            $('.pulse3').css({'box-shadow':'0 0 40px 45px rgba(50,37,103, .9)'});
            setTimeout(function () {
                $('.pulse4').css({'box-shadow':'0 0 40px 45px rgba(50,37,103, .9)'});
                setTimeout(function () {
                    $('.pulse5').css({'box-shadow':'0 0 40px 45px rgba(50,37,103, .9)'});
                    setTimeout(function () {
                        $('.pulse p').css({'box-shadow':'0 0 0 0px rgba(50,37,103, 0)'});
                    },3000)
                },1000)
            },1000)
        },1000)
    },1000)
}



});