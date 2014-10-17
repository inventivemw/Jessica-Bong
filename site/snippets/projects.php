<ul id="main">
  <?php foreach(page('projects')->children()->visible() as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <div class="thumbnail">
        <img src="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>">
      </div>
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>