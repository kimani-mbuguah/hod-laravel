jQuery(document).ready(function(){
"use strict";

$(".responsive-contact a").on("click",function(){
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
    if($(this).hasClass("phone-btn")){
        $(".responsive-phone").slideDown();
        $(".responsive-mail").slideUp();
    }else{
        $(".responsive-mail").slideDown();
        $(".responsive-phone").slideUp();
    }
})

$(".responsive-search").on("click",function(){
    $(".responsive-search > form").slideToggle();
});
$('.headercounter').downCount({
    date: '06/25/2019 12:00:00',
    offset: +10
});




$('.fullwidth-carousel').parent().parent().parent().addClass("expand");        

$('.top-adds').parent().parent().parent().addClass("expand");        


	
$('.audio-btn').click(function(){
	$('.audioplayer').slideUp();		
	$(this).next('.audioplayer').slideDown();	
	return false;
})

$('.cross').click(function(){
	$(this).parent().slideUp();		
    $('.sermon-media li i.audio-btn').removeClass('active');         
})


$('.sermon-media li i.audio-btn').click(function() {
    $('.sermon-media li i.audio-btn').removeClass('active');         
    $(this).addClass('active');     
});

/*** ACCORDIONS ***/	
$(function() {
    $('#toggle .content').hide();
    $('#toggle h2:first').addClass('active').next().slideDown(500).parent().addClass("activate");
    $('#toggle h2').click(function() {
        if($(this).next().is(':hidden')) {
            $('#toggle h2').removeClass('active').next().slideUp(500).parent().removeClass("activate");
            $(this).toggleClass('active').next().slideDown(500).parent().toggleClass("activate");
        }
    });
});

/*** SCROLLER ***/ 

$('.responsive-menu').enscroll();

/*** CART PAGE PRODUCT DELETE ***/      
    $('.cart-product .dustbin').click(function() {
        $(this).parent().parent().parent().slideUp();
    });

/*** BILLING ADDRESS AND SHIPPING ADDRESS ***/      
    $('.billing-add').click(function() {
        $('.billing-address').slideDown(1000);
        $('.shipping-address').slideUp(1000);
    });
    $('.shipping-add').click(function() {
        $('.shipping-address').slideDown(1000);
        $('.billing-address').slideUp(1000);
    });
    
/*** CHECKOUT PAGE BLOCKS ***/      
    $('.checkout-block h5').click(function() {
        $(this).toggleClass('closed');
        $(this).next('.checkout-content').slideToggle();
    });


 

/*** PASTORS CAROUSEL ***/      
    $('.pastors-carousel').parent().parent().parent().removeClass("container");
    $('.pastors-carousel').parent().parent().parent().parent().removeClass("block");






/*** HEADER CART DROPDOWN ***/ 
$('.cart-dropdown > p').click(function(){
    $(this).next("ul").slideToggle("slow");     
});

/*** HEADER CART CLOSE BY CLICKING OUTSIDE ***/ 
  $('.cart-dropdown').click(function(e){
     e.stopPropagation();
  });
  $('html').click(function() {
    $('.cart-dropdown > ul').slideUp('medium', function() {
      // Animation complete.
    });
  });

/*** HEADER CART ITEM REMOVE ***/ 
$('.cart-dropdown > ul li span.remove').click(function(){
    $(this).parent().slideUp("slow");     
});



    
/*** STICKY HEADER ***/ 
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 70) {
        $(".stick").addClass("sticky");
    }
    else{
        $(".stick").removeClass("sticky");
    }
}); 
    
    
 /*** FIXED OR STATIC HEADER ON CLICK ***/      
$(".sticky").click( function(){
    $("header").addClass("stick");
    return false;
});
$(".non-sticky").click( function(){
    $("header").removeClass("stick");
    $("header").removeClass("sticky");
    return false;
});
   


