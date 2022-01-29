<?php
  require_once(__DIR__ . "/function.php");
  $title = "SERVICE -事業内容-";
  $contents = "Port Coopoationの事業内容です";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="service";
  $breadcrumb3=null;

  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <div class="container">
    <section class="service">
      <ul class="service__list">
        <li class="service__item">
          <img class="service__img" src="img/service1.jpg" alt="service1" />
          <div class="service__contents">
            <h3 class="service__title">Webサイト制作</h3>
            <p class="service__paragraph paragraph">
              新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
              サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
            </p>
          </div>
        </li>
        <li class="service__item">
          <img class="service__img" src="img/service2.jpg" alt="service1" />
          <div class="service__contents">
            <h3 class="service__title">Webサイト運用</h3>
            <p class="service__paragraph paragraph">
              サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。<br>
              日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。<br>
              また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
            </p>
          </div>
        </li>
        <li class="service__item">
          <img class="service__img" src="img/service3.jpg" alt="service1" />
          <div class="service__contents">
            <h3 class="service__title">アプリ開発</h3>
            <p class="service__paragraph paragraph">
              スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
            </p>
          </div>
        </li>
      </ul>
    </section>
  </div>

</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
