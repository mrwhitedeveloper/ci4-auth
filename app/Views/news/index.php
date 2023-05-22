<div class="container">
	<h2><?= esc($title) ?>
	</h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>
	<div class="card card-widget">
		<div class="card-header">
			<h3><?= esc($news_item['title']) ?>
			</h3>
		</div>
		<div class="card-body">
			<div class="main">
            <?= esc($news_item['body']) ?>
			</div>
		</div>
		<div class="card-footer">
			<p>
				<a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a>
			</p>
		</div>
	</div>
    <?php endforeach ?>

<?php else: ?>
	<h3>No News</h3>
	<p>Unable to find any news for you.</p>

<?php endif ?>
</div>