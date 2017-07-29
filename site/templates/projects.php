<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="projectsHeader">
      <h4 class="projectNum"><?= $page->projectNum() ?></h4>
      <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
      <h2 class="projectsSummary"><?= $page->summary() ?></h2>
        <?= $page->text()->kirbytext() ?>
    </header>

    <div class="cf">
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>
