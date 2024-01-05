"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  $(".js-hamburger,.js-sp-nav, .js-sp-nav a").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-active");
    $(".js-sp-nav").toggleClass("is-active");
    $(".js-sp-nav").fadeToggle();
    $("html").toggleClass("is-fixed");
  });

  //リサイズ処理
  $(window).resize(function () {
    if (window.matchMedia("(min-width:768px)").matches) {
      $(".js-faqhamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-sp-nav").removeClass("is-active");
      $(".js-sp-nav").fadeOut();
    }
  });

  //スライダー
  var swiper = new Swiper(".js-top-mv-swiper", {
    // Optional parameters
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });
  var swiper = new Swiper(".js-top-campaign-swiper", {
    loop: true,
    slidesPerView: 1.26,
    breakpoints: {
      768: {
        slidesPerView: 3.29,
        spaceBetween: 30
      },
      1024: {
        slidesPerView: 3.49,
        spaceBetween: 40
      }
    },
    spaceBetween: 24,
    speed: 2000,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false
    },
    // Navigation arrows
    navigation: {
      nextEl: ".js-top-campaign-swiper-button-next",
      prevEl: ".js-top-campaign-swiper-button-prev"
    }
  });

  // ページトップボタン
  $(document).ready(function () {
    var pageTop = $(".js-top-pagetop");
    pageTop.hide();
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });

    // フッター手前でストップ
    $(".js-top-pagetop").hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".js-top-pagetop").css({
          "border-color": "#fff"
        });
        //ドキュメントスタイルの取得
        var sheets = document.styleSheets;
        var sheet = sheets[sheets.length - 1];

        //スタイルルールの追加
        sheet.insertRule(".js-top-pagetop::before { border-color:#fff }", sheet.cssRules.length);
        sheet.insertRule(".js-top-pagetop::after { background-color:#fff }", sheet.cssRules.length);
      } else {
        $(".js-top-pagetop").css({
          "border-color": "#408F95"
        });
        var sheets = document.styleSheets;
        var sheet = sheets[sheets.length - 1];
        sheet.insertRule(".js-top-pagetop::before { border-color:#408F95 }", sheet.cssRules.length);
        sheet.insertRule(".js-top-pagetop::after { background-color:#408F95 }", sheet.cssRules.length);
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 500, "swing");
      return false;
    });
  });

  //要素の取得とスピードの設定
  var box = $(".js-colorbox"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });
  $(function () {
    $(window).on("load", function () {
      $(".js-load").fadeOut(700);
    });
  });

  // Campaignタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-top-campaign-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-top-campaign-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-top-campaign-content").hide().eq(index).fadeIn(300);
    });
  });

  // タブクリック時のカレント設定
  var currentUrl = window.location.href;
  $(".js-categories-item").each(function () {
    var linkUrl = $(this).attr("href");
    if (currentUrl === linkUrl) {
      $(this).addClass("current");
    }
  });
  $(document).ready(function () {
    // Information - tab
    $(window).on("hashchange", function () {
      activateTabFromHash();
    });
    // ハッシュの値に応じてタブをアクティブにする関数
    function activateTabFromHash() {
      var hash = window.location.hash; // 現在のハッシュを取得
      var index = getIndexFromHash(hash);

      // すべてのタブとコンテンツのアクティブ状態を初期化
      $(".js-information-tab").removeClass("is-active");
      // var index = getIndexFromHash(hash);
      // if (index !== null) {
      //   scrollToSection(index);
      // }
      // $(document).addEventListener("DOMContentLoaded", function () {

      // すべてのタブとコンテンツのアクティブ状態を初期化
      $(".js-information-tab").removeClass("is-active");
      // $(".js-information-card").removeClass("is-active");

      // ハッシュが存在する場合、該当するタブとコンテンツをアクティブにする
      if (hash) {
        // ハッシュの値に応じてタブをアクティブにする
        $("#tab-" + hash.replace("#", "")).addClass("is-active");
        $(hash).addClass("is-active");
        // 該当のjs-information-card　にis-activeをつけるため
        // ハッシュの値が"tab-"で始まる場合、"tab-"を除去してコンテンツのIDを生成
        var contentId = hash.replace("#tab-", "#");
        // 対応するコンテンツをアクティブにする
        $(contentId).addClass("is-active");
        var index = getIndexFromHash(hash);
        if (index !== null) {
          // scrollToSection(index);
        }
      } else {
        // ハッシュが存在しない場合、1件目のタブとコンテンツをアクティブにする
        $(".js-information-tab:first").addClass("is-active");
        $(".js-information-content:first").addClass("is-active");
      }
      // セクションまでスクロールする処理
      // function scrollToSection(index) {
      //   const headerHeight = $(".js-header").height();
      //   let target = $(".js-information-tab").eq(index);
      //   let targetTop = target.offset().top; // ターゲット要素の上端位置を取得
      //   let position = targetTop - headerHeight;

      //   $("body,html").animate({ scrollTop: position }, 500, "swing");
      // }
    }
    // 別ページから遷移した際の処理
    $(window).on("load", function () {
      var hash = window.location.hash;
      var index = getIndexFromHash(hash);
      if (index !== null) {
        // scrollToSection(index);
      }
    });
    // 最初のタブをデフォルトで表示
    $(".js-information-content:first-of-type").css("display", "block");
    var hash = window.location.hash;
    // hashからインデックスを取得
    var index = getIndexFromHash(hash);
    showCategory(index);
    $(".js-information-tab").on("click", function () {
      var index = $(this).index();
      showCategory(index);
    });
    function showCategory(index) {
      $(".js-information-tab").removeClass("is-active");
      $(".js-information-tab").eq(index).addClass("is-active");
      $(".js-information-content").hide().eq(index).fadeIn(300);
    }
    function getIndexFromHash(hash) {
      // デフォルトのインデックス
      var defaultIndex = 0;
      if (!hash.startsWith("#info")) {
        return defaultIndex;
      }
      var index = parseInt(hash.replace("#info", ""), 10) - 1; // 0-based index
      if (isNaN(index) || index < 0 || index >= $(".js-information-tab").length) {
        return defaultIndex;
      }
      return index;
    }
    $('a[href^="#"]').click(function () {
      // スクロールの速さを指定します。この場合は600ミリ秒かけてスクロールします。
      var speed = 600;
      // クリックされたリンクのhref属性の値（ターゲットセクションのID）を取得します。
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      $("html, body").animate({
        scrollTop: target.offset().top
      }, speed);
      // リンクをクリックした後に、実際のリンク先にジャンプしないようにします。
      return false;
    });
    // セクションまでスクロールする処理
    function scrollToSection(index) {
      var headerHeight = $(".js-header").height();
      var target = $(".js-information-tab").eq(index);
      var targetTop = target.offset().top; // ターゲット要素の上端位置を取得
      var position = targetTop - headerHeight;

      // タブメニューの上にスクロールが止まるように調整
      // let tabMenuContainerHeight = $("#info").height();
      // position -= tabMenuContainerHeight;

      // さらに微調整
      // position -= headerHeight; // 24px だけタブメニューがかかる程度に調整

      $("body,html").animate({
        scrollTop: position
      }, 500, "swing");
    }
  });

  // モーダル表示;
  var scrollPosition;
  $(".js-modal").click(function () {
    scrollPosition = $(window).scrollTop();
    $(".js-modal-window").html($(this).prop("outerHTML"));
    $(".js-modal-window").fadeIn(300);
    $(".js-header, .js-page-top").hide();
    $("html").addClass("is-fixed");
    return false;
  });
  // モーダル非表示
  $(".js-modal-window").click(function () {
    $(".js-modal-window").fadeOut(300, function () {
      $(".js-header, .js-page-top").fadeIn();
      $("html").removeClass("is-fixed");
      $(window).scrollTop(scrollPosition);
    });
    return false;
  });
  // blogアーカイブメニュー
  // $(function () {
  //   const toggleButtons = document.querySelectorAll(".blog-archive__year");
  //   const toggleDivs = document.querySelectorAll(".blog-archive__month");

  //   toggleButtons.forEach((button, index) => {
  //     button.addEventListener("click", function () {
  //       if (toggleDivs[index].style.display === "none") {
  //         toggleDivs[index].style.display = "block";
  //       } else {
  //         toggleDivs[index].style.display = "none";
  //       }
  //     });
  //   });
  // });
  $(function () {
    var toggleButtons = document.querySelectorAll(".blog-archive__year");
    var toggleDivs = document.querySelectorAll(".blog-archive__month");
    toggleButtons.forEach(function (button, index) {
      button.addEventListener("click", function () {
        if (toggleDivs[index].style.display === "none") {
          toggleDivs[index].style.display = "block";
        } else {
          toggleDivs[index].style.display = "none";
        }
      });
    });
  });

  // voiceタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-top-voice-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-top-voice-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-top-voice-content").hide().eq(index).fadeIn(300);
    });
  });

  //ローディングアニメーション
  var op = gsap.timeline();
  op.fromTo(".loader__text", {
    opacity: 1
  }, {
    opacity: 0
  }, "+=1");
  op.fromTo(".loader__line", {
    yPercent: 0
  }, {
    yPercent: -100,
    duration: 1,
    stagger: {
      each: 0.2,
      ease: Power4.easeInOut
    }
  }).to(".loader", {
    display: "none"
  }, ">");

  // アコーディオン - blog-archive
  $(document).ready(function () {
    // 初期状態で最初の年の月リストを表示し、▶︎を▼に変更
    $(".blog-archive__list:first-of-type .blog-archive__month").css("display", "block");

    // 最初の年に open クラスを付ける
    $(".blog-archive__list:first-of-type .js-side-archive").addClass("open");
    $(".js-side-archive").on("click", function () {
      // 年の要素から「open」クラスを削除
      $(".js-side-archive").not(this).removeClass("open");

      // 月リストを閉じる
      $(".blog-archive__list .blog-archive__month").css("display", "none");

      // クリックされた年の月リストを表示
      $(this).next().slideToggle(300);

      // クリックされた年の要素に「open」クラスを追加
      $(this).toggleClass("open");
    });
  });
  //アコーディオン
  $(document).ready(function () {
    var accordionDetails = ".js-details";
    var accordionSummary = ".js-details-summary";
    var accordionContent = ".js-details-content";
    var speed = 500;
    $(".details__content").css("display", "block");
    $(".details__summary").addClass("is-active");
    $(accordionSummary).each(function () {
      // 初期設定でアコーディオンを開いておく処理
      // open属性を付ける
      $(this).parent($(accordionDetails)).attr("open", "true");
      // いったんdisplay:none;してからslideDownで開く
      $(this).nextAll($(accordionContent)).hide().slideDown(speed);
      // $(this).nextAll($(accordionContent)).hide().slideDown(speed);

      $(this).on("click", function (event) {
        // summaryにis-activeクラスを切り替え
        $(this).toggleClass("is-active");
        // デフォルトの挙動を無効化
        event.preventDefault();
        if ($(this).parent($(accordionDetails)).attr("open")) {
          // アコーディオンを閉じるときの処理
          $(this).nextAll($(accordionContent)).slideUp(speed, function () {
            // アニメーションの完了後にopen属性を取り除く
            $(this).parent($(accordionDetails)).removeAttr("open");
            // display:none;を消して、ページ内検索にヒットするようにする
            $(this).show();
          });
        } else {
          // アコーディオンを開くときの処理
          // open属性を付ける
          $(this).parent($(accordionDetails)).attr("open", "true");
          // いったんdisplay:none;してからslideDownで開く
          $(this).nextAll($(accordionContent)).hide().slideDown(speed);
        }
      });
      $(this).closest(accordionDetails).find(".close-btn").on("click", function (eventclosee) {
        eventclosee.preventDefault();
        //「閉じる」ボタンがクリックされた場合にsummaryの.is-activeを外す
        $(this).closest(accordionDetails).find(accordionSummary).removeClass("is-active");
        //「閉じる」ボタンがクリックされた場合にdetails-contentを閉じる
        $(this).closest(accordionContent).slideUp(speed, function () {
          //「閉じる」ボタンがクリックされた場合にdetailsのopen属性を外す
          $(this).closest(accordionDetails).removeAttr("open");
        });
      });
    });
  });

  // // footer
  // $(window).on("load resize", function () {
  //   let window_height = window.innerHeight ? window.innerHeight : $(window).innerHeight();
  //   $(".body-404__wrap").css("min-height", window_height + "px");
  // });
});