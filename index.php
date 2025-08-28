<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
/* Banner Carousel Styles */
.banner-slide {
    position: relative;
    width: 100%;
}

.banner-content {
    padding-top: 0;
    text-align: center;
}

.banner-content h1 {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1rem !important;
}

.banner-content p {
    font-size: 1.2rem;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 1rem !important;
}

/* Service Cards Styling */
.service-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    border-color: rgba(0,0,0,0.1);
}

.service-card h5 a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-card:hover h5 a {
    color: #28a745;
}

.search-form-overlay {
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
    z-index: 10;
    background: rgba(0, 0, 0, 0.8);
    padding: 35px 0;
    border-radius: 15px;
    margin: 0 20px;
}

.search-form {
    background: transparent;
}

.search-form .form-control {
    background: rgba(255, 255, 255, 0.95);
    border: none;
    color: #333;
    height: 50px;
    font-size: 14px;
    padding: 12px 15px;
    transition: all 0.3s ease;
}

.search-form .form-control:focus {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25);
    transform: translateY(-2px);
}

.search-form .btn {
    height: 50px;
    font-size: 14px;
    font-weight: 600;
    padding: 12px 20px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.search-form .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 165, 0, 0.4);
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
    opacity: 0.8;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}

.carousel-indicators {
    bottom: 90px;
}

.carousel-indicators li {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
}

.carousel-indicators li.active {
    background-color: #ffa500;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .search-form-overlay {
        bottom: 15px;
        margin: 0 10px;
        padding: 25px 0;
    }
    
    .carousel-indicators {
        bottom: 80px;
    }
    
    .banner-slide {
        height: 450px !important;
    }
    
    .banner-content h1 {
        font-size: 2.5rem;
    }
    
    .banner-content p {
        font-size: 1rem;
    }
    
    .search-form .form-control,
    .search-form .btn {
        height: 45px;
        font-size: 13px;
        padding: 10px 12px;
    }
    
    .search-form .btn {
        font-size: 13px;
        padding: 10px 15px;
    }
}
</style>

<!--	Title
	=========================================================-->
