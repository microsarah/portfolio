<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <!-- =====  Project Header  ===========================  -->
    <header class="projectHeader" id="title">
      <h4 class="projectNum"><?= $page->projectNum() ?></h4>
      <h1 class="projectTitle"><?= $page->title()->html() ?></h1>
      <h2 class="projectSummary"><?= $page->summary() ?></h2>
    </header>
    <div class="projectThumb">
      <?php $images = $page->images()->filterBy('filename', '*=', 'project-thumb');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        <?php endforeach ?>
        <?php endif ?>
    </div>

    <!-- =====  Main Project Info  ===========================  -->
    <section class="projectInfo cf">
      <div class="projectDesc col-2">
        <h3><?= $page->role() ?></h3>
        <?= $page->text()->kirbytext() ?>
      </div>
      <div class="projectPress col-2"><?= $page->press() ?></div>
    </section>

    <!-- =====  Hero Image  ===========================  -->
    <div class="projectHero">
      <?php $images = $page->images()->filterBy('filename', '*=', 'hero-image');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        <?php endforeach ?>
        <?php endif ?>
    </div>

    <!-- =====  Process Image + Caption  ===========================  -->
    <section class="projectDetails">

      <?php $images = $page->images()->filterBy('filename', '*=', 'process');
      if($images->count() > 0): ?>
      <div class="projectProcess cf">
        <div class="col-2">
            <p><?= $page->process() ?></p>
        </div>
        <div class="col-2">
          <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          <?php endforeach ?>
        </div>
      </div>
      <?php endif ?>

      <!-- =====  First Compare Caption + Image  ===========================  -->
      <div class="cf projectJourney">
        <p><?= $page->journey() ?></p>
        <?php $images = $page->images()->filterBy('filename', '*=', 'compare-1');
        if($images->count() > 0): ?>
          <figure class="col-2">
            <?php foreach($images as $image): ?>
            <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            <?php endforeach ?>
          </figure>
        <?php endif ?>
        <?php $images = $page->images()->filterBy('filename', '*=', 'compare-2');
        if($images->count() > 0): ?>
          <figure class="col-2">
            <?php foreach($images as $image): ?>
            <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            <?php endforeach ?>
          </figure>
        <?php endif ?>
      </div>
    </section>

      <!-- =====  Gallery  ===========================  -->
    <section class="gallery">
      <div class="cf">
      <?php $images = $page->images()->filterBy('filename', '*=', 'gallery-1');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <figure class="col-2 primaryGallery">
            <figcaption><?php echo html($image->caption()) ?></figcaption>
        		<img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>">
          </figure>
        <?php endforeach ?>
        <?php endif ?>
        <?php $images = $page->images()->filterBy('filename', '*=', 'gallery-2');
          if($images->count() > 0): ?>
          <?php foreach($images as $image): ?>
            <figure class="col-2 secondaryGallery">
              <figcaption><?php echo html($image->caption()) ?></figcaption>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>">
            </figure>
          <?php endforeach ?>
          <?php endif ?>
      </div>
      <div class="cf">
      <?php $images = $page->images()->filterBy('filename', '*=', 'gallery-3');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <figure class="col-2 primaryGallery">
            <figcaption><?php echo html($image->caption()) ?></figcaption>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>">
          </figure>
        <?php endforeach ?>
      <?php endif ?>
      <?php $images = $page->images()->filterBy('filename', '*=', 'gallery-4');
        if($images->count() > 0): ?>
        <?php foreach($images as $image): ?>
          <figure class="col-2 secondaryGallery">
            <figcaption><?php echo html($image->caption()) ?></figcaption>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>">
          </figure>
        <?php endforeach ?>
        <?php endif ?>
      </div>
      </section>


    <!-- =====  Second Compare Caption + Image  ===========================  -->
    <div class="cf projectJourney">
      <p><?= $page->compare() ?></p>
      <?php $images = $page->images()->filterBy('filename', '*=', 'compare-3');
      if($images->count() > 0): ?>
        <figure class="col-2">
          <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          <?php endforeach ?>
        </figure>
      <?php endif ?>
      <?php $images = $page->images()->filterBy('filename', '*=', 'compare-4');
      if($images->count() > 0): ?>
        <figure class="col-2">
          <?php foreach($images as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          <?php endforeach ?>
        </figure>
      <?php endif ?>
    </div>
  </main>
  <?php snippet('prevnext') ?>
<?php snippet('footer') ?>
