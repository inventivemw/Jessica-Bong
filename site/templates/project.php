<?php snippet('header') ?>
    <div id="main">
      <div class="desc">
        <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>    
      </div>
      <?php if(($page->video() != "")){ ?>
        <div class="video-container">
          <div class="video-wrapper">
            <iframe src="<?php echo $page->video() ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      <?php } ?>
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <div class="thumbnail">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </div>
      <?php endforeach ?>
      <div class="desc">
        <ul class="meta">
          <li><b>Year &ndash;</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
          <li><b>Scope &ndash;</b> <?php echo $page->tags() ?></li>
        </ul>
      </div>

      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>"></a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>"></a>
        <?php endif ?>
      </nav>
    </div>

<?php snippet('footer') ?>