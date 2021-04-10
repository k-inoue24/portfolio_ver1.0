'use strict';

$(window).on('load', function() {
  // ローディングアイコンの表示
  $('#loaderBg').fadeOut(400);

  // 名前のタイピング表示
  $('.brandingName')
    .typist({
        speed: 7
    }).typistAdd('Keita Inoue')
});

// スムーススクロール
var scroll = new SmoothScroll('a[href*="#"]', {
  header: 'header',
  speed: 800,
});

// パララックスアニメーション設定
new AOS.init({
  duration: 600,
  once: true,
});

// SP版ナビゲーション処理
$('.toggle').on('click',function() {
  $('body').toggleClass('open');
  $('.spMenu').fadeIn();
});
$('.spMenu').on('click',function() {
  $('.spMenu').fadeOut();
  $('body').removeClass('open');
});

// ABOUT:MODE切替
$('.modeSwitch a').on('click',function(){
  $('.modeSwitch a').removeClass('active');
  $(this).addClass('active');
  $('.modeSection').hide();
  $('#' + $(this).data('target')).fadeIn();
})

// ABOUT:MODE切替時の表示位置調整
var position = $('#about').offset().top - $('header').height();
$("#workBtn,#lifeBtn").click(function() {
  $("html,body").animate({
    scrollTop: position
  });
});

// SERVICE:費用リスト開閉
$('#priceBtn').on('click',function(){
  $('.priceDetail').slideToggle(300);
})

// WORKS:スライダー処理
var mySwiper = new Swiper('.swiper-container', {
    effect: "flip",
    loop: true,
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
})

// WORKS:PC/SP画像切替
$('.tabs_animate').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
});