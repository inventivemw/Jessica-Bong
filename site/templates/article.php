<?php snippet('header') ?>

<section>

	<article>
	  	<div class="title"><h1><?php echo $page->title()->html() ?></h1></div>
	  	<div class="main-content">
	  		<p class="lead"><?php echo $page->lead() ?></p>
	  		<?php echo $page->text()->kirbytext() ?>
	  	</div>
	  	<hr>
	  	<p><?php echo $page->date('d.m.y') ?></p>
	  	<ul class="tags">
		<?php if(($page->tags() != "")){ ?>
			<li>Tags &ndash; 
				<?php foreach($page->tags()->split(',') as $tag): ?>
				<?php echo $tag.', ' ?>
				<?php endforeach ?>
			</li>
		<?php } ?>
		</ul>
	</article>

	<div id="discussion">
		<?php snippet('disqus', array('disqus_shortname' => 'myawesomeblog', 'disqus_developer' => true)) ?>
	</div>

</section>

<?php snippet('footer') ?>