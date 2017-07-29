<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase cf">
  <?php foreach($projects as $project): ?>
    <li class="showcaseItem col-3">
        <a href="<?= $project->url() ?>" class="showcaseLink">
          <?php if($image = $project->images()->filterBy('filename', '*=', 'project-thumb')->first()): $thumb = $image->crop(1080, 1080); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcaseImage" />
            <div class="showcaseOverlay"></div>
          <?php endif ?>
          <div class="showcaseCaption">
            <h3 class="showcaseTitle"><?= $project->title()->html() ?></h3>
            <p class="showcaseRole"><?= $project->role()->html() ?></p>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
