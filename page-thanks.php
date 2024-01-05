<?php
  /*
  Template Name: お問い合わせ(送信完了)
  */
  get_header();
?>

<main>
  <div class="contact-mv mv">
    <div class="mv__inner">
        <!-- トップ画像 -->
        <?php get_template_part('template/page-head'); ?>
    </div>
  </div>
  <!-- ぱんくず -->
  <div class="breadcrumb layout-breadcrumb inner">
    <?php get_template_part('template/breadcrumb'); ?>
  </div>

  <div class="contact-thanks layout-contact-thanks">
    <div class="contact-thanks__inner inner">
      <div class="contact-thanks__contents">
        <p class="contact-thanks__text">お問い合わせ内容を送信完了しました。</p>
        <p class="contact-thanks__message">このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />お送り頂きました内容を確認の上、<br
            class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />また、ご記入頂いたメールアドレスへ、<br
            class="u-mobile" />自動返信の確認メールをお送りしております。</p>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>