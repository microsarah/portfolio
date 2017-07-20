<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="projectHeader" id="title">
      <h4 class="projectNum"><?= $page->projectNum() ?></h4>
      <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
      <h2 class="projectSummary"><?= $page->summary() ?></h2>
    </header>

    <div class="projectThumb">
      <!-- fetch the first image -->
      <?php if($image = $page->image('project-thumb.jpg')): ?>
        <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      <?php endif ?>
    </div>

    <section class="projectInfo cf">
      <div class="projectDesc col-content col-2">
        <h3><?= $page->role() ?></h3>
        <?= $page->text()->kirbytext() ?>
      </div>
      <div class="projectPress col-content col-2"><?= $page->press() ?></div>
    </section>

    <div class="projectFeature">
      <?php if($image = $page->image('feature-large.jpg')): ?>
        <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      <?php endif ?>
    </div>

    <section class="projectDetails">

      <?php if($image = $page->image('process-1.jpg')): ?>
      <div class="processContainer cf">
        <div class="col-2">
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </div>
        <div class="processStatement">
          <h3><?= $page->process() ?></h3>
        </div>
      </div>
      <?php endif ?>

      <div class="cf">
        <p class="compareStatement"><?= $page->compare() ?></p>
        <?php if($image = $page->image('compare-old.jpg')): ?>
          <figure class="col-content col-2">
            <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          </figure>
        <?php endif ?>
        <?php if($image = $page->image('compare-new.jpg')): ?>
          <figure class="col-content col-2">
            <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          </figure>
        <?php endif ?>
      </div>

      <?php if($image = $page->image('feature-1.jpg')): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      <?php endif ?>
      <?php if($image = $page->image('feature-2.jpg')): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      <?php endif ?>
      <?php if($image = $page->image('feature-3.jpg')): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      <?php endif ?>

    </section>


    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>
<script type="text/javascript">
$(window).scroll(function(){
    $("#title").css("opacity", 1 - $(window).scrollTop() / 400);
});
</script>
