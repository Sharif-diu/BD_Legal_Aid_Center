-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 12:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal_aid`
--

-- --------------------------------------------------------

--
-- Table structure for table `apoinment`
--

CREATE TABLE `apoinment` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `podobi` text CHARACTER SET utf8 NOT NULL,
  `phone` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `subject` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apoinment`
--

INSERT INTO `apoinment` (`id`, `name`, `podobi`, `phone`, `email`, `subject`, `date`, `description`) VALUES
(2, 'gdfg', 'dfgdfg', '01778207719', 'mokbulhossain098@gmail.com', 'New contact from gdfg dfgdfg', '18/11/2020', 'fdgsdf sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `small_image_url` text CHARACTER SET utf8 NOT NULL,
  `details_image_url` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `small_image_url`, `details_image_url`, `title`, `description`, `date`) VALUES
(1, 'https://i.imgur.com/ADXT4cj.jpg', 'https://i.imgur.com/v5so8R8.jpg', 'ডিভোর্স বা তালাক দেয়ার সঠিক নিয়ম', '<p>তালাকের অধিকার কনটেন্টটিতে স্বামী-স্ত্রী কীভাবে তালাক দিতে পারেন, স্বামীর পক্ষ থেকে তালাক, স্ত্রীর পক্ষ থেকে তালাক, হিল্লা বিয়ে, চেয়ারম্যানের দায়িত্ব, কাজীর দায়িত্ব মুসলিম পারিবারিক আইনে তালাক সম্পর্কে বর্ণনা করা হয়েছে ।মুসলিম আইনে তালাকের অধিকার সাইদ ও লোপার বিয়ের দুই বছর পর সাইদ লোপাকে তালাক দিয়ে বাড়ি থেকে বের করে দেয়। লোপা তার বাবার বাড়িতে ফিরে আসে। বিয়ের পর থেকেই সাইদ ও তার বাবা-মা লোপাকে শারিরীক ও মানসিকভাবে নির্যাতন করত। কারণ বিয়ের সময় লোপার বাবা যে যৌতুক দিতে চেয়েছিল টাকার অভাবে তার সব দিতে পারে নাই। বিয়ের সময় লোপার বাবা সাইদকে বলেছিল যে, আমন মৌসুমের পর সাইদকে তাদের দাবী মত টাকা ও মটর সাইকেল কিনে দিবে। কিন্তু গত দুই বছর আমনের ফলন কম হওয়ায় লোপার বাবা সাইদকে শুধু টাকা দিতে পারেন। মটর সাইকেল কিনে দেয়া তার পক্ষে সম্ভব হয় না। লোপার বাবার বাড়িতে ফিরে আসায় তার বাবা-মা চিন্তায় পড়েন। এর কয়েক দিন পরেই সাইদ লোপাকে তালাকের নোটিশ পাঠায়। লোপা কি করবে বুঝতে পারে না। প্রচন্ড অসহায়বোধ করে। বিয়ের আগে সে উচ্চ মাধ্যমিক পর্যন্ত পড়ালেখা করেছিল, তাই আইন সম্পর্কে তার কিছু ধারণা আছে। একদিন সে তার বাবার সাথে উকিলের কাছে যায় পরামর্শের জন্য। উকিল তাকে তালাকের অধিকার সম্পর্কে তথ্য জানান।</p><p>লোপা : তালাকের ক্ষেত্রে স্বামী/স্ত্রীর অধিকার কি সমান ? উকিল : বিয়ে বিচ্ছেদ ঘটাতে স্বামী-স্ত্রীর অধিকার সমান নয়। এক্ষেত্রে স্বামীর ক্ষমতা বা অধিকারই বেশি। লোপা : স্বামী বা স্ত্রী কিভাবে তালাক দিতে পারে ? উকিল : স্বামী-স্ত্রী নিম্নলিখিত উপায়ে তালাক দিতে পারেন: স্বামী কর্তৃক তালাক (স্বামী আইনের নিয়ম মেনে যে কোন সময় স্ত্রীকে তালাক দিতে পারেন।) স্ত্রী কর্তৃক তালাক (স্বামী যদি স্ত্রীকে তালাক প্রদানের ক্ষমতা দিয়ে থাকেন অর্থাৎ তালাক-ই-তৌফিজের মাধ্যমে স্ত্রী কর্তৃক তালাক) পারষ্পরিক সম্মতির ভিত্তিতে তালাক (খুলা বা মুবারত পদ্ধতিতে তালাক) আদালতের মাধ্যমে তালাক।</p>\r\n\r\n<div class=\"row\">\r\n                                   <div class=\"col-md-6\">\r\n                                       <ul class=\"blog-post-list\">\r\n                                            <li> ক. স্ত্রী আদালতের মাধ্যমে বিচ্ছেদ ঘটাতে পারে </li>\r\n                                            <li> খ. তালাক-ই-তৌফিজ-এর মাধ্যমে বিচ্ছেদ ঘটাতে পারে </li>\r\n                                            <li> গ. খুলা’র মাধ্যমে বিচ্ছেদ ঘটাতে পারে, এছাড়া</li>\r\n                                        </ul>\r\n                                   </div>\r\n                                    <div class=\"col-md-6\">\r\n                                        <ul class=\"blog-post-list\">\r\n                                            <li> ঘ. স্বামী-স্ত্রী দুজনই মুবারতের মাধ্যমে বিচ্ছেদ ঘটাতে পারে </li>\r\n                                            <li> Your text is here </li>\r\n                                        </ul>\r\n                                    </div>\r\n                                </div>', '0000-00-00 00:00:00'),
(2, 'https://i.imgur.com/zHWBwcu.jpg', 'https://i.imgur.com/zHWBwcu.jpg', 'ব্যাংক ঋণ আদায় সংক্রান্ত মামলা', '<p>যেহেতু বাংলাদেশ ব্যাংক ঋণ আদায় সংক্রান্ত সকল মামলার হিসাবে নিয়ে তথ্য প্রদান করে, তাই বাংলাদেশ ব্যাংকের তথ্যকে বিবেচনায় নিয়ে আমাদের করণীয় ঠিক করতে হবে- কীভাবে এ বিশাল সংখ্যার মামলাকে দ্রুত নিষ্পত্তি করা যায়।</p><p>ঢাকা জেলা জজ আদালতের তথ্য অনুযায়ী মে ২০২০ পর্যন্ত ঢাকার চারটি অর্থঋণ আদালতে বিচারাধীন, অর্থঋণ আদায় সংক্রান্ত মামলার সর্বমোট সংখ্যা ২৫,৫৯১। যেখানে বিচারাধীন অর্থঋণ মূল মামলার সংখ্যা ৭,৯৭৬, অর্থ জারী মামলার সংখ্যা ১৭,২৮১ এবং মিস কেস ৩৩৪।\r\n\r\nদ্য বিজনেস স্ট্যান্ডার্ড পত্রিকার গত ১৮/০২/২০২০ তারিখের রিপোর্ট এবং দ্য ফাইন্যান্সিয়াল এক্সপ্রেসের গত ২৬/১০/২০১৯ তারিখের রিপোর্ট মোতাবেক, বাংলাদেশে ব্যাংক এবং আর্থিক প্রতিষ্ঠানের ঋণ আদায় সংক্রান্ত মামলার সংখ্যা ৩০ জুন ২০১৯ পর্যন্ত ছিল ৬২,৬০৪। সেই রিপোর্টসমূহ পর্যালোচনা করে সুপ্রিম কোর্ট আর বাংলাদেশ ব্যাংকের তথ্য বিশ্লেষণ করলে বিরাট অমিল পাওয়া যায়, বাংলাদেশের নিম্ন আদালতে  বিচারাধীন অর্থঋণ মামলার সর্বমোট সংখ্যার। বাংলাদেশ ব্যাংকের তথ্যের সঙ্গে সুপ্রিম কোর্টের তথ্যের বিশাল ফারাক চোখে পড়ে।</p><p>বাস্তবে দুই তথ্যই সঠিক। সুপ্রিম কোর্টের তথ্যে থাকে কেবল অর্থঋণ আদালতে বিচারাধীন অর্থঋণ মূল মামলার সংখ্যা। অন্যদিকে, বাংলাদেশ ব্যাংক তথ্য দেয় অর্থঋণ মূল মামলা, তার সঙ্গে অর্থ জারী মামলা, মূল মামলা বা জারী মামলা হতে উদ্ভুত মিস বা ছানি মামলা, উচ্চ আদালতে বিচারাধীন মামলা এবং অন্যান্য মামলার, অর্থ্যাৎ ঋণ আদায় সংশ্লিষ্ট সকল মামলা। সকল ব্যাংক বা আর্থিক প্রতিষ্ঠানের নিকট থেকে তথ্য নিয়ে তার যোগফলের মাধ্যমে বাংলাদেশ ব্যাংক অর্থঋণ মামলার সংখ্যা নির্ধারণ করে। আর তাই বলা যায় দুই তথ্যই সঠিক।\r\n\r\nযেহেতু বাংলাদেশ ব্যাংক ঋণ আদায় সংক্রান্ত সকল মামলার হিসাবে নিয়ে তথ্য প্রদান করে, তাই বাংলাদেশ ব্যাংকের তথ্যকে বিবেচনায় নিয়ে আমাদের করণীয় ঠিক করতে হবে- কীভাবে এ বিশাল সংখ্যার মামলাকে দ্রুত নিষ্পত্তি করা যায়।\r\n\r\nপ্রথমেই আসা যাক অর্থ জারী মামলার নিষ্পত্তির বিষয়ে; কেননা কেবলমাত্র ঢাকার চারটি অর্থঋণ আদালতের যে হিসাব শুরুতে দেওয়া হয়েছে, তাতেই দেখা যায়, মূল মামলার চেয়ে দ্বিগুণের বেশি বিচারাধীন অর্থ জারী মামলা। অতএব, ধরে নেওয়া অযৌক্তিক নয় যে, গত বছরের জুন মাসের পরে এ বছর জুন পর্যন্ত সারাদেশে আরও অনেক নতুন জারী মামলা হয়েছে; তাছাড়া মূল মামলা দ্রুত নিষ্পত্তি হলেও জারী মামলা নিষ্পত্তির হার খুবই কম, যার কারণে মামলার সংখ্যা কেবল বাড়ছেই না, ঋণ আদায় প্রক্রিয়াও বাধাগ্রস্ত হচ্ছে; আর যার সর্বশেষ প্রতিক্রিয়া হচ্ছে সামগ্রিক অর্থনীতিতে বিরুপ প্রভাব।\r\n\r\nঅর্থ জারী মামলা হলো, বাদী ব্যাংক বা আর্থিক প্রতিষ্ঠানের পক্ষে মূল মামলার রায় ডিক্রি পাওয়ার নির্দিষ্ট মেয়াদের ভেতরে দায়ের করা মামলা, যা করা হয় প্রাপ্ত ডিক্রি কার্যকরের উদ্দেশ্যে। বন্ধকি সম্পত্তি বিক্রয় করে ঋণ আদায়ের জন্য ডিক্রির আদেশ থাকলে আদালত, সর্বোচ্চ দুইবার আদালত যোগে নিলাম বিক্রয় করার জন্য নিলাম ডাকের ব্যবস্থা করতে পারে অর্থঋণ আইনের বিধান মতে। তার পরে আদালত ডিক্রিদার ব্যাংক বা আর্থিক প্রতিষ্ঠানের অনুকূলে সম্পত্তির মালিকানা [ধারা ৩৩ (৭)] বা ভোগ, দখলসহ বিক্রির অনুমতি [ধারা ৩৩ (৫)] দিয়ে সনদপত্র প্রদান করে, জারী মামলার নিষ্পত্তি করেন উক্ত আইনের ৩৩ (৯) ধারা অনুযায়ী; তবে বাস্তবে মামলার চূড়ান্ত নিষ্পত্তি হয় না। কেননা, এই আইনের ৩৩ (৭ ক) ধারায় রয়েছে: \'উপ-ধারা (৫) বা (৭)-এর অধীন সম্পত্তির দখল আদালতযোগে প্রাপ্ত হওয়া আবশ্যক হইলে, ডিক্রিদারের লিখিত আবেদনের ভিত্তিতে আদালত ডিক্রিদারকে উক্ত সম্পত্তির দখল অর্পণ করিতে পারিবে।\'</p><p>তার পরের ধারাটি আরও বেশি  তাৎপর্যপূর্ণ: (৭ খ) \'উপ-ধারা (৭ ক)-এর অধীন ডিক্রিদারকে সম্পত্তির দখল অর্পষ করিবার পূর্বে আদালতে পুনঃনিশ্চিত হইতে হবে যে, উক্ত সস্পত্তিই আইনানুগভাবে উহার প্রকৃত মালিক কর্তৃক ডিক্রির সংশ্লিষ্ট ঋণের বিপরীতে বন্ধক প্রদান করা হইয়াছিল অথবা ডিক্রি কার্যকর করিবার লক্ষে দায়িকের প্রকৃত সত্ব দখলীয় সম্পত্তি হিসাবে উক্ত সম্পত্তিই ক্রোক করা হইয়াছিল।\'\r\n\r\nলক্ষণীয় বিষয়, এখানে আদালতকে প্রকৃত মালিক দ্বারা সম্পত্তি বন্ধক দেওয়া হয়েছিল কি না সে ব্যাপারে পুনঃনিশ্চিত হতে বলা হয়েছে। যদিও বলা হয়নি, পুনঃনিশ্চিত হওয়ার পদ্ধতি কী হবে কিংবা প্রকৃত মালিক দ্বারা যদি বন্ধক প্রদান না করা হয়ে থাকে, তাহলে কী হবে? আর তাই যে আদালত বন্ধকী সম্পত্তির মালিক আইনের ৩৩ (৭) ধারা অনুযায়ী ব্যাংক বা আর্থিক প্রতিষ্ঠানকে ঘোষণা করেছিল, সেই একই  আদালতের ওপর দায়িত্ব বর্তায়, বন্ধকটি সম্পত্তির প্র্কৃত মালিক করেছিল কি-না তা নির্ধারণ করার, তাও আইনের ৩৩-এর ৯ ধারা মোতাবেক জারী মামলার চূড়ান্ত নিষ্পত্তির পরে! আর তাই অর্থ জারী মামলা কেবল যে সগৌরবে রয়ে যায়, তা নয়, সম্পূর্ণ আরেকটি নতুন প্রসিডিংসের জন্ম দেয়। কারণ, আইন অনুযায়ী মামলা নিষ্পত্তি হয়ে যাওয়ার পরেও এ \'দুই উপধারার কারণে আদালতকে দেখতে হবে বন্ধকী সম্পত্তির কাগজপত্র, সি.এস., আর.এস., বি.এস., মিউটেশন খতিয়ান; মিলাতে হবে সম্পত্তির দাগ, কড়া, আনি, ক্রান্তি হিসাব; পর্যালোচনা করতে হবে মূল মামলার সাক্ষ্য, মূল দলিল, বায়া দলিলের তফসিল, মালিকানার চেইন,  খাজনা দাখিলার মতো আরও অনেক কাগজ, দলিল বা দস্তাবেজ। তদুপরি আদালতকে আরও পুনরায় নিশ্চিত হতে হবে \'ডিক্রির সংশ্লিষ্ট ঋনের বিপরীতে বন্ধক প্রদান করা হয়েছিল কি না?\'\r\n\r\nঅর্থাৎ, জারী আদালত এখন ব্যাংকের সেংশন লেটার, কোম্পানির নিজস্ব জায়গা হলে বন্ধকের পরে রেজিস্ট্রার অব জয়েন্ট স্টকস অ্যান্ড কোম্পানিজ-এ পুনরায় মর্টগেজ করা হয়েছে কি না, চার্জ ডকুমেন্টস, অ্যাকাউন্ট স্টেটমেন্টসহ প্রদত্ত সাক্ষ্য বিবেচনায় এনে তার পরে সিদ্ধান্ত দিতে হবে যে, আইনানুগভাবে বন্ধকী সম্পত্তির প্রকৃত মালিক কর্তৃক প্রদত্ত ঋনের বিপরীতে জমির প্রকৃত মালিকই বন্ধক প্রদান করেছিল।\r\n\r\nএ তো গেল যেক্ষেত্রে বন্ধকী সম্পত্তি আছে, সেই জারী মামলার কথা; আর যেক্ষেত্রে তা নেই, সেই মামলার ক্ষেত্রে আদালত দায়িককে দেওয়ানি কারাগারে আটক রাখার জন্য ওয়ারেন্ট প্রদান করেন। আইনে আছে, আটক থাকবে সর্বোচ্চ ছয় মাস। যদিও ডিক্রি প্রদত্ত টাকা কীভাবে আদায় হবে তা বলা নেই, তবে বলা আছে পুনরায় জারী মামলা করা যাবে টাকা আদায় না হলে; কিন্ত এবার আর তাকে দেওয়ানী কারাগারে  আটক রাখা যাবে না, যদি তিনি আগেই পূর্ণ মেয়াদে কারাগারে আটক থাকেন। অন্যদিকে, বছরের পর পর বছর ওয়ারেন্ট তামিল করা যায় না তার কারণ, মানুষ তো আর একই ঠিকানায় সারা জীবন থাকে না। আর তাই যে কোনো প্রকারের জারী মামলাই নিষ্পত্তি হওয়া দুরূহ।\r\n\r\nজারী মামলায় ডিক্রি কার্যকরের এই অবস্থায় ব্যাংকগুলো তাই ঋণ আদায়ের সহজ কার্যকরী পন্থা হিসাবে ঝুঁকে পড়ে চেক ডিজঅনারের মামলার দিকে। বাংলাদেশে ব্যাংক বা আর্থিক প্রতিষ্ঠানের চেক ডিজঅনারের মামলা ফাইলিং হয় প্রতিদিন, প্রচুর পরিমাণে; যে কারণে ফৌজদারি  মামলার সংখ্যাও বেড়ে যাচ্ছে অস্বাভাবিক হারে। এত মামলার চাপে ভয়ংকর অপরাধের ফৌজদারি মামলাগুলোর নিষ্পত্তি হতে সময় নিচ্ছে; কেননা যে বিচারক মৃত্যুদণ্ড দেওয়ার মতো মামলার বিচারক, তার কোর্টেই চেক ডিজঅনার মামলার জট- যার সর্বোচ্চ শাস্তি ১ বছর; কেবল তাই নয়, সে সকল মামলা থেকে উদ্ভুত আপিল বা রিট  মামলা সুপ্রিম কোর্টেও চলে আসছে অস্বাভাবিক দ্রুতগতিতে। যার স্বাভাবিক প্রতিক্রিয়া  হচ্ছে মামলা জট আর ভয়ংকর অপরাধের বিচারের দীর্ঘসূত্রিতা; ফলাফলে অপরাধীর অপরাধ করার মানসিকতা বেড়ে যায়, যার সুদুরপ্রসারি প্রভাবে সৃষ্টি হয় সামাজিক অস্থিরতা।</p><p>বেলাভূমিতে দাঁড়িয়ে সমুদ্রের উপরিতলের কেবল ঢেউ আর সৌন্দর্য উপভোগ করা যায়, অনুমানেও আসে না এর গভীরে কী রয়েছে; আর তাই আমাদের যেমন ছোট শাস্তির- চেক ডিজঅনারের মামলা নিষ্পত্তি প্রয়োজন, তারচেয়ে অনেক বেশি প্রয়োজন হত্যা, খুন, ধর্ষণ, নাশকতা, মানি লন্ডারিং, মানব পাচার, চোরাচালানি ইত্যাদি সমাজ বা রাষ্ট্রবিরোধী মামলারও দ্রুত নিষ্পত্তি করা।</p>', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_comments`
--

CREATE TABLE `client_comments` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `designation` text CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_comments`
--

INSERT INTO `client_comments` (`id`, `name`, `designation`, `comment`) VALUES
(1, 'মেজবাহ সালমান', 'অ্যাসিস্ট্যান্ট প্রফেসর', 'আপনি যদি নিজের জন্য ন্যায়বিচার চান এবং সঠিক পরামর্শও চান তাহলে এটি আমার মনে হয় আপনার জন্য সঠিক জায়গা।'),
(2, 'মোঃ শাবাব জুলফিকার', 'অধ্যাপক', 'খুব সহায়ক, আমি এটি প্রশংসা করি। আমি আমাদের আইন এবং প্রক্রিয়াগুলির অনেক কিছুই জানতে পেরেছি। অনেক ধন্যবাদ।');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `description`) VALUES
(2, 'dff', 'mokbulhossain098@gmail.com', '123456755646', 'New contact from dff', 'ZC sdas');

