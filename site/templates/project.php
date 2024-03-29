<?php snippet('header') ?>

    <?php if(($page->vimeo() != "")){?>
      <div class="video-wrapper">
        <iframe src="//player.vimeo.com/video/<?php echo $page->vimeo() ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="425" height="240" ></iframe>
      </div>
    <?php } ?>
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <div class="thumbnail">
          <img class="lazy" data-original="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </div>
      <?php endforeach ?>
      <div class="desc">
        <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?> 
        <ul class="meta">
          <li>Year &ndash; <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
          <?php if(($page->tags() != "")){ ?>
          <li>Tags &ndash; 
            <?php foreach($page->tags()->split(',') as $tag): ?>
              <?php echo $tag.', ' ?>
            <?php endforeach ?>
          </li>
          <?php } ?>
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

<?php snippet('footer') ?>