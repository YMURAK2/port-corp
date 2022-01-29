<?php
  require_once(__DIR__ . "/function.php");
  $title = "CONTACT -お問い合わせ-";
  $contents = "Port Coopoationのお問い合わせです";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="contact";
  $breadcrumb3=null;
 
  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <div class="container">
    <section class="contact">
      <p class="contact__desc paragraph">Webサイトの制作のご依頼やお見積りなど、<span class="br">
          お気軽にご相談ください。</span></p>
      <div class="contact__wrapper">
        <form class="form" action="" method="POST">
          <div class="form__item">
            <p class="form__name">お問い合わせ種別
              <span class="form__necessity">*必須</span>
            </p>
            <div class="form__kind">
              <label for="work" class="form__item--kind">
                <input type="radio" id="work" name="kind" value="work"><span>お仕事のご依頼・ご相談</span>
              </label>
              <label for="cost" class="form__item--kind">
                <input type="radio" id="cost" name="kind" value="cost"><span>お見積りの依頼</span>
              </label>
              <label for="recruit" class="form__item--kind">
                <input type="radio" id="recruit" name="kind" value="recruit"><span>採用について</span>
              </label>
              <label for="other" class="form__item--kind">
                <input type="radio" id="other" name="kind" value="other"><span>その他</span>
              </label>
            </div>
          </div>
          <div class="form__item">
            <p class="form__name">お名前
              <span class="form__necessity">*必須</span>
            </p>
            <label for="name" class="form__item--kind">
              <input type="text" id="name" name="name" required>
            </label>
          </div>
          <div class="form__item">
            <p class="form__name">会社名</p>
            <label for="company" class="form__item--kind">
              <input type="text" id="company" name="company">
            </label>
          </div>
          <div class="form__item">
            <p class="form__name">メールアドレス<span class="form__necessity">*必須</span></p>
            <label for="email" class="form__item--kind">
              <input type="email" id="email" name="email" required>
            </label>
          </div>
          <div class="form__item">
            <p class="form__name">お電話番号<span class="form__remark">（半角数字ハイフンなし）</span></p>
            <label for="tell" class="form__item--kind">
              <input type="tell" id="tell" name="tell">
            </label>
          </div>
          <div class="form__item">
            <p class="form__name">お問い合わせ内容<span class="form__necessity">*必須</span></p>
            <label for="contents" class="form__item--kind">
              <input type="textarea" id="contents" name="contents" required>
            </label>
          </div>
          <div class="form__item">
            <p class="form__name">PON DESIGNをどちらでお知りになりましたか？<span class="form__necessity">*必須</span></p>
            <label for="select" class="form__item--kind">
              <select name="select" id="select" required>
                <option value="">選択してください</option>
                <option value="Google/Yahoo検索">Google/Yahoo検索</option>
                <option value="SNS">SNS</option>
                <option value="ブログ">ブログ</option>
                <option value="友人や知人">友人や知人</option>
                <option value="その他">その他</option>
              </select>
            </label>
            <button class="form__btn btn btn__normal">送信する</button>
          </div>


        </form>

      </div>
    </section>
  </div>
</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
