<h3><?= count($json_data->response->checkins->items) ?> Recent Checkins</h3>

<?php foreach ($json_data->response->checkins->items as $item): if ($item->type == 'checkin'): 
	
?>

	<strong>Checkin</strong><br>
	id: <?= $item->id ?><br>
	createdAt: <?= $item->createdAt ?><br>
	<strong>Location</strong>: <?= $item->venue->name ?><br>
	<?php if (isset($item->venue->location->address)): echo $item->venue->location->address; endif; ?><br>
	<?php if (isset($item->venue->location->lat)): echo $item->venue->location->lat; endif; ?>,  
	<?php if (isset($item->venue->location->lng)): echo $item->venue->location->lng; endif; ?><br> 
	<?php if (isset($item->venue->location->city)): echo $item->venue->location->city; endif; ?>, 
	<?php if (isset($item->venue->location->state)): echo $item->venue->location->state; endif; ?> 
	<?php if (isset($item->venue->location->postalCode)): echo $item->venue->location->postalCode; endif; ?><br>
	<?php if (isset($item->venue->location->country)): echo $item->venue->location->country; endif; ?> 
	<?php if (isset($item->venue->location->cc)): echo $item->venue->location->cc; endif; ?>
	<strong>Category</strong>: <?php if ($item->venue->categories): echo $item->venue->categories[0]->name; endif; ?>
	</p>
	<hr>	

<?php endif; endforeach; ?>
