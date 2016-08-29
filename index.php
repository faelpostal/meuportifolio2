<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Portifolio virtual ">
    <meta name="author" content="">             
        
        
     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
    <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	
   <!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="home" style="overflow:visible;">
        
        
        <div id="preloader" style="display: none;">
		<div id="status" style="display: none;"></div>
	</div>
        <!-- FullScreen -->
        <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h3_home wow fadeIn animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">Desenvolvimento Web Responsivo</h1>
			<h3 class="h3_home wow fadeIn animated animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s;"> </h3>
			<ul class="list-inline intro-social-buttons">
				<li><a href="https://twitter.com/galantiandrea" class="btn  btn-lg mybutton_cyano wow fadeIn animated animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s;"><span class="network-name">Twitter</span></a>
				</li>
				<li id="download"><a href="#downloadlink" class="btn  btn-lg mybutton_standard wow swing wow fadeIn animated animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s;"><span class="network-name">Free Download</span></a>
				</li>
			</ul>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn animated animated" style="visibility: visible;">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp animated animated" data-wow-duration="1.5s" href="#whatis" style="visibility: visible; animation-duration: 1.5s;"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
        </div>
        
        <!--NavBAr -->
        <nav class="navbar-default stuckMenu isStuck" role="navigation" style="position: fixed; top: 0px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Rafael Postal</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">Home</a></li>
                                        
                                        <li class="dropdown">
                                            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Projetos <b class="caret"></b></a>
                                              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="">Garçon Virtual</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="../agenda/">Agenda</a></li>                                                
<!--                                                <li role="presentation" class="divider"></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>-->
                                              </ul>
                                        </li>
					<li class="menuItem"><a href="#useit">Sobre</a></li>
					<li class="menuItem"><a href="#contato">Contato</a></li>					
				</ul>
			</div>
		   
		</div>
	</nav>
        
      
        <!-- Contact -->
	<div id="contato" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Entre em contato</h2>				
			</div>
			
			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>

        
        
      
        
        
      <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 

    </body>
</html>
