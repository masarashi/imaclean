jQuery(".openbtn").click(function () {
  //ボタンがクリックされたら
  jQuery(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
  jQuery("#gnav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
});

jQuery("#gnav a").click(function () {
  //ナビゲーションのリンクがクリックされたら
  jQuery(".openbtn").removeClass("active"); //ボタンの activeクラスを除去し
  jQuery("#gnav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスも除去
});
