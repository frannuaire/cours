	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Macro</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<?php include 'header.php'; ?>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->			

			<!-- Start gallery-area Area -->
            <section class="gallery-area section-gap" id="gallery">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Food and Customer Gallery</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>	
                    
                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">All Menu</li>
                        <li data-filter=".breakfast">Breakfast</li>
                        <li data-filter=".lunch">Lunch</li>
                        <li data-filter=".dinner">Dinner</li>
                        <li data-filter=".budget-meal">Budget Meal</li>
                        <li data-filter=".buffet">Buffet</li>
                    </ul>
     
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g1.jpg" alt="">
                            	</div>	                          
                            </div>                           
                            <div class="col-lg-4 col-md-6 col-sm-6 all dinner">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g2.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g3.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g4.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g5.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all buffet">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g6.jpg" alt="">
                            	</div>                            
                            </div>                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End gallery-area Area -->					

			<!-- start footer Area -->		
			<footer class="footer-area">
				<?php include 'footer.php';?>
			</footer>
			<!-- End footer Area -->	

<?php include 'script.php'; ?>	
		</body>
	</html>