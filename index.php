<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OWW Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
     <!--<link href="_/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">-->
   
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
 
   
  </head>
  <body id="home">
  		<section class="container landing">

		  		<?php include "_/components/php/header.php"; ?>
		  		<?php include "_/components/php/hero.php"; ?>
		  				
						
							<section class="three container">
								<div class="row over2">
									<section class="col-lg-12 col-md-12">
										<div class="row>"
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-md hidden-lg hidden-sm latest-news">		
											<?php include "_/components/php/latest-news.php"; ?>
											</section><!--Latest News-->
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols first-col">	
												<?php include "_/components/php/press-room.php"; ?>	
											</section><!--Press Room-->	
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols second-col">
												<?php include "_/components/php/in-the-news.php"; ?>
											</section><!--In the News-->
												
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols third-col">	
													<?php include "_/components/php/awards-honors.php"; ?>
											</section><!--Awards-->		
											
											
											<?php include "_/components/php/events-mobile.php"; ?>	
										</div><!--end nested row-->
									</section>
								</div><!--row-->
							</section><!--three-->
						
					
				
				<div class="content row">
					<div class="col-lg-12">
						<section class="four hidden-xs">
						</section>
					</div>
				</div><!--content 4-->
				
				<div class="content row hidden-xs">
					<div class="col-lg-12">
						<section class="five">
							<div class="container">
								<section class="upcoming-events">
									<div class="col-md-4 hidden-sm events-blurb">
										<h1>Upcoming Events</h1>
										<img src="images/news/upcoming-events-01.jpg" alt="upcoming-events-01" class="img-responsive">
										<p>Sed aucto lorem ipsum dolore sit amet ndisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posu aesent. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
										
									</div>
									<div class="col-md-8 col-sm-12">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<ul class="news-thumbnails events">
													<li class="clearfix">
														<img src="images/news/upcoming-events-tb-01.jpg" alt="Upcoming Events 1" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>
													<li class="clearfix">
														<img src="images/news/upcoming-events-tb-02.jpg" alt="In the News 2" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>		
												</ul>	
											</div>
											<div class="col-md-6 col-sm-6">
												<ul class="news-thumbnails events">
													<li class="clearfix">
														<img src="images/news/upcoming-events-tb-01.jpg" alt="Upcoming Events 1" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>
													<li class="clearfix">
														<img src="images/news/upcoming-events-tb-02.jpg" alt="In the News 2" class="pull-left">
														<p class="date">Oct 5, 2013</p>
														<p class="headline">Lorem Ipsum Dolore Sit Amet Oakwood</p>
													</li>		
												</ul>												
											</div>
											<div class="row">
												<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
													<a href="#" class="link-archives">All 2013 Events</a>
												</div>
											</div>
										</div>
									</div>
								</section>

							</div><!--container-->
						</section><!--five-->
					</div>
				</div>
  				
  				
  				<div class="content row">
					<div class="col-lg-12">
						<section class="six hidden-xs">
						</section>
					</div>
				</div><!--content 6-->
				
				<div class="row">
					<footer class="col-md-4 col-md-offset-4"><a href="#" class="link-archives">Footer</a></footer>
				</div><!--Footer-->

  			
  		
  	</section><!-- container -->
  	
  
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>