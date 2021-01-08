

<?php
require_once './config/connection.php';
$query="SELECT * from services ORDER BY RAND() LIMIT 4"; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');

$query1="SELECT * from counting_info "; 
$result1=mysqli_query($con,$query1) or die ('date Query is not execute !!');

$query2="SELECT * from client_comments ORDER BY RAND() LIMIT 2"; 
$result2=mysqli_query($con,$query2) or die ('date Query is not execute !!');


?>



<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>বাংলাদেশ আইনী সহায়তা কেন্দ্র</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon-16x16.png">
    <!--All Css Here-->
    
	<!-- Droid Font CSS-->
    <link rel="stylesheet" href="css/droid.css">
	<!-- Icofont CSS-->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- Datepicker CSS-->
	<link rel="stylesheet" href="css/jquery.datepicker.css">
	<!-- Calendar CSS-->
	<link rel="stylesheet" href="css/zabuto_calendar.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- Venobox CSS-->
	<link rel="stylesheet" href="css/venobox.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
	

	<div class="wrapper">
		<!--Header Area Start-->
		<header>
		    <div class="header-container">
		        <!--Header Top Area Start-->
		        <div class="header-top-area default-bg">
		            <div class="container">
		                <div class="row row-75">
                            <div class="header-top-wrap col-12">
                                <div class="row">
                                    <!--Header Top Left Area Start-->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="header-top-left">
                                            <p>ফোন করুন : <a href="#"> +880 01683-381821</a></p>
                                        </div>
                                    </div>
                                    <!--Header Top Left Area End-->
                                    <!--Header Top Middle Area Start-->
                                    <div class="col-md-4 col-xl-6">
                                        <div class="header-top-middle text-center">
                                            <ul class="social-link">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Header Top Middle Area End-->
                                    <!--Header Top Right Area Start-->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="header-top-right">
                                            <p>ই-মেইল করুন :<a href="#">bdlac@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <!--Header Top Right Area End-->
                                </div>
                            </div>
		                </div>
		            </div>
		        </div>
		        <!--Header Top Area End-->
		        <!--Header Bottom Area Start-->
		        <div class="header-bottom-area header-sticky">
		            <div class="container">
		                <div class="row align-items-center">
                            <!--Header Logo Start-->
		                    <div class="col-md-3">
		                        <div class="header-logo">
		                            <a href="index.php"><img src="img/logo/logo4.PNG" alt=""></a>
		                        </div>
		                    </div>
		                    <!--Header Logo End-->
		                    <!--Header Menu Start-->
		                    <div class="col-md-9">
		                        <div class="header-menu-area text-right">
		                            <nav>
		                                <ul class="main-menu">
		                                    <li class="active"><a href="index.php">হোম</a></li>
		                                    <li><a href="about.php">আমাদের সম্পর্কে</a></li>
		                                    <li><a href="service.php">অনুশীলনের ক্ষেত্র</a></li>
		                                    <li><a href="pricing-plan.php">প্যাকেজ সমূহ</a></li>
		                                    <li><a href="#">পেইজ সমূহ</a>
		                                        <!--Dropdown Menu Start-->
		                                        <ul>
		                                            <li><a href="appointments.php">অ্যাপয়েন্টমেন্ট</a></li>
		                                            <li><a href="history.php">আলোচনা</a></li>
		                                            <li><a href="pricing-plan.php">মূল্য নির্ধারণ</a></li>
		                                            <li><a href="testimonials.php">স্বীকৃতিপত্র</a></li>
		                                        </ul>
		                                        <!--Dropdown Menu End-->
		                                    </li>
		                                    <li><a href="blog.php">ব্লগ</a>
		                                        <!--Dropdown Menu Start-->
		                                        <ul>
		                                            <li><a href="blog.php">ব্লগ</a></li>
		                                            <!--<li><a href="single-blog.php">ব্লগ বিষয়ক</a></li>
		                                            <li><a href="blog-left-sidebar.html">ব্লগের বাম সাইট</a></li>
		                                            <li><a href="blog-right-sidebar.html">ব্লগের ডান সাইট</a></li>-->
		                                        </ul>
		                                        <!--Dropdown Menu End-->
		                                    </li>
		                                    <li><a href="contact.php">যোগাযোগ করুন</a></li>
		                                </ul>
		                            </nav>
		                        </div>
		                    </div>
		                    <!--Header Menu End-->
		                </div>
		                <div class="row">
                            <div class="col-12">  
                            <!--Mobile Menu Area Start-->
                            <div class="mobile-menu d-lg-none d-xl-none"></div>
                            <!--Mobile Menu Area End-->
                            </div>
                        </div>
		            </div>
		        </div>
		        <!--Header Bottom Area End-->
		    </div>
		</header>
		<!--Header Area End-->
		<!--Slider Area Start-->
		<div class="slider-area">
		    <div class="single-slider" style="background-image: url(img/slider/slider-bg.jpg)">
		        <div class="container">
		            <div class="row align-items-center">
		                <div class="col-md-8 col-xl-6">
		                    <div class="hero-content">
		                        <div class="title">
		                            <h1>কখনো অসহায় বোধ করবেন না।</h1>
		                            <h2>আমরা আপনার ন্যায়বিচারের জন্য একজন বন্ধুর মতো লড়ে যাব।</h2>
		                        </div>
		                        <div class="description">
		                           <p>আমরা সহিংসতা রক্ষার জন্য কাজ করি।</p> 
		                        </div> 
		                        <a href="appointments.php">অ্যাপয়েন্টমেন্ট করুন</a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-xl-6">
		                    <div class="hero-img img-full mt-30" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
		                        <img src="img/slider/law-of-bangladesh_gg63263115.jpg" alt="">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Slider Area End-->
		<!--Feature Area Start-->
		<div class="feature-area pt-95 pb-90">
		    <div class="container">
		        <div class="row  align-items-center">
		            <div class="col-md-4">
                        <!--Section Title Start-->
		                <div class="section-title feature-section-title">
                            <h2>কেন আমাদের <br> <span>সাথে</span> <br> যোগাযোগ করবেন?</h2>
                            <p>আইনী পরামর্শ আমাদের দৈনন্দিন জীবনে একটি গুরুত্বপূর্ণ বিষয়। কারণ বাড়ির বাইরে ও বাইরে যে কোনও মুহুর্তে আপনি জটিল আইনী সমস্যাগুলি পড়তে পারেন। তবে কার কাছ থেকে পরামর্শ নেবেন তা বুঝতে পারছেন না। আপনি কি আইনী সহায়তা খুঁজছেন? নাকি আইনী পরামর্শ চাইছেন? আমরা আপনার সমস্ত দৈনিক আইনী সমস্যা, পরামর্শ এবং সমাধানগুলি সমাধান করতে প্রতিশ্রুতিবদ্ধ।</p>
                            <p>আপনি আইন এবং আইন সম্পর্কিত সমস্যা সম্পর্কে প্রশ্ন জিজ্ঞাসা করতে পারেন। আমরা আপনার সেবা করতে যথাসাধ্য চেষ্টা করব। শীর্ষ আইনজীবীদের কাছ থেকে আইনী পরামর্শ নিন।</p>
                            <p>প্রয়োজনীয় আইনগুলি আরও সহজে বুঝতে এবং আইনের বিভিন্ন দিকগুলি জানতে আমাদের সাথে থাকুন।</p>
		                </div>
		                <!--Section Title End-->
		            </div>
		            <div class="col-md-8">
		                <div class="row">
		                    <div class="col-md-6">
		                        <!--Single Feature Start-->
		                        <div class="single-feature">
                                    <h2>ন্যায়বিচারের জন্য লড়াই</h2>
                                    <p>ন্যায়বিচারে এর জন্য লড়াই করা আমাদের মূল লক্ষ্য।কোরআন মাজীদের দাওয়াত ও শিক্ষার ক্ষেত্রে যেসব নৈতিক ও সামাজিক বিষয়ে সর্বাধিক জোর দেয়া হয়েছে, তন্মধ্যে একটি হলো ইনসাফ ও ন্যায়বিচার। </p>
		                        </div>
		                        <!--Single Feature End-->
		                    </div>
		                    <div class="col-md-6">
		                        <!--Single Feature Start-->
		                        <div class="single-feature">
                                    <h2>সেরা কেস কৌশল</h2>
                                    <p>কৌশলই সাফল্যের মূল চাবিকাঠি। আমাদের বিশ্লেষণের কৌশলগত দিকগুলো অবশ্যই সমস্যাগুলি কাটিয়ে উঠতে সহযোগিতা করবে। </p>
		                        </div>
		                        <!--Single Feature End-->
		                    </div>
		                    <div class="col-md-6">
		                        <!--Single Feature Start-->
		                        <div class="single-feature">
                                    <h2>অভিজ্ঞ আইনজীবী</h2>
                                    <p>আমাদের অফিসে কাজ করার জন্য আমাদের অত্যন্ত দক্ষ আইনজীবী রয়েছে। </p>
		                        </div>
		                        <!--Single Feature End-->
		                    </div>
		                    <div class="col-md-6">
		                        <!--Single Feature Start-->
		                        <div class="single-feature">
                                    <h2>দ্রুত মামলা সমাধান</h2>
                                    <p>দ্রুত কোনও পদ্ধতিতে তথ্য সরবরাহ । আমরা অনুকূলভাবে বিলম্ব গ্রহণ করি না। আমাদের লক্ষ্যটি স্বল্পতম সময়ে ফলাফল প্রদান করা যা আমাদের সম্মানিত ক্লায়েন্টেল থেকে শ্রদ্ধা অর্জন করেছে।</p>
		                        </div>
		                        <!--Single Feature End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> 
		<!--Feature Area End-->
		<!--About Area Start-->
		<div class="about-area">
		    <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-wrapper black-bg pt-110 pb-110">
                            <div class="row">
                                <!--About Image Area Start-->
                                <div class="col-md-5">
                                    <div class="about-img">
                                        <img src="img/about/sanwar2.jpg" alt="">
                                        <a class="venobox" data-vbtype="video" data-gall="gall-video" data-autoplay="true" href="https://youtu.be/iZYnsy_fBBQ"><i class="icofont icofont-play-alt-3"></i></a>
                                    </div>
                                </div>
                                <!--About Image Area End-->
                                <!--About Content Area Start-->
                                <div class="col-md-7">
                                    <div class="about-content">
                                        <span>১৬ বছরের অভিজ্ঞতা</span>
                                        <h1>ব্যারিস্টার ছানোয়ার হোসেন</h1>
                                        <h5>অ্যাডভোকেট, বাংলাদেশের সুপ্রিম কোর্ট</h5>
                                        <p>ব্যারিস্টার ছানোয়ার  হোসেন বাংলাদেশ সুপ্রিম কোর্টের অ্যাডভোকেট এবং বাংলাদেশের আইনী সংস্থা এস হোসেন অ্যাসোসিয়েটসের ব্যবস্থাপনা অংশীদার। তিনি নিজেকে বাংলাদেশের অন্যতম নির্ভরযোগ্য, বিশিষ্ট এবং ফলাফলমুখী আইনজীবী হিসাবে প্রতিষ্ঠিত করেছেন। তিনি কুনমিংয়ের ইউনান বিশ্ববিদ্যালয়ে চীন দক্ষিণ এশিয়ার আইনী গবেষণা কেন্দ্রের গবেষক। তিনি ২০১৩ সালের নভেম্বরে বাংলাদেশের জ্বালানি খাতের আইনী কাঠামোর বিষয়ক কুনমিং চিনে প্রথম চীন-দক্ষিণ এশিয়া আইনী বিনিময় সম্মেলনে একটি মূল নোট বক্তৃতা করেছিলেন। </p>
                                        <div class="author-signeture">
                                            <img src="img/about/sanwar.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--About Content Area End-->
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
		<!--About Area End-->
		<!--Timeline Area Start-->
		<div class="timeline-area bg-img">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6 col-lg-4">
		                <!--Single Timeline Strat-->
		                <div class="single-timeline mb-50 d-flex align-items-center">
		                    <div class="timeline-frame">
		                        <h3>২০২০<span>০১ সেপ্টেম্বর</span></h3>
		                    </div>
		                    <div class="timeline-content">
		                        <h4>লাইসেন্সযুক্ত এবং প্রস্তাবিত</h4>
		                        <p>বাংলাদেশ আইনী সহায়তা কেন্দ্রটিতে ব্যারিস্টার এবং সহযোগী রয়েছে যারা সারা বিশ্ব জুড়ে বেশ কয়েকটি বিচার বিভাগে তালিকাভুক্ত।</p>
		                    </div>
		                </div>
		                <!--Single Timeline End-->
		            </div>
		            <div class="col-md-6 col-lg-4">
		                <!--Single Timeline Strat-->
		                <div class="single-timeline mb-50 d-flex align-items-center">
		                    <div class="timeline-frame">
		                        <h3>২০১০ <span>১০ই ফ্রেব্রুয়ারী</span></h3>
		                    </div>
		                    <div class="timeline-content">
		                        <h4>আইনজীবি</h4>
		                        <p>আমাদের ব্যারিস্টার এবং সহযোগীরা তাদের নিজস্ব ক্ষেত্রে বিশেষজ্ঞ যেখানে তারা দক্ষতা অর্জন করে। অতএব, আমরা নিশ্চিত করলাম যে সঠিক কাজটি মূল স্থানে অর্পণ করা উচিত।</p>
		                    </div>
		                </div>
		                <!--Single Timeline End-->
		            </div>
		            <div class="col-md-6 col-lg-4">
		                <!--Single Timeline Strat-->
		                <div class="single-timeline mb-50 d-flex align-items-center">
		                    <div class="timeline-frame">
		                        <h3>২০২০<span>১০ সেপ্টেম্বর</span></h3>
		                    </div>
		                    <div class="timeline-content">
		                        <h4>সর্বাধিক প্রতিযোগিতামূলক মূল্য</h4>
		                        <p>আমরা সেই ক্ষেত্রগুলিতে আমাদের ক্লায়েন্টদের সমর্থন করতে প্রতিশ্রুতিবদ্ধ যেখানে আমাদের সাথে তাদের অংশীদারিত্ব তাদের সত্যিকারের মূল্য দিতে পারে।</p>
		                    </div>
		                </div>
		                <!--Single Timeline End-->
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-12">
		                <div class="view-all-history">
		                    <a href="history.php">সকল তথ্য দেখুন</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Timeline Area End-->
		<!--Service Area Start-->
		<div class="service-area pt-120 pb-55">
		    <div class="container">
		        <div class="row align-items-center">
		            <div class="col-12 col-lg-4">
		                <div class="service-img">
		                    <img src="img/service/national_legal_aid_bd.jpg" alt="">
		                </div>
		            </div>
		            <div class="col-12 col-lg-8">
		                <div class="row">
		                    <div class="col-12">
		                        <!--Section Title Start-->
		                        <div class="section-title mb-60">
                                   <img src="img/icon/icon1.png" alt="">
                                    <h4>সার্ভিস সমূহ</h4>
		                            <h2>আমাদের সার্ভিস সমূহ</h2>
		                            <p>মানুষের জন্যই আইন,আইনের জন্য মানুষ নয়। যে আইন ন্যায়বিচারের নিশ্চয়তা দেয়না,অন্যায়কে প্রশ্রয় দেয়, সেই আইন মানতে জনগন নৈতিকভাবে বাধ্য নয়।<br>ডাঃ মাহাথির মোহাম্মদ </p>
		                        </div>
		                        <!--Section Title End-->
		                    </div>
		                    <div class="col-12">
		                        <div class="row">

									<?php 

										if(mysqli_num_rows($result) > 0)
										{
											while($row = mysqli_fetch_array($result))
											{ 
												?>


											<!--Single Service Start-->
											<div class="col-md-6">
												<div class="single-service mb-60 d-flex flex-nowrap">
													<div class="service-icon">
														<img src="<?php echo $row['icon_url'];?>" alt="">
													</div>
													<div class="service-content">
														<h4><a href="single-service.php"><?php echo $row['title'];?></a></h4>
														<p><?php echo $row['description'];?></p>
													</div>
												</div>
											</div>
											<!--Single Service End-->

												 <?php
											}
										}
									
									?>

      
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Service Area End-->
		<!--Fun Factor Area Start-->
		<div class="fun-factor-area bg-img pt-95 pb-90">
		    <div class="container">
		        <div class="row justify-content-between">

						<?php 

							if(mysqli_num_rows($result1) > 0)
							{
								while($row = mysqli_fetch_array($result1))
								{ 
									?>


								<!--Single Funfactor Area Start-->
								<div class="col fun-factor-wrap">
								
								<?php 

									if($row['is_percent']){
										echo '<h2><span class="counter">'.$row['count'].'</span> % </h2>';
									}
									else{
										echo '<h2><span class="counter">'.$row['count'].'</span>  </h2>';
									}
									?>

								<span><?php echo $row['title'];?></span>
							</div>
							<!--Single Funfactor Area End-->

									<?php
								}
							}

							?>
                   

		            
		        </div>
		    </div>
		</div>
		<!--Fun Factor Area End-->
		<!--Team Area Start-->
		<div class="team-area pt-120 pb-120">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
                        <div class="section-title text-center mb-70">
                           <img src="img/icon/icon1.png" alt="">
                            <h4>আমাদের টিম</h4>
                            <h2>টিম এর সদস্যগণ</h2>
                            <p>"সততা. অভিজ্ঞতা. উত্‍সর্গ"</p>
                        </div>
                        <!--Section Title End-->
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-12">
		                <div class="team-slider-wrap">
		                    <div class="team-slider owl-carousel">
		                        <!--Single Team Start-->
		                        <div class="single-team d-flex align-items-center">
		                            <div class="team-img">
		                                <img src="img/team/Syed.jpg" alt="">
		                            </div>
		                            <div class="team-content">
		                                <h2>সৈয়দ আবদুল্লাহ মোহাম্মদ ওয়াহিদ</h2>
		                                <h5>কর্পোরেট আইনজীবী</h5>
		                                <p>কর্পোরেট আইন চেম্বারে কাজ করার ৩ বছরের বেশি অভিজ্ঞতার সাথে এক প্রতিশ্রুতিবদ্ধ তরুণ আইনজীবী। সিএলপিতে জনাব ওয়াহিদ প্রাথমিকভাবে ডকুমেন্টেশন কাজগুলি পর্যবেক্ষণ করেন এবং বেশ কয়েকটি মাঝারি থেকে বড় আকারের সংস্থাগুলি এবং ব্যবসায়িক সংস্থাগুলির পরামর্শদাতা হিসাবে কাজ করেন। তিনি অতীতে তার ক্লায়েন্টদের জন্য মধ্যস্থতা প্রক্রিয়াগুলি খসড়া তৈরি এবং গঠনে জড়িত ছিলেন।</p>
		                                <ul class="team-social-link">
		                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <!--Single Team End-->
		                        <!--Single Team Start-->
		                        <div class="single-team d-flex align-items-center">
		                            <div class="team-img">
		                                <img src="img/team/fahad.jpg" alt="">
		                            </div>
		                            <div class="team-content">
		                                <h2>ব্যারিস্টার ফাহাদ</h2>
		                                <h5>পরামর্শদাতা আইনজীবি</h5>
		                                <p>মিঃ কাদের মূলত ডকুমেন্টেশন কাজগুলি তদারকি করেন এবং বেশ কয়েকটি মাঝারি থেকে বৃহত সংস্থাগুলি এবং ব্যবসায়িক সংস্থাগুলির জন্য পরামর্শক আইনজীবী হিসাবে কাজ করেন। তিনি অতীতে জড়িত ছিলেন তাঁর ক্লায়েন্টদের মধ্যস্থতা প্রক্রিয়া খসড়া ও প্রণয়ন, বিভিন্ন বিষয়ে সালিশ ট্রাইব্যুনালে যোগদান এবং বিদেশী ক্লায়েন্টদের জটিল আইনী বিষয়ে মতামত দেওয়ার ক্ষেত্রে। মিঃ কাদের বাংলাদেশের এডিআর সম্পর্কিত আইন ও পদ্ধতির সাম্প্রতিক ঘটনার তীব্র অনুসারী।</p>
		                                <ul class="team-social-link">
		                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <!--Single Team End-->
		                        <!--Single Team Start-->
		                        <div class="single-team d-flex align-items-center">
		                            <div class="team-img">
		                                <img src="img/team/team3.jpg" alt="">
		                            </div>
		                            <div class="team-content">
		                                <h2>Jenifer Luice</h2>
		                                <h5>Family Lawyer</h5>
		                                <p>Your text is here</p>
		                                <ul class="team-social-link">
		                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <!--Single Team End-->
		                        <!--Single Team Start-->
		                        <div class="single-team d-flex align-items-center">
		                            <div class="team-img">
		                                <img src="img/team/team4.jpg" alt="">
		                            </div>
		                            <div class="team-content">
		                                <h2>Shimul </h2>
		                                <h5>Criminal Lawyer</h5>
		                                <p>Your text is here</p>
		                                <ul class="team-social-link">
		                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <!--Single Team End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Team Area End-->
		<!--Our Working Area Start-->
		<div class="our-working-area bg-img pt-120 mb-65">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
                        <div class="section-title text-center mb-70">
                           <img src="img/icon/icon1.png" alt="">
                            <h4>কার্য প্রক্রিয়া</h4>
                            <h2>আমাদের কাজের উপায়</h2>
                            <p>আমরা বিশ্বাস করি যে সাম্যতা, অন্তর্ভুক্তি এবং বৈচিত্র্য আমাদের ভবিষ্যতের সাফল্যের চাবিকাঠি, এবং আমাদের প্রতিটি কর্মচারীকে তাদের ব্যক্তিগত বিকাশে সহায়তা করে।</p>
                        </div>
                        <!--Section Title End-->
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-12">
		                <div class="working-wrap">
		                    <div class="row">
                                <!--Single Working Start-->
		                        <div class="col-md-4">
		                           <div class="single-working d-flex flex-wrap">
		                               <div class="working-icon">
		                                   <img src="img/icon/icon6.png" alt="">
		                               </div>
		                               <div class="working-title">
		                                   <h2>কেস <br> বিশ্লেষণ</h2>
		                               </div>
		                           </div>
		                        </div>
		                        <!--Single Working End-->
                                <!--Single Working Start-->
		                        <div class="col-md-4">
		                           <div class="single-working d-flex flex-wrap">
		                               <div class="working-icon">
		                                   <img src="img/icon/icon7.png" alt="">
		                               </div>
		                               <div class="working-title">
		                                   <h2>গবেষণা এবং <br> তদন্ত</h2>
		                               </div>
		                           </div>
		                        </div>
		                        <!--Single Working End-->
                                <!--Single Working Start-->
		                        <div class="col-md-4">
		                           <div class="single-working d-flex flex-wrap">
		                               <div class="working-icon">
		                                   <img src="img/icon/icon8.png" alt="">
		                               </div>
		                               <div class="working-title">
		                                   <h2>আদালত আইন <br> সাফল্য</h2>
		                               </div>
		                           </div>
		                        </div>
		                        <!--Single Working End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Our Working Area End-->
		<!--Testimonial And Quote Area Start-->
		<div class="testimonial-and-quote-area pt-100 pb-100">
		    <div class="container">
		        <div class="row align-items-center">
		            <div class="col-md-6">
		                <div class="request-quate-area">
		                    <div class="request-quate-title mb-55 text-center">
                                <img src="img/icon/icon1.png" alt="">
		                        <h2>বিনামূল্যে পরামর্শের জন্য অনুরোধ করুন</h2>
		                    </div>
		                    <div class="request-quate-form">
		                        <form action="#">
		                            <div class="row">
		                                <div class="col-md-12 col-lg-6">
		                                    <div class="request-quate-form-style mb-30">
		                                        <input name="First-Name" placeholder="নাম" type="text">
		                                    </div>
		                                </div>
		                                <div class="col-md-12 col-lg-6">
		                                    <div class="request-quate-form-style mb-30">
		                                        <input name="Last-Name" placeholder="পদবি" type="text">
		                                    </div>
		                                </div>
		                                <div class="col-md-12 col-lg-6">
		                                    <div class="request-quate-form-style mb-30">
		                                        <input name="Phone" placeholder="ফোন নাম্বার" type="text">
		                                    </div>
		                                </div>
		                                <div class="col-md-12 col-lg-6">
		                                    <div class="request-quate-form-style mb-30">
		                                        <input name="Email" placeholder="ই-মেইল" type="email">
		                                    </div>
		                                </div>
		                                <div class="col-md-12 col-lg-12">
		                                    <div class="request-quate-form-style mb-30">
		                                        <input name="Subject" placeholder="বিষয়" type="text">
		                                    </div>
		                                </div>
		                                <div class="col-md-12 col-lg-12">
		                                    <div class="request-quate-form-style">
		                                        <textarea name="message" placeholder="আপনার তথ্য লিখুন"></textarea>
		                                        <button type="submit" class="default-btn">সেন্ড করুন <i class="icofont icofont-long-arrow-right"></i></button>
		                                    </div>
		                                </div>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="testimonial-area">
		                    <div class="row">
		                        <div class="col-12">
		                            <!--Section Title Start-->
                                    <div class="section-title mb-40">
                                       <img src="img/icon/icon1.png" alt="">
                                        <h4>প্রশংসাপত্র</h4>
                                        <h2>ক্লাইন্ট পুনঃমূল্যায়ন</h2>
                                        <p>আপনি যদি নিজের জন্য ন্যায়বিচার চান এবং সঠিক পরামর্শও চান তাহলে এটি আমার মনে হয় আপনার জন্য সঠিক জায়গা। </p>
                                    </div>
                                    <!--Section Title End--> 
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="col-12">
 
									<?php 

									if(mysqli_num_rows($result2) > 0)
									{
										while($row = mysqli_fetch_array($result2))
										{ 
											?>

									 <!--Single Testimonial Start-->
									 <div class="single-testimonial mb-50">
		                                <div class="testimonial-content">
                                            <i class="icofont icofont-quote-right"></i>
		                                    <p><?php echo $row['comment'];?></p>
		                                </div>
		                                <div class="testimonial-author">
		                                    <h5><?php echo $row['name'];?>, <span><?php echo $row['designation'];?></span></h5>
		                                </div>
		                            </div>
		                            <!--Single Testimonial End-->

											<?php
										}
									}

									?>

                                   
                                
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Testimonial And Quote Area End-->
		<!--Latest Blog Area Start-->
		<div class="latest-blog-area bg-img pt-120 pb-85">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <!--Section Title Start-->
                        <div class="section-title text-center mb-70">
                           <img src="img/icon/icon1.png" alt="">
                            <h4>ব্লগ এর পোষ্ট সমূহ</h4>
                            <h2>সর্বশেষ পোষ্ট</h2>
                            <p>আপনার আইনী বিচার আমাদের অগ্রাধিকার</p>
                        </div>
                        <!--Section Title End-->
		            </div>
		        </div>
		        <div class="row">
		            <!--Single Blog Start-->
		            <div class="col-md-6 col-lg-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="Criminal-Penal-Code.html"><img src="img/blog/Criminal_Penal_Code.png" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                   <li>ফেব্রুয়ারী ১০</li> 
                                   <li><a href="#"> joyon.</a></li>
                                   <li><a href="#">১২ কমেন্টস</a></li>
                                </ul>
                                <h3><a href="single-blog.php">ফৌজদারি দন্ডবিধি</a></h3>
                                <p>ফৌজদারি আইন আইনের অঙ্গ যা অপরাধের সাথে সম্পর্কিত। এটি হুমকী, ক্ষতিকারক বা অন্যথায় সম্পত্তি, স্বাস্থ্য, সুরক্ষা এবং নিজের মধ্যে অন্তর্ভুক্ত ব্যক্তিদের নৈতিক কল্যাণে বিপদজনক হিসাবে বিবেচিত আচরণ পরিচালনা করে।</p>
                                <a href="Criminal-Penal-Code.html"><span>আরোও পড়ুন</span> <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
		            </div>
		            <!--Single Blog End-->
		            <!--Single Blog Start-->
		            <div class="col-md-6 col-lg-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="House-rent-law.html"><img src="img/blog/landlord.png" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                   <li>ফেব্রুয়ারী ১০</li> 
                                   <li><a href="#"> sharif.</a></li>
                                   <li><a href="#">১২ কমেন্টস</a></li>
                                </ul>
                                <h3><a href="single-blog.php">বাড়িওয়ালা ও ভাড়াটিয়া আইন</a></h3>
                                <p>জীবিকার সন্দ্বানে, উজ্জ্বল ভবিষ্যতের আশায়, প্রয়োজনের তাগিদে অনেককেই নিজ বাড়ি-ঘর, পরিবার-পরিজন ছেড়ে অন্যত্র বসবাস করতে হয়। তখন প্রয়োজন হয় মাথা গোজার জন্য এক চিলতে ছাদ। তখন ভাড়া বাড়িই একমাত্র ভরসা। রাজধানী ঢাকার পাশাপাশি দেশের সকল জেলা শহর, পৌরসভায় বাসা ভাড়া দেওয়ার প্রচলন রয়েছে। দেশের সিংহভাগ মানুষ ভাড়া বাসার উপর নির্ভরশীল। প্রায়শই ভাড়াটিয়ারা বাড়িওয়ালা কর্তৃক নানা ধরনের অনিয়ম ও হয়রানির শিকার হন। </p>
                                <a href="House-rent-law.html"><span>আরোও পড়ুন</span> <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
		            </div>
		            <!--Single Blog End-->
		            <!--Single Blog Start-->
		            <div class="col-md-6 col-lg-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="gd.html"><img src="img/blog/gdrule.png" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                   <li>ফেব্রুয়ারী ১০</li> 
                                   <li><a href="#"> Sajib.</a></li>
                                   <li><a href="#">১২ কমেন্টস</a></li>
                                </ul>
                                <h3><a href="single-blog.php">GD (General Diary-সাধারণ ডায়েরী) জিডি করার নিয়ম।য </a></h3>
                                <p>কেন এবং কীভাবে জিডি করবেন?? অনলাইনে ও অফলাইনে থানায় যেভাবে জিডি করবেন।।