$(".header1-btn").click( function(){
    $("header").attr('class',"");
    $(".page-top").addClass('extra-gap');
    return false;
});    
$(".header2-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header2');
    $(".page-top").removeClass('extra-gap');
    return false;
});    
$(".header3-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header3');
    $(".page-top").addClass('extra-gap');
    return false;
});    
$(".header4-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header4');
    $(".page-top").removeClass('extra-gap');
    return false;
});    
$(".header5-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header5');
    $(".page-top").addClass('extra-gap');
    return false;
});    
$(".header6-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header6');
    $(".page-top").addClass('extra-gap');
    return false;
});    
$(".header7-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header7');
    $(".page-top").addClass('extra-gap');
    return false;
});    
$(".header8-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header8');
    $(".page-top").removeClass('extra-gap');
    return false;
});    
$(".header9-btn").click( function(){
    $("header").attr('class',"");
    $("header").addClass('header9');
    $(".page-top").addClass('extra-gap');
    return false;
});    



var e = new Date( "01/31/2019 12:00:00");
 e.setDate(e.getDate());                
    var dd = e.getDate();
    var mm = e.getMonth() + 1;
    var y = e.getFullYear();
   var h = e.getHours();
   var m = e.getMinutes();
   var s = e.getSeconds();
   
    var futureFormattedDate = mm + "/" + dd + "/" + y + " "+ h + ":" + m + ":" + s ;
console.log(futureFormattedDate);

$('.headercounter').downCount({
    date: futureFormattedDate,
    offset: +5
});


/*** WIDE AND BOXED LAYOUT ***/      
$('.boxed').click(function() {
    $('.theme-layout').addClass("boxed");
    $('body').css('background-image', 'url(images/pat1.png)');
    return false;
});
$('.wide').click(function() {
    $('.theme-layout').removeClass("boxed");
    $('body').css('background-image', 'none');
    return false;
});


$('.pattern1').on('click', function() {
    $('body').css('background-image', 'url(images/pat1.png)');
})
$('.pattern2').on('click', function() {
    $('body').css('background-image', 'url(images/pat2.png)');
})
$('.pattern3').on('click', function() {
    $('body').css('background-image', 'url(images/pat3.png)');
})
$('.pattern4').on('click', function() {
    $('body').css('background-image', 'url(images/pat4.png)');
})
$('.pattern5').on('click', function() {
    $('body').css('background-image', 'url(images/pat5.png)');
})


/*=================== Responsive Menu ===================*/
$(".responsive-btn").on("click",function(){
    $(".responsive-menu").addClass("slidein");
    return false;
});
$("html").on("click",function(){
    $(".responsive-menu").removeClass("slidein");
});
$(".responsive-menu").on("click",function(e){
    e.stopPropagation();
});
$(".responsive-menu li.menu-item-has-children > a").on("click",function(){
    $(this).parent().siblings().children("ul").slideUp();
    $(this).parent().siblings().removeClass("active");
    $(this).parent().children("ul").slideToggle();
    $(this).parent().toggleClass("active");
    return false;
});


/*=================== LightBox ===================*/
var foo = $('.lightbox');
foo.poptrox({
    usePopupCaption: true,
    usePopupNav: true,
});


/*** AJAX CONTACT FORM ***/ 
/*$('#contactform').submit(function(){
    var action = $(this).attr('action');
    $("#message").slideUp(750,function() {
    $('#message').hide();
        $('#submit')
        .after('<img src="images/ajax-loader.gif" class="loader" />')
        .attr('disabled','disabled');
    $.post(action, {
        name: $('#name').val(),
        email: $('#email').val(),
        comments: $('#comments').val(),
        verify: $('#verify').val(),
        captcha: $(".g-recaptcha-response").val(),
    },
        function(data){
            document.getElementById('message').innerHTML = data;
            $('#message').slideDown('slow');
            $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
            $('#submit').removeAttr('disabled');
            if(data.match('success') != null) $('#contactform').slideUp('slow');

        }
    );
    });
    return false;
});*/

});


