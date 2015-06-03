<div class="container">
    <div class="starter-template">
    	<?php echo img(array('src' => $user_data->data->profile_picture,'width' => '140', 'height' => '140', 'class'=>'img-thumbnail')); ?>	
		<h1>@<?php echo $user_data->data->username; ?></h1>
	</div>
</div>

<section>
	<div class="container">
		
	<?php if(isset($user_recent_data->data)&&count($user_recent_data->data)!=0) { ?>
	<div class="title">
		<h2>Recent Media</h2>
		<h3 style="text-align:center;"><button type="button" onclick="location.href='/user/download/<?php echo $user_recent_data->data[0]->user->id."/".$starting_point;?>/'">Download all on page</button></h3>
	</div>
		<div class="popup-gallery">
		
		
			<?php foreach($user_recent_data->data as $feed_data) { ?>
				  <div class="col-sm-6 col-md-3">
				    <div class="thumbnail">
				      <a class="image-link" href="<?php echo $feed_data->images->standard_resolution->url; ?>" title="<a href='<?php echo $feed_data->images->standard_resolution->url; ?>' download> Download </a>" download><img height="242" width="200" src="<?php echo $feed_data->images->thumbnail->url; ?>" alt="thumbnail"></a>
				     </div>
				  </div>
			<?php } ?>
		</div>
			<?php if(isset($user_recent_data->pagination->next_url)){?>
			<div class="message"><a href="http://apanayotov.eu/user/recent/<?php echo explode("/",$user_recent_data->pagination->next_url)[5]; ?>/<?php echo $user_recent_data->pagination->next_max_id; ?>">Show other pictures</a></div>
	<?php }else{?>
			<div class="message">There are no more pictures</div>
<?php	}


}  else { ?>
		<div class="message">This user has no pictures</div>
	<?php } ?>
	</div>

</section>