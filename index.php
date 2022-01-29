<?php
  $title = "Port Corp";
  $contents = "Port Corporationのホームページです";

  require_once(__DIR__ . "/function.php");
  include_once(__DIR__ . "/inc/header.php");
?>

<main>
  <section class="hero">
    <div class="hero__wrapper">
      <h2 class="hero__main-title">WEB DESIGN SPECIALIST</h2>
      <p class="hero__sub-title">
        お客様の夢を叶える<span class="br">Webサイトを制作する会社</span>
      </p>
      <button class="btn btn__trans">
        <a href="contact.php">CONTACT</a></button>
    </div>
    <div class="hero__scroll">SCROLL</div>
  </section>

  <section class="home-news">
    <div class="container">
      <div class="home-news__container">
        <div class="home-news__heading heading">
          <h2 class="heading__main">NEWS</h2>
          <p class="heading__sub">お知らせ</p>
        </div>
        <table class="news-table">
          <tr class="news-table__row">
            <td class="news-table__date">2030.02.01</td>
            <td class="news-table__category">
              <div class="news-table__category--box">お知らせ</div>
            </td>
            <td class="news-table__contents">
              <a class="underline" href="news-article.php">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
            </td>
          </tr>
          <tr class="news-table__row">
            <td class="news-table__date">2030.01.25</td>
            <td class="news-table__category">
              <div class="news-table__category--box">制作実績</div>
            </td>
            <td class="news-table__contents">
              <a class="underline" href="#">WSmoothiesta様のWebサイトを制作いたしました</a>
            </td>
          </tr>
          <tr class="news-table__row">
            <td class="news-table__date">2030.01.30</td>
            <td class="news-table__category">
              <div class="news-table__category--box">採用</div>
            </td>
            <td class="news-table__contents">
              <a class="underline" href="#">Webデザイナーを1名募集中です！</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <section class="home-service">
    <div class="container">
      <div class="home-service__container">
        <div class="home-service__heading heading">
          <h2 class="heading__main">SERVICE</h2>
          <p class="heading__sub">事業内容</p>
        </div>
        <ul class="home-service__list">
          <li class="home-service__item">
            <img class="home-service__img" src="img/service1.jpg" alt="service1" />
            <h3 class="home-service__title">Webサイト制作</h3>
            <p class="home-service__paragraph paragraph">
              新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。
            </p>
          </li>
          <li class="home-service__item">
            <img class="home-service__img" src="img/service2.jpg" alt="service1" />
            <h3 class="home-service__title">Webサイト運用</h3>
            <p class="home-service__paragraph paragraph">
              サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
            </p>
          </li>
          <li class="home-service__item">
            <img class="home-service__img" src="img/service3.jpg" alt="service1" />
            <h3 class="home-service__title">アプリ開発</h3>
            <p class="home-service__paragraph paragraph">
              スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。
            </p>
          </li>
        </ul>
        <button class="btn btn__normal"><a href="service.php">MORE</a></button>
      </div>
    </div>
  </section>

  <section class="home-works">
    <div class="home-works__background"></div>
    <div class="container">
      <div class="home-works__container">
        <!-- swiper -->
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/works/citylab.jpg" alt="citylab" />
            </div>
            <div class="swiper-slide">
              <img src="img/works/lamina.jpg" alt="lamina" />
            </div>
            <div class="swiper-slide">
              <img src="img/works/smoothiesta.jpg" alt="smoothiesta" />
            </div>
            <div class="swiper-slide">
              <img src="img/works/tabilog.jpg" alt="tabilog" />
            </div>
            <div class="swiper-slide">
              <img src="img/works/web-conference.jpg" alt="web-conference" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="home-works__wrapper">
          <div class="home-works__heading heading">
            <h2 class="heading__main">WORKS</h2>
            <p class="heading__sub">制作実績</p>
          </div>
          <p class="home-works__paragraph paragraph">
            様々なジャンルのWebサイト制作が可能です。<br />
            ご購入やお申込み数の増加などを実現します！
          </p>
          <button class="btn btn__normal"><a href="works.php">MORE</a></button>
        </div>
      </div>
    </div>
  </section>

  <secion class="home-company">
    <div class="container">
      <div class="home-company__container">
        <div class="home-company__heading heading">
          <h2 class="heading__main">COMPANY</h2>
          <p class="heading__sub">私たちについて</p>
        </div>
        <h3 class="home-company__message">
          <span class="marker">サイトのゴール=<span class="br">夢を叶えること</span></span>
        </h3>
        <p class="home-company__paragraph paragraph">
          お客様の夢を叶えること。<br />
          それがWebサイトのゴールであり、<span class="br">
            私たちが目指すことです。</span><br />
          だからこそちゃんと成果を出すサイトを<span class="br">
            全力でお作りします。</span><br />
          お客様の笑顔を見たい。<span class="br">
            夢を実現する手助けをさせてください。</span>
        </p>
        <button class="btn btn__normal"><a href="company.php">MORE</a></button>
      </div>
    </div>
  </secion>

  <section class="home-recruit">
    <div class="home-recruit__img-container">
      <img class="home-recruit__img" src="img/recruit.jpg" alt="recruit" />
    </div>
    <div class="home-recruit__contents">
      <div class="home-recuruit__container">
        <div class="home-recuruit__heading heading">
          <h2 class="heading__main">RECRUIT</h2>
          <p class="heading__sub">採用情報</p>
        </div>
        <p class="home-recruit__paragraph paragraph">
          私たちと一緒に働きませんか？
        </p>
        <button class="btn btn__normal"><a href="recruit.php">MORE</a></button>
      </div>
    </div>
  </section>
</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
