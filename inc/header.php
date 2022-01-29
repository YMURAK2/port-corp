<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta property="og:url" content="後で設定" /> -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= h($title) ?>" />
    <meta
      property="og:description"
      content="<?= h($contents) ?>"
    />
    <meta property="og:site_name" content="<?= h($title) ?>" />
    <!-- <meta property="og:image" content="後で設定" /> -->
    <link rel="stylesheet" href="js/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="scss/style.css" />
    <link rel="icon" href="img/favicon.ico" type="image/svg+xml" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <title><?= h($title) ?></title>
    <meta name="description" content="<?= h($contents) ?>" />
    <script
      src="https://kit.fontawesome.com/12e7f54fbf.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header">
      <h1>
        <div class="header__logo">
          <a href="index.php"
            ><img class="header__logo--img" src="img/logo.svg" alt="logo"
          /></a>
        </div>
      </h1>
      <nav class="header__global-nav">
        <ul class="header__global-nav--list">
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="news.php">NEWS</a>
          </li>
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="service.php">SERVICE</a>
          </li>
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="works.php">WORKS</a>
          </li>
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="company.php">COMPANY</a>
          </li>
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="recruit.php">RECRUIT</a>
          </li>
          <li class="header__global-nav--item">
            <a class="header__global-nav--link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </nav>
      <button class="header__menu-btn">
        <span class="header__menu-btn--line"></span>
        <span class="header__menu-btn--line"></span>
        <span class="header__menu-btn--line"></span>
      </button>
    </header>