<title>German-Weber</title>
</head>
<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative">
            <!-- Banner Carousel -->
            <div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="15000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="banner-slide" style="background-image: url('images/08.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px;">
                            <div class="container overlay-secondary h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-white banner-content">
                                            <h1 class="mb-3" style="color:white"><span>FUTURE</span><br>
                                            BUILT WITH CARE..</h1>
                                            <p class="mb-3">Excellence in construction, renovation, and project management</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-slide" style="background-image: url('images/09.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px;">
                            <div class="container overlay-secondary h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-white banner-content">
                                            <h1 class="mb-3" style="color:white"><span>QUALITY</span><br>
                                            CONSTRUCTION SERVICES</h1>
                                            <p class="mb-3">Professional contractors delivering exceptional results</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-slide" style="background-image: url('images/05.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 500px;">
                            <div class="container overlay-secondary h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-white banner-content">
                                            <h1 class="mb-4" style="color:white"><span>TRUSTED</span><br>
                                            PARTNERS IN BUILDING</h1>
                                            <p class="mb-4">Your vision, our expertise, exceptional outcomes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bannerCarousel" data-slide-to="1"></li>
                    <li data-target="#bannerCarousel" data-slide-to="2"></li>
                </ol>
            </div>
            <!-- Search Form Overlay -->
            <div class="search-form-overlay">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <form method="post" action="propertygrid.php" class="search-form">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type" style="opacity:.9; border-radius: 30px">
                                                <option value="">Select Type</option>
												<option value="apartment">Apartments</option>
												<option value="flat">Flats</option>
												<option value="vehicle">vehicles</option>
												<option value="Land">Land</option>
												<option value="office">Office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype" style="opacity:.9; border-radius: 30px">
                                            <option value="">Select Status</option>
                                                <option value="rent">Rent</option>
                                                <option value="sale">Sale</option>
                                                <option value="renovation">Renovation</option>
                                                <option value="plumbing">Plumbing</option>
                                                <option value="land-surveying">Land-surveying</option>
                                                <option value="construction">Construction</option>
                                                <option value="land-grading">Land-grading</option>
                                                <option value="power-installation">Electrical-Installation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" style="opacity:.9; border-radius: 30px" placeholder="Enter City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn w-100" style="opacity:.9; background-color: orange; padding: 5px; border-radius: 30px">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row" style="background-color:#ecf0f1;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="  text-center mb-5 double-down-line" style="color:black">What We Do</h2></div>
                </div>
                <div class="text-box-one" >
                    <div class="row">
                        <div class="col-lg-3 col-md-6" >
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s service-card" style=" background-color:rgb(247, 246, 248); border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); "> 
								
                                <h5 class=" hover-text-success py-3 m-0"><a href="property.php">Construction Services</a></h5>
                                <p>Complete construction solutions from foundation to finishing. We handle residential, commercial, and industrial projects with precision and quality.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center  hover-shadow rounded mb-4 transation-3s service-card" style=" background-color:rgb(246, 245, 248); border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); "> 
								
                                <h5 class=" hover-text-success py-3 m-0"><a href="property.php">Renovation & Remodeling</a></h5>
                                <p>Transform your existing space with our expert renovation services. From kitchen remodels to complete home transformations, we bring your vision to life.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s service-card" style=" background-color:rgb(248, 242, 255); border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); "> 
								
                                <h5 class=" hover-text-success py-3 m-0"><a href="property.php">Project Management</a></h5>
                                <p>Comprehensive project management services ensuring your construction project stays on schedule and within budget. We coordinate all aspects from planning to completion.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s service-card" style=" background-color:rgb(247, 239, 255); border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); "> 
								
                                <h5 class=" hover-text-success py-3 m-0"><a href="property.php">Consulting & Design</a></h5>
                                <p>Professional architectural consulting and design services. Our experts help you plan, design, and optimize your construction projects for maximum value and functionality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
        <div class="full-row" style="background-color:#ecf0f1;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="  text-center mb-4 double-down-line" style="color:black">Recent Property</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative " style=" border-radius:20px"> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                <div class="featured  text-white" style=" background-color: blue">New</div>
                                                <div class="sale  text-white text-capitalize" style=" background-color: blue">For <?php echo $row['4'];?></div>
                                                <div class="price" style="color: orange"><b>Shs<?php echo $row['6'];?> </b><span class="text-white"><?php echo $row['5'];?> (size)</span></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one" style=" border-radius:20px; opacity:.9">
                                                <div class="p-3">
                                                    <h5 class=" hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><?php echo $row['7'];?></span> </div>
                                                <!-- <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['6'];?></span> Beds</li>
                                                        <li><span><?php echo $row['7'];?></span> Baths</li>
                                                        <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                        <li><span><?php echo $row['8'];?></span> Balcony</li>
                                                        
                                                    </ul>
                                                </div> -->
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize">By : <?php echo $row['uname'];?></div>
                                                    <div class="float-right"><?php echo date('d-m-Y', strtotime($row['date']));?></div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>

                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	Recent Properties  -->
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half " style="background-image: url('images/09.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12 col-lg-6" >
                        <div class="living-list pr-4" >
                            <h3 class="pb-4 mb-3 text-white double-down-line-left" >Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									
									<div class="pl-2">
										<h5 class="mb-3">Licensed & Insured</h5>
										<p>Contractors Limited is fully licensed, bonded, and insured, providing you with peace of mind and protection for your investment.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									
									<div class="pl-2">
										<h5 class="mb-3">Expert Craftsmanship</h5>
										<p>Our team of skilled professionals brings years of experience in construction, renovation, and property development to every project.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									
									<div class="pl-2">
										<h5 class="mb-3">Quality Guarantee</h5>
										<p>We stand behind our work with comprehensive warranties and a commitment to delivering exceptional results that exceed expectations.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row" style="background-color:#ecf0f1;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="  text-center mb-5 double-down-line" style="color:black">How It Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class=" bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class=" mt-5 mb-4">Initial Consultation</h5>
                            <p>Schedule a free consultation with our experts to discuss your project requirements, budget, and timeline. We'll assess your needs and provide professional recommendations.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class=" bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class=" mt-5 mb-4">Project Planning</h5>
                            <p>Our team creates detailed project plans, obtains necessary permits, and develops comprehensive cost estimates. We'll keep you informed every step of the way.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" icon-thumb-one text-center mb-5">
                            <div class=" bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class=" mt-5 mb-4">Project Execution</h5>
                            <p>With everything planned and approved, our skilled craftsmen begin construction. We maintain strict quality control and complete your project on time and within budget.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <div class="full-row overlay-secondary" style="background-image: url('images/08.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Sale Property Available</div>
                            </div>
                        </div>
												<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Rent Property Available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--	Popular Place -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class=" text-center mb-5 double-down-line" style="color:black">Popular Places</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9" style=" border-radius:30px"> <img src="images/thumbnail4/1.jpg"  alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Kawuga'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['state'];?>"><?php echo $row['state']?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9" style=" border-radius:30px"> <img src="images/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
									<?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Mityana'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['16']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9" style=" border-radius:30px"> <img src="images/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Floson'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9" style=" border-radius:30px"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where city='Ulmore'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-success text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Popular Places -->
		
		<!--	Testonomial -->
		<div class="full-row" style="background-color:#ecf0f1;">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class=" text-center pb-4 mb-4 double-down-line" style="color:black;  ">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success" >
									
										<?php
													
												$query=mysqli_query($con,"SELECT feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item" >
											<div class="p-4 bg-success down-angle-white position-relative" style=" border-radius:20px;">
                                                <p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>	
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class=" text-white hover-text-secondary" id="scroll"></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>

<script>
// Banner Carousel Initialization
$(document).ready(function() {
    // Initialize the banner carousel
    $('#bannerCarousel').carousel({
        interval: 15000, // 15 seconds
        pause: 'hover',
        wrap: true
    });
    
    // Add smooth transitions
    $('#bannerCarousel').on('slide.bs.carousel', function () {
        $(this).find('.carousel-item').addClass('transitioning');
    });
    
    $('#bannerCarousel').on('slid.bs.carousel', function () {
        $(this).find('.carousel-item').removeClass('transitioning');
    });
    
    // Auto-play on page load
    $('#bannerCarousel').carousel('cycle');
});
</script>
</body>

</html>