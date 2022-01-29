<?php
  require_once(__DIR__ . "/function.php");
  $title = "WORKS -制作実績-";
  $contents = "Port Coopoationの制作実績です";
  $pageMainTitle = mb_substr($title, 0, mb_strpos($title, " "));
  $pageSubTitle = mb_substr($title, mb_strpos($title, "-")+1, mb_strpos($title, "-", mb_strpos($title, "-")+1)-mb_strpos($title, "-")-1);
  $breadcrumb2="works";
  $breadcrumb3=null;

  include_once(__DIR__ . "/inc/header.php");
  include_once(__DIR__ . "/inc/page-top.php");
  include_once(__DIR__ . "/inc/breadcrumb-list.php");
?>

<main>
  <div class="container">
    <section class="works">
      <ul class="works__list">
        <li class="works__item">
          <a class="works__item--link underline" href="#">
            <img class="works__item--img" src="img/works/smoothiesta.jpg" alt="smoothiesta">smoothiesta 様
          </a>
        </li>
        <li class="works__item">
          <a class="works__item--link underline" href="#">
            <img class="works__item--img" src="img/works/web-conference.jpg" alt="web-conference">web conference 様
          </a>
        </li>
        <li class="works__item">
          <a class="works__item--link underline" href="#">
            <img class="works__item--img" src="img/works/lamina.jpg" alt="lamina">lamina 様
          </a>
        </li>
        <li class="works__item">
          <a class="works__item--link underline" href="#">
            <img class="works__item--img" src="img/works/citylab.jpg" alt="citylab">citylab 様
          </a>
        </li>
        <li class="works__item">
          <a class="works__item--link underline" href="#">
            <img class="works__item--img" src="img/works/tabilog.jpg" alt="tabilog">tabilog 様
          </a>
        </li>
      </ul>
    </section>
  </div>

</main>

<?php
include_once(__DIR__ . "/inc/contact-sec.php");
include_once(__DIR__ . "/inc/footer.php");
