<?php snippet('head') ?>
<body class="home" id="top">

      <?php snippet('menu') ?>


  <main class="main" role="main">

    <!-- <header class="wrap">
      <div class="intro-text">
        <h1 class="home-title" id="title"><?= $page->intro()->kirbytext() ?></h1>
      </div>
      <hr />
    </header> -->

    <!-- =====  Header  ===========================  -->
    <header class="projectHeader" id="title">
        <h4 class="projectNum"><?= $page->projectNum() ?></h4>
        <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
        <h2 class="projectSummary"><?= $page->summary() ?></h2>
        <a href="http://sarahmak.es/projects">view work</a>
        <a href="http://sarahmak.es/an-internet-bio">about me</a>
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

    <section class="projectsSection" id="projects">

      <div class="wrap wide">
        <h2 class="projects-title">Recent Work</h2>
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
