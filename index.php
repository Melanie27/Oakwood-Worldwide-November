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
     
     
    
    
    
     <!--Fonts-->
     <link href="_/District-Black/stylesheet.css" rel="stylesheet" media="screen">
         <link href="_/District-Bold/stylesheet.css" rel="stylesheet" media="screen">
       <link href="_/District-Book/stylesheet.css" rel="stylesheet" media="screen">
        <link href="_/District-Demi/stylesheet.css" rel="stylesheet" media="screen">
         <link href="_/District-Light/stylesheet.css" rel="stylesheet" media="screen">
          <link href="_/District-Medium/stylesheet.css" rel="stylesheet" media="screen">
           <link href="_/District-Thin/stylesheet.css" rel="stylesheet" media="screen">
   
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
		  		<section class="two">
					<div class="row heading">
						<section class="col-lg-12">
							<div class="container">
								<h1>Home Page</h1>
							</div>
						</section>		
					</div><!--heading-->
							
							<?php include "_/components/php/hero.php"; ?>
		  				</section> <!--two container-->	
		  				
						
							<div class="container">
							<section class="three">
								<div class="row over2">
									<section class="col-lg-12 col-md-12 news-columns" style="padding-left:0px;">
									
										
										<div class="row"  >
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-md hidden-lg latest-news">		
											<?php include "_/components/php/latest-news.php"; ?>
											</section><!--Latest News-->
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols first-col">	
												<?php include "_/components/php/press-room.php"; ?>	
											</section><!--Press Room-->	
											
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols second-col ">
												<?php include "_/components/php/in-the-news.php"; ?>
											</section><!--In the News-->
												
											<section class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cols third-col">	
													<?php include "_/components/php/awards-honors.php"; ?>
											</section><!--Awards-->		
											
											<section class ="hidden-lg hidden-md">
												<?php include "_/components/php/events-mobile.php"; ?>
											</section>	
										</div><!--end nested row-->
										
									</section>
								</div><!--row-->
							</section><!--three-->
						</div>

						
					
				
				<div class="content row">
					<div class="col-lg-12">
						<section class="four hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 4-->
				
				<div class="content row hidden-sm hidden-xs">
					<div class="col-lg-12">
						<section class="five">
							<div class="container">
								
								
								<?php include "_/components/php/events-desktop.php"; ?>	

							</div><!--container-->
						</section><!--five-->
					</div>
				</div>
  				
  				
  				<div class="content row">
					<div class="col-lg-12">
						<section class="six hidden-sm hidden-xs">
						</section>
					</div>
				</div><!--content 6-->
				
				<?php include "_/components/php/footer.php"; ?>	

  			
  		
  	</section><!-- container -->
  	
 
  	<script src="_/js/bootstrap.js"></script>
  	<script src="_/js/myscript.js"></script>
  </body>
</html>