<?php snippet('header') ?>
<div id="main">
	<div class="desc">
	  <h1><?php echo $page->title()->html() ?></h1>
	  <?php echo $page->text()->kirbytext() ?>
	</div>
</div>

<?php snippet('footer') ?>