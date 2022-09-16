<style>
	
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

.header_logo{
		height:80px;
		}
.logo_text{
	    font-size: 27px;
    font-weight: 950;
    letter-spacing: 6px;
    margin-left: 14px;
}
.logo_subtext{
	    margin-left: 90px;
    margin-top: -31px;
    letter-spacing: 1px;

}
@media only screen and (max-width: 800px) {
	.logo_text{
		display: none;
	}
	.logo_subtext{
		display: none;
	}
}

</style>
<head>
		<meta charset="UTF-8">
		<title>IGCPL</title>
		<!-- <meta name="description" content="FasTrans - Logistics & Delivery Company HTML template">
		<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
		<meta name="author" content="Themexriver">
	-->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logo/logo.png" type="image/x-icon"> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-all.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/video.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animated-slider.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/rs6.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick-theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


	</head>

 <!--Start of header section
	============================================= -->

	<header id="ft-header" class="ft-header-section header-style-one">
		<div class="ft-header-content-wrapper position-relative">
			<div class="container">
				<div class="ft-header-content position-relative">
					<div class="ft-brand-logo">
						
						<a href="<?php base_url();?>Home"><img src="assets/img/logo/logo.png" alt="" class="header_logo"></a>
						<span class="text-white logo_text">INDIGEM</b></span><p class="text-white logo_subtext">CHANNEL PARTNERS </p> 
						  
					</div>
					<div class="ft-header-menu-top-cta position-relative">
						<div class="ft-header-top ul-li">
							<div class="row">
								<div class="col-md-4 col-sm-12">
								   <p style="font-weight: 100!important; font-size:14px !important;"><i class="fal fa-envelope"></i> indigeminfo@gmail.com</p>
                                </div>
                                <div class="col-md-8 col-sm-12">
								    <p style="font-weight: 100!important; font-size:14px !important;"><i class="fal fa-map-marker-alt"></i> Corporate Address: 637, Star Chambers, Harihar Chowk, Rajkot, Gujrat,360001</p>
							    </div>
							</div>
						</div>
						<div class="ft-header-main-menu d-flex justify-content-end align-items-center">
							<nav class="ft-main-navigation clearfix ul-li">
								<ul id="ft-main-nav" class="nav navbar-nav clearfix">
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>Home">Home</a>
										<!-- <ul class="dropdown-menu clearfix">
											
											<li><a href="<?php echo base_url(); ?>Home">Home Page</a></li>
											
										</ul> -->
									</li>
									<li><a href="<?php echo base_url(); ?>About">About Us</a></li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>Home">Our Services</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="<?php echo base_url(); ?>Service">Services Page </a></li>
												<li><a href="<?php echo base_url(); ?>Marketing_and_coordination">Marketing and Coordination </a></li>
												<li><a href="<?php echo base_url(); ?>Logistic_Support">Logistics support and Physical Store </a></li>
												<li><a href="<?php echo base_url(); ?>Gem_hosting">Gem Hosting and Services </a></li>
												<li><a href="<?php echo base_url(); ?>Cash_flow_management">Cashflow Management </a></li>
												<li><a href="<?php echo base_url(); ?>#">Healthcare Ventures </a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>Home">Work With Us</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="<?php echo base_url();?>Job_Portal">Job Portal</a></li>
											
										</ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url();?>Registration">Sign In / Sign Up </a>
									</li>
									<li class="">
										<a href="<?php echo base_url();?>Contact">Contact  Us</a>
									</li>
									
								</ul>
							</nav>
							<div class="ft-header-cta-btn">
								<!-- <a class="d-flex justify-content-center align-items-center" href="<?php echo base_url(); ?>	Contact">Get A Quote</a> -->
							</div>
						</div>
					</div>
					<div class="mobile_menu position-relative">
						<div class="mobile_menu_button open_mobile_menu">
							<i class="fal fa-bars"></i>
						</div>
						<div class="mobile_menu_wrap">
							<div class="mobile_menu_overlay open_mobile_menu"></div>
							<div class="mobile_menu_content">
								<div class="mobile_menu_close open_mobile_menu">
									<i class="fal fa-times"></i>
								</div>
								<div class="m-brand-logo">
									<a href="<?php base_url();?>Home"><img src= <?php echo base_url(); ?>"assets/img/logo/logo.png" alt="" ></a>
								</div>
								<nav class="mobile-main-navigation  clearfix ul-li">
									<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
										<li class="dropdown">
											<a href="<?php echo base_url(); ?>Home">Home</a>
											<ul class="dropdown-menu clearfix">
												<!-- <li><a href="index-1.html">Home Page 1</a></li> -->
												<!-- <li><a href="<?php echo base_url(); ?>Home">Home Page</a></li> -->
												<!-- <li><a href="index-3.html">Home Page 3</a></li> -->
											</ul>
										</li>
										<li><a href="<?php echo base_url(); ?>About">About Us</a></li>
										<li class="dropdown">
											<a href="<?php base_url()?>Home">Our Services</a>
											<ul class="dropdown-menu clearfix">
												<li><a href="<?php echo base_url(); ?>Marketing_and_coordination">Marketing and Coordination </a></li>
												<li><a href="<?php echo base_url(); ?>Logistic_Support">Logistics support and Physical Store </a></li>
												<li><a href="<?php echo base_url(); ?>Gem_hosting">Gem Hosting and Services </a></li>
												<li><a href="<?php echo base_url(); ?>Cash_flow_management">Cashflow Management </a></li>
												<li><a href="<?php echo base_url(); ?>#">Healthcare Ventures </a></li>

											</ul>
										</li>
										<li class="dropdown">
											<a href="<?php echo base_url();?>Home">Work With Us</a>
											<ul class="dropdown-menu clearfix">
												<li><a href="<?php echo base_url();?>Job_Portal">Job Portal</a></li>
												
											</ul>
										</li>
										<li class="">
											<a href="<?php echo base_url();?>Registration">Sign In/Sign Up</a>
											
										</li>
										<li class="">
											<a href="<?php echo base_url();?>Contact">Contact</a>
											
										</li>
										
									</ul>
								</nav>
							</div>
						</div>
						<!-- /Mobile-Menu -->
					</div>
				</div>
			</div>
			<!-- <div class="ft-header-cta-info d-flex">
				<div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
					<i class="flaticon-call"></i>
				</div>
				<div class="ft-header-cta-text headline pera-content">
					<p>Get In Touch</p>
					<h3>+91 123 456 789</h3>
				</div>
			</div> -->
		</div>
	</header>
<!-- End of header section-->