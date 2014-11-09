  <?php foreach(page('projects')->children()->visible() as $project): ?>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <div class="thumbnail">
        <img class="lazy" data-original="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>">
      </div>
    </a>
    <?php endif ?>
  <?php endforeach ?>