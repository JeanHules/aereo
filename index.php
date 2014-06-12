<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST'){
    $email = $_POST['email'];//filter_input(INPUT_POST, 'email');
    file_put_contents("./../etc/emails.txt", $email."\r\n", FILE_APPEND | LOCK_EX);
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="At Aereo, we believe that technology can play a vital role in making people&rsquo;s lives better. So, we set out to build a technology that was simple and useful, combining the well-known consumer antenna and DVR and the power of the Internet and cloud computing. The results: Aereo&rsquo;s unique cloud-based antenna and DVR technology.">
    <meta name="author" content="Aereo">
    <link rel="shortcut icon" href="https://aereo.com/favicon.ico">

    <title>Aereo | Protect My Antenna</title>
		
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="Aereo | Protect My Antenna">
		<meta itemprop="description" content="At Aereo, we believe that technology can play a vital role in making people&rsquo;s lives better. So, we set out to build a technology that was simple and useful, combining the well-known consumer antenna and DVR and the power of the Internet and cloud computing. The results: Aereo&rsquo;s unique cloud-based antenna and DVR technology.">
		<meta itemprop="image" content="img/social.jpg">

		<meta property="og:title" content="Aereo | Protect My Antenna" />
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.protectmyantenna.org"/>
		<meta property="og:image" content="img/social.jpg"/>
		<meta property="og:description" content="At Aereo, we believe that technology can play a vital role in making people&rsquo;s lives better. So, we set out to build a technology that was simple and useful, combining the well-known consumer antenna and DVR and the power of the Internet and cloud computing. The results: Aereo&rsquo;s unique cloud-based antenna and DVR technology." />
		
		<meta name="twitter:card" content="Aereo | Protect My Antenna">
		<meta name="twitter:url" content="http://www.protectmyantenna.org">
		<meta name="twitter:title" content="Aereo | Protect My Antenna">
		<meta name="twitter:description" content="At Aereo, we believe that technology can play a vital role in making people&rsquo;s lives better. So, we set out to build a technology that was simple and useful, combining the well-known consumer antenna and DVR and the power of the Internet and cloud computing. The results: Aereo&rsquo;s unique cloud-based antenna and DVR technology.">
		<meta name="twitter:image" content="img/social.jpg">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/hack.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/scrollTo.js"></script>
    <script src="js/init.js"></script>
    <script src="js/flowtext.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-50142081-1', 'protectmyantenna.org');ga('send', 'pageview');
    </script>
  </head>
<style>


</style>
  <body>
    <script>
window.fbAsyncInit=function(){FB.init({appId: '733861173301213', status: true, cookie: true, xfbml: true});};(function (d, s, id){var js, fjs=d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
    </script><script type="text/javascript">
(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/plusone.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po, s);})();
    </script><script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
    
<div id="wrap">
<div class="header">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav float-right">
            <li class="Home active"><a href="#LearnMore" id="speakout-btn" class="speakout-btn uppercase">Speak Out</a></li>
            <!-- <li class="active Home"><a href="#Home">Home</a></li> -->
	          <li class="LearnMore"><a href="#LearnMore" class="">Learn More</a></li>
	          <li class="Connect"><a href="#Connect" class="">Connect</a></li>
            <li id="social-links-li">
	            <ul id="headerSocialUl" class="horizontal">
	            	<li>
			        		<!-- <div class="fb-share-button" data-type="button"></div> -->
			        		<a href="https://facebook.com/aereo" target="_blank"><img src="img/icon-facebook-top.png"></a>
			        	</li>
			        	<li>
			        		<!--
<a href="https://twitter.com/share" class="twitter-share-button" data-related="aereo" data-lang="en" data-size="medium" data-count="none" data-text="I want to protect my right to use a cloud-based antenna. Learn more
at">Tweet</a>
-->
									<a href="https://www.twitter.com/aereo" target="_blank"><img src="img/icon-twitter-top.png"></a>
			        	</li>
			        	<li>
			        		<!-- <div class="g-plusone" data-size="medium" data-annotation="none"></div> -->
			        		<a href="https://plus.google.com/107341388923372723210" target="_blank"><img src="img/icon-google-top.png"></a>
			        	</li>
			        	<!--
<li>
									<script src="//platform.linkedin.com/in.js" type="text/javascript">
									  lang: en_US
									</script>
									<script type="IN/Share"></script>
								</li>
