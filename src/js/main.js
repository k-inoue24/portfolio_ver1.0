'use strict';

$(window).on('load', function() {
  // ローディングアイコンの表示
  $('#loader_bg').fadeOut(400);

  // 名前のタイピング表示
  $('.top_name')
    .typist({
        speed: 7
    }).typistAdd('Keita Inoue')
});

// スムーススクロール
var scroll = new SmoothScroll('a[href*="#"]', {
  header: '#header',
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
  $('.menu').fadeIn();
});
$('.menu').on('click',function() {
  $('.menu').fadeOut();
  $('body').removeClass('open');
});

// ABOUT:MODE切替
$('.horizontal a').on('click',function(){
  $('.horizontal a').removeClass('active');
  $(this).addClass('active');
  $('.modeSection').hide();
  $('#' + $(this).data('target')).fadeIn();
})

// ABOUT:MODE切替時の表示位置調整
var position = $("#about_title").offset().top;
$("#work_btn,#life_btn").click(function() {
  $("html,body").animate({
    scrollTop: position
  }, {
    queue: false
  });
});

// SERVICE:費用リスト開閉
$('#price_button').on('click',function(){
  $('#price').slideToggle();
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