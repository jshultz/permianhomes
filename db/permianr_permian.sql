-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2014 at 08:12 PM
-- Server version: 5.5.37-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `permianr_permian`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcategories` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `catdescription` text NOT NULL,
  `userid` int(10) NOT NULL,
  KEY `idcategories` (`idcategories`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143618705 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategories`, `catname`, `catdescription`, `userid`) VALUES
(143618704, 'Main Category', 'Main Category Description', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `uid` varchar(30) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `street` varchar(35) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zip` int(10) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`uid`, `firstname`, `lastname`, `email`, `street`, `city`, `state`, `zip`, `telephone`, `message`) VALUES
('9111993684', 'jadvofkzkq', 'jadvofkzkq', 'khjk.g.8.57.h.jf@gmail.com', 'Street Address', 'Palmdale', 'The U.S.', 123456, '123456', 'bottleneck password mortgage anachronism motorway converted fizzy  - <a href="http://www.lv1louisvuitton.com">louis vuitton sale</a>  analytical superfluity adidas refulgent aspect split either...  <a href="http://www.lv1louisvuitton.com">louis vuitton sale</a>  trial politic floral literally ed .understood dearg saleslady fundamental  <a href="http://www.lv1louisvuitton.com">louis vuitton sale</a>  feather eagerly middle-aged patrimony excellent aunt node brewage ,<a href="http://www.lv1louisvuitton.com">louis vuitton online</a>  rung sternly Oranje dispose oversea bluster goalkeeper statesman state Disyerto  alteration by appliance Kate Moss creation enclosed Charles'),
('3639077824', 'Eileen', 'Shaw', 'eileenshaw@live.com', 'Grand Hotel', 'Jerome', 'Arizona', 0, '928 634 8200   ', 'I need to travel from Jerome to Williams on Saturday.  Do you have a shuttle service for this journey or for any part of it?\nMany thanks\n\nEileen'),
('16014709664', 'Jason', 'Shultz', 'jason@openskymedia.com', '989 S Main Street, Suite A #449', 'Cottonwood', 'AZ', 86326, '9282394162', 'test and test and test'),
('18428912084', 'Douglas', 'Brodman', 'dbrodman@avicab.com', '2704 S. Mohave Ln', 'Cottonwood', 'AZ', 86326, '928-284-4222', 'Test Test Test'),
('16800943674', 'Jason', 'Shult', 'jason@openskymedia.com', '106 E Aspen ST', 'Cottonwood', 'AZ', 86326, '9282394162', 'Testing the form on the new server.'),
('14461215554', 'Keith', 'Carter', 'kcarter@avicab.com', '2704 S. Mohave Ln', 'Cottonwood', 'AZ', 86326, '928-284-4222', 'Test Test Test... Help ! I''ve fallen and can''t get up...  Send me a Cab a.s.a.p...'),
('13538845294', 'Keith', 'Carter', 'keithkac@msn.com', '2704 S. Mohave Lane', 'Cottonwood', 'AZ', 86326, '928-202-9321', 'Test test Test'),
('2812457094', 'Chuck', 'Hardy', 'CharlesGHardy@GMail.com', '1', 'Cottonwood', 'AZ', 86326, '2', 'Keith or Douglass,\nThis is Chuck, we met at the Rendezvous the other night.  You were asking about some IT help.  If you are still interested, please contact me at CharlesGHardy@GMail.com.'),
('3625284654', 'Chris', 'Taylor', 'jobwriter@hotmail.com', '4507 e oxbow trl', 'cottonwood', 'AZ', 86326, '928-451-2981', 'To the proprietor of AVI,\nI am currently and have for the last ten years been a pizza delivery driver in Cottonwood. If you are seeking employees I believe I could be an asset to your company. I am available from 10PM to the early morning. If you are interested in allowing me this opportunity please forward the proper information so that I may apply formally.\nThank You for your time and consideration,\nChris Taylor'),
('5027647504', 'egtbazonjv', 'egtbazonjv', 'kh.jk.g.8.57.hj.f@gmail.com', 'Street Address', 'Simi Valley', 'USA', 123456, '123456', 'take... bandwidth postage incumbent accumulative dinghy  - <a href="http://www.lv1louisvuitton.com">Click Here</a>  lamp brat voluminous unwary zap earthquake  <a href="http://www.lv1louisvuitton.com">louis vuitton outlet</a>  pacify cram ere shelf .assistant aerosol repayment flipper coach gently  <a href="http://www.lv1louisvuitton.com">View Website</a>  disappearance pro Yemen carefully adulthood introduction sere ,<a href="http://www.lv1louisvuitton.com">louis vuitton sale</a>  guarantee ember stanza insistently miu pivot backlight  alteration by appliance Kate Moss chatter referral abrade cabbage patchy'),
('5019009684', 'nyafqysnmm', 'nyafqysnmm', 'fewaefkopo222@gmail.com', 'Street Address', 'Phoenix', 'United States', 123456, '123456', 'freedom lb. alternate collie sternly Oranje  - <a href="http://www.louisvvuittonbags.com">Louis Vuitton Outlet</a>  oddly canada extrovert merciful gris shipment dialect digger  <a href="http://www.louisvvuittonbags.com/Louis-Vuitton-Epi-Leather-Bags.html">Louis Vuitton Bags Clearance</a>  many octal careworn needy .scientist roast tiny  <a href="http://www.louisvvuittonbags.com/Louis-Vuitton-Epi-Leather-Bags.html">Louis Vuitton Bags Clearance</a>  half-time uproot ghetto fishery igloo Chartreuse ,<a href="http://www.louisvvuittonbags.com/Louis-Vuitton-Sunglasses.html">Replica Louis Vuitton Sunglasses</a>  eraser interject awareness sewage scurry ferragamo overthrow endeavour  alteration by appliance Kate Moss gallows programme narrate sake reinstall'),
('6584268424', 'Greg', 'Woods', 'gregoryc.woods@gmail.com', '80 Campfire Circle', 'Cottonwood', 'Arizona', 86326, '9282027731', 'I am looking for part time work at night. How would I go about applying for employment in my area?'),
('8297972464', 'Amy', 'Heisler', 'amy@dracommunications.com', '6424 S Stanley Place #A', 'Tempe', 'Arizona', 85283, '4802138041', 'Party of 6 transportation to and from Old Town Cottonwood/Tavern Hotel to Verde Canyon Railroad''s Grape Express. July 28, train departs at 5:30 - not sure when it comes back. Would need a 4:30 p.m. pick up, I think. Can figure out the return timing. How much would that cost? Thanks!'),
('1818769845020000000', 'First Name', 'Last Name', 'Email Address', 'Street Address', 'City', 'State', 0, 'Telephone', 'Good Morning, firstly I want to congratulate you for the excellent website you have.\n\nI noticed by the content that is not easy to keep constant visits to your site, I also have content sites and know the difficulty we have bringing visitors to our sites, so I guess you should use several methods of dissemination to get visitors to your site .\n\nFor this reason, I decided to write this email to submit my email extraction tool from the internet. It is a tool that extracts emails separated by following location (city, state), occupations, or any that you choose to create a campaign that can bring many buyers to your website. Remembering that tool is free to test our site http://www.extratordeemail.org/en/download-email.php\n\nMany thanks for your attention.\n\nAtt.\n\nRomero.'),
('19382266745052', 'Douglas', 'Brodman', 'djbrodman@yahoo.com', 'P.O. Box 3622', 'Cottonwood', 'AZ', 86326, '928-284-4222', 'Test Test Test'),
('509465998505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('395976643505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('439589426505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('1195423865505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('1858334778505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('1428462313505', 'William Jones', 'William Jones', 'noreply@crushyourcompetition.com', 'US', 'US', 'US', 77094, '77094', 'EVEN THE PLAYING FIELD. Please don''t reply to this email- inbox isn''t monitored. Use the form on our site: \n\n http://www.CrushYourCompetition.com \n\n  Do you mysteriously get bad reviews and or complaints written about your business? The sad fact is that your competition could be trashing your reputation. Google is giving high rank to complaint and review sites. Now you can even the playing field. We will post negative information you have on your competition. We post from anonymous IP addresses. We post to high ranking Complaint, Review or Blog sites. We have many years of experience in the Reputation business. We are very skilled at getting the content to the front page of Google. It is not illegal to post true information about your competition. Politicians run Negative ads all the time.  \n\n http://www.CrushYourCompetition.com'),
('9223372036854775807', 'Shark IM', 'Shark IM', 'noreply@sharkim.com', 'Singapore', 'Singapore', 'SG', 12345, '12345', 'Forums are a gold mine when it comes to niche marketing. A large number of people interested in the same topic proactively absorb & participate in everything they read on a forum. \n\nhttp://www.sharkim.com/forum-marketing.php\n\nWe will post about your website on forums related to your website. You can provide the forum(s) to post on, or we will find relevant forums at no extra charge. We will place your website''s URL and desired anchor text in the signature, which has a tremendous SEO benefit. We will also insert directly a link to your website in at least 5 percent of posts ordered. 100percent Manual service by native English speakers who will thoroughly research the niche & make contributory (while subtly promoting your site) posts to the target forum.\n\nhttp://www.sharkim.com/forum-marketing.php\n\nIf you are looking for a reliable forum posting service that delivers punctually, can take on bulk orders & most importantly; employs only native English speakers- then look no further\nhttp://www.sharkim.com/forum-marketing.php\n\nOur motto is that a happy customer is a repeat customer.'),
('131993407750854', 'Douglas', 'Brodman', 'Dbrodman@avitran.com', 'PO Box 3622', 'Cottonwood', 'AZ', 86326, '928-284-4222', 'Services Requested... Test Test Test'),
('174336401850884601', 'Mikkalajnabm', 'MikkalajnaxmXJ', 'mikkajalna89@gmail.com', 'Street Address', 'City', 'State', 123456, '123456', 'Youre so cool! I dont suppose Ive read anything like this before. So nice to search out somebody with some unique ideas on this subject. realy thanks for starting this up. this website is something that''s wanted on the web, somebody with a little originality. helpful job for bringing one thing new to the internet! <a > Full Article</a> I was just looking for this info for a while. After six hours of continuous Googleing, at last I got it in your web site. I wonder what''s the lack of Google strategy that do not rank this type of informative websites in top of the list. Generally the top sites are full of garbage. One thing I''ve noticed is the fact that there are plenty of common myths regarding the banking institutions intentions when talking about foreclosure. One misconception in particular is the bank needs to have your house. Your banker wants your money, not your own home. They want the funds they gave you together with interest. Averting the bank is only going to draw some sort of foreclosed summary. Thanks for your publication. Youre so cool! I dont suppose Ive read anything like this before. So good to find any individual with some original ideas on this subject. realy thanks for beginning this up. this website is something that is wanted on the web, someone with just a little originality. useful job for bringing something new to the internet! <a > http://passhairdrugtest.com</a> Do you mind if I quote a couple of your posts as long as I provide credit and sources back to your blog? My website is in the very same niche as yours and my visitors would really benefit from some of the information you present here. Please let me know if this ok with you. Thanks! I have observed that over the course of constructing a relationship with real estate owners, you''ll be able to come to understand that, in every real estate exchange, a percentage is paid. Eventually, FSBO sellers do not "save" the commission. Rather, they struggle to earn the commission simply by doing an agent''s occupation. In completing this task, they shell out their money as well as time to conduct, as best they could, the duties of an real estate agent. Those duties include disclosing the home via marketing, representing the home to all buyers, building a sense of buyer emergency in order to induce an offer, arranging home inspections, taking on qualification assessments with the loan company, supervising maintenance tasks, and assisting the closing of the deal.'),
('1392826824508', 'MuscleGurlgg', 'MuscleGurlkfIS', 'pakkaajalna89@gmail.com', 'Street Address', 'City', 'State', 123456, '123456', 'Very efficiently written information. It will be beneficial to everyone who employess it, including me. Keep doing what you are doing - can''r wait to read more posts. <a >muscle building workouts for men</a> \n \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a> \n<a >muscle building workouts for men</a>'),
('13', 'Jason', 'Shultz', 'jasshultz@gmail.com', '960 S 550 E', 'A7', 'Utah', 84015, '8019465020', 'test and more testing.'),
('15', 'Jason', 'Shultz', 'jasshultz@gmail.com', '960 S 550 E', 'A7', 'Utah', 84015, '8019465020', 'test and more testing. once more.'),
('7', 'Jason', 'Shultz', 'jasshultz@gmail.com', '960 S 550 E', 'A7', 'Utah', 84015, '8019465020', 'testing one more time'),
('10', 'Jason', 'Shultz', 'jasshultz@gmail.com', '960 S 550 E', 'A7', 'Utah', 84015, '8019465020', 'test'),
('14', 'David', 'Martin', 'DAVID@PERMIANHOMES.COM', '7311 Fox River Rdg', 'Odessa', 'TX', 79765, '4321917', 'This is a test, please respond'),
('12', 'David', 'Martin', 'DAVID@PERMIANHOMES.COM', '7311 Fox River Rdg', 'Odessa', 'TX', 79765, '4321917', 'This is a test, please respond'),
('5130ecb4dcec6', 'philip', 'chavarria', 'phillchava@gmail.com', '225 pecan place', 'odessa', 'tx', 79764, '432-978-6655', 'Do you have floor plans between 160 to 180 thousand. if you can send them to me please or call for more information\n'),
('512b18f5700ab', '', '', '', '', '', '', 0, '', ''),
('51286e528a826', '', '', '', '', '', '', 0, '', ''),
('512a3dcf8305c', 'Derek', 'Smith', 'D_smith818@yahoo.com', '', '', '', 0, '', 'We would like to build a home, looking for the right builder and location. '),
('5136007f299e1', 'Kendall', 'Kidd', '', '3408 Seguin', 'Odessa', 'TX', 79765, '432-352-5711', 'The Water Line for our ice line looks like it is leaking.  Please give me a call or Call Johnny Kidd at 432-230-6692'),
('513678242c057', 'Nicole', 'Cox', 'nicpey@yahoo.com', '7310 Raphael', 'Odessa', 'TX', 79765, '9078887445', 'unfinished hanging poles in the laundry room (the wood things to put the poles in are there, unfinished without poles),still missing two closet poles in brennans room (middle front).no one has contacted me to come look at the wood floor damaged when we moved in.  i have talked to Emil and Dave reguarding these issues.  thanks a bunch, Nicole'),
('513e403dc9973', '', '', '', '', '', '', 0, '', ''),
('5151fe4c12530', 'Gina', 'Duerme', 'ginaduerme@yahoo.com', '7228 Manford Lane', 'Odessa', 'TX', 79765, '432 5990868', '\nMarch 26, 2013\n\nDear Sir/Madam,\n\nThere are shingles in my roof which has been missing, if you can send somebody to have a look at it and can fix it, Please...\n\nThank you so much.\n\nSincerely,\n\nGina Duerme\n7228 Manford Ln'),
('515364dcb21c3', 'Steve', 'De Long', 'ironlandstone@aol.com', '509 4th Street NW', 'Little Falls', 'MN', 56345, '218-866-0582', '\nIron Land Stone Company \n\nIron Land Stone Company has been in the business of stone countertop supplies since 2000. We started out on the Minnesota Iron Range, marketing the stone products from there, while creating great supplier partnerships with other high quality dimensional stone producers. \n\nWe ship by container direct to you or to our facility at fantastic savings, stone countertops, tiles, sinks, baths & custom fabricated stone building products. You can order from one countertop to a large commercial project. Our installation is at a very reasonable cost, or you can install yourself. Granites from Mol Granitos Brazil, fabricated perfectly into beautiful countertops and tiles that are ready to be installed at your site from your plan specs. Our Brazilian Granite is quarried/fabricated in Brazil, not China.\n\n We Install Nationwide \n\nContacts: Steve De Long/218-866-0582 \n\nhttp://www.ironlandstone.com/\n\nironlandstone@aol.com \n\nCompanies that have been supplied: New Age Granite & Marble, KLZ, Custom Granite Interiors, Couture Surfaces, Lousiana Granite, Marble Valley Stone, New York Stone, Silkwoods, Ultimate Granite and Marble\n\nIron Land Stone –( 218-866-0582) - 509 4th Street NW, Little Falls, MN 56345 ironlandstone@aol.com USA Sales COO Sergio Sarteretto- +441622683936 land line, +447521163654 cell. sergio.sartoretto@gmail.com International Sales COO UK Mol Granitos - +553332412228 molgranitos@molgranitos.com.br Contact -Sergio Vinhal – Brazil CEO '),
('5155260d90b65', '', '', '', '', '', '', 0, '', ''),
('51558b4e72296', '', '', '', '', '', '', 0, '', ''),
('51558b4f7f732', '', '', '', '', '', '', 0, '', ''),
('51571c656a73a', 'zkoeunxxdu', 'zkoeunxxdu', 'wgmvwc@ulmogs.com', 'UWEtiPhoTkIaAMk', 'xkSgIvVmRsqiUxDxR', 'KFysRGrolV', 0, 'QENGLOiJwjxHVqt', 'evWuj5  <a href="http://blgokszwjdri.com/">blgokszwjdri</a>, [url=http://lhtbvtyiqwev.com/]lhtbvtyiqwev[/url], [link=http://rlwjjvkccjjs.com/]rlwjjvkccjjs[/link], http://retfrglapfiu.com/'),
('515841808497c', 'jfzxoljkv', 'jfzxoljkv', 'hssppg@gnteoq.com', 'ntAqimmaReEeE', 'WxMwZcNihWA', 'gMwZkjXowbZOx', 0, 'UidJCpSriwywTtH', 'yKBdl1  <a href="http://uqprrsrqbgjt.com/">uqprrsrqbgjt</a>, [url=http://annlqlegxgpp.com/]annlqlegxgpp[/url], [link=http://vnwbngvynlqq.com/]vnwbngvynlqq[/link], http://uruagydjcdzu.com/'),
('515afce0970d0', 'usdrvwqhdg', 'usdrvwqhdg', 'xusicn@lmqyky.com', 'jTMoOKqIzivbWHBGqPY', 'IycpjlsnGgsoIRgbQna', 'GNCTEXTlWdBkhFj', 0, 'ditWwdXedZfgQGm', 'a9KQa6  <a href="http://vbbsdjgfwjqo.com/">vbbsdjgfwjqo</a>, [url=http://jvkdlqtlfgkl.com/]jvkdlqtlfgkl[/url], [link=http://wfswncmphnhq.com/]wfswncmphnhq[/link], http://caxkxzdqsbju.com/'),
('515b789d8ae4a', 'Aaron ', 'Grado', 'amgrado@yahoo.com', '2417 Beechwood', 'Odessa', 'Tx', 79762, '4322586242', 'Hello,\n\nI am needing more info on what the steps and processes is on how to get qualified to purchase a home through your company.\n\nThanks,\nAaron Grado'),
('516370c6a40c1', 'Midhun', 'Midhun', 'burnch2@centrahealth.com', 'yPHzMkjhuTZwloMQqYD', 'xjLbNVmcGo', 'WiHVhGUXtV', 0, 'eHLhWAdOBkW', 'Issues regarding fraud and idteinty theft are on the rise. For this reason more businesses are ensuring that their documents are permanently destroyed by using a paper shredding service. It is not just businesses using paper shredding services but also individuals with sensitive documents, governments, research companies, and more. A quality paper shredding service will ensure that documents are permanently destroyed.'),
('51694abce2eaa', 'http://yvcostjg', 'http://yvcostjg', 'matwzg@bdnckx.com', 'http://yvcostjgopzo.com/', 'New York', 'NY', 87125, '47039967667', 'PAvaSi  <a href="http://bjgpgchsoptj.com/">bjgpgchsoptj</a>, [url=http://mvfvxebxajoi.com/]mvfvxebxajoi[/url], [link=http://kekbjhwqamqw.com/]kekbjhwqamqw[/link], http://utcpllcwoayz.com/'),
('516c7a1cbdaff', 'ohztdlmwvt', 'yCKBrLXPknl', 'rkwuhb@stokku.com', 'MUINnZsKzyyizQg', 'New York', 'NY', 51338, '94335949108', 'UfRm2h  <a href="http://crxkvjandiyq.com/">crxkvjandiyq</a>, [url=http://jfahmknwcmtp.com/]jfahmknwcmtp[/url], [link=http://qxsbavolmxth.com/]qxsbavolmxth[/link], http://ayungbxjokmf.com/'),
('516f2f2728976', 'Misty', 'Holloway', 'mimiholloway@bellsouth.net', '7309 Donatello', 'Odessa', 'Tx', 79765, '904-838-5380', 'The jets on my jacuzzi tub in the mster bathroom no longer turn since there was a power outage about 2 weeks ago.  My air conditionar is making a squeeling noice the entire time it is on. My dishwasher comes out of its space under the kitchen counter each time I open the dishwasher door.  Also, on the day of the walk thru the construction workers were making final touches to my hardwood flooring in my living area.  They glued down a part of the wood flooring but in doing so they dripped the glue in several spots in my entry way and on the flooring.  I have made many attempt to remove the glue but have been unsucessful.'),
('516f31a70551b', 'Misty', 'Holloway', 'mimiholloway@bellsouth.net', '7309 Donatello', 'Odessa', 'Tx', 79765, '904-838-5380', 'The bolt lock for my front entry door no longer fits in the framing possibly due to the settling of the home.  It is very hard for me to lock my front door.'),
('5172605ce2613', '', '', '', '', '', '', 0, '', ''),
('517491d9a4814', '', '', '', '', '', '', 0, '', ''),
('5174a525ebb09', '', '', '', '', '', '', 0, '', ''),
('51754ab0ae3fc', 'Anh', 'Tran', 'anttran2@gmail.com', '7209 Raphael St', 'Odessa', 'TX', 79765, '4325999070', 'One of the Kitchen breaker keeps shutting off when having two small kitchen appliance running at the same time.\nThe garage door lock is a little rough to slide the key in, all other door locks work great.\n'),
('517b5c5408e60', '', '', '', '', '', '', 0, '', ''),
('5180a9ce6b598', 'lnupggjpo', 'iLXvdpsSPwAWqDy', 'pcpakp@qbcojs.com', 'yFKuNtWlXuEaWzeGfzy', 'New York', 'NY', 96895, '99267886553', 'KtvwDJ  <a href="http://blnnkabjwwdr.com/">blnnkabjwwdr</a>, [url=http://ofgtdbykagzc.com/]ofgtdbykagzc[/url], [link=http://vprzkoqztppk.com/]vprzkoqztppk[/link], http://kgcpweeyaazc.com/'),
('518c65c394980', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale', 'Odessa', 'TX', 79765, '432-271-8000', '1. Overcut at dining/family room a/c vent still present\n\n2. Tree support in front yard not secured\n\n3. Floor pops throughout- 2nd, 4th, 8th, 9th, 13th, landing near 15th step, loose boarding in hall, loose boarding in hall to master, pop at hall to master, pop at W wall near plug in master, floor pop persists at 2ndary bdrm near window\n\n4. Adjust master door-rubs jamb\n\n5. Patch brick ledge at slab below window, brick ledge at corner of slab/flatwork, patch brick ledge at north wall left of patio door\n\n6. Paint on tile in front of dishwasher and sink in kitchen. '),
('51963c9404837', 'DANIEL', 'BRIGHT', 'dannybrigh@hotmail.com', '7201 Giotto st', 'odessa', 'tx', 79765, '4325530646', 'Cement truck hit my fence with his shoot yesterday. I talked to guys pouring cement on Bellina street and they said the cement truck hit he fence while going through the alley. Need to get this fixed soon so I can leave m dogs in the backyard. \n\nThanks \nDaniel'),
('519990757f230', '', '', '', '', '', '', 0, '', ''),
('51a17a5c67813', 'Christian', 'Valera', 'kinino@hotmail.com', '6500 Easridge Rd #2', 'Odessa', 'Texas', 79762, '4355305144', 'I''d like to have more information on the 4224 E. Everglade property.'),
('51a9d0040057c', '', '', '', '', '', '', 0, '', ''),
('51b2275cdd62d', 'Sharon', 'Allison', 'allisost2004@yahoo.com', '4315 Esmond Drive #2203', 'Odessa', 'TX', 79762, '432-235-8633', 'Have heard great things about your homes and looked at them.  I am a teacher, but single and teachers don''t have the highest salaries.  I recently got pre-qualified, but really wouldn''t want to buy when it is a sellers market.  When is someone going to build a community of say Town homes for good people like me that want a good standard of living but aren''t rich?  I think there are many single, professional people out there that want a quality and sophisticated place to live, not to mention neighborhood.  Will you guys consider building a community of classy town homes in North Midland to accommodate this??'),
('51b814cf87633', '', '', '', '', '', '', 0, '', ''),
('51ba3486cd9f5', 'Terri', 'Lingle', 'terri.aries@gmail.com', '16080 N Windsor Ave.', 'Gardendale', 'Texas', 79758, '(682) 521-5628', 'Hi, I am looking to buy a new home in the Midland area. I am wondering if it would be possible to set up an appointment time to due a walk through of a model home, I am especially interested in your Erminia model.\n\nI am looking forward to speaking back with you. Thank you for your time.\n\n\n'),
('51be01a360004', 'Tim', 'Jelke', 'jelktim@gmail.com', '7222 Manford Lane ', 'Odessa', 'Tx', 79765, '2088512285', 'Per-fa tape in living room is separating and needs repaired.'),
('51c097eb8843a', 'Bill Wiz', 'Bill Wiz', 'bill@abodesense.com', '1(810)545-6085', 'Florida', 'US', 123456, '123456', 'Hi, I''m Bill Wiz, chief architect for Abodesense Inc. \n \nI would like to see if want help selling more single family house plans. \n \nhttp://abodesense.com/developers/best-selling-house-plans-for-builders \n \n \nFor over 30 years I have designed best-selling home plans that have \nhelped builders sell out multiple developements. I can give you the \nsame plans(modified to your needs) at a fraction of their cost. \n \nMy company has our stock best-seller plans based on a highly \ncustomizable open plan. Using these plans can save your time, \nmoney, and increase your sales. These plans have been designed in \nmy award winning studio over the course of 30 years and have resulted \n \nin thousands of unit sales in multiple sold-out developments. In \nshort, they are time-tested and proven to sell. In addition to \nthis, all our plans are ready to go now - in your choice of blueprints, \nAutocad DWG, or digital PDF. \n \nOur open plan can also be modified to your exact specifications \nwhether you require changes to the interior, exterior, or even the \nplan style. This can all be done in as little as 2 weeks. \n \nThese plans are the flexible and preferable solution compared to \ntypical stock plan options. Whether you use them to increase your \nprofits, improve loan approval prospects, or simply satisfy your \nclients better, our best sellers and their solid sales records will \nfulfill your needs. \n \nIf you want to know more, give me a call now at 1(810)545-6085 or \ntake a look at these best sellers at: \n \nhttp://abodesense.com/developers/best-selling-house-plans-for-builders \n \n \nI look forward to hearing from you, \nBill Wiz \nArchitect and Founder, Abodesense Inc. \n1(810)545-6085'),
('51c476583fe62', 'Gary ', 'Harmon', 'harmongc@cableone.net', '7302 Giotto Street', 'Odessa', 'Texas', 79765, '432-349-3948', 'Brendon, could you please order me a back door glass/blinds insert. My Outside glass has shattered and needs to be replaced. If you can please find out cost so I wont be shocked and a delivery date if possible.\nThanks \nGary Harmon '),
('51ca7a8b99404', '', '', '', '', '', '', 0, '', ''),
('51d006fd79215', '', '', '', '', '', '', 0, '', ''),
('51d079eb0b003', '', '', '', '', '', '', 0, '', ''),
('51d4c75c27c99', '', '', '', '', '', '', 0, '', ''),
('51da5f48163fc', 'ronny', 'gXEIsIQTHsyDxoG', 'dondy228@hotmail.com', 'QxHbvQYaWJE', 'New York', 'NY', 43220, '38804535579', 'ICWF5j http://www.c1dOvW6eef5JOp8ApWjKQy5RO5mLafkc.com'),
('51dc72470bec2', 'Peter', 'Peter Lands', 'peter@creditwiseadvice.com', 'http://creditwiseadvice.com/', 'Florida', 'US', 123456, '123456', 'Hi, \n \nAn online form was completed requesting the information provided in this email some time ago, but a contact name was not given. I kindly ask that you forward this to your business owner. \n \nWe do small business loans of up to $250,000 without the requirement of any collateral, assets or personal guarantees. In fact, with a simple FREE 1 page application you can find out exactly how much your business can obtain. The loan is also considered non-restrictive which means once the loan is issued to you, you may spend it as you wish to help your business grow or expand. Since the lender does not perform any credit checks, applying for a loan will not be reported to the credit bureaus as an inquiry. If your practice has been in business for at least a year, the likelihood that you will receive at least 100k WITH NO PERSONAL GUARANTEE is 98%! \n \nCLICK HERE TO FILL OUT THE FREE 1 PAGE APPLICATION: http://creditwiseadvice.com/?id=BDT67700T01 \n \n*A credit check will not be placed on your credit report if you are declined for the loan. No one will know you applied for the loan since you already pre-qualify and no personal credit information is requested. Since Ive had no communication with you, you will not receive any further email alerts. \n \nSincerely yours \nPeter Lands \nCustomer relations \nhttp://creditwiseadvice.com/'),
('51df7e58ddbe8', 'MELISSA ', 'GLORIA', 'MELYCARRASCO@YMAIL.COM', '1501 W KENTUCKY AVE', 'MIDLAND', 'TEXAS', 79701, '4322505510', 'MY HUSBAND AND I ARE LOOKING FOR A HOME AROUND THE PERMIAN BASIN. WE WOULD LIKE SOME MORE INFORMATION ON HOW WE CAN BUY A HOME. THANK YOU!\n\nSINCERELY, \nMELISSA GLORIA'),
('51e194f86baae', 'Jamie', 'Garza', 'Locoflamingos@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '4322087034', 'Double oven will not work when selecting any cooking or cleaning. Only said feature not available '),
('51e4010cb7a9a', 'Jamie', 'Garza', 'Jamie_garza@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79764, '432', ''),
('51e402128d5a5', 'Jamie', 'Garza', 'Jamie_garza@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79764, '4326340508', 'We got the oven reset and it is now working. But we used the down stairs guest bath tub for the first time last night and the toilet does not drain well and almost overflows when flushed. The bath tub also drains abnormally slow and causes bubbling in the toilet releasing Sewer gas in to the room.'),
('51e6bf99353d5', 'Mackenzie', 'Lewis', 'mackenzielewis15@gmail.com', '7232 Manford Lane', 'Odessa', 'Texas', 79765, '4328534234', 'I called yesterday (7-17-13) and talked to whoever answered as the customer service representative; I live in one of the townhomes built on Manford lane. In a windstorm at the bigging of the year I lost a couple of shingles in the roof that I am trying to get replaced. The person I talked to said that he would call the roofers to see if there were any extra shingles for my roof, and that he would email me the information. I haven''t heard back and I would like to know. I want to have my roof fixed before the end of next week. Please call or email back with information. I really appreciate it!\n\nThanks, Mackenzie'),
('51e99ceebfec5', 'Cierra', 'Adams', 'cadams761@gmail.com', '5501 Maple Dr.', 'Kansas City, MO', 'Missouri', 64138, '(913) 956-0114', 'I saw your Renissance Estates homes online. Do you have homes available for purchase, or do we need to build? If we build, how long does it take?'),
('51ebdc9ddab0e', 'Vinay', 'Shet', 'drvinayshet@gmail.com', '2818 W Loop 250 N, Apt N208', 'Midland ', 'Tx', 79705, '4325593921', 'Hi,\n\n I am looking for a single family house in Odessa,Texas. I was going through your website and would like to get more information about the houses available.\nLooking forward to hearing from you.\n\nThank you,\nVinay Shet\n'),
('51eefa2bbb2f9', 'Jamie', 'Garza', 'Jamie_garza@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '634-0508', 'After the 3rdtrip the plumber told us the pipe feeding the city side of the sewer was collapsed. a call was put in to the city. I understand that until the city resolves the issue in a timeframe only the city could get away with. In the mean time the entire downstairs is not draining. Y''all''s plumber left the pipe open outside the fence in hope of buying time until the city does ther work but that is not working since we can no longer shower wash dishes bathe us or our kids with out the pipes completely backing up. Please let us know what to do in the time between now and the city repairs. '),
('51f13bc0d4b93', 'Chris', 'Leibli', 'cleibli@hotmail.com', '10009 NE 130th Lane', 'Kirkland', 'WA', 98034, '', 'I am looking to relocate to Midland Texas in a few months and was wondering when houses were going to start being built in the new Daybreak Estates subdivision in Midland and what a tyipcal timeline is for getting a house built.\n\nThanks!'),
('51f5fbffa7f88', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln ', 'Odessa', 'TX', 79765, '4322718000', '1. Step 3 and 8 w significant floor pop. 2. Loose board by master door. \n3. Garage door sensors off and prevent door from closing after repeated adjustments. 4. Decreased airflow on first floor ac vents 5. Ceiling fan in living area off balance. '),
('51fbbe0697806', '', '', '', '', '', '', 0, '', ''),
('5202e84fc0a95', 'Katrena', 'Williams', 'tretre22@yahoo.com', '4400 Andrews Hwy', 'Midland', 'Texas', 79703, '432-413-2326', 'My husband and I are just wanting some info on your homes. We would love to have a meeting to discuss building a home!'),
('5205084bcf61f', 'Autumn', 'Calkins', 'missabsmith@gmail.com', '5003 SCR 1137', 'Midland', 'TX', 79706, '989-745-3547', 'My husband and I are interested in the home-building process. We have never owned a home before, therefore, we are new to the entire processs. We currently live in Midland, but work in Odessa and are intersted in your lots there. Please contact via e-mail if you can, reaching me by telephone can be hard. Thank you!'),
('52056133b1637', 'Alessandro ', 'Vasquez', 'cwbyali@gmail.com', '3501 Camarie Ave', 'Midland', 'TX', 79707, '4326312483', 'Hello,\n\nI wanted to inquire about the recent sign and land put up on Hwy 349 north of Loop 250 here in Midland. Me and my wife currently own a home but have been extremely interested in getting a new home built and this location that is posted seems to be great. How can we get more information about pricing of the homes in this area and when building will begin? Are these custom homes or model homes? We are interested either way.\n\nThanks for your time,\n\nAli and Vanessa Vasquez'),
('520696681dff6', 'Stephanie', 'Montoya', 'Steph_jal@yahoo.com', '1030 spur ave', 'Odessa', 'Texas', 79761, '4324888774', 'We are lookin into a new home! We have a home in odessa but need to upgrade on the space. We saw your Fabianna model home in odessa and we really liked it. '),
('520e7d0b914a4', 'Jamie', 'Garza', 'Jamie_garza@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '4326340508', 'The guest bath still backing up. We have plunged it several times and within a  few days it is still having issues draining since our sewer tap was crushed. The rest of the houseis running great '),
('520eb1a676977', '', '', '', '', '', '', 0, '', ''),
('520ed70413420', 'Light Fixture', '', '', '', '', '', 0, '', 'Greetings:\n\nGreg Conner  7308 Giotto\n\nDining Room light fixture just popped like a bulb going out, then it will not work at all.'),
('520ed740b0a54', '7308 Giotto', '', '', '', '', '', 0, '', 'For light fixture\n\nHome 614-5759\nGreg 934-1782\nHeather 934-1768'),
('5217568368af4', 'Missing Grout', 'Nail pops', 'Leaking faucit', '', '', '', 0, '', 'Hello,\n\n'),
('521756840f231', 'Missing Grout', 'Nail pops', 'Leaking faucit', '', '', '', 0, '', 'Hello,\n\n'),
('5217572ecab13', 'nail pop', 'leaking faucit', 'missing grout', '', '', '', 0, '', 'Hello,\nMy name is Armando Gonzales at 7305 Belllini St. I would like to put in a warranty request for some missing grout in  my floor tiles and a few nail pops. I also have a sink faucit in the master bath that i can not get to stop leaking. You can contact me at 230-7655.\n\nThanks.'),
('521ae330329d0', '', '', '', '', '', '', 0, '', ''),
('521f9def1b75a', 'Emily', 'Burgess', 'etburgess3@gmail.com', '10908 E County Rd 105', 'Midland', 'Texas', 79706, '432-553-8531', 'I am writing to inquire about any openings you may have in your office. I am interested in a Project Manager or Construction Manager position. Previously I was a Project Manager for Ed Froehling Builder, Inc. in College Station, where I oversaw the construction process of many residential homes from planning to completion. I worked with customers, vendors, and contractors daily to customize projects per customer specification, schedule process, monitor progress, and ensure completion date was met.\nMy educational background at Texas A&M University has provided me with other skills and knowledge that would be beneficial. In particular, I am familiar with computer aided drafting programs for both engineering and construction, computer information systems, manufacturer/distributor relations, logistics, quality assessment, as well as many others that have given me a solid background and I am very interested in the construction industry.\n\nPlease feel free to contact me for more information and I can submit a resume. I look forward to hearing from you.\n\nBest Regards,\nEmily Burgess\n432-553-8531'),
('522578958b7c0', 'Ian', 'TGEHyKwCaBy', 'cooler111@yahoo.com', 'qUxmmIrdLBzFWix', 'New York', 'NY', 40422, '11676500854', 'A book of First Class stamps <a href=" http://angelicakitchen.com/accutaneonline/ ">accutane private prescription uk</a>  OTC treatment may be\n <a href=" http://hunterdk.com/products-2/ ">buy clomid no rx</a>  response. Table 1 codes are eligibility codes. There are no existing comparable NCPDP\n <a href=" http://www.idleworm.com/blog/clomidonline/ ">purchase clomid online</a>  Page 20 of 25\n '),
('522578966ceda', 'Jackson', 'hefvaFspfuGDtT', 'unlove@gmail.com', 'YHWSEPuhfzbdIiEAGld', 'New York', 'NY', 46021, '51734711334', 'Thanks for calling <a href=" http://www.creamogalloway.co.uk/trade ">cheap amitriptyline</a>  Adjust the focus of the object.\n <a href=" http://www.tribeoftwopress.com/availablebooks.html ">retin a cheap canada</a>  dispensed is a product supply\n <a href=" http://www.albcat.com/links/ ">Phenergan Syrup</a>  an $8.00 cognitive fee. The cognitive fee can be billed to TELUS Health Solutions using PIN number 19000001.\n <a href=" http://www.idleworm.com/blog/clomidonline/ ">50 mg versus 100 mg clomid</a>  * Â¼lt cooking oil\n '),
('5225789759947', 'Dominic', 'YECjQOECIBKcXcZ', 'goodboy@yahoo.com', 'ibzthulFwugQOm', 'New York', 'NY', 29217, '95192399156', 'Could I ask who''s calling? <a href=" http://www.albcat.com/links/ ">Phenergan 12.5 Mg</a>  Out of State license\n <a href=" http://hunterdk.com/products-2/ ">liquid clomid buy</a>  records as well as the cancellation of the original claim payment and the re-pricing of\n <a href=" http://www.idleworm.com/blog/clomidonline/ ">when will your doctor prescribe clomid</a>  early, sit close to an exit. When leaving do so in a quick and non-disruptive manner. Realize that people around you, including the instructor, are aware of what you do. If you think your time\n <a href=" http://postnatalexercise.co.uk/information-for-mothers/ ">diflucan generic brand</a>  DAW 5: Brand Product selected as generic\n '),
('522578982e76e', 'Sophie', 'AQLiNjouCINQOI', 'friend35@hotmail.com', 'mayDXTuxsqUr', 'New York', 'NY', 33979, '85509955030', 'We need someone with qualifications <a href=" http://pposchool.com/classes/ ">buy desyrel online</a>  significant sometimes instructor instructor must provide performs within no intervention;\n <a href=" http://angelicakitchen.com/accutaneonline/ ">price accutane without insurance</a>  23. I had direct interaction with diverse patient populations Enter 1 ± 5 Score - - - - >\n <a href=" http://sdccpa.com/professionals ">Proventil Aerosol</a>  Medicare Managed Care Organization (MCO). (308-C8)\n '),
('5225789920374', 'Lily', 'TrhqURhMRkB', 'heyjew@msn.com', 'oyWoLLQAtjBprvoM', 'New York', 'NY', 39177, '48571599712', 'What university do you go to? <a href=" http://www.creamogalloway.co.uk/trade ">buy amitriptyline</a>  6. You may need to contact the doctor to increase the days supply. Upon receiving approval from the physician, adjust the\n <a href=" http://pposchool.com/classes/ ">desyrel street price</a>  04 3 Overage Dependent Child of the Primary Cardholder: is still eligible for coverage because\n <a href=" http://angelicakitchen.com/accutaneonline/ ">how do i get a prescription for accutane</a>  continued continued professional continued Always committed to\n <a href=" http://postnatalexercise.co.uk/information-for-mothers/ ">diflucan over the counter usa</a>  (Nurse Practitioner) be equal to 08 when submitting a license\n '),
('522702e4d8f4c', '', '', '', '', '', '', 0, '', ''),
('522a43e7a4dbf', '', '', '', '', '', '', 0, '', 'Greetings, \n\nMy name is Carly and I am an assistant editor for Builder and Developer magazine. I am hoping to speak with someone who handles press inquiries or media relations regarding an editorial feature for Permian Homes. If this is of interest and you would like to discuss it further please contact me at your earliest convenience either via email at ccaumiant@penpubinc.com or by phone at (949) 631-0308. \n\nMuch Thanks,\nCarly'),
('522e47244a680', 'Taylor', 'Ward', 'Tward2256@yahoo.com', '3600 w loop 250 n apt 2093', 'Midland', 'Texas', 79707, '830-456-2256', 'My wife and I recently moved to Midland and are interested in the new daybreak neighborhood going in across from the midland country club. Please call or email with additional information at your convenience.\n\nThanks,\n\nTaylor ward'),
('5239b987e6a45', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '432-271-8000', 'I had several requests ~6 weeks ago for which only one was attended to (garage door).  \nJust wondering what happened with the rest.\n\nThank you'),
('5239e4e3ef3a2', 'inlatp', 'inlatp', 'unsyxd@jkonsx.com', 'tkHRoscmfzkpIj', 'New York', 'NY', 23756, '36400987758', 'LFzXsJ  <a href="http://esmdpzyfwgow.com/">esmdpzyfwgow</a>, [url=http://cgtnoqvovfzu.com/]cgtnoqvovfzu[/url], [link=http://httzuyqmxvsv.com/]httzuyqmxvsv[/link], http://csrhdophytgc.com/'),
('5239ebd08702d', 'Shelly Magness', '3300 Bastrop', '432-638-9665', '', '', '', 0, '', '9/17/13\nYesterday, my stove popped real loud and then it smelt like electrical burning and then went completely out. The stove nor oven work.\nI called Whirlpool and the lady told me that builders have an extra year warranty on the appliances and that I need to go through Permian Homes.\nPlease have someone to call me or come by my home.\nThank you,  Shelly Magness'),
('524326da37cd9', 'Matthew', 'Matthew Hill', 'matt@gosunwise.com', '239-356-1202', 'Florida', 'US', 123456, '123456', 'Subject: Re:No personal guarantee, no credit business loans up to $250,000 \n \nhttp://gosunwise.com/?url=www.permianhomes.com&id=CPH002 \n \nSunWise Capital gives business loans of up to $250,000 without collateral requirements, assets or personal guarantees. \nWith our simple Free single-page application you can find out exactly how much your business can obtain. \n \nOur loans are also non-restrictive, which means once the loan is issued to you, you may spend it in ANY WAY your \nbusiness requires. We DO NOT perform any credit checks, and applying for a loan will not be reported to the credit \nbureaus as an inquiry. If your practice has been in business for at least a year, the likelihood that you will receive \nat least 100k With No Personal Guarantee is 98%! \n \nClick Here To Fill Out a Free 1 Page Application: http://gosunwise.com/?url=www.permianhomes.com&id=CPH002 \n \n*A credit check will NOT be placed on your credit report if you are declined for the loan. No one will know you applied \nfor the loan since you already pre-qualify and no personal credit information is requested. \n \nSincerely, \nMatthew Hill \nCustomer relations \nhttp://gosunwise.com/ \n \n \nrequest removal: http://remove.gosunwise.com/?url=www.permianhomes.com&id=CPH002'),
('524ae15815548', 'Sophia', 'hoNQpsgQoGXqKBg', 'gobiz@gmail.com', 'XnRwxJBbnfSBPJJU', 'New York', 'NY', 33234, '39667386710', 'Could I have an application form? <a href=" http://commonwealthcentre.com/about-us/ ">zyban prescriptin uk</a>  [IRIS.CLOSE] button on the wireless remote control toTELEWIDENEARFARWireless remote control\n <a href=" http://www.runningonclimate.com/about ">purchase voltaren</a>  Selects appropriate medication when filling a prescription. Meets Does\n <a href=" http://pizzagalleryandgrill.com/instagram/ ">generic acyclovir price</a>  people. Shawn, Chero, Kippy and Imani Woodin are in House 5. The Mamlins reside in Maua House 4, and Jill\n '),
('524ae159b3a8f', 'Liam', 'mlUwoabYQE', 'crazyfrog@hotmail.com', 'KFsWmDRLMEby', 'New York', 'NY', 56040, '69755038582', 'I''m happy very good site <a href=" http://www.hummingbirded.com/animals.html ">300 mg wellbutrin 100mg zoloft</a>  To install the LCD monitor (LM-5011N) availableLCD LCD monitor\n <a href=" http://www.geexmedia.com/mikes-cart-free-e-commerce-websites/ ">purchase abilify canada</a>  100 35 00240588 1. (Prior to September 1, 2008) If a\n <a href=" http://highqualityfurniture.com/htt-10crp-human-touch-massage-chair-recliner-by-interactive-health/ ">much does xenical cost canada</a>  three million dollars in direct costs have funded faculty and student exchange and the\n <a href=" http://pizzagalleryandgrill.com/instagram/ ">where to buy acyclovir in singapore</a>  compassion and desire to he lp them.\n '),
('524ae15ad377c', 'Lucas', 'pStQfCXnYB', 'john@hotmail.com', 'qhxDtsHCTYkcD', 'New York', 'NY', 81683, '97269109233', 'This is your employment contract <a href=" http://www.astrogallery.com/gemstones/ ">zoloft insomnia go away</a>  services, pharmacy benefit management, care management and behavioral health care\n <a href=" http://www.blackberry-france.com/a-propos/ ">zithromax 250 mg dosage</a>  SUBMIT 3 MONTHS NEXT 43\n <a href=" http://highqualityfurniture.com/htt-10crp-human-touch-massage-chair-recliner-by-interactive-health/ ">alli orlistat online bestellen</a>  Prescription/Service The Prescription Number is assigned by the pharmacy.\n <a href=" http://pizzagalleryandgrill.com/instagram/ ">acyclovir iv rxlist</a>  records number; prescribers to clarify and/or\n ');
INSERT INTO `contacts` (`uid`, `firstname`, `lastname`, `email`, `street`, `city`, `state`, `zip`, `telephone`, `message`) VALUES
('524ae15bd60c1', 'Plank', 'fpEzLjhhfMOBRho', 'deadman@gmail.com', 'DjvaFtEkaSzjAIUpuoA', 'New York', 'NY', 17870, '81235382582', 'I''m sorry, he''s  <a href=" http://commonwealthcentre.com/about-us/ ">hw much des zyban cst withut insurance</a>  703 * Invalid PIN 04 M/I Processor Control Number\n <a href=" http://www.astrogallery.com/gemstones/ ">zoloft pills blue</a>  ER = Drug Overuse\n <a href=" http://highqualityfurniture.com/htt-10crp-human-touch-massage-chair-recliner-by-interactive-health/ ">xenical orlistat 120mg online</a>  leaderâ??on-site in Kenya forms the cornerstone of its institutional commitment. The\n <a href=" http://pizzagalleryandgrill.com/instagram/ ">acyclovir online without a doctor</a>  member or leader of an inter-professional attitudes, habits, by being on time for all\n '),
('524ae15d29163', 'Maria', 'btxWPFjGnEhyYw', 'behappy@yahoo.com', 'fhscrkSZdrDH', 'New York', 'NY', 14563, '38963147867', 'Will I have to work on Saturdays? <a href=" http://commonwealthcentre.com/about-us/ ">zyban 150mg sr</a>  Section 4 - General Policies and Procedures\n <a href=" http://www.runningonclimate.com/about ">voltaren in canada</a>  pharmacy degree, under the guidance of an appointed faculty advisor, the student intern\n <a href=" http://www.blackberry-france.com/a-propos/ ">zithromax cheap overnight</a>  4. Retrospective /Prospective evaluations\n <a href=" http://pizzagalleryandgrill.com/instagram/ ">acyclovir 400 mg price comparison</a>  UT, P & C and DUR processing.\n '),
('524c4c0107071', 'Dave', 'Dave Morris', 'dave@gosunwise.com', '954-856-9702', 'Florida', 'US', 123456, '123456', 'SunWise Capital can give Your business a loan up to $10 Million without credit, collateral requirements, assets or personal guarantees. \n \nhttp://gosunwise.com/?url=www.permianhomes.com&id=CPH003 \n \nWith our simple, Free single-page application you can find out exactly how much you can get Fast. \n \nOur loans are also Non-Restrictive, which means once the loan is issued to you, you may spend it in Any Way your business requires. We DO NOT perform any credit checks, and applying for a loan will NOT be reported to the credit bureaus as an inquiry. If your practice has been in business for at least a year, the likelihood that you will receive at least 200k With No Personal Guarantee is 98%! If you have been in construction/contracting for at least 2 years, you are well on your way for $250K to $10 Million With No Personal Guarantee. \n \nClick Here To Fill Out a Free 1 Page Application: \n \nhttp://gosunwise.com/?url=www.permianhomes.com&id=CPH003 \n \n*A credit check will NOT be placed on your credit report if you are declined for the loan. No one will know you applied for the loan since you already pre-qualify and no personal credit information is requested. Many of these loans are time sensitive Federal programs, if you are at all interested Apply Now before they are gone. \n \nHave a nice day, \nDave Morris \nCustomer relations \nhttp://gosunwise.com/ \n \n \nunsubscribe here: \n \nhttp://remove.gosunwise.com/?url=www.permianhomes.com&id=CPH003'),
('5251cb7346d76', 'Jason', 'Killian', 'test@test.com', '1040 West Whipple Street, Suite 324', 'TEST CITY', 'Arizona', 86305, '8662988078', 'TEST FORM'),
('5251cbb8d2621', 'Jason', 'Killian', 'test@test.com', '1040 West Whipple Street, Suite 324', 'TEST CITY', 'Arizona', 86305, '8662988078', 'TEST FORM'),
('5252b1afb9760', 'David', 'Cook', 'dcook30@gmail.com', '19 Paisano Cir', 'Odessa', 'Texas', 79765, '432-296-9777', 'my house was too cold this morning'),
('52531fc43bb8d', 'Jamie', 'Garza', 'Locoflamingos@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '4326340508', 'Our front plug for our door swag was to be tied in to the switch with the Christmas light package. During the pre drywall walk in I made sure to remind y''all to attach it. I was re assured at other times this was done. We''ll I put up my door swag and found that this plug is not on the switch as it should be. We also had a tile that had a bubble type void in it crumble away and I''m not sure if a defect in the tile is covered or not. It''s under the bar against the wood for the cabinet.'),
('527fe461aebf6', 'anna', 'francisco', 'amtfmd@gmail.com', '3619 Gillespie Ln.', 'Odessa', 'TX', 79765, '5629125136', 'garage door not working. cord snapped and door cannot be opened. i have work tomorrow morning and cannot get my car out.'),
('52a236e7c1084', 'Jacob', 'Golden', 'jacobgolden91@yahoo.com', '3617 Gillespie', 'Odessa', 'Tx', 79762, '432-978-0966', 'The counter top on my Island is loose and it moves when you touch it.'),
('52e7f8ce20660', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Lynn', 'Odessa', 'TX', 79765, '4322718000', 'As previously requested... 1st floor ac/heating vents not emitting any air.'),
('53024b178a291', 'Jamie', 'Garza', 'Locoflamingos@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '4326340508', 'Sewer gas from master vanity from the time we moved in? Wall pops and tape bubbles in a few places. Grante countertop cracked by cook top. Guest bath down stairs has water damage from all the plumbing issues when we moved in. Edge of the cabinet under the bar fell off. Not damaged just wasn''t nailed in good.'),
('53077dbaa9940', 'Jamie', 'Garza', 'Locoflamingis@hotmail.com', '7215 Giotto', 'Odessa', 'Tx', 79765, '4326340508', 'This is my 2nd message for this request. I was not contacted last time after my message. We have wall pops in the master bath. Tape and bed sagging in master bath shower. Water damage on down stairs vanity from fludding caused by the plumbing issues when we moved in. Most of the down stairs windows will not shut correctly. The granite developed a crack by the cook top.  Sewer gas smell from the master bath vanity despite the fact it is used daily.'),
('530b7d814283c', 'David', 'Martinez', 'davidmn999@hotmail.com', '7710 Citronella ct', 'Tampa', 'FL', 33625, '8134749797', 'I would like an estimate to build a fourplex in Midland, TX. Also, if you guys take care of the whole process (permits, etc).\n\nThanks!'),
('530e723a57137', 'Taylor', 'Fields', '3300 SCR 1130', '3300 SCR 1130', 'Midland', 'TX', 79749, '4328942652', 'Was wondering if I could get some info about the new homes in Midland\n  Thanks, \n          Taylor Fields'),
('53162ac529b0c', 'Priscilla', 'Sanchez', 'pslaw1980@yahoo.com', '3608 Thomason Dr.', 'Midland', 'TX', 79703, '432-638-1387', 'I''m interested in receiving more information regarding the Daybreak Estate homes.  I would like to talk to someone about who you can refer to assist in improving my credit to increase my options when it comes to purchasing. \n\nThank you, \n\nPriscilla Sanchez'),
('531795ce8ff4a', 'SAMMY', 'RAMIREZ', 'ramirezsammy3@gmail.com', '406 s Tilden', 'Midland', 'Texas', 79701, '4322507042', 'IAM INTRESTED IN PURCHASING A HOME. IN MIDLAND.'),
('531e1149ab9fd', 'Tammie', 'Duggan', 'mysticus_tami@hotmail.com', '6032 N Greenway Ave', 'Odessa', 'Texas', 79764, '4324134376', 'Maybe you could pass this along. We are a company that does trim, crown, and installation of prefab cabinets looking for work in this area. \n\nPlease contact \nTammie Duggan @ 432-413-4376\nif this is something you would be interested in.'),
('53234d7a5be51', 'Vanna', 'White', 'macro37@msn.com', '19 Paisano Cir', 'Odessa', 'Tx', 79765, '432-362-3436', 'Hi, Im looking for somebody to build me a 4 bedroom yurt. Can you help me?'),
('5325bc53c62c0', 'Ryan', 'Petersen', 'wryanpetersen@gmail.com', '2818 W. Loop 250 North #I202', 'Midland', 'TX', 79705, '5122899988', 'I''m looking to build a new home and saw you guys were building in Midland.  I''m looking for a 3 to 4 bedroom, 1900 to 2200 sqft. home.  What is your build time in Daybreak Estates? What is your deposit requirements?'),
('53289b7b4b2e9', 'Jody', 'Martin', 'Macklynne@live.com', '3908 Crestgate', 'Midland', 'Tx', 79707, '4327700553', 'My wife and I are interested in one of your town home style homes. We would like to come and talk about the features that they offer and possible purchase. We currently live in midland but commute to Odessa daily.'),
('532c4b1f65714', 'jason', 'shultz', 'jasshultz@gmail.com', '960 s 550 e', 'clearfield', 'ut', 84015, '8017840224', 'test'),
('532c5cd0c7668', 'jason', 'shultz', 'jshultz@axis41.com', '960 s 550 e', 'clearfield', 'ut', 84015, '8017840224', 'test test'),
('532c5fad511dc', 'David', 'Martin', 'DAVID@PERMIANHOMES.COM', '7311 Fox River Rdg', 'Odess', 'Texas', 79768, '4321917', 'Test'),
('532d918490286', 'Karen', 'Roach', 'karen_bryant85@hotmail.com', '4307 Todd Drive', 'Midland', 'TX', 79705, '4324255457', 'We are looking for a new 3/4 bedroom home.  We like the homes on Kinghorn Drive.  Wondering if any are available and if you are building any more in that area?  We want to live in an new area where all of the garages are in the back.'),
('5330b5027a010', 'Cody', 'Hisaw', 'Hisawc@wpi.com', '8102 Shreveport dr', 'Amarillo', 'Tx', 79118, '432-934-5822', 'Hello,\n\nI am inquiring on the house at 7105 Kinghorn and any other house that may be available in the next few months I will be in Odessa this coming weekend to look around. What is needed to secure a contract ie. Payment, Credit, and is Permian homes willing to enter a contract contingent on another house sale. Please send me Floor plans and anything that may become available currently or up to six months out.\n\nThank you!'),
('53323c7e30ffc', 'Miranda', 'Leatherman', 'rlml10210@gmail.com', '1015 Tarleton St', 'Midland', 'TX', 79703, '4322968330', 'We are looking to build here in Midland.  A friend of ours, the Lowrances, just had a home built by y''all and love it!  So, we are contacting you to see about coming to check out the plans, the lots, & get started!!  I look forward to hearing from you!!'),
('5334293bc1b0a', 'Jamie', 'Swing', 'jswing005@yahoo.com', '4505 Cloudcroft Ct', 'Midland', 'TX', 79707, '4328131946', 'Can you tell me what schools your homes are assigned to go to? We are looking for a home to be into by November 2014, but I don''t want my children to have to switch schools.\n\nThanks\nJamie Swing'),
('5335dbfa242a5', 'Kimberlee', 'Kirkland', 'emerald524@ymail.com', '6408 Shawnee', 'Midland', 'Texas', 79705, '432-230-5906', 'My husband and I currently own our own home. What is the initialcost of building in Daybreak Estates (Midland, Texas) and the estimated length of time for building the house. I understand that this process has many steps but we are interested in as much information as you can provide.\n\nThanks,\nKim Kirkland'),
('533c57563e3eb', 'Amy', 'Price', 'amyloup@yahoo.com', '409 player ct', 'midland', 'tx', 79705, '4329787696', 'Do you have a ny oictures of your homes on the inside finished?\nI am at work so email works best during the day.\namy.price@whiting.com'),
('533efc46338d3', 'Kendra', 'Wolf', 'kendra.mackey6@gmail.com', '3211 SCR 1066', 'Midland', 'Tx', 79706, '432 813 8558', 'I was wanting to know a little more about the Daybreak Estates. Such as:\n\nThe wait period?\nWhat are the requirements? Etc.\n\nThanks'),
('533fce35cfe22', 'Lori', 'Walters', 'lwalters@midlandtexas.gov', '3904 Willingham Drive', 'Midland', 'TX', 79703, '719-859-3534', 'Hello,\n\nMy name is Lori Walters and my husband and I had a few questions about building a home here in Midland.  We spoke with a sales rep about a year ago in Odessa about building a home.  However, there was nothing available in Midland at the time.   Can you please let me know if you are currently building in Midland yet and if yes, what is the time frame as far as wait time.  Please feel free to call my husband or I at the above number.\n\nI was also curious to see if you were hiring in your office?  While I am currently employed I have thought about going into interior design and thought maybe this may be a great starting point.  Please let me know at your earliest convenience.\n\nThank you and have a wonderful day!  Look forward to hearing from you soon.'),
('53418fcbdfc87', 'bryon', 'Dunn', 'plumber_boy1@yahoo.com', '6326 Christopher', 'Odessa', 'Tx', 79762, '3254503001', 'Could you please email all of the 4 bedroom 2 bath plans Permian homes has to build please'),
('5341acbe5132e', 'Nicole', 'Houston', 'nshouston2000@gmail.com', '2509 A Haynes dr', 'Midland', 'Texas', 79705, '432-889-7052', 'We are interested in your homes. I am needing to know if its possible to widen the 2nd bathroom door for someone with a walker/wheelchair? Also is it possible to have a gas stove n oven?'),
('5342d942e3dcb', 'Caitlyn', 'Latham', 'cjadeb.11@gmail.com', '5200 Ric Drive', 'Midland', 'Texas', 79703, '(806)201-5775', 'hello my husband and i are interested in seeing what qualifications we would need to buy a new build permian home. We really love the Eriminia floorplan and would like to get as much information as we could if possible. Thank You for your time!'),
('5344d1950dfe6', 'Zachery', 'Boyer', 'Zacheryboyer@chevron.com', '9757 pine lake dr. Apt 2020', 'Houston', 'Texas', 77055, '8179661241', 'Hello, my wife, son and I are moving out to midland in the next couple of months with my company and we are very interested in your Midland community. We are looking around the $200k price range, 3 bedroom, and potential move in around June/July. I realize the timing is very aggressive. We are planing a trip to Midland in a week and half to look for housing and would like to stop by and view your homes. If you could, please give me a call sometime or email me with general information and options moving forward. I look forward to speaking with you.\n\nBest regards,\n\nZach'),
('53457dfd9c2fc', 'Justin', 'Sparkman', 'tandymsparkman@yahoo.com', '1703 Norwich Avenue', 'Lubbock', 'Texas', 79416, '806-781-0771', 'I am a flooring installer.  I can install all types of wood, carpet, and tile.  I can also install wall tile and back splashes.  I was just curious if you needed any installers.  Thank you for your time.'),
('534c4ac4d1eb5', 'Virginia', 'Hines', 'xanthius42@yahoo.com', '7309 Bellini St', 'Odessa', 'TX', 79765, '562-338-5728', 'HVAC-Our unit is making really awful noises when it starts.\nElectrical-One outlet in living room sparked and smells of burnt electrical.'),
('534cbb1dcf085', 'Leslie', 'Alvarado', 'leslie_p88@hotmail.com', '910 Howard Dr', 'Midland', 'Tx', 79703, '4328892223', 'Want info on houses being built in midland. 3-4 bedroom 2 bath. Thanks!!!!'),
('534d671438120', 'Russ', 'Shiplet', 'rshiplet@gmail.com', '1620 NE Mt Kamela Crt', 'Poulsbo', 'Washington', 98370, '3609304458', 'My family and I are relocating to Midland, TX from WA State.  We are looking for homes in the Midland area, preferably new construction.  We have been looking on line for homes in the mid to upper $350K range, but are not finding much in the way of inventory.\n\nWe are coming to Midland on a house hunting trip in the next couple of weeks.  If you can be of assistance to us, would you please reach out to me at 360-930-4458.\n\nRuss & Aimmee Shiplet'),
('534e944dcaeb1', 'Bryant', 'Falcon', 'falcon0550@gmail.com', '8201 Dorado Dr. #821', 'Odessa', 'tx', 79765, '432-269-4093', 'Hello I am very interested in taking a look at what Permian Homes has to offer and maybe taking a look at what type of homes you could have available. Im more interested in the 3 bedroom 2.5 floor plan i belive its around 1700 SqFt. You can contact me at any time. Thank You'),
('534ff9b23a391', 'Hilari', 'Paniagua', 'hilaribreann@yahoo.com', '1401 Old Course Rd', 'Odessa', 'Tx', 79765, '432-230-0436', 'Hello, we have a couple of problems that may need fixing. Our garage door has gotten really loud when it opens and closes. I''m not sure if this is just a minor issue, or if it is on the verge of breaking. Also, 2 of the lights in our kitchen have gone out. It isn''t the bulb.. and we also tried flipping the switch in the breaker box. If someone could take a look preferably today that would be great because I am off of work. If not today, we can schedule some time next week. \n\nThanks!\n\nHilari Paniagua'),
('53504b90a1fbe', 'Amalia', 'Moreno', 'kittykat350@gmail.com', '928 S Jackson Ave', 'Odessa', 'Tx', 79761, '432 -272-2298', 'Me and my husband are looking into buying a home. His brother recently purchased a 3 bedroom home. The most he gave down was no less than $1000 down and his payments are $1200. The $1200 is what my husband pays right now for a one bedroom apt. We are interested in a 3 bedroom home inside the city limits of odessa. We are even willing to take one that needs a little fixer upper, but not alot.'),
('535260a6eefca', 'Jason', 'Zhang', 'jason@rankexperts.com', '24 E Greenway Plaza Suite #1100', 'Houston', 'Texas', 77027, '8322529335', 'Hi,\n\nI recently sent you an email regarding 1st Ranking on Google.  We can put your website on 1st page of Google to drive targeted traffic to your site to help covert more clients for your company. Many of our clients are already getting strong results since the strategies are specifically designed for home improvement companies and real estate.  We can schedule a call we will be pleased to explain our service in detail. I look forward to hearing from you.\n\nJason Zhang\n\n12 Greenway Plaza Suite #1100   Houston, Texas 77027'),
('535563fc47e10', 'Jessica', 'Roberts', 'Jessica.roberts@midlandisd.net', '711 Nolan Ryan', 'Midland', 'Texas', 79707, '4322600661', 'My husband and I are looking into building a new home.  Please email me to schedule an appt.'),
('53591c8c2fd3c', 'john', 'stewart', 'john.stewart@halliburton.com', '152 conley pl.', 'odessa', 'tx', 79762, '4326648607', '7212 Barksdale Ln- are ya''ll going to be building anymore of these type townhomes(price range), and where?'),
('535b0cb34b0db', 'Norma', 'Paredes', 'Norma.paredes@ymail.com', '1606 w Michigan', 'Midland', 'Texas', 79701, '4329343979', 'I would like more information on the Daniela floor plan .'),
('535ebce25b736', 'chris', 'gentile', 'coachpa1@yahoo.com', 'lakeline blvd', 'cedar park', 'tx', 78613, '512-962-5284', 'moving to midland/odessa soon, do you have any ready or near move in \nready 4+ bed homes?'),
('5366d26ccfc9c', 'Paige', 'Moon', 'paigemoon@hotmail.com', '4001 Faudree G205', 'Odessa', 'Texas', 79765, '432.553.9069', 'I met with a really nice lady on Saturday and she is supposed to call me on Tuesday at 5:15 but I have miss-placed her business card.  I''m very interested in your townhomes on Old Course Road.  If my schedule permits, Tuesday morning, I will probably stop by model home and pick up a business card and re-confirm my Tuesday appt.  Thank you'),
('536bda4611811', 'Jennifer', 'Gideon', 'jeng5677@gmail.com', '418 Jordan Drive', 'Anamosa', 'IA', 52205, '5633217934', 'My fiance & I are in the process of moving to the Odessa/Midland area and I am inquiring about employment opportunities you may have with your company. I have extensive customer service & administrative experience and he has carpentry & concrete experience.\nThank you for your time,\nJennifer'),
('536f874a5210e', 'Britt', 'nmhatlzzypt@gma', 'http://iam.at/ece', 'Britt', 'Britt', 'Britt', 0, 'Britt', 'We have made the decision to open our POWERFUL and PRIVATE website traffic system to the public for just a few days! You can sign up for our UP SCALE network with a free trial as we get started with the public''s orders. Imagine how your bank account will look when your website gets the traffic it deserves. Visit us today: http://iam.at/ece'),
('53712e1f60b3a', 'Jacob', 'Golden', 'jacobgolden91@yahoo.com', '3617 Gillespie Lane', 'Odessa', 'TX', 79765, '432-978-0966', 'I am requesting for someone to come out and fix the island counter top in my kitchen. I had an issue with it right after I had moved in and yall sent a guy out to fix it and he didn''t fix it correctly because I am still having issues with it. Please contact me so that we can set up a good time to have this problem fixed.\nThanks,\nJacob Golden'),
('537264b1dbb32', 'Danny', 'McNeal', 'dontdoit1029@aol.com', '2650 S. Forum Dr.', 'Grand Prairie', 'TX', 75052, '214-334-0163', 'Are your homes certified Energy Star?'),
('53736d284283d', 'JARED', 'PATTERSON', 'JARED.PATTERSON86@YAHOO.COM', '7207 DONATELLO', 'ODESSA', 'TEXAS', 79765, '432-238-9200', 'I received a letter from yall stating that my warranty on my house was up in april.  I did not close on my house till october. What is the deal whith that ?'),
('537bdf3933620', 'Kara', 'Utley', 'cerilekara@yahoo.com', '2749 E. 11th St.', 'Odessa', 'TX', 79761, '432-349-6701', 'My husband and I are interested in the Desert Ridge homes that you are slated to start building in July?  I am anxious to see your floor plans and prices for these homes.  Thanks!'),
('537c1b11f2b96', 'Jimmy', 'Ontiveros', 'pie806@gmail.com', '2112 s Fairfield', 'Amarillo', 'tx', 79104, '806 433 0333', 'Hello my name is Jimmy Ontiveros and I have been framing in Amarillo for over 8 yrs. I am also a journeyman carpenter, with experience in commercial work as well. I was interested in heading down to midland and was wondering if your company was currently taking bids. Thank you for your time.'),
('537cc1a7c0592', 'Brittaney', 'Wilkerson', 'brittaneywilk@gmail.com', '2102 abbey place', 'Midland', 'TX', 79707, '432-413-8563', 'I was just wondering if there are already home built to see. I have driven by the new development on 349 and didnt see any. I am interested in getting more information and possibly seeing some of the different layouts. My fiance and I are trying to find a home for the beginning of next year.'),
('53836231864bc', 'anna', 'francisco', 'amtfmd@gmail.com', '3619 E. Gillespie Ln.', 'Odessa', 'TX', 79765, '5629125136', 'water is leaking from the dishwasher'),
('5384d8ce0fe87', 'Jacob', 'Golden', 'jacobgolden91@yahoo.com', '3617 Gillespie', 'Odessa', 'TX', 79765, '432-978-0966', 'I would like to request that someone comes out to fix my island center counter top in the kitchen. I had ya''ll come out a few months ago to fix it and it was not properly done because I am still having issues with it. I contacted Permian homes through the warranty request  and a gentleman said that he would let me know when was a good time to fix it over text message but then he never got back to me and that was two weeks ago now. Also the crown molding in one of the corners is splitting so that will need to be attended to as well. \nThanks, \nJacob Golden'),
('5385892a43223', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '432-296-9224', 'Floor pops from previous warranty requests remain unaddressed. \n\nCracked tiles in kitchen need replacing and I do not have any spare tiles left from construction in order to do this myself. \n\nCaroline will be home to assist in your prompt response. \nThank you.'),
('538ca07191cd4', 'Keith', 'Chao', 'cjohnson@simsguessrealtors.com', '1305 Old Course Rd.', 'Odessa', 'Tx', 79765, '432-230-2631', 'Hello,\nIt''s Carol Johnson with Sims and Guess, REALTORS.  The a/c is not working at all at 1305 Old Course.  I called over the weekend and didn''t hear from anyone.  I didn''t email because i was on the road.  Please help the tenant with her a/c.  She hasn''t been able to stay there. \n\nCall me at 432-230-2631'),
('538fea9e2105c', 'Miguel', 'Erives', 'merives21@gmail.com', '2200 Business Center Dr. APT 2307', 'Pearland', 'TX', 77584, '9155262494', 'Hello, \n\nWe will be moving to the Midland/Odessa area this summer to be closer to family and we are really interested in one of your homes. My girlfriend and I will be first-time home buyers and would like more information on the home purchasing process. We anticipate to buy a home within the next 6-8 months and would like to start preparing accordingly. Currently, our rent is $1200 a month and would like something preferably a little less than that. Also, we are very interested in learning more about a mortgage loan, down payments, necessary credit requirements, and the overall procedures. \n\nWe look forward to hearing from you and thank you in advance for your help!'),
('5390b8a565393', 'Hilari', 'Paniagua', 'hilaribreann@yahoo.com', '1401 Old Course Rd', 'Odessa', 'Tx', 79765, '432-230-0436', 'Garage seal is very loose and a lot of dirt is able to blow in. Also, I''m not sure what it is called, but the silver thing on the side of our house (vent cover?)  is open or loose, and we''re afraid that insects can get inside.'),
('5395d5b6c494a', 'Ricardo', 'Puente', 'Danzacatedral_@hotmail.com', '1301 latta apt 407', 'Midland', 'Tx', 79701, '4322503187', 'Hojala pudieran darme informacion en español gracias....'),
('5398f7be2c0c5', 'Carol', 'Johnson', 'cjohnson@simsguessrealtors.com', '1305 Old Course Road', 'Odessa', 'Tx', 79765, '432-230-2631', 'Bryan,\nWe have a serious plumbing at 1305 Old Course Road.  Donna called me tonight at 6:44 and stated that the downstairs had flooded.  She stated that she discussed this matter with you earlier.  I think consensus was that the toilet may have been just stopped up.  She came in tonight took a bath went downstairs and it was flooded.  She said water was coming up from the bottom of the toilet.  We need to get this resolved ASAP.  Donna Watson is the tenant her # is 230-7289.  Also need an update on the a/c unit.\nThanks\nCarol'),
('5399efb6acaf0', 'Amanda', 'Perales', 'amandaperales@gmail.com', '3605 Baumann Ave', 'Midland', 'TX', 79703, '432-425-7511', 'Hello,\n\nWanted to get a little more information on getting a house built.  If you can please give me a call.\n\nThanks,\nAmanda'),
('5399f3f61293e', 'Carol', 'Johnson', 'cjohnson@simsguessrealtors.com', '1301', 'Old Course Road', 'Texas', 79765, '432-230-2631', 'Bryan\n1301 Old Course Road the microwave keeps tripping the breaker when in use.  He reset the breaker unplugged the appliance plugged it back in and trips the breakers again. \nTenant name is Brett Simmons 432-770-9411 or Felicia Simmons\n432-230-1355'),
('53a1ff9496d41', 'Jacob', 'Golden', 'jacobgolden91@yahoo.com', '3617 Gillespie', 'Odessa', 'Tx', 79765, '432-978-0966', 'The crow molding is cracking above the backyard door and the master bed room door. Let me know when a good time to come over and fix it would be.\nThanks,\nJacob Golden'),
('53a23ac5046a1', 'Chris', 'Patton', 'cpatton80@yahoo.com', '7100 kinghorn', 'odessa', 'tx', 79765, '432-634-1051', 'the threshold of the door leading out to the garage is smashed and has some sharp edges sticking out of it. the gate and fencing for the gate to the right of the garage(if you are facing the garage) needs to be adjusted the fence panel is not nailed to the cross beam of the fence the gate is tricky to close. please let me know if someone will be out to check on this.'),
('53a8ade898065', 'Alicia', 'Dickson', 'Dicksona48@yahoo.com', '304 E 95th st', 'Odessa', 'Tx', 79765, '4327700342', 'Hello! My husband and I are looking to bulid a larger home. We are wanting 4 bedrooms and have a budget around 300,000. Our home is currently on the market as of a week ago but plan to stay with my grandparents until we can find something we like or build. I would like to get some information on locations in odessa where y''all are building and maybe look at some layouts!  Thanks for your time!\nAlicia Dickson'),
('53aed345e7934', 'Deborah', 'Pattison', 'dpsews@hotmail.com', '1209 Old Course Road', 'Odessa', 'TX', 79765, '432-210-9859', 'The A/C drain pipe is letting a lot of water out.  I was wondering if someone could come over and discuss another option.  Also, I’m concern  about termites because the other day I noticed a bunch of white wings on our patio.  I know that termites are attracted to water and moist areas and the A/C drain always has water there.  I was hoping we could have that pipe extended the length of the wall of the house to drain away from the house.  We did buy some termite spray and will put some baits in the soil.  \n\nAny help you can provide will be appreciated.  You can call my husband at 432-210-9859 or me at 580-716-9373\n\nThank you\nDeborah Pattison\n1209 Old Course Road'),
('53b4826d6a8f4', 'Gabriela', 'Dye', 'gabrieladye@yahoo.com', '4136 E 52nd St #1303', 'Odessa', 'TX', 79762, '915-929-4977', 'I am looking for at least a 3 bdrm 2 bath. 2 car garage. preferably 1 floor. We won''t be able to move in until the end of Sept. beginning Oct. Just wanted to give my name before all the house sold :)\nThank you!'),
('53b62b262e453', 'Naomi', 'Fuentes', 'naomi.fuentes@ectorcountyisd.org', '2811 E. 11th', 'Odessa', 'Texas', 79761, '4323526821', 'We would like to look into the townhomes on Old Course Rd.'),
('53b9c5fd9f525', 'Yoko', 'toflelezgqk@yah', 'http://bwf.co/2j', 'Yoko', 'Yoko', 'Yoko', 0, 'Yoko', 'We have made the decision to open our POWERFUL and PRIVATE website traffic system to the public for just a few days! You can sign up for our UP SCALE network with a free trial as we get started with the public''s orders. Imagine how your bank account will look when your website gets the traffic it deserves. Visit us today: http://yourls.endinahosting.com/2uf1'),
('53ba08b73e7b4', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '4322718000', '3 outlets on kitchen counter not working; above sink, under sink, right of sink. \nThird stair floor pop still remains as was never addressed while still under warranty. I will be happy to provide documents of request made in July last year. I would also like to speak with a supervisor if this still remains an issue.'),
('53bce6db51515', 'Glennie', 'nrjcuuhfwii@yah', 'http://technohistoire.info/yourls/2', 'Glennie', 'Glennie', 'Glennie', 0, 'Glennie', 'This is a comment to the webmaster. Your Permian Homes: New Home Builder Construction in Midland and website is missing out on at least 300 visitors per day. I have found a company which offers to dramatically increase your visitors to your website: http://url.lily.la/k6m0 They offer 500 free visitors during their free trial period and I managed to get over 15,000 visitors per month using their services, you could also get lot more targeted visitors than you have now. Hope this helps :) Take care.'),
('53c01ba89ce9b', 'Jeff', 'Pritchard', 'mrp101@hotmail.com', '509 N Remington Way', 'Mustang', 'OK', 73064, '4052136134', 'Do you have any plans with a formal dining along with the kitchen nook, 2 separate living/den areas, with 3-4 bedrooms? I don''t see such on your floorplans online. I''m looking to relocate to Midland for the oilfield.'),
('53c02bcbdf91a', 'Clinishia', 'Walker', 'clinishia.walker@gmail.com', '2931 Barker Cypress Rd APT 610', 'Houston', 'Tx', 77084, '254-317-9553', 'Hello! We will be relocating to the Midland/Odessa area really soon due to a job change (same industry) and are looking into buying since we will be there for a minimum of two years. We have looked at the rental market and although we have found some really nice apartments the prices exceed even what we would pay here in the Houston area. With that being said we feel as though it would be a better investment to buy rather than renting. This would be a first home purchase and we would like to use the VA home loan as we are both veterans. If you could get with us soon it would be greatly appreciated! Thanks in Advance for your time.'),
('53c3083d953c9', 'Shelly', 'Stanford', 'sstanford1998@cableone.net', '5524 Dakota', 'Odessa', 'Tx', 79762, '432-559-4310', 'Is Permian Homes building in the Old Course Estates? We are interested in Lot 37 blk 9 on Tom Morris Dr.  and I want more information. Any help you can give me would be appreciated.  Wanting to do something within the next couple of months.'),
('53c4a7e247c5f', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '4322718000', 'I have tried since 7/2013 to get the floor pop on the 3rd step fixed and more recently have left phone messages w Brian in regard to that issue after a recent warranty request. Now, a week later I have yet to receive a response after he stated he would discuss this with David Cook due to us being "out of warranty".  Simple uncomplicated issues like these prompt me to stop referring Permain Homes as a builder with integrity and one that stands behind their contracts.\nLet''s not let a simple issue turn into something more than it has to be. Thank you for your prompt response.'),
('53c738ced81ca', 'Carol', 'Johnson', 'cjohnson@simsguessrealtors.com', '7234 Manford', 'Odessa', 'Tex', 79765, '432-230-2631', 'The a/c is not cooling at 7234 Manford \nIt is tenant occupied (Hayden Smith)\nPlease call me and I will get you in contact with him.\nThanks \nCarol Johnson'),
('53cb65a62d23f', 'Angelica', 'Porras', 'amporras2000@yahoo.com', 'amporras2000@yahoo.com', 'Midland', 'TX', 79701, '432-638-9428', 'Is there a waiting list to get a home built?  What is the time frame for the construction of the home?'),
('53cdb51ca9f40', 'Lacy', 'Bowen', 'Lacy05ag@gmail.com', '7650 Tres Hermanas Boulevard Apartm', 'Odessa', 'TX', 79765, '8179950211', 'Hi,\n\nWe drove by your Old Course community this evening and would like more information. Our lease is up in December but we are hoping to by around November or Early December. We both work until 5 but could come by for a showing sometime after 5 or on a Saturday. \n\nThank you,\nLacy Bowe'),
('53cfbe8313bf6', 'Ryan', 'Murdock', 'ryanmurdock@comcast.net', '1501 Cedar Lane', 'Andrews', 'Tx', 79714, '865.385.8133', 'The city of Andrews came out to inspect the backflow valve on the sprinkler system and it is cracked on the bottom apparently due to it freezing. Also, there are a few door in the house that will not seat correctly.  If you can give me a call to discuss these issues.\n\nRegards,\n\nRyan Murdock'),
('53cff25aaa458', 'Don', 'Coe', 'donnycoe@gmail.com', '7103 Kinghorn', 'Odessa', 'TX', 79765, '432.413.8893', '2 items:\n\nOne of the faucets in the master bath has low pressure.\n\nThe xeriscape front lawn has a large low spot in the southeast corner as well as a few places throughout where the black weed block liner shows.\n\nThanks!'),
('53d27fdc5da4a', 'Daniel', 'Valle', 'jhil_ink@yahoo.com', '1001 E. 12th St', 'Big Spring', 'Texas', 79720, '432-816-5608', 'I am looking to build my home, Does your company build in Big Spring, TX, or surrounding areas.'),
('53e0350e1bd19', 'Darius', 'Johnsen', 'dariusjohnsen@gmail.com', 'PO Box 9001', 'Midland', 'TX', 79708, '469-644-9314', 'I need some more info on the 711 and 805 Old Course Homes. Are they under construction, or already built? Are they Townhomes or actual SFR? Im looking to buy a home in this area before the new year, if you could please answer my questions and/or send me any info regarding the properties I would greatly appreciate it. \n\nThank You for your time \nDarius Johnsen'),
('53e1162b0a9b6', 'Chris', 'Patton', 'cpatton80@yahoo.com', '7100 Kinghorn', 'Odessa', 'TX', 79765, '432-634-1051', 'I was just wondering if the screens for 2 of my front windows were in, if the pull out shelf for the laundry room was in, and if you had any idea when my back yard was going to be finished?'),
('53e15a35ba4f9', 'Deborah', 'Pattison', 'dpsews@hotmail.com', '1209 Old Course Road', 'Odessa', 'TX', 79765, '5807169373', 'I need help.  I was wondering if you could give a name of one of your people that could come and change a piece wood on my interior door frame.  It is the right side of the door that goes into the garage.  My daughter was here last week and her dog chewed up the right side of the door frame.  I just need someone to replace that piece for me.  I can repaint it. I could pay someone if they want to do it on the weekend. \n\nAlso, could a buy a bronze interior door knob from you.  You know the kind that is shape like an egg.  That dog put dents in that too.  \n\nPlease any help you could give me is greatly appreciated.  I don''t know if Brian ever tried to get back to my husband about the A/C drainage pipe.  He doesn''t have that phone number anymore.  We can be reached at the above number.  If someone could just replace that piece of wood it should take about 30 min.  My husband would do it but he is going through chemo.  \n\nThank you for your time.'),
('53e18410a280d', 'Lindsey', 'Urquidez', 'lindseyurquidez@yahoo.com', '2819 Judy ave', 'Odessa', 'Tx', 79764, '4322968232', 'I am very interested in the Samantha floor plan and I am wondering about availability and how quickly the building process goes.  When are houses expected to be going up?'),
('53e24c3e75b7a', 'Debbie', 'Hamrick', 'Rddb7869@hotmail.com', '7030 sleepy hollow', 'Odessa', 'Texas', 79762, '4327704322', 'Can you hive an email of someone that I need to speak to for my home warranty please\nThank you Debbie'),
('53e3c618b49b6', 'Deborah', 'Pattison', 'dpsews@hotmail.com', '1209 Old Course Rd', 'ODESSA', 'TX', 79765, '580-716-9373', 'Thank you for sending us Brian Field to come an replace the casing on our door frame that my daughters'' dog chewed up.  You people are so awesome.  So professional and kind.  I can''t say enough good things about your company. I will contact Stock Building for another door knob.  Thanks again for your help.'),
('53e3e6e367ae5', 'Renan', 'Aranda', 'cozette2009@gmail.com', '700 Purdue St', 'Odessa', 'TX', 79765, '432-352-5019', 'Would like to visit with somebody over home possibilities.  This Saturday afternoon if possible, August 9th.  thank you'),
('53e4e52128009', 'Jeremy', 'Purkis', 'jeremy@shadesystemsinc.com', '4150 SW 19th Street', 'Ocala', 'Florida', 34474, '8006096066', 'Good morning,\n\n             I am writing to gather a quote for installation of some shade structures in your area.  Shade Systems has been awarded a contract in your area for providing and installing commercial fabric tensioned structures.  Shade systems makes full turnkey pre-engineered fabric structures and we would like to see if you would be interested in providing us installation numbers for the project.  Please see my contact information in the signature block below as well as a link to our website where you can get a first-hand look at the structures we manufacture.  Contact me if interested. \n\nThanks.'),
('53ea97ae21eb8', 'Brian', 'Mendez', 'brian.mendez@rwiconstruction.net', '3200 Bromley Pl Apt J204', 'Midland', 'Texas', 79705, '4322386567', 'I am looking to buy my first home and really have no idea on what step to take first.'),
('53eb7c6e04abf', 'JARED', 'PATTEROSN', 'JARED.PATTERSON86@YAHOO.COM', '7207 DONATELLO', 'ODESSA', 'TX', 79765, '432-238-9200', 'A while back your warranty guy came out and "fixed " a door in our bathroom.  The door now shuts but the moving of the door frame and patch work of the trim is hideous, caulking is all over place. This trim needs to replaced and repainted.'),
('53f2998fecca8', 'Gayle', 'Standage', 'gstandage@comcast.net', '16679 Maple Circle', 'Lake Oswego', 'OR', 97034, '503-819-4716', 'What homes do you have available that may be completed between October (2014) and January (2015)? My son is currently looking to purchase new home in Midland.'),
('53f68ca19e45b', 'Cade', 'Morris', 'cademorris@gmail.com', '4830 Golder Ave #2', 'Odessa', 'Texas', 79764, '4328947603', 'Interested in purchasing a home.'),
('53fe265380148', 'Mark', 'Calaway', '3cheritagecraftsman.com', '104 Wallis Ave.', 'Santa Anna', 'Texas', 76878, '325-203-6865', 'My name is Mark Calaway.  The purpose of contacting you is my company, 3C Heritage Craftsman, deals in reclaimed lumber and many other reclaimed building materials.   I noticed that your company builds green, and that''s our speciality, as we reclaim materials from all over the United States.   Our materials include, but is not limited to, antique pine beams, hand-hewn beams from as far back as the 1800s, reclaimed flooring, ship lap, stamped tin, bead board, mantels, doors, etc...  We offer antique long-leaf pine, spalted pecan, hickory, oak, cedar, and other wood species.   We also have re-saw and milling capabilities so we are able to construct a customized, one-of-a-kind product for our clients.  3C Heritage Craftsman is located at 104 Wallis Ave. in Santa Anna, Texas.  I hope you are as interested in doing business with us as we are with you.  \nContact Mark Calaway @ (325) 203-6965.  Thank you.'),
('5400e48f6c79f', 'MABEL', 'SEGOVIA', 'mc_mabes@yahoo.com', '#23 PAISANO CIRCLE', 'ODESSA', 'TX', 79765, '432 934-6452', 'I have enjoyed living in this cozy home for the past 3 years but I have few problems in the house and I hope these can be fixed. \n\n1.) The master''s bedroom toilet tank is leaking and my water bill went up to $177.90 and I live by myself in this house. \n\n2.) The suction kitchen sink is not working. \n\n3.) There is a tile crack on the entrance hallway and master''s bathroom. This tile crack has been complained and nothing was done. Somebody came to the house years back but has not been fixed. It has been there since the first year I moved in my house. \n\n4.) Crack in the garage too. \n\nI will be very happy if these will be fixed at the earliest convenient time. You can email me at mc_mabes@yahoo.com or text me at this number (432) 934-6452 Thank you!'),
('5405d6c474e29', 'Pedie', 'Monta', 'pmonta88@gmail.com', '630 Memorial Court', 'Midland', 'Texas', 79706, '9077239340', 'What is your waiting list looking like right now? And how long does it take to complete a new build?'),
('540785b5b47fd', 'Janet', 'Buitron', 'bookread7@yahoo.com', '846 Chambers Creek Cir', 'Hewitt', 'TX', 76643, '9034663402', 'I would like additional information on new townhomes in the Midland and/or Odessa area. Do you have any available now? If so, can you provide details.'),
('54120cc7c5bef', 'Crissi', 'Landrum', 'crissi@allianceinstx.com', '5109 71st street', 'Lubbock', 'Texas', 79424, '806-543-5043', 'My fiancé currently lives in Odessa. My boys and I will be moving there soon. We are looking at building a home in Desert Ridge and would like to meet with someone to discuss options either tomorrow late afternoon or first thing Saturday morning. We have been pre-approved for a loan up to 260K. \nCan you please have someone call me to confirm we can meet with someone either tomorrow after 4:00 or around 9:00am Saturday Morning?\n\nThank you,'),
('5419a4a998376', 'Luke', 'Sims', 'lucasavery86@gmail.com', '3600 N Midland Drive #3A', 'Midland', 'Texas', 79707, '3258296455', 'I would like information about the homes you are building in Midland. I am a first time home buyer and would like to know more about the process, how much money is required up front, etc'),
('5420307136733', 'Don', 'Coe', 'donnycoe@gmail.com', '7103 Kinghorn', 'Odessa', 'TX', 79765, '432.413.8893', 'I have a concern with our plumbing.  I keep finding what looks to be sand clogging our shower head, faucets, and now the washing machine cold water inlet.  Please advise.  Thank you.'),
('542126a1ce22b', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '432-271-8000', 'The garage door breaker continuously trips as it is plugged into a dedicated plug w gfci. Same issue addressed previously. \nThanks'),
('54237d0c51064', 'Dalma', 'Hernandez', 'bjde9906@yahoo.com', '911 W 21st st', 'Odessa', 'Texas', 79763, '432-269-2991', 'need more information on the old course home development area...we are interest it on building a house....'),
('54237d3908a0e', 'Dalma', 'Hernandez', 'bjde9906@yahoo.com', '911 W 21st st', 'Odessa', 'Texas', 79763, '432-269-2991', 'need more information on the old course home development area...we are interest it on building a house....'),
('542615628fd91', 'Rickey', 'Hamby', 'rickey_hamby@yahoo.com', '7200 Barksdale Ln', 'Odessa', 'TX', 79765, '432-271-8000', 'Good evening! Long time no hear. Since the email confirmation upon receipt of my warranty request on September 23, 2014 promised "we will be in contact with you within 48 hrs" never came to fruition, I can only take that as an indicator that you have no intention of honoring your claimed warranty. \n\nI thought it appropriate to give you a heads up that you''ll be receiving a certified letter from my lawyer to be sent on October 8th if compliance is not met.  It will outline filing a complaint with the Texas Real Estate Commision, county court claims filing, etc. \n\nAgain for the record I am seeking 1. repair of third step for now the 6th time 2. A third reporting of a malfunctioning garage door.  \n\nI don''t like trouble and this business is nothing more than a pain in the neck to me but what''s right is right. \n\nGod bless'),
('542d726c2b151', 'Shanker', 'M', 'nair.shanker@gmail.com', '0000', 'Midland TX', 'TX', 0, '5755189008', 'Hello there,\n\nI just took up a job in Midland, TX and will be starting my job at the new company end of October.\n\nI contacted Texas Classic Homes through a google search and they referred me to you folks and another company as I''m looking for a 1500 - 1800 ish sq ft home to buy in Midland, TX. \n\nDo you guys have homes readily built or should it be constructed ? If so, how long does it take ? I''m just trying to see whats out there and contacting builders out there in Midland and am willing to jump into a good deal right away if there are any. \n\nThank you for your time.\n\nRegards,\nShanker\n575-518-9008'),
('5434b9a1e527a', 'James', 'Cameron', 'jamescameron858@gmail.com', 'Lehighton Lehighton Pennsylvania, 1', 'Lehighton', 'Pennsylvania', 18235, '0130130130', 'Want more clients and customers? We will help them find you by putting you on the 1st page of Google. Email us back to get a full proposal.'),
('543585bc9f39c', 'kristena', 'seymour', 'keseymour@grandecom.net', '5050 tanglewood ln apt# 600', 'odessa', 'tx', 79762, '432-349-3137', 'I recently emailed Cindy. My fiance and I just recently got pre approved by prime lending for a home loan. We were interested in the Enclave community. We were curious about how much it would cost to begin building a home and the payment details. If there is any additional information that you need from us, just let me know. I look forward to hearing from you!\n\nThank you'),
('543585d6519c1', 'kristena', 'seymour', 'keseymour@grandecom.net', '5050 tanglewood ln apt# 600', 'odessa', 'tx', 79762, '432-349-3137', 'I recently emailed Cindy. My fiance and I just recently got pre approved by prime lending for a home loan. We were interested in the Enclave community. We were curious about how much it would cost to begin building a home and the payment details. If there is any additional information that you need from us, just let me know. I look forward to hearing from you!\n\nThank you'),
('543585f1b8105', 'kristena', 'seymour', 'keseymour@grandecom.net', '5050 tanglewood ln apt# 600', 'odessa', 'tx', 79762, '432-349-3137', 'I recently emailed Cindy. My fiance and I just recently got pre approved by prime lending for a home loan. We were interested in the Enclave community. We were curious about how much it would cost to begin building a home and the payment details. If there is any additional information that you need from us, just let me know. I look forward to hearing from you!\n\nThank you'),
('543585f485f8e', 'kristena', 'seymour', 'keseymour@grandecom.net', '5050 tanglewood ln apt# 600', 'odessa', 'tx', 79762, '432-349-3137', 'I recently emailed Cindy. My fiance and I just recently got pre approved by prime lending for a home loan. We were interested in the Enclave community. We were curious about how much it would cost to begin building a home and the payment details. If there is any additional information that you need from us, just let me know. I look forward to hearing from you!\n\nThank you'),
('543585f4bc054', 'kristena', 'seymour', 'keseymour@grandecom.net', '5050 tanglewood ln apt# 600', 'odessa', 'tx', 79762, '432-349-3137', 'I recently emailed Cindy. My fiance and I just recently got pre approved by prime lending for a home loan. We were interested in the Enclave community. We were curious about how much it would cost to begin building a home and the payment details. If there is any additional information that you need from us, just let me know. I look forward to hearing from you!\n\nThank you'),
('5437febfea739', 'Mike', 'Selander', 'michaelselander@hotmail.com', '7200 FM 380', 'San Angelo', 'TX', 76905, '325-617-6050', 'I would like some written information on the home warranty that comes with the purchase of a home.\nThanks,\nMike'),
('54450d7297f27', 'Brenda', 'Rosas', 'berenicebere432@yahoo.com', '4675 Oakwood Dr Apt 335', 'Odessa', 'TX', 79761, '9152699568', 'I want to know what we need in order to qualify?'),
('544988409a0af', 'Michelle', 'vqhxfgiox@aol.c', 'http://euser.info/2a', 'Michelle', 'Michelle', 'Michelle', 0, 'Michelle', 'I discovered your Permian Homes: New Home Builder Construction in Midland and page and noticed you could have a lot more visitors. I have found that the key to running a popular website is making sure the visitors you are getting are interested in your niche. There is a company that you can get traffic from and they let you try the service for free. I managed to get over 300 targeted visitors to day to my site. Check it out here: http://shurl.in/7a7'),
('5449acab224f0', 'Stephanie', 'Thomas', 'stephthomas55@gmail.com', '4415 Northcrest Dr. #816', 'Midland', 'Tx', 79707, '432-296-3056', 'I am a first time buyer, and I was needing some information on your homes, requirements and availability. Thanks!'),
('545696c681c4a', 'Crissa', 'Minett', 'Cfast@angelo.edu', '3600 N Midland Dr', 'Midland', 'Tx', 79707, '2543941584', 'My husband and I are looking around to find the best place to have a home built in Midland. We like the Daniela floor plan. I was wondering what''s the time frame for having a home built? Is there a waiting list? What''s the lowest amount of a down payment on this home that y''all can take? What do y''all charge for closing costs? Thank you for your help!');
INSERT INTO `contacts` (`uid`, `firstname`, `lastname`, `email`, `street`, `city`, `state`, `zip`, `telephone`, `message`) VALUES
('545ae330eded6', 'Eric', 'Smart', 'Eric.smart@cougarcleaning.com', '7102 Kinghorn Dr.', 'Odessa', 'Texas', 79765, '432-661-9155', 'Laundry room plug is still tripping breaker for the washer we have had our washer checked and it is something to do with the outlet. Also we have a few more issues we have called about that still need to be addressed I need a call back ASAP please.'),
('545b91856e675', 'dawn', 'whitlock', 'dawhitlock@grandecom.net', '807 Old Course Rd.', 'Odessa', 'Tx.', 79765, '4325533443', 'I live at 807 Old Course Rd., and you are building a fence across the road from me to contain a junk yard.  I am furious about this.  When I bought this town home for $192,000, I knew that there was a junk yard behind me, but thought that since you were going to build more townhomes in front of me, I would live with it.  The men told me this morning that the neighbors were complaining, and that''s why they were putting up the fence.  However, I have talked to my neighbors, and none of them knew anything about this.  This may shield the view from the ground floor, however, these are two story homes, and now I will look directly into the junk yard from my second floor.  THIS IS NOT ACCEPTABLE.  If necessary, I will talk to a lawyer about this.  I have your brochures showing townhomes in that area, and the signs that you have up also show townhomes.  I have talked to my neighbors, and they all feel as I do.  Please remove this eyesore immediately.  Dawn Whitlock'),
('545ceb1b329b4', 'Dawn', 'Whitlock', 'dawhitlock@grandecom.net', '807 Old Course Rd.', 'Odessa', 'Texas', 79765, '4325533443', 'Mr David Martin-  thank you for calling me yesterday (11/6/14)  about the storage lot across from me.  I appreciate you giving me  your work that you will remove it within a month.  I am having houseguests for Thanksgiving, and would really appreciate it if it could be cleared by then.  Thank you so much for your concern.  Dawn Whitlock'),
('545d06b742398', 'Dawn', 'Whitlock', 'dawhitlock@grandecom.net', '807 Old Course Rd.', 'odessa', 'Tx.', 79765, '4325533443', 'Thank you so  much for promptly removing the storage lot across from me.  You''ll never know how much I appreciate it.  Dawn Whitlock'),
('545ea7e20a126', 'RSA', 'Security', 'afcc@rsa.com', '1040 Avenue of the Americas', 'New York', 'New York', 10018, '765-237-3464', 'RBC E1153736\n\nDear Team\n\nIt appears that your website permianhomes.com has been hacked by a\nfraudster. It is now hosting a phishing attack against RBC.\nPlease remove the fraudulent folders/files as soon as possible and\nsecure your website as it has been compromised.\nPlease note that it is possible that the fraudulent content is embedded\nin your website''s legitimate files. \n\nhttp://permianhomes.com/assets/upload/RBC/rbunxcgi.php\n\nIn addition, please send us any source files of the attack.\nPlease let us know if you have any questions or need further assistance.\nWe appreciate your cooperation. \n\nBest Regards, \n\nRSA Anti-Fraud Command Center\nRSA, The Security Division of EMC\nUS Phone: +1-866-408-7525\nEmail: afcc@rsa.com\nFor more information about RSA''s AFCC\nhttp://www.rsa.com/node.aspx?id=3348\n\n________________________________\n\n\nTo whom it may concern,\n\nRSA, The Security Division of EMC (“RSA”), an information security\ncompany, has been appointed to assist RBC in preventing or terminating\nonline activity that targets, or may target RBC’s clients as potential\nfraud victims.\n\nRSA has been made aware that your company appears to be providing\ninternet services to a website, which is making unauthorized use of\nRBC’s trademarks. This site\nhttp://permianhomes.com/assets/upload/RBC/rbunxcgi.php not only violates\nRBC’s copyright, trademarks and other intellectual property rights, but\nmay also become a host to a phishing attack, or other fraudulent scams\ndirected against RBC and RBC’s clients.\n\nThe fraudulent website not only represents a misappropriation of RBC’s\nintellectual property; its purpose is to mislead RBC’s clients. Our\nexperience has shown that such sites become a host of phishing* and\nother fraudulent scams against our customer’s account holders. \n\nPlease take all necessary steps to immediately shut down the fraudulent\nwebsite, terminate its availability on the Internet and discontinue the\ntransmission of any e-mails associated with this website.\n\nWe understand that you may not be aware of this improper use of your\nservices and we appreciate your cooperation. We specifically ask that\nyou also take the following actions wherever relevant or possible:\n\n\n\n* Please provide us with a tar/zip file of the source code for\nthis website, so that we may analyze it to help prevent further attacks;\n* If any customer data has been captured that is stored on your\nsystems or equipment, please send us that data so that the customers to\nwhom that data relates can be notified and take steps to protect their\ncredit;\n\nWe specifically would ask that you also provide a copy of any records\nyou maintain that indicate the name, contact information, method of\npayment or similar information that may be useful in helping learn the\nidentity and location of the customer for whom the website has been\noperated.\n\nThe foregoing is without prejudice to any and all of rights and remedies\nof any financial institution in connection with this matter, which are\nhereby expressly reserved.\n\nRSA is providing this notification to you in the interest of preventing\nthe proliferation of phishing scams and the information contained herein\nis provided to you on an "AS-IS" basis, without representation or\nwarranty of any kind.\n\nThank you for your cooperation to prevent and terminate this fraudulent\nactivity.\n\n\nIf you need further information, please do not hesitate to contact RSA\nat the numbers below.\n\nSincerely,\n\nRSA SECURITY INC.\n\n\n\nRSA Anti-Fraud Command Center\nTel: +44 (0)800-032-7751\nTel: +1-866-408-7525\nE-mail:afcc@rsa.com\n\n\n\n*“Phishing” generally refers to a variety of web based scams that make\nuse of an illegitimate website which passes itself off as being that of\na targeted financial institution together with associated data\ncollection points (including web based email accounts) in order to\ndeceive the account holders of the financial institution into revealing\ntheir personal information, including but not limited to their credit or\ndebit account numbers, checking account information, social security\nnumbers, or banking account passwords. Once these account holder\ncredentials are collected they can then be used to commit wire fraud or\nother similar activities of a criminal nature.\n\n\n\n47'),
('545ec74f01953', 'ynlcbwts', 'trpckrak', 'sample@email.tst', '1', 'San Francisco', 'NY', 94102, '555-666-0606', '20'),
('545ec74f16411', 'lhdtknrs', 'bvabugvp', 'sample@email.tst', '1', 'San Francisco', 'NY', 94102, '555-666-0606', '20'),
('545fdb38dea50', 'Omosede', 'Evbuomwan', 'omosede85@gmail.com', 'Faudree road', 'Odessa', 'tx', 79765, '832-722-7366', 'Hello, \n\nI was wondering when the Devon townhomes would be available/ready for sale?\n\nthanks,\n\nOmosede Evbuomwan.'),
('546090f7a9cfe', 'dosdnpjs', 'nyyqjipm', 'sample@email.tst', '1', 'San Francisco', 'NY', 94102, '555-666-0606', '20'),
('546090f7a9add', 'msxisykt', 'lnptaugd', 'sample@email.tst', '1', 'San Francisco', 'NY', 94102, '555-666-0606', '20'),
('5461b1412d47e', 'Rajneesh', 'kumar', 'sales@explainermagic.com', 'Block J Chattarpur', 'New Delhi', 'Delhi', 110062, '09910175355', 'Hello,\n\nAre you looking for videos that help you sell your product and easily reach a wider audience? Do you want to present your ideas in a fun and creative way?\n\nIf your answer is yes, we can help you do so. Explainer Magic has created over 800 explainer videos for different companies and individuals across the globe.\n\nWe offer a range of styles such as Whiteboard Animation, Motion Graphics, Kinetic Typography etc at very affordable rates. You can see the examples of our work at http://www.explainermagic.com/.\n\nThanks\nRajneesh Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `faq_answers_table`
--

CREATE TABLE IF NOT EXISTS `faq_answers_table` (
  `idfaq_answers_table` bigint(30) NOT NULL AUTO_INCREMENT,
  `answers` text NOT NULL,
  `idfaq_table` bigint(30) NOT NULL,
  PRIMARY KEY (`idfaq_answers_table`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19057357665072 ;

--
-- Dumping data for table `faq_answers_table`
--

INSERT INTO `faq_answers_table` (`idfaq_answers_table`, `answers`, `idfaq_table`) VALUES
(19057357665071, 'test a 3', 4500026805071),
(14058621595071, 'test a', 19279361995071);

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions_table`
--

CREATE TABLE IF NOT EXISTS `faq_questions_table` (
  `idfaq_questions_table` bigint(30) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `idfaq_table` bigint(30) NOT NULL,
  PRIMARY KEY (`idfaq_questions_table`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11135388375072 ;

--
-- Dumping data for table `faq_questions_table`
--

INSERT INTO `faq_questions_table` (`idfaq_questions_table`, `question`, `idfaq_table`) VALUES
(1774060595071, 'test q 2', 4500026805071),
(9942406675071, 'test q', 19279361995071);

-- --------------------------------------------------------

--
-- Table structure for table `faq_table`
--

CREATE TABLE IF NOT EXISTS `faq_table` (
  `idfaq_table` bigint(30) NOT NULL AUTO_INCREMENT,
  `questionid` bigint(30) NOT NULL,
  `answerid` bigint(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`idfaq_table`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19279361995072 ;

--
-- Dumping data for table `faq_table`
--

INSERT INTO `faq_table` (`idfaq_table`, `questionid`, `answerid`, `user_id`) VALUES
(2147483647, 2147483647, 2147483647, 1),
(4500026805071, 1774060595071, 19057357665071, 1),
(19279361995071, 9942406675071, 14058621595071, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `idlocation` bigint(30) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(50) NOT NULL,
  `location_street` varchar(30) NOT NULL,
  `location_city` varchar(20) NOT NULL,
  `location_state` varchar(20) NOT NULL,
  `location_zip` int(5) NOT NULL,
  `sale_price` varchar(15) NOT NULL,
  `rent_price` varchar(15) NOT NULL,
  `bedrooms` int(5) NOT NULL,
  `bathrooms` int(5) NOT NULL,
  `square_feet` varchar(10) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `tags` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `description` longtext NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `reduced` tinyint(1) NOT NULL,
  `rented` tinyint(1) NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `userid` mediumint(8) NOT NULL,
  PRIMARY KEY (`idlocation`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`idlocation`, `location_name`, `location_street`, `location_city`, `location_state`, `location_zip`, `sale_price`, `rent_price`, `bedrooms`, `bathrooms`, `square_feet`, `photo_id`, `lat`, `lng`, `tags`, `created`, `description`, `featured`, `reduced`, `rented`, `sold`, `userid`) VALUES
(9, '7305 Donatello', '7305 Donatello', 'Odessa', 'Texas', 0, '232,990', '', 3, 2, '1894', 89, '31.8978449', '-102.2903430', '', '2013-04-18 20:18:08', '<p>\n This beautiful home has tons of space for you and your family to grow! From granite countertops, to upgraded flooring, the list is too big! This is a must see and will be available in April.</p>\n', 0, 0, 0, 1, 1),
(6, '7307 Donatello', '7307 Donatello', 'Odessa', 'Texas', 0, '269,990', '', 3, 2, '2300', 88, '31.8978449', '-102.2903430', '', '2013-01-30 21:22:20', '<p>\n This beautiful home has tons of space for you and your family to grow! From granite countertops, to upgraded flooring, the list is too big! This is a must see and will be available in April.</p>\n', 0, 0, 0, 1, 1),
(5, '7217 Giotto', '7217 Giotto', 'Odessa', 'Texas', 0, '259,990', '', 4, 2, '2317', 91, '31.8962964', '-102.2898281', '', '2013-04-17 20:59:18', '<p>\n Your Dream home awaits with this beautiful Francesca 4 bedroom plan in Renaissance Estates.  This home has it all and is available for immediate move in.</p>\n', 0, 0, 0, 1, 1),
(10, '4224 E. Everglade', '4224 E. Everglade', 'Odessa', 'Texas', 0, '175,000', '', 3, 3, '', 90, '31.888756', '-102.3418189', '', '2013-06-05 15:28:22', '<p>\n Wonderfully open floor plan! Three bedroom, two and a half baths that has it all. The master closet will blow you away! There is also a Shop with Garage in back and a circle drive out front. You have to see this one!</p>\n', 0, 0, 0, 1, 1),
(8, '7304 Giotto', '7304 Giotto', 'Odessa', 'Texas', 0, '255,000', '', 3, 2, '2300', 88, '31.8962964', '-102.2898281', '', '2013-04-20 14:45:42', '<p>\n <span>Your Dream Home Awaits with this beautiful Fabiana Plan located in Permian Homes''s Renaissance Estates. This home has it all and is available for immediate move in!</span></p>\n', 0, 0, 0, 1, 1),
(11, '7303 Donatello', '7303 Donatello', 'Odessa', 'Texas', 0, '249,000', '', 4, 2, '2020', 92, '31.8978449', '-102.2903430', '', '2013-05-02 09:10:44', '<p>\n We are ready to WOW you with this 4 Bedroom, 2 Bathroom home in Renaissance Estates! This Custom Erminia plan has many upgrades and amenities and can be yours in June.</p>\n', 0, 0, 0, 1, 1),
(13, '3613 Gillespie', '3613 Gillespie', 'Odessa', 'Texas', 0, '169,665', '', 2, 2, '1338', 94, '31.9003049', '-102.2957888', '', '2013-04-18 20:19:11', '<p>\n Beautiful single story townhome in East Odessa! From Granite countertops, to stainless steel appliances, this townhome has it all. This home can be yours in June.</p>\n', 0, 0, 0, 1, 1),
(14, '3617 Gillespie', '3617 Gillespie', 'Odessa', 'Texas', 0, '183,100', '', 3, 2, '1540', 93, '31.9004674', '-102.2959256', '', '2013-05-14 20:11:25', '<p>\n Maintenance Free Living! This beautiful single story townhome gives you a large open floor plan with low maintenance living. This home won’t last long so call today!</p>\n', 0, 0, 0, 1, 1),
(15, '7300 Bellini', '7300 Bellini St', 'Odessa', 'TX', 0, '279,990', '', 3, 2, '2300', 88, '31.8970434', '-102.2901284', '', '2013-06-06 20:00:51', '<p>\n This gorgeous custom Fabiana plan is huge with everything you would ever want! From pot fillers, to granite, to beautiful louvered shutters, this home has it all and can be yours in August.</p>\n', 0, 0, 0, 1, 1),
(16, '1405 Old Course Rd', '1405 Old Course Rd', 'Odessa', 'TX', 0, '219,515', '', 4, 3, '2006', 93, '31.8456816', '-102.3676431', '', '2013-10-29 18:15:05', '<p>\n Old Course Estates is located by Odessa Country Club and the 18th hole of the golf course! These luxurious townhomes include many upgrades and amenities to bring you maintenance free living and affordable luxury. This home can be yours this year!</p>\n', 0, 0, 0, 1, 1),
(17, '1401 Old Course Rd', '1401 Old Course Rd', 'Odessa', 'Texas', 0, '191,215', '', 3, 3, '1689', 96, '31.8456816', '-102.3676431', '', '2013-06-05 09:08:15', '<p>\n We are ready to WOW you with this 1689 square foot, 3 bedroom 2 ½ bathroom end unit townhome in East Odessa near the Country Club. Includes many amenities and upgrades and can be yours this year.</p>\n', 0, 0, 0, 1, 1),
(18, '1503 Cedar Lane', '1503 Cedar Lane', 'Andrews', 'TX', 79714, '258,990', '', 3, 2, '2106', 97, '32.332907', '-102.5675160', '', '2013-11-07 09:27:31', '<p>\n This stunning home is nestled in Andrew’s premier community, Heritage Oaks. Decked out with Brazilian Granite, upgraded cabinets and flooring, and a huge covered patio, this home has it all and can be yours in September!</p>\n', 0, 0, 0, 1, 1),
(19, '7114 Kinghorn Dr', '7114 Kinghorn Dr', 'Odessa', 'Texas', 0, '272,990', '', 4, 2, '2183', 98, '33.9780094', '-84.65551570', '', '2013-08-07 08:10:29', '<p>\n Are you ready to live on the Golf Course at the Country Club?! This huge lot and beautiful home will blow you away with more amenities and upgrades than we can list. This home can be yours in March 2014.</p>\n', 0, 0, 0, 1, 1),
(20, '7105 Kinghorn Drive', '7105 Kinghorn Drive', 'Odessa', 'Texas', 0, '271,690', '', 4, 2, '2373', 122, '31.8936982', '-102.2904500', '', '2014-04-06 15:47:47', '<p>Are you ready to live on the Golf Course at the Country Club?! This huge lot and beautiful home will blow you away with more amenities and upgrades than we can list. This home can be yours in July 2014.</p>\n\n<p><a class="button" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_9.pdf">Francesca Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(21, '7218 Bellini', '7218 Bellini', 'Odessa', 'TX', 0, '237,990', '', 3, 2, '1894', 102, '31.8970434', '-102.2901284', '', '2013-11-11 09:51:36', '<p>\n Your Dream Home Awaits with this beautiful Daniela Plan located in Permian Homes'' Renaissance Estates. This home has it all and is available for immediate move in!</p>\n', 0, 0, 0, 1, 1),
(23, '1303 Old Course Road', '1303 Old Course Road', 'Odessa', 'TX', 0, '187,215', '', 3, 3, '1689', 103, '31.8456816', '-102.3676431', '', '2013-12-05 21:41:59', '<p>\n Come see this 3 bedroom, 2 and a half bathroom townhome with many upgrades and amenities to bring you maintenance free living and affordable luxury. This home can be yours in December!</p>\n', 0, 0, 0, 1, 1),
(24, '1307 Old Course Road', '1307 Old Course Road', 'Odessa', 'Texas', 0, '200,410', '', 3, 3, '1689', 106, '31.8456816', '-102.3676431', '', '2013-12-19 10:26:25', '<p>\n Come see this 3 bedroom, 2 and a half bathroom townhome with many upgrades and amenities to bring you maintenance free living and affordable luxury. This home can be yours in December!</p>\n', 0, 0, 0, 1, 1),
(25, '7110 Kinghorn Drive', '7110 Kinghorn Drive', 'Odessa', 'Texas', 0, '249,990', '', 3, 2, '1919', 107, '31.8936982', '-102.2904500', '', '2014-03-24 16:50:44', '<p>Wonderful 3 bedroom, 2 bathroom home on a Cul-de-Sac.  The lot is very large and comes with many included upgrades and amenities.  This home is available in March so call today!</p>\n\n<p><a class="button" href="/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_5.pdf">Daniela Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(26, '1309 Old Course', '1309 Old Course', 'Odessa', 'TX', 0, '223,515', '', 4, 3, '2006', 109, '', '', '', '2014-03-04 22:12:08', '<p>\n Beautiful Callie Plan with open kitchen, living, and dining area all on a large end unit lot. This home is available for immediate move in, call today. This home will not last long!</p>\n\n<a class="button" href="/assets/pdfs/Callie.pdf">View the Callie Floor Plan</a>', 0, 0, 0, 1, 1),
(27, '1305 Old Course', '1305 Old Course', 'Odessa', 'TX', 0, '232,515', '', 4, 3, '2006', 119, '', '', '', '2014-04-06 15:48:06', '<p>Beautiful Callie Plan with open kitchen, living, and dining area all new the golf course. This home is available for immediate move in, call today. This home will not last long!</p>\n\n<p><a class="button" href="/assets/pdfs/Callie.pdf">Callie Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(28, '605 Old Course', '605 Old Course', 'Odessa', 'TX', 0, '195,040', '', 3, 3, '1689', 132, '', '', '', '2014-10-17 19:05:54', '<p>We are ready to WOW you with this 1689 square foot, 3 bedroom 2 1/2 bathroom townhome in East Odessa near the Country Club. Includes many amenities and upgrades and is to be completed by November.</p>\n\n<p><a class="button" href="/assets/pdfs/Tate.pdf">Tate Floor Plan</a></p>\n', 1, 0, 0, 0, 1),
(29, '1203 Old Course', '1203 Old Course', 'Odessa', 'TX', 0, '221,740', '', 4, 3, '2006', 113, '', '', '', '2014-03-24 16:51:10', '<p>This beautiful home has tons of space for you and your family to grow! From granite countertops, to upgraded flooring, the list is too big! This is a must see. Call today!</p>\n\n<p><a class="button" href="/assets/pdfs/Callie.pdf">Callie Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(30, '1207 Old Course', '1207 Old Course', 'Odessa', 'TX', 0, '221,940', '', 4, 3, '2006', 114, '', '', '', '2014-03-24 16:51:33', '<p>Tired of paying rent? Your search has ended with this beautiful 4 bedroom 2 and a half bathroom townhome in East Odessa off the 18th Hole of the Golf Course. This home features many upgrades and amenities and is available for immediate move in!</p>\n\n<p><a class="button" href="/assets/pdfs/Callie.pdf">The Callie Floor Plan</a>.</p>\n', 0, 0, 0, 1, 1),
(31, '1211 Old Course', '1211 Old Course', 'Odessa', 'TX', 0, '216,240<p', '', 4, 3, '1915', 115, '', '', '', '2014-03-24 16:51:51', '<p>This Beautiful Cara plan is open with a large kitchen on a large lot. Includes elegant cabinets and granite and is available for immediate move in!</p>\n\n<p><a class="button" href="http://permianhomes.com/assets/pdfs/Cara.pdf">Cara Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(32, '1501 Cedar Lane', '1501 Cedar Lane', 'Andrews', 'TX', 79714, '242,990', '', 3, 2, '2024', 118, '', '', '', '2014-04-06 15:48:29', '<p>Located within Andrew''s premier community, Heritage Oaks you will find the beautiful open floor plan of 1501 Cedar Lane. With Large Mature trees on the street, large landscaped lot, and beautiful finishes throughout, your search is over! This home is available for immediate move in so call today!</p>\n', 0, 0, 0, 1, 1),
(34, '911 Old Course', '911 Old Course', 'Odessa', 'TX', 0, '218,725', '', 4, 3, '1915', 119, '', '', '', '2014-07-02 09:16:32', '<p>Tired of Paying Rent? This beautiful Cara Plan with open kitchen, living, and dining area can be yours for less than you would pay for rent. This home is right next to one of the many community parks and will be complete by July, Call today!</p>\n\n<p><a class="button" href="http://permianhomes.com/assets/pdfs/Cara.pdf">Cara Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(35, '403 Old Course', '403 Old Course', 'Odessa', 'TX', 0, '181,990', '', 3, 3, '1515', 131, '', '', '', '2014-10-17 19:06:14', '<p>This elegant Kyler plan offers a clean beautiful look all for a great price. With its stunning cabinets and granite to its open floor plan, this one will not last long. This home can be yours in January.</p>\n\n<p><a class="button" href="http://permianhomes.com/assets/pdfs/Kyler.pdf">Kyler Floor Plan</a></p>\n', 1, 0, 0, 0, 1),
(36, '907 Old Course', '907 Old Course', 'Odessa', 'TX', 0, '222,915', '', 4, 3, '2006', 123, '', '', '', '2014-06-02 19:02:04', '<p>This contemporary Callie plan has more upgrades than we can list.  Beautiful open floor plan with large bedrooms and closets!  This home can be yours in June.</p>\n\n<p><a class="button" href="http://permianhomes.com/assets/pdfs/Callie.pdf">Callie Floor Plan</a></p>\n', 0, 0, 0, 1, 1),
(37, '6105 Sun Tea Way', '6105 Sun Tea Way', 'Midland', 'TX', 0, '265,460', '', 4, 2, '2426', 124, '31.9973456', '-102.0779145', '', '2014-09-08 20:18:55', '<p>Welcome to Daybreak Estates, Permian''s newest community in Midland. This elegant Francesca plan has an open floor concept with large lots, parks, splash pads, and so much more. This home can be yours in October!</p>\n\n<p><a class="button" href="http://permianhomes.com/assets/pdfs/Permian_Homes_Daybreak_Brochure_FINALweb_9.pdf">Francesca Plan</a></p>\n', 0, 0, 0, 1, 1),
(38, '7109 Kinghorn Road', '7109 Kinghorn Road', 'Odessa', 'TX', 0, '279,785', '', 4, 2, '2183', 129, '', '', '', '2014-09-08 20:18:37', '<p>Your search is over! This beautiful custom home has every detail you are looking for! With extravagant upgrades and amenities all on a quiet Cul-de-Sac. This home is ready for immediate move in so call today!</p>\n', 0, 0, 0, 1, 1),
(39, '7006 Turnberry Lane', '7006 Turnberry Lane', 'Odessa', 'Texas', 0, '549,990', '', 4, 3, '3188', 133, '', '', '', '2014-11-07 23:07:52', '<p>Your Search is Over! Extravagant Contemporary 4 bedroom Home with Golf Cart access to the Country Club. This home features every amenity and luxury you are looking for and will be complete in October so call today!</p>\n\n<p><a class="button" href="/assets/pdfs/bria-floorplan.pdf">Bria Plan</a></p>\n', 1, 0, 0, 0, 1),
(40, '7008 Turnberry Lane', '7008 Turnberry Lane', 'Odessa', 'Texas', 0, '429,990', '', 3, 2, '2369', 134, '', '', '', '2014-09-09 11:34:42', '<p>Beautiful French Romantic home on a quiet cul-de-sac street! From copper decorative bay window roofing, to extravagant ceiling treatments and granite throughout, this home has it all. Also featured in the 2014 Parade of Homes. Call today, this one won''t last long!</p>\n\n<p><a class="button" href="/assets/pdfs/angelique-floorplan.pdf">Angelique Plan</a></p>\n', 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location_photos`
--

CREATE TABLE IF NOT EXISTS `location_photos` (
  `idlocation` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  PRIMARY KEY (`idlocation`,`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_photos`
--

INSERT INTO `location_photos` (`idlocation`, `photo_id`) VALUES
(5, 91),
(6, 88),
(8, 88),
(9, 89),
(10, 90),
(11, 92),
(13, 94),
(14, 93),
(15, 88),
(16, 93),
(17, 96),
(18, 97),
(19, 98),
(20, 122),
(21, 102),
(23, 103),
(24, 106),
(25, 107),
(26, 109),
(27, 119),
(28, 132),
(29, 113),
(30, 114),
(31, 115),
(32, 118),
(34, 119),
(35, 131),
(36, 123),
(37, 124),
(38, 129),
(39, 133),
(39, 136),
(39, 138),
(39, 139),
(39, 140),
(40, 0),
(40, 134),
(40, 143),
(40, 144),
(40, 145),
(40, 147),
(41, 73),
(41, 92);

-- --------------------------------------------------------

--
-- Table structure for table `meta_content`
--

CREATE TABLE IF NOT EXISTS `meta_content` (
  `idmeta_content` int(11) NOT NULL,
  `keywords` longtext,
  `description` longtext,
  `domainuid` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idmeta_content`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_content`
--

INSERT INTO `meta_content` (`idmeta_content`, `keywords`, `description`, `domainuid`) VALUES
(0, 'jerome, arizona, shopping, community, Advertising, Antiques, Automotive,   Construction, Education,   Family Entertainment, Financial, Fitness, Party Services, Pets, Real Estate,   Restaurants, Retail,', 'Welcome to Jerome Arizona. This is your guide to shopping, antiques, and more in the Historic Ghost Town of Jerome.', '4556602514ec4a0885a5fa');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageid` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) NOT NULL,
  `menu_name` varchar(25) NOT NULL,
  `page_headline` varchar(100) NOT NULL,
  `page_intro` text NOT NULL,
  `page_content` text NOT NULL,
  `parentid` int(10) NOT NULL,
  `templateid` int(10) NOT NULL,
  `sectionid` int(10) NOT NULL,
  `hide` tinyint(1) NOT NULL,
  `userid` int(20) NOT NULL,
  `siteid` varchar(32) NOT NULL,
  `rank` int(11) NOT NULL,
  UNIQUE KEY `pageid` (`pageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Page Database' AUTO_INCREMENT=31 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageid`, `page_name`, `menu_name`, `page_headline`, `page_intro`, `page_content`, `parentid`, `templateid`, `sectionid`, `hide`, `userid`, `siteid`, `rank`) VALUES
(1, 'home', 'Home', 'Welcome to My Page', '', '<p>\n Here''s some page content.</p>\n', 0, 0, 1, 0, 1, '4556602514ec4a0885a5fa', 0),
(27, 'financing', 'Financing', 'Financing', '', '<p>\n Coming Soon.</p>\n', 0, 0, 1, 0, 1, '4556602514ec4a0885a5fa', 8),
(14, 'advantages', 'Advantages', 'The Permian Homes Advantage', '', '<p>\n <strong>Permian Homes</strong> is dedicated to offering quality homes and lasting value for our customers. Our philosophy is simple: <em><span>We focus on each customer to build one dream at a time.</span></em></p>\n<p>\n <strong>Permian Homes</strong> is a builder that provides exceptional living environments that meet not only our high expectations, but that of our discerning home buyer as well. It is our aim to provide a quality built, personalized home, at a fair price.</p>\n<p>\n <strong>At Permian Homes</strong>, we want to stand out as the builder of choice for those building their first home as well as their dream home. Assessing the customer needs and meeting their expectations are the guiding principles in the environments we provide.</p>\n<p>\n <em>We understand and are driven to the level of excellence that our customers expect.</em></p>\n<p>\n Our special attention to the details of the building process, from the development of the land, the completion of a home, and the follow up and care after move in are what set us apart.</p>\n', 0, 0, 1, 0, 1, '4556602514ec4a0885a5fa', 5),
(17, 'real_estate', 'Communities', 'Communities', '', '', 0, 0, 1, 0, 1, '4556602514ec4a0885a5fa', 9),
(26, '', '', '', '', '', 0, 0, 1, 0, 0, '4556602514ec4a0885a5fa', 1),
(18, 'property', 'Property', 'Property', '', '<p>\n Insert Page Content Here</p>\n', 17, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 11),
(19, 'search', 'Search', 'Search', '', '<p>\n Insert Page Content Here</p>\n', 0, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 7),
(20, 'finally_home', 'Operation Finally Home', 'Operation Finally Home', '', '<p>\n Insert Page Content Here</p>\n', 7, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 6),
(21, 'thank_you', 'Thank You', 'Thank You!', '', '<p>\n Thank you for your request!</p>\n<p>\n We will be in contact with you within 48 hours. If this is an emergency, please call (432) 362-3436</p>\n', 7, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 3),
(22, 'past_properties', 'Past Properties', 'Past Properties', '', '<p>\n Here is a collection of our past properties. Feel free to look at what we''ve built!</p>\n', 17, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 2),
(28, 'contact_us', 'Contact us', 'Contact Us', '', '<p>\n Insert Page Content Here</p>\n', 0, 0, 1, 0, 1, '4556602514ec4a0885a5fa', 10),
(29, '', '', '', '', '', 0, 0, 1, 0, 0, '4556602514ec4a0885a5fa', 0),
(30, 'property2', 'Property', 'Property2', '', '<p>\r\n Insert Page Content Here</p>\r\n', 17, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 11),
(24, 'video', 'Video', 'Our Latest Videos', '', '<p>See our latest videos here!</p>', 0, 0, 1, 1, 1, '4556602514ec4a0885a5fa', 4);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `photoname` varchar(75) NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `fullsize` varchar(250) NOT NULL,
  `busid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `photoname`, `thumb`, `fullsize`, `busid`, `userid`) VALUES
(73, 'Birmingham-Real-Estate-Agents.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Birmingham-Real-Estate-Agents.jpg', 'http://permianhomes.com/assets/upload/images/Birmingham-Real-Estate-Agents.jpg', 0, 1),
(103, 'Model-Pictures-014.png', 'http://permianhomes.com/assets/upload/images/thumbs/Model-Pictures-014.png', 'http://permianhomes.com/assets/upload/images/Model-Pictures-014.png', 0, 1),
(104, 'DSC_0003.png', 'http://permianhomes.com/assets/upload/images/thumbs/DSC_0003.png', 'http://permianhomes.com/assets/upload/images/DSC_0003.png', 0, 1),
(92, 'Erminia_B.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Erminia_B.jpg', 'http://permianhomes.com/assets/upload/images/Erminia_B.jpg', 0, 1),
(93, 'Model_Pictures_0131.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_0131.JPG', 'http://permianhomes.com/assets/upload/images/Model_Pictures_0131.JPG', 0, 1),
(94, 'Model_Pictures_051.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_051.JPG', 'http://permianhomes.com/assets/upload/images/Model_Pictures_051.JPG', 0, 1),
(95, 'Model_Pictures_079.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_079.jpg', 'http://permianhomes.com/assets/upload/images/Model_Pictures_079.jpg', 0, 1),
(96, 'Model_Pictures_013.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_013.jpg', 'http://permianhomes.com/assets/upload/images/Model_Pictures_013.jpg', 0, 1),
(97, '10036-Render.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/10036-Render.jpg', 'http://permianhomes.com/assets/upload/images/10036-Render.jpg', 0, 1),
(98, '7114.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/7114.JPG', 'http://permianhomes.com/assets/upload/images/7114.JPG', 0, 1),
(99, '7112.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/7112.JPG', 'http://permianhomes.com/assets/upload/images/7112.JPG', 0, 1),
(100, '71121.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/71121.JPG', 'http://permianhomes.com/assets/upload/images/71121.JPG', 0, 1),
(101, 'Model-Pictures-013.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Model-Pictures-013.jpg', 'http://permianhomes.com/assets/upload/images/Model-Pictures-013.jpg', 0, 1),
(102, 'Daniela_Rendering_A.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Daniela_Rendering_A.jpg', 'http://permianhomes.com/assets/upload/images/Daniela_Rendering_A.jpg', 0, 1),
(74, 'cover1.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/cover1.jpg', 'http://permianhomes.com/assets/upload/images/cover1.jpg', 0, 1),
(87, 'desert-ridge-townhomes7.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/desert-ridge-townhomes7.jpg', 'http://permianhomes.com/assets/upload/images/desert-ridge-townhomes7.jpg', 0, 1),
(88, 'Fabiana_Rendering.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Fabiana_Rendering.jpg', 'http://permianhomes.com/assets/upload/images/Fabiana_Rendering.jpg', 0, 1),
(89, 'Daniela_Rendering_B.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Daniela_Rendering_B.jpg', 'http://permianhomes.com/assets/upload/images/Daniela_Rendering_B.jpg', 0, 1),
(90, 'Everglade.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Everglade.jpg', 'http://permianhomes.com/assets/upload/images/Everglade.jpg', 0, 1),
(91, 'Francesca_Elevation_B.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Francesca_Elevation_B.jpg', 'http://permianhomes.com/assets/upload/images/Francesca_Elevation_B.jpg', 0, 1),
(105, 'IMG_5443a.png', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5443a.png', 'http://permianhomes.com/assets/upload/images/IMG_5443a.png', 0, 1),
(106, 'DSC_0012.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/DSC_0012.JPG', 'http://permianhomes.com/assets/upload/images/DSC_0012.JPG', 0, 1),
(107, 'Daniela.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/Daniela.JPG', 'http://permianhomes.com/assets/upload/images/Daniela.JPG', 0, 1),
(109, 'DSC_0004-500x228.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/DSC_0004-500x228.jpg', 'http://permianhomes.com/assets/upload/images/DSC_0004-500x228.jpg', 0, 1),
(110, 'IMG_5438.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5438.JPG', 'http://permianhomes.com/assets/upload/images/IMG_5438.JPG', 0, 1),
(111, '162.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/162.jpg', 'http://permianhomes.com/assets/upload/images/162.jpg', 0, 1),
(112, '', 'thumbs/', '', 0, 0),
(113, 'IMG_5415.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5415.jpg', 'http://permianhomes.com/assets/upload/images/IMG_5415.jpg', 0, 1),
(114, 'Model_Pictures_015.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_015.jpg', 'http://permianhomes.com/assets/upload/images/Model_Pictures_015.jpg', 0, 1),
(115, 'Model_Pictures_052.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Model_Pictures_052.jpg', 'http://permianhomes.com/assets/upload/images/Model_Pictures_052.jpg', 0, 1),
(118, '10035-Render.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/10035-Render.jpg', 'http://permianhomes.com/assets/upload/images/10035-Render.jpg', 0, 1),
(119, 'IMG_5452-542x360.png', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5452-542x360.png', 'http://permianhomes.com/assets/upload/images/IMG_5452-542x360.png', 0, 1),
(120, '7112-542x360.png', 'http://permianhomes.com/assets/upload/images/thumbs/7112-542x360.png', 'http://permianhomes.com/assets/upload/images/7112-542x360.png', 0, 1),
(121, '7105.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/7105.JPG', 'http://permianhomes.com/assets/upload/images/7105.JPG', 0, 1),
(122, '14021.png', 'http://permianhomes.com/assets/upload/images/thumbs/14021.png', 'http://permianhomes.com/assets/upload/images/14021.png', 0, 1),
(123, 'IMG_5438.v01_.JPG', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5438.v01_.JPG', 'http://permianhomes.com/assets/upload/images/IMG_5438.v01_.JPG', 0, 1),
(124, 'Francesca-Rendering-B-cropped.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Francesca-Rendering-B-cropped.jpg', 'http://permianhomes.com/assets/upload/images/Francesca-Rendering-B-cropped.jpg', 0, 1),
(125, '', 'thumbs/', '', 0, 0),
(126, '7109_KH.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7109_KH.jpg', 'http://permianhomes.com/assets/upload/images/7109_KH.jpg', 0, 1),
(129, '7109-KH-cropped.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7109-KH-cropped.jpg', 'http://permianhomes.com/assets/upload/images/7109-KH-cropped.jpg', 0, 1),
(130, 'Francesca-Rendering-B-cropped.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/Francesca-Rendering-B-cropped.jpg', 'http://permianhomes.com/assets/upload/images/Francesca-Rendering-B-cropped.jpg', 0, 1),
(131, 'IMG_5438-cropped1.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/IMG_5438-cropped1.jpg', 'http://permianhomes.com/assets/upload/images/IMG_5438-cropped1.jpg', 0, 1),
(132, '162-cropped.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/162-cropped.jpg', 'http://permianhomes.com/assets/upload/images/162-cropped.jpg', 0, 1),
(133, '7006-Turnberry.png', 'http://permianhomes.com/assets/upload/images/thumbs/7006-Turnberry.png', 'http://permianhomes.com/assets/upload/images/7006-Turnberry.png', 0, 1),
(134, '7008-Turnberry.png', 'http://permianhomes.com/assets/upload/images/thumbs/7008-Turnberry.png', 'http://permianhomes.com/assets/upload/images/7008-Turnberry.png', 0, 1),
(136, '7006_IMG_6713.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7006_IMG_6713.jpg', 'http://permianhomes.com/assets/upload/images/7006_IMG_6713.jpg', 0, 1),
(140, '7006_IMG_6926.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7006_IMG_6926.jpg', 'http://permianhomes.com/assets/upload/images/7006_IMG_6926.jpg', 0, 1),
(138, '7006_IMG_6883.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7006_IMG_6883.jpg', 'http://permianhomes.com/assets/upload/images/7006_IMG_6883.jpg', 0, 1),
(139, '7006_IMG_6903.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7006_IMG_6903.jpg', 'http://permianhomes.com/assets/upload/images/7006_IMG_6903.jpg', 0, 1),
(141, '7008_IMG_6699.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6699.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6699.jpg', 0, 1),
(142, '7008_IMG_6731.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6731.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6731.jpg', 0, 1),
(143, '7008_IMG_6761.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6761.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6761.jpg', 0, 1),
(144, '7008_IMG_6783.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6783.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6783.jpg', 0, 1),
(145, '7008_IMG_6808.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6808.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6808.jpg', 0, 1),
(147, '7008_IMG_6794.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/7008_IMG_6794.jpg', 'http://permianhomes.com/assets/upload/images/7008_IMG_6794.jpg', 0, 1),
(148, '8wHf7Zu.jpg', 'http://permianhomes.com/assets/upload/images/thumbs/8wHf7Zu.jpg', 'http://permianhomes.com/assets/upload/images/8wHf7Zu.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(200) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `site_title` varchar(60) DEFAULT NULL,
  `meta_desc` varchar(250) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `url`, `uid`, `site_title`, `meta_desc`, `meta_keywords`) VALUES
(2, 'permian.openskymedia.com', '4556602514ec4a0885a5fa', 'Permian Homes: New Home Builder Construction in Midland and ', 'Permian Homes New Custom Home Construction Builder in Odessa and Midland Texas.', '0'),
(7, 'permian.local', '4556602514ec4a0885a5fa', 'Permian Homes: New Construction in Midland and Odessa', 'Permian Homes New Home Construction Builder in Odessa and Midland Texas.', '0'),
(12, 'permianrealestate.com', '4556602514ec4a0885a5fa', 'Permian Homes: New Construction in Midland and Odessa', 'Permian Homes New Home Construction Builder in Odessa and Midland Texas.', '0'),
(13, 'permianhomes.com', '4556602514ec4a0885a5fa', 'Permian Homes: New Home Builder Construction in Midland and ', 'Permian Homes New Home Construction Builder in Odessa and Midland Texas.', '0'),
(14, 'www.permianhomes.com', '4556602514ec4a0885a5fa', 'Permian Homes: New Home Builder Construction in Midland and ', 'Permian Homes New Home Construction Builder in Odessa and Midland Texas.', '0');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `templateid` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`templateid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zip` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `street`, `city`, `state`, `zip`) VALUES
(1, 2130706433, 'administrator', '2886f0974559106e113db7490cb1c97c7812271e', '9462e8eee0', 'admin@admin.com', '', NULL, 1338759307, '9d2e1e746f731a35675bbdd3c4bca5a89c303d54', 1268889823, 1415742560, 1, 'Admin', 'istrator', 'ADMIN', '0', '48 W Market St', 'Salt Lake City', 'UT', '84101');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
