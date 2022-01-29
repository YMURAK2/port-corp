<?php
  require_once(__DIR__ . "/function.php");
  $title = "NEWS -お知らせ-";
  $contents = "Port Coopoationのお知らせです";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="news";
  $breadcrumb3="Webデザインニュースサイト「ウェブマガジン」に取材いただきました";
 
  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0"
    nonce="VTN1AW8Y"></script>


  <div class="container">
    <section class="news-article">
      <h2 class="news-article__title">
        Webデザインニュースサイト「ウェブマガジン」に取材いただきました
      </h2>
      <div class="news-article__info">
        <div class="news-article__date">2020.02.01</div>
        <div class="news-article__category">お知らせ</div>
      </div>
      <img src="img/news-article.jpg" alt="news-article" class="news-article__img">
      <p class="news-article__contents">
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
      <div class="news-article__main">
        <h3 class="news-article__main--heading">大見出し</h3>
        <p class="news-article__main--contents">
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        </p>
      </div>
      <div class="news-article__sub">
        <h3 class="news-article__sub--heading">小見出し</h3>
        <p class="news-article__sub--contents">
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        </p>
        <p class="news-article__sub--contents">
          テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        </p>
      </div>
      <div class="sns-share">
        <!-- facebook -->
        <div class="fb-like" data-href="#" data-width="100" data-layout="button" data-action="like" data-size="large"
          data-share="true"></div>
        <!-- twitter -->
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"
          data-size="large" data-lang="ja">Tweet</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <!-- hatena -->
        <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label"
          data-hatena-bookmark-lang="ja" data-hatena-bookmark-height="28" title="このエントリーをはてなブックマークに追加"><img
            src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加"
            width="20" height="20" style="border: none;" /></a>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8"
          async="async">
        </script>
        <!-- line -->
        <div class="line-it-button" data-lang="ja" data-type="share-b" data-env="REAL" data-url="#" data-color="default"
          data-size="small" data-count="false" data-ver="3" style="display: none;"></div>
        <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async"
          defer="defer">
        </script>
      </div>
      <div class="article-pager">
        <div class="article-pager__container">
          <div class="article-pager__prev"><a href="#">Web Conference様のサイトを制作いたしました</a></div>
          <div class="article-pager__next"><a href="#">プライバシーマーク取得のお知らせ</a></div>
        </div>
        <div class="article-pager__title">NEWS一覧</div>
      </div>
    </section>
  </div>


</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
