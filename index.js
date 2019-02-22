$(document).ready(function(){

  $('.book').hide();

$(window).bind('scroll', function () {
if ($(window).scrollTop() > 10) {
  $('nav').addClass('bg-black ');
$('nav').removeClass('mt-4');
  $('.list a').css({'font-size':'12px'});
  $('.list li').css({'margin':'0 0px'});
  $('.list .logo img').css({'width':'80px'});

  $('.list .logo').css({'padding':'0 20px 20px 20px'});
  $('nav').css({'height':'70px'});
    $('nav #inner .list').css({'line-height':'70px'});
    $('nav #inner').css({'width':'67%'});
  $('.book').show();

} else  {
    $('nav').removeClass('bg-black ');
    $('nav').addClass('mt-4');
    $('.list a').css({'font-size':'13px','letter-spacing': '.06em','padding':'5px 8px'});
    $('.list li').css({'margin':'0 10px'});

    $('.list .logo img').css({'width':'150px'});
    $('.list .logo').css({'padding':'10px'});
    $('nav').css({'height':'100px'});
    $('nav #inner .list').css({'line-height':'40px'});
    $('nav #inner').css({'width':'80%'});
    
  $('.book').hide();

}
});
});

       
