<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>About the Demo | flexi cart | A Shopping Cart Library for CodeIgniter</title>
	<meta name="description" content="A summary on the purposes of the flexi cart demo."/> 
	<meta name="keywords" content="demo, flexi cart, shopping cart, codeigniter"/>
	<?php $this->load->view('includes/head'); ?> 
</head>

<body id="user_guide">

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- User Guide Navigation -->
	<?php $this->load->view('includes/user_guide_header'); ?> 

	<!-- Main Content -->
	<div class="content_wrap main_content_bg">
		<div class="content main_content_bg clearfix">
				
			<div class="w100 frame">
				<h2>Help and Support</h2>
				
				<p>The best place to start for help is by having look through the the in depth <a href="<?php echo $base_url; ?>user_guide">user guide</a>, which contains an installation guide and detailed information on each function that is available from the flexi cart libraries.</p>
				<hr/>
				
				<p>If there is a feature available in flexi cart that you wish to implement on your site, then there is most likely a working demo example of how to implement the feature.</p>
				<p>Have a browse through the <a href="<?php echo $base_url; ?>lite_library/demo">demo</a> and see if there is a example of what you are trying to achieve.</p>
				<p>If you find an example of what you're after, then open up the <a href="https://github.com/haseydesign/flexi-cart">downloadable</a> demo files and have a look at the underlying code.</p>
				<hr/>
				
				<p>Still stuck? Contact me via the CodeIgniter flexi cart forum thread <a href="http://codeigniter.com/forums/viewthread/212926">http://codeigniter.com/forums/viewthread/212926</a></p>
			</div>		

		</div>
	</div>

	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 	
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>