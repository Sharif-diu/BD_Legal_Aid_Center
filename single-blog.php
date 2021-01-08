
<?php 

   require_once './config/connection.php';
   $blog_id = $_GET['blog_id'];   
   $query="SELECT * FROM `blog` where id=$blog_id"; 
   $result=mysqli_query($con,$query) or die ('date Query is not execute !!');
   $row = mysqli_fetch_array($result);

?>


<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>একক পরিষেবা || BDLAC</title>
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
                                            <p>ফোন করুন : <a href="#"> +880 01683 3818 21</a></p>
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
		                                    <li><a href="service.php">আমাদের সার্ভিস সমূহ</a></li>
		                                    <li><a href="pricing-plan.php">প্যাকেজ নির্ধারণ</a></li>
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
		                                    <li  class="active"><a href="blog.php">ব্লগ</a>
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
                        <h2>ব্লগ</h2>
                        <p>"আপনার আইনী অধিকার সম্পর্কে আরও ভাল ধারণা পেতে আইন নিবন্ধগুলি পড়ুন এবং সেগুলি রক্ষা করুন। আমাদের আইনের নিবন্ধগুলি সন্ধান করা এবং অনুসন্ধান করা সহজ। আপনি  সম্পূর্ণ অবগত রাখুন! এখানে আপনি বিশেষজ্ঞদের আইন অনুসারে বাংলাদেশী আইন এবং আইনী ব্যবস্থা সম্পর্কিত আইনী দর্শন পাবেন। বাংলাদেশের আইনী ব্যবস্থা ও আইন সম্পর্কিত নিবন্ধসমূহ।আইন অংশীদারদের সাথে সম্পর্কিত, আকার একটি সম্পূর্ণ-পরিষেবা বহুমুখী আইন সংস্থা।"।</p>
		                <ul class="breadcrumb-pagination">
		                    <li><a href="index.php">হোম</a></li>
		                    <li><a href="blog.php">ব্লগ</a></li>
		                    <li>বিবরণ</li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Page Banner Area End-->
		<!-- Blog Area Start-->
		<div class="blog-area pt-120">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-8 blog-post-item">
		                <div class="blog-wrapper blog-details">
                            <div class="blog-img img-full">
                                <img src="<?php echo $row['details_image_url']; ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                   <li>সেপ্টেম্বর ০৫</li> 
                                   <li><a href="#"> মুস্তাফিজুর রহমান</a></li>
                                   <li><a href="#">৪ কমেন্টস</a></li>
                                </ul>
                                <h3><?php echo $row['title']; ?></h3>
								<?php echo $row['description']; ?>

                                <blockquote class="mb-55">জীবনের প্রথম চল্লিশ বছর আমাদের পাঠ্য দেয়; পরবর্তী ত্রিশটি এ সম্পর্কে ভাষ্য সরবরাহ করে।</blockquote>
                                <div class="blog-bottom-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Your text is here</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Your text is here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
		                </div>
		                <div class="blog-author mt-60">
                            <h4 class="small-title">লেখক</h4>
                            <div class="blog-author-box">
                                <div class="blog-author-img">
                                    <img src="img/author/author1.jpg" alt="">
                                </div>
                                <div class="blog-author-content">
                                    <h6>বাংলাদেশ আইনী সহায়তা কেন্দ্র</h6>
                                    <p>আমাদের উদ্দেশ্য হলো সবাইকে আইন সম্পর্কে সচেতন করা এবং সবধরনের অপরাধ ও তার শাস্তির বিধান সমূহকে সহজ ভাষায় সকল নাগরিকদের নিকট পৌঁছে দেওয়া।</p>
                                </div>
                            </div>
                        </div>
                        <div class="common-tag-and-next-prev mt-65">
                            <div class="common-tag">
                                <h6>ট্যাগ: </h6>
                                <ul>
                                    <li><a href="#">আইন কেন্দ্র,</a></li>
                                    <li><a href="#">উকিল,</a></li>
                                    <li><a href="#">বাণিজ্য আইন</a></li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <h6>শেয়ার করুন:</h6>
                                <ul>
                                    <li><a href="#">ফেইসবুক,</a></li>
                                    <li><a href="#">ট্যুইটার,</a></li>
                                    <li><a href="#">ইনস্টাগ্রাম</a></li>
                                </ul>
                            </div>
                            <div class="next-prev-post">
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-long-arrow-left"></i> পূর্বের অংশ</a></li>
                                    <li><a href="#">পরবর্তী অংশ<i class="icofont icofont-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-list mt-60">
                            <h4 class="small-title">কমেন্টস</h4>
                            <div class="comment">
                                <div class="blog-author-img">
                                    <img src="img/author/author2.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        <h6>আফতাব হোসাইন</h6>
                                        <span>০৮ সেপ্টেম্বর ২০২০</span>
                                    </div>
                                    <a href="#" class="reply">প্রত্যুত্তর</a>
                                    <div class="comment-content-bottom">
                                        <p>বাংলাদেশী আইন সম্পর্কে দুর্দান্ত তথ্যের জন্য আপনাকে ধন্যবাদ।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment reply">
                                <div class="blog-author-img">
                                    <img src="img/author/author3.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        <h6>গোলাম ফারুখ</h6>
                                        <span>০৬ সেপ্টেম্বর ২০১৭</span>
                                    </div>
                                    <a href="#" class="reply">প্রত্যুত্তর</a>
                                    <div class="comment-content-bottom">
                                        <p>এটি সত্যিই খুব সহায়ক।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="blog-author-img">
                                    <img src="img/author/author4.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        <h6>শাহরিয়ার নাফিস</h6>
                                        <span>০৮ সেপ্টেম্বর ২০১৭</span>
                                    </div>
                                    <a href="#" class="reply">প্রত্যুত্তর</a>
                                    <div class="comment-content-bottom">
                                        <p>আইন এবং প্রক্রিয়াগুলির অনেক কিছুই জানতে পেরেছি। <br>অনেক ধন্যবাদ.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box mt-60">
                            <h4 class="small-title">মতামত দিন</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input name="commenter-name" placeholder="নাম" id="commenter-name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input name="commenter-email" placeholder="ই-মেইল" id="commenter-email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <textarea name="commenter-message" placeholder="আপনার তথ্য লিখুন" id="commenter-message" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <button class="sent-btn" type="submit">সেন্ড করুন</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
		            </div>
		            <div class="col-lg-4 blog-sidebar right-sidebar">
		              <div class="widget mb-60">
		                  <div class="widget-title">
		                      <h4>অনুসন্ধান</h4>
		                  </div>
		                  <div class="sidebar-form">
		                      <form action="#">
		                          <input type="text" placeholder="এখানে খুঁজুন">
		                          <button type="submit"><i class="fa fa-search"></i></button>
		                      </form>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-title">
		                      <h4>সাম্প্রতিক পোস্ট</h4>
		                  </div>
		                  <div class="sidebar-rc-post">
		                      <ul>
		                          <li>
		                              <div class="rc-post-thumb">
		                                  <a href="single-blog.php"><img src="img/rc-post/rc-post1.jpg" alt=""></a>
		                              </div>
		                              <div class="rc-post-content">
		                                  <div class="widget-date">সেপ্টেম্বর ১৮,  ২০২০</div>
		                                  <h4><a href="single-blog.php">সমস্ত কর্মচারীদের জন্য কর্পোরেট আইন প্রশিক্ষণ</a></h4>
		                              </div>
		                          </li>
		                          <li>
		                              <div class="rc-post-thumb">
		                                  <a href="single-blog.php"><img src="img/rc-post/rc-post2.jpg" alt=""></a>
		                              </div>
		                              <div class="rc-post-content">
		                                  <div class="widget-date">সেপ্টেম্বর ১৬,  ২০২০</div>
		                                  <h4><a href="single-blog.php">আমি যদি লন্ডন শিফট করতে চাই তবে কিছু আইন অনুসরণ করা দরকার</a></h4>
		                              </div>
		                          </li>
		                          <li>
		                              <div class="rc-post-thumb">
		                                  <a href="single-blog.php"><img src="img/rc-post/rc-post3.jpg" alt=""></a>
		                              </div>
		                              <div class="rc-post-content">
		                                  <div class="widget-date">সেপ্টেম্বর ১৪,  ২০২০</div>
		                                  <h4><a href="single-blog.php">কর্মসংস্থান, সুবিধা এবং সুযোগগুলি</a></h4>
		                              </div>
		                          </li>
		                          <li>
		                              <div class="rc-post-thumb">
		                                  <a href="single-blog.php"><img src="img/rc-post/rc-post4.jpg" alt=""></a>
		                              </div>
		                              <div class="rc-post-content">
		                                  <div class="widget-date">সেপ্টেম্বর ১২,  ২০২০</div>
		                                  <h4><a href="single-blog.php">সমস্ত কর্মচারীদের জন্য কর্পোরেট আইন প্রশিক্ষণ</a></h4>
		                              </div>
		                          </li>
		                      </ul>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-title">
		                      <h4>কার্য প্রক্রিয়া</h4>
		                  </div>
		                  <div class="widget-categories">
		                      <ul>
		                          <li><a href="Criminal-Penal-Code.html">ফৌজদারি আইন</a> <span>(১)</span></li>
                                  <li><a href="civil-law.html">দেওয়ানী আইন</a> <span>(১)</span></li>
		                          <li><a href="#">বাণিজ্যিক আইন</a> <span>(১)</span></li>
		                          <li><a href="#">নির্মাণ আইন</a> <span>(১)</span></li>
		                          <li><a href="#">আইটি আইন</a> <span>(১)</span></li>
		                          <li><a href="#">শিপিং আইন</a> <span>(১)</span></li>
                                  <li><a href="#">বিনিয়োগ আইন</a> <span>(১)</span></li>
                                  <li><a href="#">কর্পোরেট আইন</a> <span>(১)</span></li>
                                  <li><a href="#">পারিবারিক আইন</a> <span>(১)</span></li>
		                          <li><a href="#">আর্থিক আইন</a> <span>(১)</span></li>
		                      </ul>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-banner img-full">
		                      <a href="contact.php"><img src="img/banner/banner.jpg" alt=""></a>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-title">
		                      <h4>ইনস্টাগ্রাম</h4>
		                  </div>
		                  <div class="widget-instagram">
		                      <ul id="Instafeed"></ul>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-calendar">
		                      <div id="my-calendar"></div>
		                  </div>
		              </div>
		              <div class="widget mb-60">
		                  <div class="widget-title">
		                      <h4>ট্যাগ</h4>
		                  </div>
		                  <div class="widget-tag">
		                      <ul class="sidebar-tag">
		                          <li><a href="#">ফৌজদারি আইন</a></li>
		                          <li><a href="#">সমর্থন</a></li>
		                          <li><a href="#">পারিবারিক আইন</a></li>
		                          <li><a href="#">বিনিয়োগ আইন</a></li>
		                          <li><a href="#">তালাক আইন</a></li>
		                          <li><a href="#">আইন</a></li>
		                      </ul>
		                  </div>
		              </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Blog Area End-->
		<!--Brand Area Start-->
		<div class="brand-area pt-120 pb-115">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="brand-active owl-carousel">
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="img/brand/brand1.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="img/brand/brand2.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="img/brand/brand3.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="img/brand/brand4.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="img/brand/brand5.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Brand Area End-->
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
		                            <p>খাগান বাজার (ড্যাফোডিল রোড), আশুলিয়া, সাভার<br> ঢাকা, বাংলাদেশ</p>
		                            <p class="contact-info">
		                                <a href="#">+880 01683 381821</a>
		                                <a href="#">+880 01683 381821</a>
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