-- --------------------------------------------------------

--
-- Table structure for table `counting_info`
--

CREATE TABLE `counting_info` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `count` float NOT NULL,
  `is_percent` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counting_info`
--

INSERT INTO `counting_info` (`id`, `title`, `count`, `is_percent`) VALUES
(1, 'কেস সমাধান হয়েছে', 11, 0),
(2, 'বিজয়ী কেস', 12, 1),
(3, 'ক্লাইন্ট খুশী হয়েছে', 13, 0),
(4, 'বিজয়ী পুরষ্কার', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `discuss`
--

CREATE TABLE `discuss` (
  `id` int(11) NOT NULL,
  `year` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `discription` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discuss`
--

INSERT INTO `discuss` (`id`, `year`, `date`, `title`, `discription`) VALUES
(1, '২০২০', '৫ই সেপ্টেম্বর', 'আমাদের যাত্রা শুরু', 'Your text is here'),
(2, '২০২০', '১০ই সেপ্টেম্বর', 'সেরা আইনজীবী পুরষ্কার', 'Your text is here'),
(3, '২০২০', '২২ই সেপ্টেম্বর', 'সর্বাধিক বিজয়ী পুরষ্কার', 'Your text is here'),
(4, '২০২০', '১০ই সেপ্টেম্বর', 'সেরা আইনজীব', 'Your text is here'),
(5, '২০২০', '১৫ই সেপ্টেম্বর', 'বিগ কেস উইন', 'Your text is here');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `type` text CHARACTER SET utf8 NOT NULL,
  `hour` text CHARACTER SET utf8 NOT NULL,
  `amount` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `hour`, `amount`) VALUES
