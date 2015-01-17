<?php snippet('header') ?>

<section>

  <?php foreach($page->children()->visible()->flip() as $article): ?>
  <article>
    <a href="<?php echo $article->url(); ?>"><h1><?php echo $article->title()->html() ?></h1></a>
    <p><?php echo $article->date('d.m.y') ?></p>
    <p><?php echo $article->text()->kirbytext()->excerpt(300) ?></p>
  </article>
  <?php endforeach ?>

</section>

<?php snippet('footer') ?>