-->
	            </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>

<div id="main">

<section id="Home" class="hero-image nav-section top-section">
	<div id="hero" class="hero slide">
		<img src="img/header.jpg" id="headerImg" class="full-width">
		<div id="headerTextBox" class="text-center">
			<h1 class="green-text anton uppercase">Protect My Antenna</h1>
			<p class="special-font text-center green-text">Since the dawn of television, American have had the right to use an antenna to watch over-the-air broadcast television.  Let's keep it that way.
			</p>
			<a href="#sideBarSection" class="scrollto-btn speakout-btn white-bg-btn uppercase">Speak Out</a>
		</div>
	</div>
	
</section>
<section id="LearnMore" class="text-area nav-section full-width-on-mobile">
	<div class="container">
	
	<div class="row">
	
			<div id="sideBarSection" class="col-sm-4 blog-sidebar float-right">
      <div id="sidebar-module" class="default sidebar-module sidebar-module-inset">
      	<div class="h1-box uppercase anton text-center">
        Speak Out
      	</div>
        <p class="small-text green-text text-center">Protect your right to use a cloud-based antenna. Contact your local legislators.</p>
        <form id="zipCodeForm" type="submit">
        	<div class="zipcode-box">
       	  	<input type="text" maxlength="5" id="zipCodeField" placeholder="Zip Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Zip Code'">
       	 	  <input type="submit" id="zipCodeBtn" >
       	 	  <p id="errorMessage"></p>
       	  </div>
        </form>
        
        <div id="showOnAjax">
	        <p class="special-font green-text medium-size">What to say?</p>
	        <p class="body-text">Fill in your name and the congressmans name below. Then copy the letter and paste it to one of the congressmen through Twitter, Facebook or email.</p>
	        <textarea id="messageToText">
Dear [Elected Official X], 

The Supreme Court got it right. 

On June XX, 2014, our nation's highest court upheld and protected my right to use a modern-day, cloud-based antenna to access free, over-the-air television. The decision in the Aereo case is a win for all consumers who want more choice, better technologies and more competition in the television marketplace. 

For decades, Americans have had the right to watch over-the-air broadcast television using an antenna. And, the Supreme Court has protected our right to use VCRs, DVRs and other modern television equipment. The Court's decision to allow Aereo's lawful cloud-based antenna technology to move forward is a boon to innovation and progress.This is a victory for consumers and I urge you to continue to work to preserve and protect my right to use the antenna of my choice to access free over-the-air broadcast television. 

