

<?php
require_once './config/connection.php';
$query="SELECT packages.*,package_items.item FROM `packages` INNER JOIN package_items ON packages.id = package_items.package_id"; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');


$pricing = array();
$old_id="0";
$i=0;
$index=-1;
if(mysqli_num_rows($result) > 0)
	{ 

	while($row = mysqli_fetch_array($result))
		{ 

			if($old_id != $row['id']){
				$index++;
				$pricing[$index] = array ("id"=>$row['id'],"type"=>$row['type'],"hour"=>$row['hour'],"amount"=>$row['amount']);
				$i=0;
				$old_id = $row['id'];
			}
			$pricing[$index]['items'][$i] = $row['item'];
			$i++;
          
		}

	}

?>


<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>প্যাকেজ নির্ধারণ || BDLAC</title>
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
                                            <p>ফোন করুন : <a href="#"> +880 01683 381821</a></p>
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
                                            <p>ই-মেইল করুন :<a href="#">info@bdlac.com</a></p>
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
		                                    <li><a href="index.php">হোম</a></li>
		                                    <li><a href="about.php">আমাদের সম্পর্কে</a></li>
		                                    <li><a href="service.php">অনুশীলনের ক্ষেত্র</a></li>
		                                    <li class="active"><a href="pricing-plan.php">প্যাকেজ সমূহ</a></li>
		                                    <li><a href="#">পেইজ সমূহ</a>
		                                        <!--Dropdown Menu Start-->
		                                        <ul>
		                                            <li><a href="appointments.php">অ্যাপয়েন্টমেন্ট</a></li>
		                                            <li><a href="history.php">আলোচনা</a></li>
		                                            <li><a href="pricing-plan.php">প্যাকেজ নির্ধারণ</a></li>
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
		<!-- Page Banner Area Start-->
		<div class="page-banner-area bg-img-3 pt-95 pb-90">
		    <div class="container">
		        <div class="row">
		            <div class="page-banner-content col-12 text-center">
                        <h2>প্যাকেজ নির্ধারণ</h2>
                        <p> আমরা সবসময় চেষ্টা করব আপনাকে ভালো  আইনি সহায়তা প্রদান করার জন্য।</p>
		                <ul class="breadcrumb-pagination">
		                    <li><a href="index.php">হোম</a></li>
		                    <li>পেইজ সমূহ</li>
		                    <li>প্রাইসিং টেবিল</li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Page Banner Area End-->
		<!--Pricing Description Area Start-->
		<div class="pricing-description-area pt-120 pb-120">
		    <div class="container">
		        <div class="row align-items-center">
		            <div class="col-lg-5 col-12">
		                <div class="priceing-description">
		                    <h3>আমরা সেরা মূল্য এবং অর্থ সাশ্রয় পরিকল্পনা সরবরাহ করি</h3>
		                    <p>বাংলাদেশ আইনী সহায়তা কেন্দ্র হ'ল একটি ব্যবসায়িক সত্তা যা আইন অনুশীলনে জড়িত থাকার জন্য এক বা একাধিক আইনজীবী দ্বারা গঠিত। আইন সংস্থা কর্তৃক প্রদত্ত প্রাথমিক পরিষেবা হ'ল ক্লায়েন্টদের (ব্যক্তি বা কর্পোরেশনগুলি) তাদের আইনী অধিকার এবং দায়িত্ব সম্পর্কে পরামর্শ দেওয়া এবং দেওয়ানী বা ফৌজদারি মামলায় ক্লায়েন্টদের প্রতিনিধিত্ব করা, ব্যবসায়িক লেনদেন এবং অন্যান্য বিষয় যেখানে আইনি পরামর্শ এবং অন্যান্য সহায়তা চাওয়া হয়। </p>
		                </div>
		            </div>
		            <div class="col-lg-7 col-12">
		                <div class="priceing-description-img img-full">
		                    <img src="img/history/package2.jpg" alt="">
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Pricing Description Area End-->
		<!--Pricing Table Area Start-->
		<div class="pricing-table-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
                        <div class="section-title text-center mb-70">
                           <img src="img/icon/icon1.png" alt="">
                            <h4>মূল্য নির্ধারণ</h4>
                            <h2>আপনার প্যাকেজ পছন্দ করুন</h2>
                            <p> আমরা সবসময় চেষ্টা করব আপনাকে ভালো  আইনি সহায়তা প্রদান করার জন্য। </p>
                        </div>
                        <!--Section Title End-->
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-lg-10 col-12 ml-auto mr-auto">
		                <div class="row row-25">

						<?php foreach($pricing as $row) {  ?>
							
							 <!--Single Pricing Table Start-->
							 <div class="col-lg-4 col-md-6 mb-30 pricing-table-wrap"> 
                                <div class="single-pricing-table text-center">
                                    <div class="pricing-head">
                                        <div class="price">
                                            <h2><?php echo $row['amount'];?> <sup>৳</sup></h2>
                                            <span><?php echo $row['hour'];?></span>
                                        </div>
                                        <h4><?php echo $row['type'];?></h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
										
										<?php foreach($row['items'] as $item) {  ?>

										     <li><?php echo $item;?></li>

											<?php	} ?>
  
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#">বেছে নিন</a>
                                    </div>
                                </div>
                            </div>
                            <!--Single Pricing Table End-->
							
							<?php	} ?>
		      
		                    <!--Single Pricing Table Start-->
                            <!--<div class="col-lg-4 col-md-6 mb-30 pricing-table-wrap"> 
                                <div class="single-pricing-table pricing-active text-center">
                                    <div class="pricing-head">
                                        <div class="price">
                                            <h2>১৫০০ <sup>৳</sup></h2>
                                            <span>প্রতি ঘন্টায়</span>
                                        </div>
                                        <h4>স্ট্যান্ডার্ড</h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
                                            <li>কেস মূল্যায়ন</li>
                                            <li>কেস ডেভলপমেন্টে সহায়তা</li>
                                            <li>লিখিত বিবৃতি প্রদান</li>
                                            <li>অন্যান্য বিশেষজ্ঞ সাক্ষি</li>
                                            <li>বিক্ষোভমূলক প্রমাণ প্রস্তুত</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#">বেছে নিন</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-4 col-md-6 mb-30 pricing-table-wrap"> 
                                <div class="single-pricing-table text-center">
                                    <div class="pricing-head">
                                        <div class="price">
                                            <h2>২৫০০ <sup>৳</sup></h2>
                                            <span>প্রতি ঘন্টায়</span>
                                        </div>
                                        <h4>প্রিমিয়াম</h4>
                                    </div>
                                    <div class="pricing-body">
                                        <ul>
                                            <li>কেস মূল্যায়ন</li>
                                            <li>কেস ডেভলপমেন্টে সহায়তা</li>
                                            <li>লিখিত বিবৃতি প্রদান </li>
                                            <li>ডিপোজিট / ট্রেইলে সাক্ষ্য দিন</li>
                                            <li>অন্যান্য বিশেষজ্ঞ সাক্ষি</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#">বেছে নিন</a>
                                    </div>
                                </div>
                            </div>
                            -->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Pricing Table Area End-->

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
                                    <a class="footer-logo" href="index.php"><img src="img/logo/logo5.png" alt=""></a>
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
		                                <li><a href="service.php">অনুশীলনের ক্ষেত্র</a></li>
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
		                                    <p><a href="#">@Sharif</a>, সাধারণ মানুষের জন্য সহায়ক এবং ভালভাবে ব্যাখ্যা করা হয়েছে। </p>
		                                    <span class="time"><a href="#">১০ মিনিট পূর্বে</a></span>
		                                </li>
		                                <li>
		                                    <p><a href="#">@Joyon</a>, বাংলাদেশী আইন সম্পর্কে দুর্দান্ত তথ্যের জন্য আপনাকে ধন্যবাদ .. এটি সত্যিই খুব সহায়ক। </p>
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
		                            <p>খাগান বাজার (ড্যাফোডিল রোড), আশুলিয়া, সাভার<br> ঢাকা, বাংলাদেশ ।</p>
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
