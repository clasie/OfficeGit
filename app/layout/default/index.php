<?php global $workflow; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Claude Siefers</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $workflow->href_public; ?>/bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
		
		<!-- The Main wrapper div starts -->
		<div class="container">
			<!-- header content -->
			<h1><a href=".">QCMs</a></h1>
			<!-- Navigation -->
			<div class="navbar">
	          <div class="navbar-inner">
	            <div class="container">
	              <ul class="nav">
	                <li class="active"><a href="#">Home</a></li>
	                <li><a href="#">Projects</a></li>
	                <li><a href="<?php echo $workflow->href_public; ?>/ferme/calculateur/userform">Ferme</a></li>
					<li><a href="<?php echo $workflow->href_public; ?>/questionnaires/build/edit">Questionnaires</a></li>
	                <li><a href="#">Downloads</a></li>
	                <li><a href="#">About</a></li>
	                <li><a href="#">Contact</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>

	        <!-- Marketing area -->
	        <div class="hero-unit">
                        <h2>About <h6>claude_siefers@hotmail.com</h6></h2>

                        <p><img src="<?php echo $workflow->href_public; ?>/images/claude-siefers.jpg"></p>

	        	<h2>Training people</h2>
	        	<p >Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	        	<a href="./?r=1" class="btn btn-large btn-success">Get Started(under blablastruction)</a>
	        </div>

	        <!-- Content Sections -->
	        <div class="row">
	        	<!-- Left Side Vertical Bar -->
	        	<div class="span4">
	        		<ul class="nav nav-list">
					  <li class="nav-header">Sample of question/answer?</li>
					  <li><a href="<?php echo $workflow->href_public; ?>/storage/show/resp">Questions</a></li>
					  <li class="nav-header">What we are?</li>
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Our Clients</a></li>
					  <li><a href="#">Our Services</a></li>
					  <li><a href="#">About Us</a></li>
					  <li><a href="#">Contact Us</a></li>
					  <li class="nav-header">Our Friend</li>
					  <li><a href="#">Google</a></li>
					  <li><a href="#">Yahoo!</a></li>
					  <li><a href="#">Bing</a></li>
					  <li><a href="#">Microsoft</a></li>
					  <li><a href="#">Gadgetic World</a></li>
					</ul>
	        	</div>
	        	<!-- Right side Content Vertical Area -->
	        	<div class="span8">
                               <h3>Question/responses</h3>
	        	</div>
	        </div>

	        <!-- Footer Section -->
	        <hr>
	        <div class="row">
				<div class="span4">
					<h4 class="muted text-center">Meet Our Clients</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
					<a href="#" class="btn"><i class="icon-user"></i> Our Clients</a>
				</div>
				<div class="span4">
					<h4 class="muted text-center">Know Our Employees</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
					<a href="#" class="btn btn-success"><i class="icon-star icon-white"></i> Our Employees</a>
				</div>
				<div class="span4">
					<h4 class="muted text-center">Reach Us</h4>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
					<a href="#" class="btn btn-info">Contact Us</a>
				</div>
			</div>
<?php 
   //}
 ?>
			<!-- Copyright Area -->
			<hr>
			<div class="footer">
				<p>&copy; 2014</p>
			</div>
		</div>
               
		<script src="<?php echo $workflow->href_public; ?>bootstrap/dist/js/jquery.js"></script>
		<script src="<?php echo $workflow->href_public; ?>bootstrap/dist/js/bootstrap.js"></script>
	</body>
</html>
