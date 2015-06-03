<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proload</title>
	<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
	<?php echo link_tag('assets/bootstrap.min.css');?>
	<style type="text/css">
	body {
	  padding-top: 50px;
	  font-family: 'Inconsolata', Arial;
	}
	.starter-template {
	  padding: 40px 15px;
	  text-align: center;
	  font-weight: 700;
	}
	@media (min-width: 768px){
		#navbar{
			display: flex!important;
			justify-content:center;
		}
	}
	.container{
		 font-weight:400;
		 display: flex;
		 flex-direction: column;
		 text-align: center;
	}
	.container .profileitem{
		font-size: 30px;
		display: block;
		text-align: center;
	}
	section .container .title{
		padding-bottom: 1%;
	}
	section .container .title > h2, h3{
		display: inline;
		float: left;
		margin: 0;
	}
	section .container .title > h3{
		float: right;
	}
	.message{
		padding-bottom: 20px;
		text-align: center;
		color: #ccc;
		font-size: 25px;
		font-weight: 700;
		width: 100%;
	}
	#login{
		display:block; 
		background-image:url('/assets/images/il.png');
		background-size: 37px;
		background-repeat: no-repeat;
		background-position: 8px center ;
		display: table;
		color: black;
		padding-left: 55px;
		margin: 0 auto;
	}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/magnific-popup.css"> 
	
	<script src="<?php echo base_url();?>assets/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
  		$('.image-link').magnificPopup({type:'image'});
	});
	</script>
</head>
<body>
    <?php if($this->session->userdata('instagram-token')) { ?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
	            <li><?php echo anchor('/user/profile/', 'Profile'); ?></li>
				<li><?php echo anchor('/user/feed/', 'Feed'); ?></li>
				<li><?php echo anchor('/user/recent/', 'Recent media'); ?></li>
				<li><?php echo anchor('/user/search/', 'Search users'); ?></li>
				<li><?php echo anchor('/user/follows/', 'Who you follow'); ?></li>
				<li><?php echo anchor('/user/followed_by/', 'Who follows you'); ?></li>
				<li><?php echo anchor('/user/logout/', 'Log out'); ?></li>
	          
	        
          </ul>
        </div>
      </div>
    </nav>
    <?php } ?>
	<?php $this->load->view($main_view); ?>
</body>
</html>