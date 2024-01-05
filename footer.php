<?php
  $home = esc_url( home_url( '/' ) );
  $campaign = esc_url(home_url('/campaign'));
  $license = esc_url(home_url('/campaign_category/license/'));
  $fun_diving = esc_url(home_url('/campaign_category/fun-diving/'));
  $experience_diving = esc_url(home_url('/campaign_category/experience-diving/'));
  $about = esc_url( home_url( '/about/' ) );
  $information = esc_url( home_url( '/information/' ) );
  $blog = esc_url( home_url( '/blog/' ) );
  $voice = esc_url( home_url( '/voice/' ) );
  $price = esc_url( home_url( '/price/' ) );
  $faq = esc_url( home_url( '/faq/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
  $policy = esc_url( home_url( '/privacypolicy/' ) );
  $terms = esc_url( home_url( '/terms-of-service/' ) );
  $sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<?php
  // お問い合わせ と404じゃなかった時に表示
  if (!is_page('contact') && !is_404()) :
?>
  <div class="contact layout-top-contact">
    <div class="contact__inner inner">
      <div class="contact__wrapper">
        <div class="contact__left">
          <div class="contact__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-contact-logo.png" alt="ロゴ画像" />
          </div>
          <div class="contact__access-info">
            <div class="contact__access-texts access-texts">
              <ul class="access-texts__items">
                <li class="access-texts__item">
                  <p>沖縄県那覇市1&#045;1</p>
                </li>
                <li class="access-texts__item">
                  <p>TEL&#058;<span>0120&#045;000&#045;0000</span></p>
                </li>
                <li class="access-texts__item">
                  <p>営業時間&#058;<span>8&#058;30&#045;19&#058;00</span></p>
                </li>
                <li class="access-texts__item">
                  <p>定休日&#058;毎週火曜日</p>
                </li>
              </ul>
            </div>
            <div class="contact__access-map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.2991114456404!2d127.67447627529339!3d26.21946897706727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56983412f26e5%3A0x7583a56f7a46eaef!2z44K344O844Oe44Oq44Oz!5e0!3m2!1sja!2sjp!4v1686898605018!5m2!1sja!2sjp"
                width="273"
                height="200"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="contact__right">
          <div class="contact__title title">
            <p class="title__sub title__sub--big">contact</p>
            <h2 class="title__main title__main--big">お問い合わせ</h2>
          </div>
          <p class="contact__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button">
            <a href="<?php echo $contact; ?>" class="button"><span>contact&nbsp;us</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  endif;
?>
</main>
  <?php
    // 404の時はパディング、それ意外はマージン
    $footerClass = is_404() ? 'layout-top-footer--404' : 'layout-top-footer';
  ?>
  <footer class="footer <?php echo $footerClass; ?>">
    <div class="footer__inner inner">
      <div class="footer__wrap">
        <div class="footer__logo">
          <a href="<?php echo $home ; ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="ロゴ画像" />
          </a>
        </div>
        <ul class="footer__sns-links">
          <li class="footer__sns-link">
            <a href="https://www.facebook.com/" target=”_blank”>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-facebook.png" alt="facebookのロゴ" />
            </a>
          </li>
          <li class="footer__sns-link">
            <a href="https://www.instagram.com/" target=”_blank”>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-Instagram.png" alt="Instagramのロゴ" />
            </a>
          </li>
        </ul>
      </div>
      <nav class="footer__nav footer-nav">
        <div class="footer-nav__left">
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo $license; ?>">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo $fun_diving; ?>">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo $experience_diving; ?>">体験ダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
          </ul>

          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo $information; ?>/information#info1">ライセンス講習</a>
            </li>
            <li class="footer-nav__left-item">
            <a href="<?php echo $information; ?>/information#info2">ファンダイビング</a>
            </li>
            <li class="footer-nav__left-item">
              <a href="<?php echo $information; ?>/information#info3">体験ダイビング</a>
            </li>
          </ul>

          <ul class="footer-nav__left-items">
            <li class="footer-nav__left-item">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="footer-nav__right">
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price1">ライセンス講習</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price2">体験ダイビング</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price3">ファンダイビング</a>
            </li>
            <li class="footer-nav__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#price4">スペシャルダイビング</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $terms; ?>">利用規約</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
          <ul class="footer-nav__right-items">
            <li class="footer-nav__right-item">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
        </div>
      </nav>
      <small class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
  </footer>
  <div class="top-pagetop js-top-pagetop">
    <a href="<?php echo $home ; ?>"></a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
