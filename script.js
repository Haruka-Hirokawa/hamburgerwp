$(function() {
  // 「#sidebar-button--open」のclickイベント→「#sidebar」を開く
  $('#sidebar-button--open').on('click', function() {
    $('#sidebar').addClass('is-open');
    $('#sidebar-background').fadeIn();
  });

  // 「#js_close_button」のclickイベント→「#sidebar」を閉じる
  $('#sidebar-button--close').on('click', function() {
      $('#sidebar').removeClass('is-open');
      $('#sidebar-background').fadeOut();
  });
  
// 画面サイズがPC以上になったらサイドバーを開いた状態でもPC用のデフォルト画面に戻す
  var $win = $(window);

  $win.on('load resize', function() {
    var windowWidth = window.innerWidth;

    if (windowWidth >= 769) {
      // PCの処理
      $('#sidebar').removeClass('is-open');
      $('#sidebar-background').fadeOut();
    } 
  });
});