<?php 
	if(!isset($user_data->meta->error_type)){?>
<div class="container">
    <div class="starter-template">
		<h1>@<?php echo $user_data->data->username; ?></h1>
			<?php echo img(array('src' => $user_data->data->profile_picture,'width' => '140', 'height' => '140', 'class'=>'img-thumbnail')); ?>
	</div>
</div>
<br />
<div class="container">
	<span class="profileitem"><?php echo anchor('/user/recent/' . $user_data->data->id, 'Recent items'); ?></span>
	<span class="profileitem"><?php echo anchor('user/followed_by/' . $user_data->data->id, $user_data->data->counts->followed_by . ' followers'); ?></span>
	<span class="profileitem"><?php echo anchor('/user/follows/' . $user_data->data->id, $user_data->data->counts->follows . ' following'); ?></span>
	
</div>
<?php }else

if($user_data->meta->error_type=="APINotAllowedError"){?>
 	<div class="message">This profile is hidden</div>
<?php }elseif($user_data->meta->error_type=="APINotFoundError"){?>
	<div class="message">Such a profile does not exist</div>
<?php }

