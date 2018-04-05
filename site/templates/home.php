<?php snippet('head') ?>
<body class="home" id="top">

      <?php snippet('menu') ?>


  <main class="main" role="main">

    <!-- =====  Header  ===========================  -->
    <header class="projectHeader" id="title">
        <h4 class="projectNum"><?= $page->projectNum() ?></h4>
        <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
        <h2 class="projectSummary"><?= $page->summary() ?></h2>
        <nav class="menu">
          <a class="cta" href="<?= $pages->find('projects')->url() ?>">work</a>
          <a class="cta" href="<?= $pages->find('an-internet-bio')->url() ?>">about</a>
        </nav>
    </header>
    <div class="projectThumb">
      <?php $images = $page->images()->filterBy('filename', '*=', 'project-thumb');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        <?php endforeach ?>
        <?php endif ?>
    </div>


    <!-- =====  Recent Projects  ===========================  -->
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    <section class="projectsSection">
      <div class="cf">
        <h2 class="projectsTitle">Recent Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projectsSection-more"><a href="<?= page('projects')->url() ?>" class="btn">view all</a></p>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>
<script type="text/javascript">
$(window).scroll(function(){
    $("#title").css("opacity", 1 - $(window).scrollTop() / 200);
});
</script>
