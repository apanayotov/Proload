<div class="container">
    <div class="starter-template">
    	<?php echo img(array('src' => $user_data->data->profile_picture,'width' => '140', 'height' => '140', 'class'=>'img-thumbnail')); ?>
		<h1>@<?php echo ($user_data->data->username); ?></h1>
	</div>
</div>

<section>
	<div class="container">
	<h2 style="padding-bottom:1%; text-align:center;">Feed</h2>
		<div class="popup-gallery">
		<?php if(is_object($user_feed)) { ?>
			<?php foreach($user_feed->data as $feed_item) { ?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <?php if($feed_item->type == 'image') { ?>
		
							<p><a class="image-link" href="<?php echo $feed_item->images->standard_resolution->url;?>" title="<a href='<?php echo $feed_item->images->standard_resolution->url; ?>' download> Download </a>" download><?php echo img(array('src' => $feed_item->images->thumbnail->url, 'height'=>'242', 'width'=>'200', 'class'=>'img-thumbnail')); ?></a></p>
							
							<p><a><?php echo ($feed_item->user->username); ?></a> - <?php echo $feed_item->filter; ?></p>
							
							
						<?php } ?>
				      </div>
				    </div>
				  </div>
			<?php } ?>
		<?php } ?>
		</div>
	</div>
</section>