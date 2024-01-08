<?php get_header(); ?>
<main>
    <div class="mv js-mv">
      <div class="mv__inner">
        <div class="mv__header js-mv-header">
          <h2 class="mv__title">diving</h2>
          <p class="mv__subtitle">into the ocean</p>
        </div>
        <div class="mv__swiper swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <div class="mv__swiper-slide swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp.jpg" alt="ウミガメの画像">
              </picture>
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view2.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp2.jpg" alt="ダイビングの画像">
              </picture>
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view3.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp3.jpg" alt="ボートの画像">
              </picture>
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/main-view4.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp4.jpg" alt="砂浜の画像">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="campaign" class="campaign layout-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__title section-header">
          <p class="section-header__entitle">Campaign</p>
          <h2 class="section-header__jatitle">キャンペーン</h2>
        </div>
        <div class="campaign__container">
          <div class="campaign__swiper swiper js-campaign-swiper">
            <ul class="swiper-wrapper">
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="熱帯魚の画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ライセンス講習</p>
                      <h3 class="campaign-card__title">ライセンス取得ライセンス取得ライセンス取得ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥56,000</p>
                        <p class="campaign-card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="ボートの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">体験ダイビング</p>
                      <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥24,000</p>
                        <p class="campaign-card__price-after">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">体験ダイビング</p>
                      <h3 class="campaign-card__title">ナイトダイビング</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥10,000</p>
                        <p class="campaign-card__price-after">¥8,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ダイビングの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ファンダイビング</p>
                      <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥20,000</p>
                        <p class="campaign-card__price-after">¥16,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="熱帯魚の画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ライセンス講習</p>
                      <h3 class="campaign-card__title">ライセンス取得ライセンス取得ライセンス取得ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥56,000</p>
                        <p class="campaign-card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="ボートの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ライセンス講習</p>
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥56,000</p>
                        <p class="campaign-card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ライセンス講習</p>
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥56,000</p>
                        <p class="campaign-card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__slide swiper-slide">
                <a href="#" class="campaign-card">
                  <div class="campain-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="ダイビングの画像">
                  </div>
                  <div class="campaign-card__inner">
                    <div class="campaign-card__head">
                      <p class="campaign-card__category">ライセンス講習</p>
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__body">
                      <p class="campaign-card__menu-title">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <p class="campaign-card__price-before">¥56,000</p>
                        <p class="campaign-card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="campaign__button">
          <a href="page-campaign.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="about-us" class="about layout-about ">
      <div class="about__inner inner">
        <div class="about__title section-header">
          <p class="section-header__entitle">About us</p>
          <h2 class="section-header__jatitle">私たちについて</h2>
        </div>
        <div class="about__wrapper">
          <div class="about__images">
            <div class="about__image-left">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean1.jpg" alt="シーサーの画像">
            </div>
            <div class="about__image-right">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2-sp.jpg" media="(max-width: 767px)" >
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2.jpg" alt="海中の画像">
              </picture>
            </div>
          </div>
          <div class="about__body">
            <h3 class="about__heading">Dive into
              <br>the Ocean</h3>
            <div class="about__content">
              <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              <div class="about__button">
                <a href="page-about.html" class="button">View more<span></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="information" class="information layout-information">
      <div class="information__inner inner">
        <div class="information__title section-header">
          <p class="section-header__entitle">Information</p>
          <h2 class="section-header__jatitle">ダイビング情報</h2>
        </div>
        <div class="information__contents">
          <div class="information__wrapper">
            <div class="information__image js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="熱帯魚の画像">
            </div>
          </div>
          <div class="information__content">
            <h3 class="information__heading">ライセンス取得</h3>
            <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関の「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information__button">
              <a href="#" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="blog layout-blog">
      <div class="blog__inner inner">
        <div class="blog__title section-header">
          <p class="section-header__entitle section-header__entitle--blog">Blog</p>
          <h2 class="section-header__jatitle section-header__jatitle--blog">ブログ</h2>
        </div>
        <ul class="blog__items blog-cards">
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__inner">
                <div class="blog-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="サンゴ礁の画像">
                </div>
                <div class="blog-card__head">
                  <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  <div class="blog-card__heading">
                    <h3 class="blog-card__title">ライセンス取得</h3>
                  </div>
                </div>
                <div class="blog-card__body">
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 <br>ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
              </div>
            </a>
          </li>
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__inner">
                <div class="blog-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="ウミガメが泳いでいる画像">
                </div>
                <div class="blog-card__head">
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  </div>
                  <div class="blog-card__heading">
                    <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                  </div>
                </div>
                <div class="blog-card__body">
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </li>
          <li class="blog-cards__item blog-card">
            <a href="#" class="blog-card__link">
              <div class="blog-card__inner">
                <div class="blog-card__image">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpg" alt="カクレクマノミの画像">
                </div>
                <div class="blog-card__head">
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  </div>
                  <div class="blog-card__heading">
                    <h3 class="blog-card__title">カクレクマノミ</h3>
                  </div>
                </div>
                <div class="blog-card__body">
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 <br>ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <div class="blog__button">
          <a href="page-blog.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="voice" class="voice layout-voice">
      <div class="voice__inner inner">
        <div class="voice__title section-header">
          <p class="section-header__entitle">Voice</p>
          <h2 class="section-header__jatitle">お客様の声</h2>
        </div>
        <ul class="voice__items voice-cards">
          <li class="voice-cards__item voice-card">
            <a href="#" class="voice-card__link">
              <div class="voice-card__inner">
                <div class="voice-card__wrapper">
                  <div class="voice-card__image js-colorbox">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpg" alt="女性の画像">
                  </div>
                  <div class="voice-card__head">
                    <div class="voice-card__meta">
                      <div class="voice-card__tag">20代(女性)</div>
                      <div class="voice-card__category">ライセンス講習</div>
                    </div>
                    <div class="voice-card__heading">
                      <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                    </div>
                  </div>
                </div>
                <div class="voice-card__body">
                  <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
              </div>
            </a>
          </li>
          <li class="voice-cards__item voice-card">
            <a href="#" class="voice-card__link">
              <div class="voice-card__inner">
                <div class="voice-card__wrapper">
                  <div class="voice-card__image js-colorbox">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="男性の画像">
                  </div>
                  <div class="voice-card__head">
                    <div class="voice-card__meta">
                      <div class="voice-card__tag">20代(男性)</div>
                      <div class="voice-card__category">ファンダイビング</div>
                    </div>
                    <div class="voice-card__heading">
                      <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                    </div>
                  </div>
                </div>
                <div class="voice-card__body">
                  <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <div class="voice__button">
          <a href="page-voice.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <section id="price" class="price layout-price">
      <div class="price__inner inner">
        <div class="price__title section-header">
          <p class="section-header__entitle">Price</p>
          <h2 class="section-header__jatitle">料金一覧</h2>
        </div>
        <div class="price__contents">
          <div class="price__image js-colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceimg.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg" alt="ウミガメの画像">
            </picture>
          </div>
          <ul class="price__items">
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price1" class="price__item-title">ライセンス講習</h3>
              </div>
              <dl class="price__course">
                <div class="price__course-wrapper">
                  <dt class="price__course-name">オープンウォーターダイバーコース</dt>
                  <dd class="price__course-charge">¥50,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">アドバンスドオープンウォーターコース</dt>
                  <dd class="price__course-charge">¥60,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">レスキュー＋EFRコース</dt>
                  <dd class="price__course-charge">¥70,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price2" class="price__item-title">体験ダイビング</h3>
              </div>
              <dl class="price__course">
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ビーチ体験ダイビング(半日)</dt>
                  <dd class="price__course-charge">¥7,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ビーチ体験ダイビング(1日)</dt>
                  <dd class="price__course-charge">¥14,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ボート体験ダイビング(半日)</dt>
                  <dd class="price__course-charge">¥10,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ボート体験ダイビング(1日)</dt>
                  <dd class="price__course-charge">¥18,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 id="price3" class="price__item-title">ファンダイビング</h3>
              </div>
              <dl class="price__course">
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ビーチダイビング(2ダイブ)</dt>
                  <dd class="price__course-charge">¥14,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ボートダイビング(2ダイブ)</dt>
                  <dd class="price__course-charge">¥18,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="price__course-charge">¥24,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">ナイトダイビング(1ダイブ)</dt>
                  <dd class="price__course-charge">¥10,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <div class="price__item-header">
                <h3 class="price__item-title">スペシャルダイビング</h3>
              </div>
              <dl class="price__course">
                <div class="price__course-wrapper">
                  <dt class="price__course-name">貸切ダイビング(2ダイブ)</dt>
                  <dd class="price__course-charge">¥24,000</dd>
                </div>
                <div class="price__course-wrapper">
                  <dt class="price__course-name">1日ダイビング(3ダイブ)</dt>
                  <dd class="price__course-charge">¥32,000</dd>
                </div>
              </dl>
            </li>
          </ul>
        </div>
        <div class="price__button">
          <a href="page-price.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

   

<?php get_footer(); ?>