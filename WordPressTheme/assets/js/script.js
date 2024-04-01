"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ページトップボタン
  $(function () {
    var pageTop = $("#to-top");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    // フッター手前でストップ
    $("#to-top").hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $(".footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
        $(".to-top").css({
          position: "absolute",
          bottom: footHeight + 20
        });
      } else {
        $(".to-top").css({
          position: "fixed",
          bottom: "0"
        });
      }
    });
  });

  // ドロワーメニュー
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger").removeClass('is-active');
      $("body").removeClass('is-active');
      $(".js-sp-nav").fadeOut(300);
      $(".header").css('background', 'rgba(13, 41, 54, 0.68)');
    } else {
      $(".js-hamburger").addClass('is-active');
      $("body").addClass('is-active');
      $(".js-sp-nav").fadeIn(300);
      $(".header").css('background', '#004c42');
    }
  });

  // グローバルナビメニューのリンクをクリックしたらページを閉じる
  $(function () {
    $(".js-sp-nav ul li a").on("click", function () {
      $(".js-hamburger").removeClass('is-active');
      $(".js-sp-nav").fadeOut(300);
      $(".header").css('background', 'rgba(13, 41, 54, 0.68)');
    });
  });
  $(function () {
    var pageHash = window.location.hash;
    if (pageHash) {
      var scrollToElement = $('[data-id="' + pageHash + '"]');
      if (!scrollToElement.length) return;
      $(window).on('load', function () {
        history.replaceState('', '', './');
        var locationOffset = scrollToElement.offset().top;
        var navigationBarHeight = $('.header').innerHeight();
        locationOffset = locationOffset - navigationBarHeight - 65;
        $('html, body').animate({
          scrollTop: locationOffset
        }, 300, 'swing');
      });
    }
  });
  // ヘッダーの高さ分下に下げてスクロール
  $(function () {
    $('a[href*="#"]').on('click', function () {
      var scrollSpeed = 400;
      var navigationHeight = $(".header").innerHeight();
      var scrollToTarget = $(this.hash === '#' || '' ? 'html' : this.hash);
      if (!scrollToTarget.length) return;
      var scrollPosition = scrollToTarget.offset().top - navigationHeight - 105;
      $('html, body').animate({
        scrollTop: scrollPosition
      }, scrollSpeed, 'swing');
      return false;
    });
  });
  var swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    loopedSlides: 4,
    clickable: true,
    effect: 'fade',
    speed: 2000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    }
  });
  var swiper = new Swiper(".js-campaign-swiper", {
    // pagination: {
    //   el: ".js-works-paginations",
    // },
    loop: true,
    loopedSlides: 8,
    width: 280,
    spaceBetween: 24,
    autoplay: {
      delay: 3000
    },
    breakpoints: {
      768: {
        width: 333,
        spaceBetween: 40
      }
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  //要素の取得とスピードの設定
  var box = $('.js-colorbox'),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="is-color"></div>');
    var color = $(this).find($('.is-color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // モーダル
  jQuery(".js-modal-trigger").on("click", function () {
    var imageHtml = jQuery(this).find("img").prop("outerHTML");
    jQuery(".gallery__overlay").html(imageHtml);
    jQuery(".gallery__overlay").fadeIn(400);
    jQuery('html, body').css('overflow', 'hidden');
  });
  jQuery(".gallery__overlay").on("click", function () {
    jQuery(".gallery__overlay").fadeOut(400);
    jQuery('html, body').removeAttr('style');
  });

  // informationタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-content").hide().eq(index).fadeIn(800);
    });

    // URLからクエリパラメータを取得
    var targetTab = new URLSearchParams(window.location.search).get('tab');

    // クエリパラメータが存在する場合は、該当のタブを表示する
    if (targetTab) {
      var targetElement = document.querySelector("[data-tab=\"".concat(targetTab, "\"]"));
      targetElement === null || targetElement === void 0 ? void 0 : targetElement.click(); // Optional chainingを使用してクリックイベントを実行
    }
  });

  // アーカイブメニュー
  $(function () {
    $(".archive__menu dt").on("click", function () {
      $(this).next().slideToggle();
      $(this).toggleClass("is-active"); // クリックした箇所のactiveクラスを切り替える
    });
  });

  // アコーディオン
  $(function () {
    // 最初は開いた状態に
    $(".page-faq__accordion .js-accordion").addClass("open");
    // タイトルをクリックすると
    $(".js-accordion").on("click", function () {
      // クリックした次の要素を開閉
      $(this).next().slideToggle(300);
      // タイトルにopenクラスを付け外ししてプラスマイナスを変更
      $(this).toggleClass("close", 300);
    });
  });

  // ==========================================================================
  // お問い合わせフォームエラーメッセージ
  // ==========================================================================
  $(document).ready(function () {
    // ページ読み込み時に実行される関数

    $('.form__error').hide(); // 最初はエラーメッセージを非表示に

    $('form').validate({
      // フォームのバリデーションを設定

      rules: {
        name: {
          required: true // 名前が必須
        },

        mail_address: {
          required: true,
          // メールアドレスが必須
          email: true // メールアドレスの形式チェック
        },

        tel: {
          required: true // 電話番号が必須
        },

        contents: {
          required: true // お問い合わせ内容が必須
        },

        privacy: {
          required: true // プライバシーポリシーに同意が必須
        }
      },

      messages: {
        name: {
          required: '※必須項目が入力されていません。<br class="u-mobile">入力してください。'
        },
        mail_address: {
          required: '※必須項目が入力されていません。<br class="u-mobile">入力してください。',
          email: '正しいメールアドレスの形式で入力してください.' // メールアドレスの形式エラーメッセージ
        },

        tel: {
          required: '※必須項目が入力されていません。<br class="u-mobile">入力してください。'
        },
        contents: {
          required: '※必須項目が入力されていません。<br class="u-mobile">入力してください。'
        },
        privacy: {
          required: '※プライバシーポリシーに同意する必要があります。'
        }
      },
      errorPlacement: function errorPlacement(err, elem) {
        // エラーメッセージの表示場所とスタイリングをカスタマイズ
        if (elem.attr('name') === 'privacy') {
          // プライバシーポリシーのチェックボックスの場合、エラーメッセージをその要素の隣に表示
          err.insertAfter(elem);
          // エラーがある場合、placeholderの色を白に変更
          elem.css('color', 'white');
        } else {
          // その他の要素は通常通り表示
          elem.addClass('js-invalid');
          $('.form__error').show(); // エラーメッセージを表示
          $('.js-error').html(err);
        }
      }
    });
    $('form').submit(function () {
      // フォームが送信されたときの処理
      if (!$('form').valid()) {
        // フォームがバリデーションを通過しない場合
        $('.js-error').show(); // エラーメッセージを表示
        return false; // フォーム送信を阻止
      } else if (!$('#form-privacy').is(':checked')) {
        // プライバシーポリシーに同意していない場合
        $('.js-error').show().html('※プライバシーポリシーに同意する必要があります。'); // エラーメッセージを表示
        return false; // フォーム送信を阻止
      } else {
        // フォームが正常にバリデーションを通過し、かつプライバシーポリシーに同意済みの場合
        window.location.href = "page-contact-thanks.html"; // 送信成功時にリダイレクト
        return false; // フォームの送信を阻止
      }
    });
  });

  window.addEventListener('load', function () {
    var loadingAreaGray = document.querySelector('.loading');
    var loadingAreaGreen = document.querySelector('.loading-screen');
    var loadingText = document.querySelector('.loading p');

    // ローディング中（グレースクリーン）のアニメーション
    if (loadingAreaGray) {
      loadingAreaGray.animate({
        opacity: [1, 0],
        visibility: 'hidden'
      }, {
        duration: 2000,
        delay: 1200,
        easing: 'ease',
        fill: 'forwards'
      });
    }

    // ローディング中（薄緑スクリーン）のアニメーション
    if (loadingAreaGreen) {
      loadingAreaGreen.animate({
        translate: ['0 100vh', '0 0', '0 -100vh']
      }, {
        duration: 2000,
        delay: 800,
        easing: 'ease',
        fill: 'forwards'
      });
    }

    // ローディング中テキストのアニメーション
    if (loadingText) {
      loadingText.animate([{
        opacity: 1,
        offset: 0
      }, {
        opacity: 1,
        offset: 0.8
      }, {
        opacity: 0,
        offset: 1
      }], {
        duration: 1200,
        easing: 'ease',
        fill: 'forwards'
      });
    }
  });
  // voice-card__wrapperの高さ揃える
  function adjustCardWrapperHeight() {
    var wrappers = document.querySelectorAll('.voice-card__wrapper');
    var maxHeight = 0;

    // 一旦全ての高さをリセット
    wrappers.forEach(function (wrapper) {
      wrapper.style.height = 'auto';
    });

    // 最大の高さを見つける
    wrappers.forEach(function (wrapper) {
      if (wrapper.offsetHeight > maxHeight) {
        maxHeight = wrapper.offsetHeight;
      }
    });

    // 最大の高さを全てのwrapperに適用
    wrappers.forEach(function (wrapper) {
      wrapper.style.height = "".concat(maxHeight, "px");
    });
  }
  // blog-card__headの高さ揃える
  function adjustBlogCardHeadHeight() {
    var heads = document.querySelectorAll('.blog-card__head');
    var maxHeight = 0;

    // 一旦全ての高さをリセット
    heads.forEach(function (head) {
      head.style.height = 'auto';
    });

    // 最大の高さを見つける
    heads.forEach(function (head) {
      if (head.offsetHeight > maxHeight) {
        maxHeight = head.offsetHeight;
      }
    });

    // 最大の高さを全てのheadに適用
    heads.forEach(function (head) {
      head.style.height = "".concat(maxHeight, "px");
    });
  }
  // blog-card__titleの高さ揃える
  function adjustHeadingsHeight() {
    var headings = document.querySelectorAll('.blog-card__title');
    var maxHeight = 0;

    // 一旦全ての高さをリセット
    headings.forEach(function (heading) {
      heading.style.height = 'auto';
    });

    // 最大の高さを見つける
    headings.forEach(function (heading) {
      if (heading.offsetHeight > maxHeight) {
        maxHeight = heading.offsetHeight;
      }
    });

    // 最大の高さを全てのheadingに適用
    headings.forEach(function (heading) {
      heading.style.height = "".concat(maxHeight, "px");
    });
  }
  function adjustCampaignCardHeadHeight() {
    var campaignHeads = document.querySelectorAll('.campaign-card__head');
    var maxHeight = 0;

    // 一旦全ての高さをリセット
    campaignHeads.forEach(function (campaignHead) {
      campaignHead.style.height = 'auto';
    });

    // 最大の高さを見つける
    campaignHeads.forEach(function (campaignHead) {
      if (campaignHead.offsetHeight > maxHeight) {
        maxHeight = campaignHead.offsetHeight;
      }
    });

    // 最大の高さを全てのcampaignHeadに適用
    campaignHeads.forEach(function (campaignHead) {
      campaignHead.style.height = "".concat(maxHeight, "px");
    });
  }
  function adjustCampaignHeadingsHeight() {
    var campaignTitles = document.querySelectorAll('.campaign-card__title');
    var maxHeight = 0;

    // 一旦全ての高さをリセット
    campaignTitles.forEach(function (campaignTitle) {
      campaignTitle.style.height = 'auto';
    });

    // 最大の高さを見つける
    campaignTitles.forEach(function (campaignTitle) {
      if (campaignTitle.offsetHeight > maxHeight) {
        maxHeight = campaignTitle.offsetHeight;
      }
    });

    // 最大の高さを全てのcampaignTitleに適用
    campaignTitles.forEach(function (campaignTitle) {
      campaignTitle.style.height = "".concat(maxHeight, "px");
    });
  }
  window.onload = function () {
    adjustCardWrapperHeight(); // voice-card__wrapperの高さを調整
    adjustBlogCardHeadHeight(); // blog-card__headの高さを調整
    adjustHeadingsHeight(); // blog-card__titleの高さを調整
    adjustCampaignCardHeadHeight(); // campaign-card__headの高さを調整
    adjustCampaignHeadingsHeight(); // campaign-card__titleの高さを調整
  };

  window.onresize = function () {
    adjustCardWrapperHeight();
    adjustBlogCardHeadHeight();
    adjustHeadingsHeight();
    adjustCampaignCardHeadHeight();
    adjustCampaignHeadingsHeight();
  };

  // fadeinのアニメーション
  var animateFade = function animateFade(entries, obs) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.animate([{
          opacity: 0,
          filter: 'blur(0.4rem)',
          transform: 'translateY(4rem)'
        }, {
          opacity: 1,
          filter: 'blur(0)',
          transform: 'translateY(0)'
        }], {
          duration: 1200,
          easing: 'ease',
          fill: 'forwards'
        });
        obs.unobserve(entry.target);
      }
    });
  };
  var fadeObserver = new IntersectionObserver(animateFade);
  var fadeElements = document.querySelectorAll('.fadein');
  fadeElements.forEach(function (fadeElement) {
    fadeObserver.observe(fadeElement);
  });

  // セレクトへタイトルを反映
  jQuery(document).ready(function ($) {
    $('.select-button').on('click', function () {
      // クリックされたカードのdata-campaign-titleを取得
      var title = $(this).closest('.page-campaign__item').data('campaign-title');

      // セレクトボックスの選択肢をループし、該当するタイトルを選択状態にする
      $('#your-select-field-id option').each(function () {
        if ($(this).text() === title) {
          $(this).prop('selected', true);
        }
      });

      // 必要に応じて、Contact Form 7のフォームを表示する処理をここに追加
    });
  });
});