নানাবিধ সমস্যায় পড়ে আমরা আইনশৃঙ্খলাবাহিনীর দ্বারস্থ হয়ে থাকি। কিন্তু কোনো অনাকাঙ্ক্ষিত ঘটনা ঘটার আশঙ্কা থাকলে তা থানায় লিখিত আকারে জানালে পুলিশ এ ব্যাপারে যথাযথ পদক্ষেপ নিতে পারে। আর কিভাবে আমরা থানা থেকে সেই সহযোগিতা নিতে পারি তা অনেকেরই জানা নেই।</p>
                                <a href="gd.html"><span>আরোও পড়ুন</span> <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
		            </div>
		            <!--Single Blog End-->
		        </div>
		    </div>
		</div>
		<!--Latest Blog Area End-->

		<!--Footer Area Start-->
		<footer>
		    <div class="footer-container">
		        <!--Footer Top Area Start-->
		        <div class="footer-top-area black-bg pt-100 pb-65">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-6 col-lg-3">
                                <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-30">
                                    <a class="footer-logo" href="index.php"><img src="img/logo/logo5.PNG" alt=""></a>
		                            <p>আপনার আইনী অধিকার সম্পর্কে আরও ভাল ধারণা পেতে আইন নিবন্ধগুলি পড়ুন এবং সেগুলি রক্ষা করুন। আমাদের আইনের নিবন্ধগুলি সন্ধান করা এবং অনুসন্ধান করা সহজ। আপনি  সম্পূর্ণ অবগত রাখুন! এখানে আপনি বিশেষজ্ঞদের আইন অনুসারে বাংলাদেশী আইন এবং আইনী ব্যবস্থা সম্পর্কিত আইনী দর্শন পাবেন। বাংলাদেশের আইনী ব্যবস্থা ও আইন সম্পর্কিত নিবন্ধসমূহ।আইন অংশীদারদের সাথে সম্পর্কিত, আকার একটি সম্পূর্ণ-পরিষেবা বহুমুখী আইন সংস্থা।</p>
		                            <h4 class="newslatter-title">নিউজলেটার</h4>
		                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                       <div id="mc_embed_signup_scroll">
                                          <div id="mc-form" class="mc-form subscribe-form" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="এখানে আপনার ইমেইল লিখুন" />
                                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                                          </div>
                                       </div>
                                   </form>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <!--Single Footer Widget Start-->
		                    <div class="col-md-6 col-lg-3 footer-menu">
		                        <div class="single-footer-widget mb-30">
		                            <h3 class="footer-title">গুরুত্বপূর্ণ পৃষ্ঠাগুলি</h3>
		                            <ul>
		                                <li><a href="about.php">আমাদের সম্পর্কে</a></li>
		                                <li><a href="service.php">আমাদের সার্ভিস সমূহ</a></li>
		                                <li><a href="appointments.php">অ্যাপয়েন্টমেন্ট</a></li>
		                                <li><a href="#">শর্তাবলী</a></li>
		                                <li><a href="#">আপনার প্রশ্ন জিজ্ঞাসা করুন</a></li>
		                            </ul>
		                        </div>
		                    </div>
		                    <!--Single Footer Widget End-->
		                    <!--Single Footer Widget Start-->
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30">
		                            <h3 class="footer-title">সাম্প্রতিক টুইট</h3>
		                            <ul class="footer-tweet">
		                                <li>
		                                    <p><a href="#">@Sharif</a>, খুবই উপকারী পোষ্ট </p>
		                                    <span class="time"><a href="#">১০ মিনিট পূর্বে</a></span>
		                                </li>
		                                <li>
		                                    <p><a href="#">@Joyon</a>, এই ধারাটি নতুন সংযোজন হয়েছে </p>
		                                    <span class="time"><a href="#">১২ মিনিট পূর্বে</a></span>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                    <!--Single Footer Widget End-->
		                    <!--Single Footer Widget Start-->
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30">
		                            <h3 class="footer-title">যোগাযোগ</h3>
		                            <p>খাগান বাজার (ড্যাফোডিল রোড), আশুলিয়া, সাভার</p>
                                    <p>ঢাকা, বাংলাদেশ</p>
		                            <p class="contact-info">
		                                <a href="#">+880 1683 381821</a>
		                                <a href="#">+880 1683 381821</a>
		                            </p>
		                            <p class="contact-info">
		                                <a href="#">info@bdlac.com</a>
		                                <a href="#">www.bdlac.com</a>
		                            </p>
		                        </div>
		                    </div>
		                    <!--Single Footer Widget End-->
		                </div>
		            </div>
		        </div>
		        <!--Footer Top Area End-->
		        <!--Footer Bottom Area Start-->
		        <div class="footer-bottom-area pt-20 pb-20">
		            <div class="container text-center">
		               <p><span>&copy;</span> Copyright, 2020 All right reserved by <a href="#">বাংলাদেশ আইনী সহায়তা কেন্দ্র।</a></p>
		            </div>
		        </div>
		        <!--Footer Bottom Area End-->
		    </div>
		</footer>
		<!--Footer Area End-->
	</div>





    <!--All Js Here-->
    
	<!--Jquery 1.12.4-->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!--Waypoints-->
	<script src="js/waypoints.min.js"></script>
	<!--Counterup-->
	<script src="js/jquery.counterup.min.js"></script>
	<!--Carousel-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Meanmenu-->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	<script src="js/instafeed.min.js"></script>
	<!--Datepicker-->
	<script src="js/jquery.datepicker.min.js"></script>
	<!--Calendar-->
	<script src="js/zabuto-calendar.min.js"></script>
	<!--ScrollUp-->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!--Wow-->
	<script src="js/wow.min.js"></script>
	<!--Venobox-->
	<script src="js/venobox.min.js"></script>
	<!--Popper-->
	<script src="js/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="js/plugins.js"></script>
	<!--Main Js-->
	<script src="js/main.js"></script>
</body>
</html>
