<h2 class="content_title"><img src="<?= $modules_assets ?>foursquare_32.png"> Foursquare</h2>
<ul class="content_navigation">
	<?= navigation_list_btn('home/foursquare', 'Recent') ?>
	<?= navigation_list_btn('home/foursquare/custom', 'Custom') ?>
	<?php if ($logged_user_level_id <= 2) echo navigation_list_btn('home/foursquare/manage', 'Manage', $this->uri->segment(4)) ?>
</ul>