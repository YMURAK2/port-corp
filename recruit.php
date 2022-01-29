<?php
  require_once(__DIR__ . "/function.php");
  $title = "RECRUIT -採用情報-";
  $contents = "Port Coopoationの採用情報です";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="recruit";
  $breadcrumb3=null;
 
  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<div class="recruit-back">
  <main>
    <section class="recruit">
      <div class="container">
        <div class="recruit__top">
          <h2 class="recruit__top--main-title">Enjoy
            Creation for Client</h2>
          <p class="recruit__top--sub-title">楽しむ心が良いモノを生む</p>
          <p class="recruit__top--paragraph paragraph">心を弾ましながら<br>
            夢いっぱいのサイトを作ろう！<br>
            お客様も自分もみんなが幸せになれるように</p>
        </div>
      </div>
      <img class="recruit__img" src="img/recruit01.jpg" alt="recruit">
      <div class="recruit__job">
        <div class="container">
          <h2 class="recruit__job--title">募集中の職種</h2>
          <div class="recruit__job--wrapper">
            <h3 class="recruit__job--category">Webデザイナー</h3>
            <table class="sub-page-table">
              <tr class="sub-page-table__row">
                <th class="sub-page-table__title">雇用形態</th>
                <td class="sub-page-table__contents">正社員</td>
              </tr>
              <tr class="sub-page-table__row">
                <th class="sub-page-table__title">給与</th>
                <td class="sub-page-table__contents">400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
              </tr>
              <tr class="sub-page-table__row">
                <th class="sub-page-table__title">仕事内容</th>
                <td class="sub-page-table__contents">Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</td>
              </tr>
              <tr class="sub-page-table__row">
                <th class="sub-page-table__title">勤務時間</th>
                <td class="sub-page-table__contents">10:00 〜 19:00（実働8時間、休憩1時間）</td>
              </tr>
              <tr class="sub-page-table__row">
                <th class="sub-page-table__title">応募資格</th>
                <td class="sub-page-table__contents">PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。
                  実務未経験でも学校や独学で学習した方を歓迎します。
                <ul>
                  <li>デザインやコーディングを楽しめる方</li>
                  <li>常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方</li>
                  <li>お客様と一緒に楽しみながら高い目的を目指せる方</li>
                </ul>
                </td>
              </tr>
            </table>
            <button class="recruit__btn btn btn__normal"><a href="contact.php">応募する</a></button>
            <p class="recruit__btn--remark">求人サイトへ遷移します</p>
          </div>
        </div>
      </div>
      <div class="recruit__movie">
        <div class="container">
        <h2 class="recruit__movie--title">社内ムービー</h2>
        <iframe class="recruit__movie--video" width="" height="" src="https://www.youtube.com/embed/CiBu9_lkysA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>


  </main>

  <?php
include_once(__DIR__ . "/inc/contact-sec.php");
?>
</div>
<?php
include_once(__DIR__ . "/inc/footer.php");
