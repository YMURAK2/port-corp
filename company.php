<?php
  require_once(__DIR__ . "/function.php");
  $title = "COMPANY -私たちについて-";
  $contents = "Port Coopoationの会社概要です";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="company";
  $breadcrumb3=null;
 
  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <div class="container">
    <section class="company">
      <div class="company__top">
        <h2 class="company__title">メッセージ</h2>
        <h3 class="company__message">
          <span class="marker">サイトのゴール=<span class="br">夢を叶えること</span></span>
        </h3>
        <p class="company__paragraph paragraph">
          お客様の夢を叶えること。<br />
          それがWebサイトのゴールであり、<span class="br">
            私たちが目指すことです。</span><br />
          だからこそちゃんと成果を出すサイトを<span class="br">
            全力でお作りします。</span><br />
          お客様の笑顔を見たい。<span class="br">
            夢を実現する手助けをさせてください。</span>
        </p>
      </div>
      <div class="company__desc">
        <img class="company__desc--img" src="img/ceo.jpg" alt="ceo">
        <p class="company__desc--comment paragraph">
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>

          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>

          代表取締役社長 〇〇〇〇</p>
      </div>
      <div class="company__about">
        <h2 class="company__title">会社概要</h2>
        <table class="sub-page-table">
          <tr class="sub-page-table__row">
            <th class="sub-page-table__title">社名</th>
            <td class="sub-page-table__contents">株式会社PORT CORPORATION</td>
          </tr>
          <tr class="sub-page-table__row">
            <th class="sub-page-table__title">設立</th>
            <td class="sub-page-table__contents">2025.02.10</td>
          </tr>
          <tr class="sub-page-table__row">
            <th class="sub-page-table__title">代表取締役</th>
            <td class="sub-page-table__contents">〇〇〇〇</td>
          </tr>
          <tr class="sub-page-table__row">
            <th class="sub-page-table__title">資本金</th>
            <td class="sub-page-table__contents">1,000,000円</td>
          </tr>
          <tr class="sub-page-table__row">
            <th class="sub-page-table__title">所在地</th>
            <td class="sub-page-table__contents">〒111-1111 東京都千代田区〇〇ビルディング4F</td>
          </tr>
        </table>
        <div class="company__map">
          <iframe class="company__map--frame"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12963.312169790323!2d139.75837003190162!3d35.6812358831067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1641538339409!5m2!1sja!2sjp"
            width="" height="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <a class="company__map--link underline" href="https://goo.gl/maps/dtco6TRAhCszM3Vw6">Google mapで見る</a>
        </div>
      </div>
    </section>
  </div>


</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
