<?php snippet('head') ?>
<body class="home" id="top">

      <?php snippet('menu') ?>


  <main class="main" role="main">

    <header class="wrap">
      <div class="intro-text">
        <h1 class="home-title" id="title"><?= $page->intro()->kirbytext() ?></h1>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    <section class="projects-section" id="projects">

      <div class="wrap wide">
        <h2 class="projects-title">Recent Work</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">view all</a></p>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>
<script type="text/javascript">
$(window).scroll(function(){
    $("#title").css("opacity", 1 - $(window).scrollTop() / 200);
});
</script>