(7, 'প্রাথমিক', 'প্রতি ঘন্টায়', '৫০০'),
(8, 'স্ট্যান্ডার্ড', 'প্রতি ঘন্টায়', '১৫০০০'),
(9, 'প্রিমিয়াম', 'প্রতি ঘন্টায়', '২৫০০');

-- --------------------------------------------------------

--
-- Table structure for table `package_items`
--

CREATE TABLE `package_items` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `item` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_items`
--

INSERT INTO `package_items` (`id`, `package_id`, `item`) VALUES
(1, 7, 'কেস মূল্যায়ন'),
(2, 7, 'কেস ডেভলপমেন্টে সহায়তা'),
(3, 7, 'লিখিত বিবৃতি প্রদান'),
(4, 7, 'অন্যান্য বিশেষজ্ঞ সাক্ষি'),
(10, 9, 'কেস মূল্যায়ন'),
(11, 9, 'কেস ডেভলপমেন্টে সহায়তা'),
(12, 9, 'লিখিত বিবৃতি প্রদান'),
(13, 9, 'ডিপোজিট / ট্রেইলে সাক্ষ্য দিন'),
(14, 9, 'অন্যান্য বিশেষজ্ঞ সাক্ষি'),
(28, 8, 'কেস মূল্যায়ন'),
(29, 8, 'কেস মূল্যায়ন'),
(30, 8, 'কেস মূল্যায়ন');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon_url` text,
  `title` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon_url`, `title`, `description`) VALUES
(3, 'https://i.imgur.com/x9pZ0Ka.png', 'ফৌজদারি আইন', 'ফৌজদারি আইন আইনের অঙ্গ যা অপরাধের সাথে সম্পর্কিত। এটি হুমকী, ক্ষতিকারক বা অন্যথায় সম্পত্তি, স্বাস্থ্য, সুরক্ষা এবং নিজের মধ্যে অন্তর্ভুক্ত ব্যক্তিদের নৈতিক কল্যাণে বিপদজনক হিসাবে বিবেচিত আচরণ পরিচালনা করে।'),
(4, 'https://i.imgur.com/x9pZ0Ka.png', 'তালাক আইন', 'তালাক শব্দের অর্থ \'বিচ্ছিন্ন\', ত্যাগ করা ইত্যাদি। ইসলাম ধর্মে আনুষ্ঠানিক বিবাহ বিচ্ছেদকে তালাক বলা হয়। স্বামী সর্বাবস্থায় তালাক দিতে পারেন। স্ত্রী শুধুমাত্র তখনই তালাক দিতে পারবেন, যদি বিয়ের সময় এর লিখিত অনুমতি দেওয়া হয়।পরিভাষায় তালাক অর্থ \"বিবাহের বাঁধন তুলিয়া ও খুলিয়া দেওয়া, বা বিবাহের শক্ত বাঁধন খুলিয়া দেওয়া \"স্বামী তার স্ত্রীর সকল সম্পর্ক ছিন্ন করে দেওয়া।'),
(5, 'https://i.imgur.com/x9pZ0Ka.png', 'কর্পোরেট আইন', 'কর্পোরেট আইন হ\'ল আইন, সংস্থা, ব্যক্তি এবং সংস্থাগুলি এবং ব্যক্তিদের অধিকার, সম্পর্ক এবং আচরণ পরিচালনা করে। শব্দটি কর্পোরেশনগুলি সম্পর্কিত কর্পোরেশন সম্পর্কিত তত্ত্ব বা কর্পোরেশন তত্ত্বকে বোঝায়'),
(6, 'https://i.imgur.com/x9pZ0Ka.png', 'দেওয়ানী মামলা', 'ব্যক্তির সাথে ব্যক্তির, প্রতিষ্ঠানের সাথে প্রতিষ্ঠানের, বা ব্যক্তির সাথে প্রতিষ্ঠানের বিরোধ মিমাংসাকারী আইন ও মামলা। যার নিস্পত্তি হয় সাধারণত ক্ষতিপূরণ আদায়ের মাধ্যমে, অধিকার ফিরিয়ে দিয়ে, বা বেকসুর খালাশ করে।'),
(7, 'https://i.imgur.com/x9pZ0Ka.png', 'বাণিজ্যিক আইন', 'বিভাগটি অ্যাভিয়েশন সম্পর্কিত বিষয়াদি, বাণিজ্যিক লেনদেন, আন্তর্জাতিক বাণিজ্য এবং বাণিজ্যিক মামলা দায়ের করে।'),
(8, 'https://i.imgur.com/x9pZ0Ka.png', 'নির্মাণ আইন', 'নির্মাণ বিভাগ প্রকিউরমেন্ট, পাওয়ার, এনার্জি, অবকাঠামো প্রকল্প, বিডিং এবং সরকারী চুক্তি নিয়ে কাজ করে।'),
(9, 'https://i.imgur.com/x9pZ0Ka.png', 'আইসিটি আইন', 'তথ্য প্রযুক্তি আইনের যথাযথ নিয়ন্ত্রক সম্মতি নিয়ে কাজ করে।'),
(10, 'https://i.imgur.com/x9pZ0Ka.png', 'শিপিং আইন', 'শিপিং বিভাগ মেরিন ইন্স্যুরেন্স, শিপবিল্ডিং এবং শিপব্রেকিং বিষয়াদি, অ্যাডমিরাল্টি, মেরিটাইম এবং শিপ অ্যারেস্ট নিয়ে কাজ করে।'),
(11, 'https://i.imgur.com/x9pZ0Ka.png', 'বিনিয়োগ আইন', 'বিনিয়োগ দলটি বিদেশী / গ্লোবাল বিনিয়োগ, ব্যবসা প্রতিষ্ঠা, নাগরিকত্ব, মূলধন বাজার, শেয়ার বাজার কৌশল ইত্যাদি নিয়ে কাজ করে'),
(12, 'https://i.imgur.com/x9pZ0Ka.png', 'পারিবারিক আইন', 'পারিবারিক আইন বিভাগ দ্বন্দ্ব এবং বিবাহ, বিবাহবিচ্ছেদ, ওয়ার্ড শিপ এবং শিশুর হেফাজত সম্পর্কিত সমস্যাগুলি নিয়ে কাজ করে।'),
(13, 'https://i.imgur.com/x9pZ0Ka.png', 'আর্থিক আইন', 'অর্থ বিভাগ ব্যাংকিং, অর্থ ও বিনিয়োগ, ভ্যাট, কর এবং শুল্ক সম্পর্কিত বিষয়গুলি নিয়ে কাজ করে।');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apoinment`
--
ALTER TABLE `apoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_comments`
--
ALTER TABLE `client_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counting_info`
--
ALTER TABLE `counting_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_items`
--
ALTER TABLE `package_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apoinment`
--
ALTER TABLE `apoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_comments`
--
ALTER TABLE `client_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counting_info`
--
ALTER TABLE `counting_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discuss`
--
ALTER TABLE `discuss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_items`
--
ALTER TABLE `package_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package_items`
--
ALTER TABLE `package_items`
  ADD CONSTRAINT `package_items_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
