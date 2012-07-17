<div class="widget_<?= $widget_region ?> widget_foursquare_recent_data" id="widget_<?= $widget_id ?>">
	<h2><?= $widget_title ?></h2>
	<ul>
	<?php if ($demo_data): foreach ($demo_data as $data): ?>
		<li><?= $data->text ?></li>
	<?php endforeach; else: ?>
		<li>No Data Exists</li>
	<?php endif; ?>
	</ul>
</div>