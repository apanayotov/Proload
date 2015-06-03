<div class="container">
	<?php if(!$this->session->userdata('instagram-token')){?>
	<style type="text/css">
	body{
		overflow-x: hidden;
		padding-top:15px;
	}
	</style>

	<div style="display:flex; flex-direction:column;align-items:center;">
	    <div style="font-size:35px; font-weight:700;">Proload. The simplest Instagram Downloader</div>
	    <div style="position:relative; color:white; top:205px; font-size:20px;">click here to get started</div>
	    <a id="login" style="position:relative; top:415px;" href="<?php echo $this->instagram_api->instagram_login(); ?>" class="btn btn-lg btn-info">Login with Instagram</a>
		<img src="/assets/images/arrow.png" alt="" width="512" height="512"/>
	</div><?php }?>
</div>

