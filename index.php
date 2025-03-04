<?php //error_reporting(0);
$page = $_GET['page']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Aduda & Co-advocates <?php if ($page == "Home") {
									echo " - Home";
								} else if ($page == "About") {
									echo " - About us";
								} else if ($page == "Articles") {
									echo " - Articles";
								} else if ($page == "Contact") {
									echo " - Contact us";
								} else {
									echo " - Top law firm in Nairobi.";
								}

								?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="bg-top navbar-light">
		<div class="container">
			<div class="row no-gutters d-flex align-items-center align-items-stretch">
				<div class="col-md-4 d-flex align-items-center py-4">
					<a class="navbar-brand" href="?page=Home">Aduda & Co-advocates</a>
				</div>
				<div class="col-lg-8 d-block">
					<div class="row d-flex">
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<div class="text">
								<span>Email</span>
								<span><a href="mailto:exampleemail@gmail.com">email@gmail.com</a></span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<div class="text">
								<span>Call</span>
								<span>Call Us: +254 737 633 947</span>
							</div>
						</div>
						<div class="col-md topper d-flex align-items-center justify-content-end">
							<p class="mb-0 d-block">
								<a href="?page=Book" class="btn py-2 px-3 btn-primary">
									<span>Book for consultation</span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<!-- <form action="#" class="searchform order-lg-last">
			<div class="form-group d-flex">
				<input type="text" class="form-control pl-3" placeholder="Search">
				<button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
			</div>
			</form> -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?php if ($page == 'Home') {
											echo " active";
										} ?>"><a href="?page=Home" class="nav-link pl-0">Home</a></li>
					<li class="nav-item <?php if ($page == 'About') {
											echo " active";
										} ?>"><a href="?page=About" class="nav-link">About us</a></li>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropbtn">Services</a>
						<div class="dropdown-content">
							<a href="#" class="nav-link">Real estate</a>
							<a href="#" class="nav-link">Insurance</a>

						</div>
					</li>
					<li class="nav-item <?php if ($page == 'Articles') {
											echo " active";
										} ?>"><a href="?page=Articles" class="nav-link">Articles</a></li>
					<li class="nav-item <?php if ($page == 'Contact') {
											echo " active";
										} ?>"><a href="?page=Contact" class="nav-link">Contact us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<?php

	//page switching
	switch ($page) {
		case 'About':
			require_once("./pages/about.php");
			exit;
			break;
		case 'Articles':
			require_once("./pages/articles.php");
			exit;
			break;
		
		case 'Book':
			require_once("./pages/consult.php");
			exit;
			break;
		case 'Contact':
			require_once("./pages/contact.php");
			exit;
			break;

		default:
			# code...
			break;
	}


	?>

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-7 ftco-animate">
						<span class="subheading">Be heard</span>
						<h1 class="mb-4">KNOW YOUR LAW</h1>

					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-7 ftco-animate">
						<span class="subheading">Let us help you</span>
						<h1 class="mb-4">FAMILY, ESTATES, IMMIGRATION AND CIVIL LAW FIRM IN KENYA</h1>
						<!-- <p><a href="#popup" class="btn btn-primary px-4 py-3 mt-3">Get started</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-5 order-md-last wrap-about align-items-stretch">
					<div class="wrap-about-border ftco-animate">
						<div class="img" style="background-image: url(images/about.jpg);"></div>
						<div class="text">
							<h3></h3>
							<p>
								We are not traditional Vancouver family lawyers. We collaborate, are highly energetic and have an insatiable thirst for success. We do not use the client’s money on advertising or expensive purchases.
							</p>
							<p>
								We are down to earth and our first priority is helping the client. That is why we are successful. We believe that law must conform and change as we change and for this reason, we constantly challenge the core and limits of law. <a href="?page=Lawyers">Learn more</a> about our lawyers.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
					<h2 class="mb-4">Who we are</h2>
					<p>
						At Aduda & Co-advocates, we specialize in family law issues including common law, divorce, child & spousal support, parenting time, asset and debt division, etc. We also provide immigration law, estate litigation, strata law, class actions and civil litigation services.
					</p>
					<div class="row mt-5">
						<div class="col-lg-6">
							<h4 class="mb-4">Sectors we cover</h4>
							<div class="services active text-center">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
								<div class="text media-body">
									<h3>Corporate</h3>
									<p></p>
								</div>
							</div>
							<div class="services text-center">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
								<div class="text media-body">
									<h3>Litigation, arbitration & regulatory</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services text-center">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
								<div class="text media-body">
									<h3>Tax</h3>
									<p></p>
								</div>
							</div>
							<div class="services text-center">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
								<div class="text media-body">
									<h3>Real estate</h3>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">What sets us apart</h2>
					<p></p>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon1.png" alt="" srcset=""></div>
						<div class="text media-body">
							<p>Over 15 years of family law experience between us.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon2.png" alt="" srcset=""></div>
						<div class="text media-body">

							<p>All of our lawyers collaborate and strategize together.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon3.png" alt="" srcset=""></div>
						<div class="text media-body">

							<p>Described as a Power House Law Firm.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon4.png" alt="" srcset=""></div>
						<div class="text media-body">

							<p>Voted as the #1 Top Divorce Lawyers in the country.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon5.png" alt="" srcset=""></div>
						<div class="text media-body">

							<p>Successful on multiple groundbreaking family law cases.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="./images/icons/icon6.png" alt="" srcset=""></div>
						<div class="text media-body">

							<p>Special focus on complex family law issues including high net worth asset division and child abduction.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5">
							<h2 class="mb-4">Request A Quote</h2>
							<p></p>
						</div>
						<form action="#" class="appointment-form ftco-animate">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select Guidance</option>
												<option value="">Finance</option>
												<option value="">Business</option>
												<option value="">Auto Loan</option>
												<option value="">Real Estate</option>
												<option value="">Other Services</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group ml-md-4">
									<input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
   
	<?php require_once("./includes/recent_articles.php"); ?>

	<?php include_once("./includes/footer.php"); ?>

</body>

</html>