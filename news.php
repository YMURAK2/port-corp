<?php
  require_once(__DIR__ . "/function.php");
  $title = "NEWS -お知らせ-";
  $contents = "Port Coopoationのお知らせです";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="news";
  $breadcrumb3=null;

  
  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <section class="news">
    <div class="container">
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
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">採用</div>
          </td>
          <td class="news-table__contents">
            <a class="underline"
              href="#">（２行のテキストの場合）テキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入る</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
        <tr class="news-table__row">
          <td class="news-table__date">2030.01.01</td>
          <td class="news-table__category">
            <div class="news-table__category--box">お知らせ</div>
          </td>
          <td class="news-table__contents">
            <a class="underline" href="#">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
          </td>
        </tr>
      </table>
      <div class="news-pagination">
        <ul class="news-pagination__list">
          <li class="news-pagination__item"><a class="news-pagination__link active" href="#">1</a></li>
          <li class="news-pagination__item"><a class="news-pagination__link" href="#">2</a></li>
          <li class="news-pagination__item"><a class="news-pagination__link" href="#">3</a></li>
        </ul>
      </div>
    </div>
  </section>

</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
