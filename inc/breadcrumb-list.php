<section class='breadcrumb'>
  <ol class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
    <!-- 1つめ -->
    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" class="underline" href="index.php">
        <span itemprop="name">HOME</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>

    <!-- 2つめ -->
    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" class="
      <?php if (isset($breadcrumb3) || !$breadcrumb3===""): ?>
        underline
      <?php endif; ?>
      " href="<?= h($breadcrumb2) . '.php' ?>">
        <span itemprop="name"><?= strtoupper(h($breadcrumb2)) ?></span>
      </a>
      <meta itemprop="position" content="2" />
    </li>

    <!-- 3つめ -->
    <?php if (isset($breadcrumb3) || !$breadcrumb3==="") :?>
    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item"
        href="<?= h($breadcrumb3) . '.php' ?>">
        <span itemprop="name"><?= strtoupper(h($breadcrumb3)) ?></span>
      </a>
      <meta itemprop="position" content="3" />
    </li>
    <?php endif; ?>
  </ol>
</section>