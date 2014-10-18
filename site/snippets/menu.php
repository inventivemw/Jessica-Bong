<ul class="menu">
	<?php foreach($pages->visible()->not('projects') as $p): ?>
	<li>
		<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
	</li>
	<?php endforeach ?>
</ul>