Sincerely 
[Consumer X]

					</textarea>
					<div id="congressOfficials"></div>
				
        </div>
		</div>
		
		</div>	

    <div id="blog-main" class="col-sm-8 blog-main float-left">
			
			<h3 class="black-text featured-text padding-top-25">On June XX, 2014 the United States Supreme Court issued a decision that protects and preserves your right to use the antenna of your choice to access broadcast television. This historic decision is a victory for innovation, progress and most of all, for you, the consumer.  </h3>
			
			
			<h2 class="green-text special-font padding-top-15">Make your voice heard</h2>

			<p class="main-p">Contact your lawmakers and tell them how important it is to you that the nation's highest court has protected your right to use a cloud-based antenna to access over-the-air broadcast television. </p>
			
			<p class="main-p">Read the full decision here and tell your elected officials that you're happy the Supreme Court has protected innovation, consumer choice and your television freedom.</p>
			
			<h2 class="green-text special-font padding-top-15">Learn More</h2>

			<p class="second-p special-font green-text">Since the dawn of television, American consumers have had the right to use an antenna to watch over-the-air broadcast television.  And, since that time, new technologies have emerged that have enhanced the television watching experience. From VCRs and DVRs, to rabbit-ear and cloud-based antennas, innovations on technology and equipment have made consumer access to free broadcas television simpler and more convenient. </p>
			
			<p class="main-p">At Aereo we like to make things simple for you. We set out to modernize access to free broadcast television. We set out to make it easy for consumers to use the same combination of equipment they can use at home to do this - an antenna and DVR – and do this remotely without boxes or wires. Ever wonder where the boxes or wires went? Or how they got  there? In this section we provide you with answers. </p>
			
			<p class="second-p special-font green-text">Aereo's win at the Supreme Court was a win for consumers. <a href="#" class="second-p special-font green-text">Click here to learn more about Aereo's historic legal victory and journey.</a></p>
			
			<div id="accordion" class="vpadding-0">
				<a href="#" id="accordion-trigger" class="padding-bottom-13 atoggle-btn"><p><span class='plus'>+</span><span class='minus'>-</span>Background Brief</p></a>
				<div class="accordion padding-top-13">
					<ul>
						
						<li>
						<div class="link-area full-width-on-mobile full-width-on-tablet">
						<a href="#" class="accordion-toggle-btn atoggle-btn"><h2><span class='plus'>+</span><span class='minus'>-</span>Opinions</h2></a>
						<div class="links">
							<ul class="link-list">
		              <li><a href="pdf/1_opinions/2%20-%20Second%20Circuit%20Court%20of%20Appeals%20Decision%20(April%2011,%202013).pdf" class="main-link" target="_blank">Second Circuit Court of Appeals Decision</a><span class="date">(April 1, 2013)</span></li>
		              <li><a href="pdf/1_opinions/Southern%20District%20of%20New%20York%20Decision%20(Judge%20Alison%20J.%20Nathan)%20(July%2011,%202012).pdf" class="main-link" target="_blank">Southern District of New York Decision</a><span class="date">(Judge Alison J. Nathan) (July 11, 2012)</span></li>
		           </ul>
						</div>
						</div>
					</li>
						
						<li>
						<div class="link-area full-width-on-mobile full-width-on-tablet">
						<a href="#" class="accordion-toggle-btn atoggle-btn"><h2><span class='plus'>+</span><span class='minus'>-</span>Aereo&rsquo;s Briefs</h2></a>
						<div class="links">
		           <ul>
		              <li><a href="pdf/2_aereos_briefs/Aereo%20Response%20Brief%20(March%2026,%202014)%20FINAL%20FILED-1.pdf" class="main-link" target="_blank">Aereo&rsquo;s US Supreme Court Respondent&rsquo;s Brief</a><span class="date">(March 26, 2014)</span></li>
		              <li><a href="pdf/2_aereos_briefs/Aereo&rsquo;s%20U.S.%20Supreme%20Court%20Brief%20on%20Petition%20for%20a%20Writ%20of%20Certiorari%20(December%2012,%202013).pdf" class="main-link" target="_blank">Aereo&rsquo;s U.S. Supreme Court Brief on Petition for a Writ of Certiorari</a><span class="date">(December 12, 2013)</span></li>
		              <li><a href="pdf/2_aereos_briefs/Aereo&rsquo;s%20Appeal%20Brief%20(Second%20Circuit)%20(October%2019,%202012).pdf" class="main-link" target="_blank">Aereo&rsquo;s Second Circuit Court of Appeals Appellee&rsquo;s Brief (Second Circuit) </a><span class="date">(October 19, 2012)</span></li>
		           </ul>
						</div>
						</div>
	       	</li>
						
						<li class="">
							<div class="link-area no-padding full-width-on-mobile full-width-on-tablet">
								<a href="" class="accordion-toggle-btn atoggle-btn">
								<h2>
									<span class='plus'>+</span>
									<span class='minus'>-</span>
									Amicus Briefs
								</h2>
							</a>
								<div class="links">
			                 <ul>
									        <li>
								        	<a class="main-link" href="pdf/3_amicus_briefs/ABC%20v.%20Aereo%20-%20DISH%20&amp;%20EchoStar%20Amicus%20Brief.pdf" target="_blank">Brief of Dish Network L.L.C. and Echostar Technologies L.L.C. as Amici Curiae in Support of Aereo</a><span class="date">(April 2, 2014)</span>
								        </li>
								
								        <li>
								        	<a class="main-link" href="pdf/3_amicus_briefs/13-461%20bsac%20American%20Cable%20Assoc..pdf" target="_blank">Brief of the American Cable Association in Support of Aereo</a> <span class="date">(April 2, 2014)</span>
								        </li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461%20bsac%20Competition%20Law%20Professors.pdf"
								        target="_blank">Brief of Competition Law Professors, Southwestern Law
								        Student Andrew Pletcher, and Professor Michael M. Epstein, in
								        Association with the Amicus Project At Southwestern Law School, as
								        Amici Curiae in Support of Aereo</a><span class="date">(April 2,
								        2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461%20bsac%20EFF%20PK%20CEA%20EA.pdf" target=
								        "_blank">Brief of the Electronic Frontier Foundation, Public Knowledge,
								        the Consumer Electronics Association, and Engine Advocacy in Support of
								        Aereo</a><span class="date">(April 2, 2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461%20Small%20Broadcasters.pdf" target=
								        "_blank">Brief of Small and Independent Broadcasters in Support of
								        Aereo</a><span class="date">(April 2, 2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461_bsac_Law%20Professors%20and%20Scholars.pdf"
								        target="_blank">Brief of Amici Curiae of Law Professors and Scholars in
								        Support of Aereo</a><span class="date">(April 2, 2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461bsac%20The%20Consumer%20Federation.pdf"
								        target="_blank">Brief of the Consumer Federation of America and the
								        Consumers Union in Support of Aereo</a><span class="date">(April 2,
								        2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461bsacComputerand%20CommunicationsIndustry.pdf"
								        target="_blank">Brief of Computer &amp; Communications Industry
								        Association and Mozilla Corporation as Amici Curiae in Support of
								        Aereo</a><span class="date">(April 2, 2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/13-461%20bsac%2036%20Law%20Professors.pdf" target=
								        "_blank">Brief of 36 Intellectual Property and Copyright Law Professors
								        as Amici Curiae in Support of Aereo</a><span class="date">(April 2,
								        2014)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/The%20Consumer%20Federation%20of%20America%20and%20Consumers%20Union%20in%20Support%20of%20Appellees%20(Second%20Circuit)%20(November%2013,%202012).pdf"
								        target="_blank">The Consumer Federation of America and Consumers Union
								        in Support of Aereo (Second Circuit)</a><span class="date">(November
								        13, 2012)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/Intellectual%20Property%20and%20Copyright%20Law%20Professors%20in%20Support%20of%20Aereo%20Amicus%20Brief%20(Second%20Circuit)%20(October%2026,%202012).pdf"
								        target="_blank">Intellectual Property and Copyright Law Professors in
								        Support of Aereo Amicus Brief (Second Circuit)</a><span class=
								        "date">(October 26, 2012)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/Electronic%20Frontier%20Foundation,%20Public%20Knowledge,%20and%20the%20Consumer%20Electronics%20Association%20Amicus%20Brief%20in%20Support%20of%20Aereo%20(Second%20Circuit)%20(October%2026,%202012).pdf"
								        target="_blank">Electronic Frontier Foundation, Public Knowledge, and
								        the Consumer Electronics Association Amicus Brief in Support of Aereo
								        (Second Circuit)</a> <span class="date">(October 26, 2012)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/CCIA%20&amp;%20Internet%20Association%20Amicus%20Brief%20in%20Support%20of%20Affirmance%20(Second%20Circuit)%20(October%2025,%202012).pdf"
								        target="_blank">CCIA &amp; Internet Association Amicus Brief in Support
								        of Affirmance (Second Circuit)</a><span class="date">(October 25,
								        2012)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/Electronic%20Frontier%20Foundation%20&amp;%20Public%20Knowledge%20Amicus%20Brief%20(District%20Court)%20(May%2023,%202012).pdf"
								        target="_blank">Electronic Frontier Foundation &amp; Public Knowledge
								        Amicus Brief (District Court)</a><span class="date">(May 23,
								        2012)</span></li>
								
								        <li><a class="main-link" href=
								        "pdf/3_amicus_briefs/NetCoalition%20and%20CCIA%20Amicus%20Brief%20(District%20Court)%20(May%2022,%202012).pdf"
								        target="_blank">NetCoalition and CCIA Amicus Brief (District
								        Court)</a><span class="date">(May 22, 2012)</span></li>
									    </ul>
								</div>
			        </div>
			      </li>
			      
			    </ul>
			    
			  </div><!-- End of .accordian -->
		  </div> <!-- End of #Accordian -->
		  
			<p class="second-p special-font green-text">Hear from the individuals behind Aereo's creation and operation as give you an inside look at Aereo and its technology.</p>
			
			<div class="iframe-box">
				<iframe width="640" height="360" class="iframe-video " src="//www.youtube.com/embed/saQtNCMkoRk?controls=0&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			
			

	
		</div><!-- End of .Blog-main -->
		
		
		</div>

	</div>
</section>


<section id="Connect" class="section nav-section no-bottom-padding">
	<div id="bottomGreen" class="full-width green-bg full-width-on-mobile full-width-on-tablet">
		<div class="container">
		
			<div class="text-box">
			<h1 class="white-text">About This Site</h1>
			<p class="main-p white-text full-width">We've created this website to provide information about these very important issues. In the “Learn More” section, you'll find various court briefs including ones written by policy and industry thought leaders such as the Consumer Electronics Association, Electronic Frontier Foundation, Computer & Communications Industry Association, Public Knowledge, the Center for Democracy in Technology and others.
			</p>  

			<p class="main-p white-text full-width padding-top-50">We hope you&rsquo;ll take the time to read about these issues and why the stakes are much bigger than just Aereo.</p>

			</div>
			
			<div class="field-box padding-left-70">
			<p class="main-p white-text padding-top-10 full-width">Sign up for email updates here:</p>
			<form>
			<div class="relative overflow-hidden email-box">
				<div class="full-width ">
					<input type="email" id="email" class="float-left fade-out-on-success" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'">
					<input type="submit" id="submit" class="float-left fade-out-on-success" value="Submit">
				</div>
				
				
			</div>
			
			<div id="errorBox">
				<span id="errorEmail" class="float-left absolute"></span>
				<span id="formsuccess" class="float-left email-message absolute">Thanks!</span>
			</div>
			</form>
			<div id="socialBox" class="">
				<p class="social-footer-title">Spread the word:</p>
				<ul id="footerSocialUl" class="horizontal">
        	<li>
        		<!-- <div class="fb-share-button" data-type="box_count"></div> -->
        		<a href="https://facebook.com/aereo" target="_blank"><img src="img/icon-facebook.png"></a>
        	</li>
        	<li>
        		<!--
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="vertical" data-text="I want to protect my right to use a cloud-based antenna. Learn more
at">Tweet</a>
-->
						<a href="https://www.aereo.com/aereo" target="_blank"><img src="img/icon-twitter.png"></a>
        	</li>
        	<li>
        		<!-- <div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60"></div> -->
        		<a href="https://plus.google.com/107341388923372723210" target="_blank"><img src="img/icon-google.png"></a>
        	</li>
        	<!--<li>
        		
        		
<script src="//platform.linkedin.com/in.js" type="text/javascript">
						  lang: en_US
						</script>
						<script type="IN/Share" data-counter="top"></script>

        	</li>-->
        </ul>
			</div>
			
			</div>
			
			
		</div>
	</div>
	<footer>
	<div class="container">
		<ul class="float-left">
			<li>
				<a href="https://aereo.com/privacy" target="_blank" class="white-text">Privacy</a>
			</li>
			<li>
				<a href="https://aereo.com/terms" target="_blank" class="white-text">Terms & Conditions</a>
			</li>
		</ul>
		
		<p class="white-text copyright-text float-right">Copyright © 2014 Aereo, Inc.</p>
	</div>
</footer>
</section>

<script type="text/javascript">
(function(e){e(document).ready(function(){function t(){e(".side-text").width(e("#tv").width()-30);e(".smallBox").height(e(".bigBox").height()+10)}e(".nav li a").on("click",function(){e(".navbar-collapse.in").collapse("hide")});e(window).resize(t);t();var n="";e(document).ready(function(){n=e("#hero")});e(window).scroll(function(){var t=e(window).scrollTop();n.css({"background-position":"center "+t*.57+"px"})});var r;e("#zipCodeBtn").click(function(t){r=e("#zipCodeField").val();e.ajax({url:"http://congress.api.sunlightfoundation.com/legislators/locate?zip="+r+"&apikey=42c9ef01b502414494caa1a552626820&jsonp=my_callback",dataType:"jsonp",success:function(t){if(t.count==0){e("#errorMessage").text("Invalid Zip Code");e("#errorMessage").animate({height:28},100)}else{e.scrollTo(e("#LearnMore"),400,{easing:"swing",offset:{top:-80}});e("#sidebar-module.default").removeClass("default fixed-top absolute-bottom").addClass("expanded");e("#errorMessage").animate({height:0},100);e("#showOnAjax").fadeIn("fast");var n=[];var r=0;var i=e("#congressOfficials");i.html("");e.each(t.results,function(t,n){e("<div />").attr("class","official-box").append(e("<div />").attr("class","name-box").append(e("<span>").text(n.title+" "+n.first_name+" "+n.last_name+" ("+n.party+")").attr("class","green-text special-font float-left official-name")),e("<div />").attr("class","link-boxx-box").append(e("<div />").attr("class","link-box email-box").append(e("<a />").attr("class","email-bttn").attr("target","_blank").attr("href",n.contact_form).append(e("<img>").attr("src","img/email1.png"))),e("<div />").attr("class","link-box facebook-box").append(e("<a />").attr("class","facebook-bttn middle").attr("target","_blank").attr("href","https://www.facebook.com/"+n.facebook_id).append(e("<img>").attr("src","img/facebook1.png"))),e("<div />").attr("class","link-box twitter-box").append(e("<a />").attr("class","twitter-bttn").attr("target","_blank").attr("href","https://www.twitter.com/"+n.twitter_id).append(e("<img>").attr("src","img/twitter1.png"))))).appendTo(i).trigger("create");if(n.contact_form!=null){e(".email-box").addClass("contact-positive")}if(n.facebook_id!=null){e(".facebook-box").addClass("facebook-positive")}if(n.twitter_id!=null){e(".twitter-box").addClass("twitter-positive")}})}}});t.preventDefault()});e(document).ready(function(){e("#zipCodeField").keydown(function(t){if(e.inArray(t.keyCode,[46,8,9,27,13,110,190])!==-1||t.keyCode==65&&t.ctrlKey===true||t.keyCode>=35&&t.keyCode<=39){return}if((t.shiftKey||t.keyCode<48||t.keyCode>57)&&(t.keyCode<96||t.keyCode>105)){t.preventDefault()}})});e("#submit").click(function(){e("#errorEmail").html("");var t=0;var n=0;var r=e("#email").val();if(r==""){e("#errorEmail").html("Please enter your email address");if(t==0){t=1}n=1}else{var i=/^([A-Za-z0-9_\-\.\+])+\@([A-Za-z0-9_\-\.\+])+\.([A-Za-z]{2,4})$/;if(i.test(r)==false){e("#errorEmail").html("Please enter a valid email address");if(t==0){e("#constantEmail").focus();t=1}n=1}}if(n==1){return false}e.ajaxSetup({cache:false});e("#email").prop("disabled",true);e.ajax({type:"POST",url:"/",data:{email:e("#email").val()},success:function(t){e("#formsuccess").fadeIn();e("#errorEmail").fadeOut();e("#email").val("")}});return false})});var t=e(".iframe-video"),n=e(".iframe-box");t.each(function(){e(this).data("aspectRatio",this.height/this.width).removeAttr("height").removeAttr("width")});e(window).resize(function(){var r=n.width();t.each(function(){var t=e(this);t.width(r).height(r*t.data("aspectRatio"))})}).resize();window.boxDistance="180";e(window).load(function(){if(e(window).width()>=768){e("#sidebar-module").width(e("#sideBarSection").width())}e(window).resize(function(){if(e(window).width()>=768){e("#sideBarSection").height(e("#blog-main").height());e("#sidebar-module.fixed-top").width(e("#sideBarSection").width())}else{e("#sideBarSection").css("height","auto");e("#sidebar-module").css("width","100%");e("#sidebar-module").removeClass("fixed-top absolute-top absolute-bottom")}}).resize();var t=e("#LearnMore").height()-e("#sidebar-module.default").height()+e("#LearnMore").offset().top-boxDistance;var n=e("#sidebar-module.default").height();e(window).scroll(function(){var n=e(this).scrollTop();if(n<e("#LearnMore").offset().top-30){e("#sidebar-module.default").removeClass("fixed-top absolute-bottom");e("#sidebar-module.default").addClass("absolute-top")}else if(n>t){e("#sidebar-module.default").removeClass("fixed-top absolute-top");e("#sidebar-module.default").addClass("absolute-bottom")}else{e("#sidebar-module.default").removeClass("absolute-bottom absolute-top");e("#sidebar-module.default").addClass("fixed-top");if(e(window).width()>=768){e("#sidebar-module.fixed-top.default").width(e("#sideBarSection").width())}}})});var r=e(".accordion").hide();var i=e(".accordion .links").hide();e("#accordion-trigger").click(function(){e(this).toggleClass("active");r.slideToggle();return false});e(".accordion-toggle-btn").click(function(){e(this).toggleClass("active");e(this).next().slideToggle();return false})})(jQuery)

</script>
</body></html>