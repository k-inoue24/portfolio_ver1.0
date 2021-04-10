<!DOCTYPE html>
<html>

<head lang="ja">
  <meta charset="utf-8">
  <title>Keita Inoue ｜ Web Engineer's portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|EB+Garamond|Scheherazade:400,700|Tangerine&display=swap&subset=arabic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Merriweather|Oswald|Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
  <?php wp_head(); ?>
</head>
<body>
  <div id="loaderBg">
      <img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif">
  </div>
  <header>
    <div class="contentInner">
      <h1 class="siteTitle"><a href="#top">Keita Inoue</a><span>Web Engineer's portfolio</span></h1>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#works">Works</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#links">Links</a></li>
        </ul>
      </nav>
      <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="spMenu">
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#works">Works</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#links">Links</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="brandingContent">
    <div class="brandingWrapper">
      <p class="brandingName"></p>
      <p class="introduction">Web Engineer / Freelance / Traveler<br>"Always be creative"</p>
      <a class="contactLink" href="#contact">CONTACT</a>
    </div>
  </div>
  <section id="about">
    <div class="contentInner">
      <h2 class="sectionTitle" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-anchor-placement="bottom-bottom">ABOUT<span>-自己紹介-</span></h2>
      <div class="modeSection" id="work">
        <div class="modeWrap">
          <img class="modeImage" src="<?php echo get_template_directory_uri(); ?>/img/profile-work.jpg" alt="KeitaInoue">
          <div class="modeText" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-anchor-placement="center-bottom">
            <p>フリーランスWebエンジニアとして活動している井上恵太と申します。<br> 専門はWEBサイト制作全般です。</p>
            <ul>
              <li><i class="fas fa-caret-right"></i> 細かいヒアリングを経てのデザイン設計</li>
              <li><i class="fas fa-caret-right"></i> 品質向上のための技術的提案</li>
              <li><i class="fas fa-caret-right"></i> SEOを考慮したコーディング</li>
              <li><i class="fas fa-caret-right"></i> サイト訪問者を惹きつけるモダンな実装</li>
              <li><i class="fas fa-caret-right"></i> 制作後のサイト運用/保守</li>
            </ul>
            <p>一番の目的は、依頼者様が手がけるサービスにより良い結果をもたらすことです。<br> その手段として、ご要望以上のWEBサイト制作に尽力していきます。</p>
          </div>
        </div>
      </div>
      <div class="modeSection" id="life">
        <div class="modeWrap">
          <img class="modeImage" src="<?php echo get_template_directory_uri(); ?>/img/profile-life.jpg" alt="KeitaInoue">
          <div class="modeText" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-anchor-placement="center-bottom">
            <p>東京と東南アジア諸国を拠点に生活しています。<br> トップを飾っている背景画像は、タイ・チェンマイの伝統行事『コムローイ祭り』にて撮影したものです。</p>
            <p>場所と時間に縛られない生活をしているメリットを生かし、お客様からのご連絡には迅速に対応させていただいています。<br>ご所望であれば、直接対面での打ち合わせにも可能な限り応じる所存です。</p>
            <p>いつでもお気軽に<a class="basicLink" href="#contact">お問い合わせ</a>ください。</p>
          </div>
        </div>
      </div>
      <div class="switchText" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">・MODE SWITCH・</span>
      <ul class="modeSwitch" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
        <li><a class="active" id="work_btn" data-target="work">WORK</a></li>
        <li><a id="life_btn" data-target="life">LIFE</a></li>
      </ul>
    </div>
  </section>
  <section id="service">
      <div class="contentInner">
          <h2 class="sectionTitle" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-anchor-placement="bottom-bottom">SERVICE <span>-各制作サービス-</span></h2>
          <div class="serviceContent" data-aos="fade-zoom-in" data-aos-delay="500" data-aos-anchor-placement="top-center">
              <div class="imgWrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/corporate-site.png" width="75%" alt="ランディングページ/コーポレイトサイト">
              </div>
              <div class="textWrap">
                  <div class="textInner">
                      <h3 class="serviceTitle">ランディングページ<br class="br_slash"><span class="slash">/</span>コーポレイトサイト制作</h3>
                      <span class="titleBorder"></span>
                      <p>販促を目的とした1枚のランディングページや、複数ページを持つコーポレイトサイトの制作を担当します。サイトの目的に応じたデザインの提案が可能です。すでにデザイン案をお持ちの場合は、コーディングの代行をお任せください。</p>
                  </div>
              </div>
          </div>
          <div class="serviceContent" data-aos="fade-zoom-in" data-aos-anchor-placement="top-center">
              <div class="imgWrap">
                  <img class="smartphone" src="<?php echo get_template_directory_uri(); ?>/img/smartphone-site.png" width="40%" alt="レスポンシブ化">
              </div>
              <div class="textWrap">
                  <div class="textInner">
                      <h3 class="serviceTitle">レスポンシブ対応</h3>
                      <span class="titleBorder"></span>
                      <p>スマートフォンが普及した今の時代では、WEBサイトのモバイル対応は必須の機能です。Googleも、スマートフォン向けに最適化されたサイトを優遇することを明示しています。ランディングページやコーポレイトサイトの設計には、レスポンシブ対応も併せて実装します。既存サイトのレスポンシブ化もご相談ください。</p>
                  </div>
              </div>
          </div>
          <div class="serviceContent" data-aos="fade-zoom-in" data-aos-anchor-placement="top-center">
              <div class="imgWrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" width="75%" alt="ワードプレス制作">
              </div>
              <div class="textWrap">
                  <div class="textInner">
                      <h3 class="serviceTitle">WordPress構築</h3>
                      <span class="titleBorder"></span>
                      <p>更新の頻度が多いサイトは、WordPress対応をさせることで利便性が高まります。デザインからコーディング、WordPressの構築までをお任せください。既存サイトのWordPress化も受け付けております。</p>
                  </div>
              </div>
          </div>
          <div class="serviceContent" data-aos="fade-zoom-in" data-aos-anchor-placement="top-center">
              <div class="imgWrap">
                  <img class="domain" src="<?php echo get_template_directory_uri(); ?>/img/domain.png" width="75%" alt="ランディングページ/コーポレイトサイト">
              </div>
              <div class="textWrap">
                  <div class="textInner">
                      <h3 class="serviceTitle">ドメイン・サーバー契約</h3>
                      <span class="titleBorder"></span>
                      <p>Webサイトに必要となるドメインおよびサーバーの契約を代行いたします。『お名前.com』と『エックスサーバー』を使用する予定ですが、別途ご要望があればお申し付けください。サイトの常時SSL化など、セキリュティ面のご相談にも対応します。</p>
                  </div>
              </div>
          </div>
          <div class="circleLine" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <div class="prices_acd" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0">
              <p class="price"><a id="price_button" class="prices_head"><i class="fas fa-chevron-circle-down"></i> 各制作の費用感はこちら <i class="fas fa-chevron-circle-down"></i></a></p>
              <div class="prices" id="price">
                  <div class="table_container" align="center">
                      <table>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> ランディングページ/コーディング</th>
                              <td>：30,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> ランディングページ/デザイン&コーディング</th>
                              <td>：50,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> コーポレイトサイト/TOPページコーディング</th>
                              <td>：15,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> コーポレイトサイト/下層1ページコーディング</th>
                              <td>：10,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> レスポンシブ化/1ページ(デザイン提案込み)</th>
                              <td>：10,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> WordPress化/1ページ</th>
                              <td>：10,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> ドメイン&サーバー契約代行</th>
                              <td>：8,000円〜</td>
                          </tr>
                          <tr>
                              <th><i class="fas fa-caret-right"></i> サイト運用・保守</th>
                              <td>：5,000円/月〜</td>
                          </tr>
                      </table>
                  </div>
                  <ul class="price_list_sp">
                      <li>ランディングページ/コーディング<br><i class="fas fa-caret-right"></i> 30,000円〜</li>
                      <div></div>
                      <li>ランディングページ/デザイン&コーディング<br><i class="fas fa-caret-right"></i> 50,000円〜</li>
                      <div></div>
                      <li>コーポレイトサイト/TOPページコーディング<br><i class="fas fa-caret-right"></i> 15,000円〜</li>
                      <div></div>
                      <li>コーポレイトサイト/下層1ページコーディング<br><i class="fas fa-caret-right"></i> 10,000円〜</li>
                      <div></div>
                      <li>レスポンシブ化/1ページ(デザイン提案込み)<br><i class="fas fa-caret-right"></i> 10,000円〜</li>
                      <div></div>
                      <li>WordPress化/1ページ<br><i class="fas fa-caret-right"></i> 10,000円〜</li>
                      <div></div>
                      <li> ドメイン&サーバー契約代行<br><i class="fas fa-caret-right"></i> 8,000円〜</li>
                      <div></div>
                      <li>サイト運用・保守<br><i class="fas fa-caret-right"></i> 5,000円/月〜</li>
                      <div></div>
                  </ul>
                  <p class="example_text">上記価格は目安になります。<br>ご依頼の内容次第で、価格は変動する見込みです。</p>
                  <p>各サービスの詳細や価格感については、<br><a href="#contact">お問い合わせ</a>よりお気軽にご相談ください。</p>
              </div>
          </div>
      </div>
  </section>
  <section id="works">
      <h2 class="sectionTitle" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="bottom-bottom">WORKS<span>-制作実績-</span></h2>
      <div>
          <p class="works_introduction" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="top-center">制作実績の一部を掲載しています。<br class="works_br_sp">各キャプチャ画像をスクロールしてご確認ください。</p>
          <div class="swiper-container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="top-center">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="serviceContent">
                          <div class="pc_image">
                              <p class="works_version">PC.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/photo-studio-pc.png" alt="写真スタジオサイト/PC版">
                              </div>
                          </div>
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/photo-studio-sp.png" alt="写真スタジオサイト/SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li><a href=".pc_ver">PC.ver</a></li>
                              <li><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="pc_ver">
                              <div class="pc_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/photo-studio-pc.png" alt="写真スタジオサイト/PC版">
                                  </div>
                              </div>
                          </div>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/photo-studio-sp.png" alt="写真スタジオサイト/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain">
                          <p class="works_explain_detail">写真スタジオのWebサイト制作を担当。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング/お問い合わせフォーム実装</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">HTML5/CSS3/JavaScript/Vue.js/jQuery/PHP</span></p>
                          <p><span class="works_title">クライアント</span><span class="works_text"><a href="https://www.studio-berry.com/" target="_blank">studio berry <i class="fas fa-external-link-alt"></i></a></span></p>
                      </div>
                  </div>

                  <div class="swiper-slide">
                      <div class="serviceContent">
                          <div class="pc_image">
                              <p class="works_version">PC.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-inochi-pc.png" alt="接骨院サイト（不妊治療専門）/PC版">
                              </div>
                          </div>
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-inochi-sp.png" alt="接骨院サイト（不妊治療専門）/SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li><a href=".pc_ver">PC.ver</a></li>
                              <li><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="pc_ver">
                              <div class="pc_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-inochi-pc.png" alt="接骨院サイト（不妊治療専門）/PC版">
                                  </div>
                              </div>
                          </div>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-inochi-sp.png" alt="接骨院サイト（不妊治療専門）/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain">
                          <p class="works_explain_detail">接骨院（不妊治療専門）のWebサイト制作を担当。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング/WordPress構築</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">HTML5/CSS3(SCSS)/gulp.js/PHP/WordPress</span></p>
                          <p><span class="works_title">クライアント</span><span class="works_text"><a href="https://www.aoyamastreet.com/inochi/" target="_blank">青山通り接骨院/不妊治療専門 <i class="fas fa-external-link-alt"></i></a></span></p>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="serviceContent">
                          <div class="pc_image">
                              <p class="works_version">PC.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-pc.png" alt="接骨院サイト（総合）/PC版">
                              </div>
                          </div>
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-sp.png" alt="接骨院サイト（総合）/SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li><a href=".pc_ver">PC.ver</a></li>
                              <li><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="pc_ver">
                              <div class="pc_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-pc.png" alt="接骨院サイト（総合）/PC版">
                                  </div>
                              </div>
                          </div>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-sp.png" alt="接骨院サイト（総合）/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain works_explain_long">
                          <p class="works_explain_detail">接骨院のWebサイト制作を担当。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング/WordPress構築</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">HTML5/CSS3(SCSS)/JavaScript/jQuery<br class="works_text_br">/PHP/WordPress</span></p>
                          <p><span class="works_title">クライアント</span><span class="works_text"><a href="https://www.aoyamastreet.com/" target="_blank">青山通り接骨院/総合 <i class="fas fa-external-link-alt"></i></a></span></p>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="serviceContent">
                          <div class="pc_image">
                              <p class="works_version">PC.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-jiko-pc.png" alt="接骨院サイト（交通事故専門）/PC版">
                              </div>
                          </div>
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-jiko-sp.png" alt="接骨院サイト（交通事故専門）/ SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li><a href=".pc_ver">PC.ver</a></li>
                              <li><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="pc_ver">
                              <div class="pc_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-jiko-pc.png" alt="接骨院サイト（交通事故専門）/PC版">
                                  </div>
                              </div>
                          </div>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/aoyama-jiko-sp.png" alt="接骨院サイト(交通事故専門)/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain works_explain_long">
                          <p class="works_explain_detail">接骨院（交通事故専門）のWebサイト制作を担当。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング/WordPress構築</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">HTML5/CSS3(SCSS)/JavaScript/jQuery<br class="works_text_br">/PHP/WordPress</span></p>
                          <p><span class="works_title">クライアント</span><span class="works_text"><a href="https://www.aoyamastreet.com/jiko/" target="_blank">青山通り接骨院/交通事故専門 <i class="fas fa-external-link-alt"></i></a></span></p>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="serviceContent">
                          <div class="pc_image">
                              <p class="works_version">PC.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/MyPortfolio-pc.png" alt="ポートフォリオサイト/PC版">
                              </div>
                          </div>
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/MyPortfolio-sp.png" alt="ポートフォリオサイト/SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li><a href=".pc_ver">PC.ver</a></li>
                              <li><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="pc_ver">
                              <div class="pc_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/MyPortfolio-pc.png" alt="ポートフォリオサイト/PC版">
                                  </div>
                              </div>
                          </div>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/MyPortfolio-sp.png" alt="ポートフォリオサイト/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain works_explain_long">
                          <p class="works_explain_detail">オリジナルのポートフォリオサイトを制作。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング/WordPress構築</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">HTML5/CSS3(SCSS)/JavaScript/Vue.js/gulp.js<br class="works_text_br">/PHP/WordPress</span></p>
                          <p><span class="works_title">URL</span><span class="works_text"><a href="https://inouekeita.work/" target="_blank">https://inouekeita.work/</a></span></p>

                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="flex self_application_flex">
                          <div class="sp_image">
                              <p class="works_version">SP.ver</p>
                              <div class="img_box">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/sakamichi.png" alt="Webアプリケーション/SP版">
                              </div>
                          </div>
                      </div>
                      <div class="tabs tabs_animate">
                          <ul class="horizontal">
                              <li class="self-application"><a href=".sp_ver">SP.ver</a></li>
                          </ul>
                          <div class="sp_ver">
                              <div class="sp_image">
                                  <div class="img_box">
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/sakamichi.png" alt="Webアプリケーション/SP版">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="works_explain">
                          <p class="works_explain_detail">Vue.jsを使用し、簡易Webアプリケーションを制作。</p>
                          <p><span class="works_title">担当</span><span class="works_text">Webデザイン/コーディング</span></p>
                          <p><span class="works_title">使用スキル</span><span class="works_text">Vue.js/gulp.js/HTML5/CSS3(SCSS)</span></p>
                          <p><span class="works_title">URL</span><span class="works_text"><a href="https://k-inoue24.github.io/sakamichi-songs/" target="_blank">https://k-inoue24.github.io/sakamichi-songs/ <i class="fas fa-external-link-alt"></i></a></span></p>
                      </div>
                  </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </div>
          <p class="actual_works" data-aos="fade-zoom-in" data-aos-easing="ease-in-back">※その他実務案件の過去実績は<br>お問い合わせ時に公開いたします。</p>
      </div>
    </section>
    <section id="contact">
        <div class="contentInner">
            <h2 class="sectionTitle" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="bottom-bottom">CONTACT<span>-お問い合わせ-</span></h2>
            <div>
                <p class="welcome" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="top-center">いつでもお気軽にご連絡ください。<br>少しだけ気になったからコンタクトしてみたい...<br class="br_sp">など、<br class="br_md">カジュアルなご相談もお待ちしています。</p>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-anchor-placement="top-center">
                    <?php echo apply_filters('the_content', '[contact-form-7 id="14" title="Portfolio_Conact"]'); ?>
                </div>
                <p class="reply" data-aos="fade-zoom-in" data-aos-easing="ease-in-back">お問い合わせは<a href="https://twitter.com/KeitaBangkok" target="_blank">TwitterのDM</a>でも受け付けております。<br class="br_md">原則、ご連絡には48時間以内に返答いたします。</p>
            </div>
        </div>
    </section>
    <section id="links" data-aos="fade-zoom-in" data-aos-easing="ease-in-back">
        <h2 class="sectionTitle">LINKS<span>-外部リンク-</span></h2>
        <div>
            <a class="twitter_link" href="https://twitter.com/KeitaBangkok" ontouchstart="" target="_blank">
            @KeitaBangkok
        </a>
            <p>-Twitter Acount-</p>
        </div>
    </section>
    <footer>
        Copyright &copy; Keita Inoue All Rights Reserved.
    </footer>
    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.polyfills.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tabslet.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.typist.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script>
      // KV切替
      $(function(){
        $('.brandingContent').bgSwitcher({
          images: ['<?php echo get_template_directory_uri(); ?>/img/top-image1.jpg', '<?php echo get_template_directory_uri(); ?>/img/top-image2.jpg', '<?php echo get_template_directory_uri(); ?>/img/top-image1.jpg', '<?php echo get_template_directory_uri(); ?>/img/top-image3.jpg'],
          interval: 4900,
          loop: true,
          shuffle: false,
          effect: "fade",
          duration: 2000,
          easing: "linear"
        });
      });
      // フォーム送信→完了画面遷移
      document.addEventListener('wpcf7mailsent', function(event) {
        location = 'https://inouekeita.work/thanks-page';
      }, false);
    </script>
    <?php wp_footer(); ?>
</body>
</html>