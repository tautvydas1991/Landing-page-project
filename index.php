<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Tautvydas Bajarūnas" name="author">
	<title>Vortex | Your Website Solution</title>
	<link href="https://fonts.googleapis.com/css?family=Spectral&display=swap" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/form.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript">
	</script>
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul class="menu menu-scroll">
					<li class="menu-list">
						<a href="#home"><img alt="company logo" class="main-logo" src="images/menu-icons/logo-menu.svg" width="45"></a>
					</li>
					<li class="menu-list">
						<a class="menu-item" href="#home">Home</a>
					</li>
					<li class="menu-list">
						<a class="menu-item" href="#about">About</a>
					</li>
					<li class="menu-list">
						<a class="menu-item" href="#footer">Contacts</a>
					</li>
					<li class="menu-list"><button class="btn btn-menu-item" onclick="window.location.href = '#packages';">Buy</button></li>
					<li class="responsive-menu-list"><button class="btn-dropdown"><img alt="menu button" src="images/menu-icons/responsive-menu.svg" width="30"></button></li>
				</ul>
				<ul class="responsive-menu">
					<li class="responsive-menu-list">
						<a class="responsive-menu-item" href="#home">Home</a>
					</li>
					<li class="responsive-menu-list">
						<a class="responsive-menu-item" href="#about">About</a>
					</li>
					<li class="responsive-menu-list">
						<a class="responsive-menu-item" href="#footer">Contacts</a>
					</li>
					<li class="responsive-menu-list">
						<a class="responsive-menu-item" href="#packages">Buy</a>
					</li>
				</ul>
			</nav>
		</header>
		<section id="home">
			<div class="home-container">
				<h1>Save big on a new website</h1>
				<p>For a limited time we're offering website packages to small businesses in all over the world. Don't miss this opportunity to save big on a new website for your small business.</p><button class="btn btn-view" onclick="window.location.href = '#packages';">View our packages</button>
			</div><img alt="a group of people working on a website" class="home-image" src="images/home/home.svg">
		</section>
		<section id="about">
			<h1>What we offer</h1>
			<div class="about-column">
				<div class="about-box">
					<img alt="responsive design icon" src="images/about-icons/responsive.svg" width="90">
					<h3>A design supported for all devices</h3>
					<p>An optimal user experience no matter the device, screen size or browser being used.</p><button class="btn btn-more" onclick="window.location.href = '#packages';">More</button>
				</div>
				<div class="about-box">
					<img alt="hosting icon" src="images/about-icons/domain.svg" width="90">
					<h3>Web hosting services &amp; a free domain</h3>
					<p>Our packages come with Web Hosting and a free Domain for your website for 2 years.</p><button class="btn btn-more" onclick="window.location.href = '#packages';">More</button>
				</div>
			</div>
			<div class="about-column">
				<div class="about-box">
					<img alt="techical support icon" src="images/about-icons/support.svg" width="90">
					<h3>Technical support</h3>
					<p>Ongoing website maintenance and updates, to ensure a site’s continued ‘well-being’.</p><button class="btn btn-more" onclick="window.location.href = '#packages';">More</button>
				</div>
				<div class="about-box">
					<img alt="administration icon" src="images/about-icons/login.svg" width="90">
					<h3>Easy-to-use administration panel</h3>
					<p>We'll setup a easy-to-use content administration system for your webiste.</p><button class="btn btn-more" onclick="window.location.href = '#packages';">More</button>
				</div>
			</div>
		</section>
		<section id="projects">
			<h1>Our projects</h1>
			<div class="projects-box">
				<a href="https://demo.w3layouts.com/demos_new/template_demo/02-04-2019/bank_card-demo_Free/674123870/web/index.html" target="_blank"><img alt="website template" class="projects-img" src="images/projects/1.jpg"></a>
			</div>
			<div class="projects-box">
				<a href="https://demo.w3layouts.com/demos_new/template_demo/22-05-2019/horse_crew_demo_Free/111709348/web/index.html" target="_blank"><img alt="website template" class="projects-img" src="images/projects/2.jpg"></a>
			</div>
			<div class="projects-box">
				<a href="https://w3layouts.com/marketing-a-corporate-category-bootstrap-responsive-web-template/" target="_blank"><img alt="website template" class="projects-img" src="images/projects/3.jpg"></a>
			</div>
			<div class="projects-box">
				<a href="https://demo.w3layouts.com/demos_new/template_demo/17-05-2019/dog_home-demo_Free/1002518393/web/index.html" target="_blank"><img alt="website template" class="projects-img" src="images/projects/4.jpg"></a>
			</div>
			<div class="projects-box">
				<a href="https://demo.w3layouts.com/demos_new/template_demo/14-05-2019/mulching-demo_Free/2130651615/web/index.html" target="_blank"><img alt="website template" class="projects-img" src="images/projects/5.jpg"></a>
			</div>
			<div class="projects-box">
				<a href="https://demo.w3layouts.com/demos_new/template_demo/27-02-2019/utilizer_demo_Free/364591082/web/index.html" target="_blank"><img alt="website template" class="projects-img" src="images/projects/6.jpg"></a>
			</div>
		</section>
		<section id="packages">
			<h1 class="header-pricing">Our packages</h1>
			<div class="package-container">
				<div class="package-box">
					<h2>Basic</h2>
					<p class="package-description">Get started with a landing page website for your website.</p>
					<p class="price">400 EUR</p>
					<p>100% down payment required</p>
					<ul>
						<li>1 Landing Page</li>
						<li>Responsive &amp; Cross-Browser</li>
						<li>2 Year Web Hosting</li>
						<li>2 Year Domain Registration</li>
						<li>Google Analytics Itegration</li>
						<li>Google Console Setup</li>
						<li>Basic SEO</li>
						<li>Free Contact Form</li>
					</ul>
					<div class="button-align">
						<button class="btn btn-get-started">Get started now</button>
					</div>
				</div>
				<div class="package-box">
					<h2>Advanced</h2>
					<p class="package-description">2-5 page informational website with standard customization.</p>
					<p class="price">800 EUR</p>
					<p>100% down payment required</p>
					<ul>
						<li>Up to 5 Pages</li>
						<li>Theme Installation &amp; Setup</li>
						<li>2 Year Web Hosting</li>
						<li>2 Year Domain Registration</li>
						<li>2 Year WhoIs Protection</li>
						<li>Google Console Setup</li>
						<li>Basic SEO</li>
						<li>Google Analytics Integration</li>
						<li>Free Contact Form</li>
						<li>Custom WordPress Website</li>
					</ul>
					<div class="button-align">
						<button class="btn btn-get-started">Get started now</button>
					</div>
				</div>
				<div class="package-box">
					<h2>Premium</h2>
					<p class="package-description">The perfect solution for businesses - A fully customizable website.</p>
					<p class="price">1200 EUR</p>
					<p>100% down payment required</p>
					<ul>
						<li>Up to 10 Pages</li>
						<li>Responsive &amp; Cross-Browser</li>
						<li>2 Year Web Hosting</li>
						<li>3 Year Domain Registration</li>
						<li>Google Analytics Itegration</li>
						<li>Google Console Setup</li>
						<li>Basic SEO</li>
						<li>Free Contact Form</li>
						<li>Custom WordPress Website</li>
						<li>Theme Installation &amp; Setup</li>
						<li>2 Year Website Maintenance Guarantee</li>
					</ul>
					<div class="button-align">
						<button class="btn btn-get-started">Get started now</button>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer">
			<div class="footer-top">
				<div class="contact-information">
					<h1>Contact us</h1>
					<p><img alt="address icon" class="contact-icons" src="images/footer-icons/user.svg" width="25"> Lithuania, Grigiškės, Vilniaus St. 12</p>
					<p><img alt="phone icon" class="contact-icons" src="images/footer-icons/phone.svg" width="25"> <a class="footer-contacts" href="tel:+37069945758">+37069945758</a></p>
					<p><img alt="email icon" class="contact-icons" src="images/footer-icons/email.svg" width="25"> <a class="footer-contacts" href="mailto:contact@us.com">contact@us.com</a></p>
				</div><iframe allowfullscreen height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9227.583809731022!2d25.078809866665548!3d54.67625965685955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dded57ff8e0901%3A0x55928afb0c75d910!2zR3JpZ2nFoWtpxbMga3VsdMWrcm9zIGNlbnRyYXM!5e0!3m2!1slt!2slt!4v1569274699061!5m2!1sen!2sen" width="400"></iframe>
			</div>
			<div class="footer-middle">
				<div class="contact-form-info">
					<h1>Stay up to date</h1>
					<p>Your email will be used to send you our newest updates. You can unsubscribe at any time using the link in our emails.</p>
				</div>
				<form action="php/db.php" class="email-subscribe" method="post">
					<input name="email_subscription" placeholder="Enter your email" type="email"> <input class="btn btn-subscribe" name="email_subscribe" type="submit" value="Subscribe">
				</form>
			</div>
			<div class="footer-bottom">
				<ol>
					<li class="social-icons">
						<a href="https://facebook.com" target="_blank"><img alt="facebook logo" src="images/footer-icons/facebook.svg" width="30"></a>
					</li>
					<li class="social-icons">
						<a href="https://instagram.com" target="_blank"><img alt="instagram logo" src="images/footer-icons/instagram.svg" width="30"></a>
					</li>
					<li class="social-icons">
						<a href="https://twitter.com" target="_blank"><img alt="twitter logo" src="images/footer-icons/twitter.svg" width="30"></a>
					</li>
				</ol>
				<p>&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</p>
			</div>
		</footer>
	</div>
	<script>
	       $(document).ready(function() {
	               function modalPopup(){
	               $('.btn-get-started').click(function() {
	                   $('.form-container').fadeIn();
	                   $('.form-modal').fadeIn();
	                   $('body').css('overflow','hidden');
	               });
	               $('.form-close').click(function() {
	                   $('.form-container').fadeOut();
	                   $('.form-modal').fadeOut();
	                   $('body').css('overflow','auto');

	               });
	               $('.form-modal').click(function() {
	                   $('.form-container').fadeOut();
	                   $('.form-modal').fadeOut();
	                   $('body').css('overflow','auto');
	               });
	           }
	           modalPopup();
	           
	               function dropdown(){
	                   $('.btn-dropdown').click(function() {
	                       $('.responsive-menu').toggle(function() { 
	                       });
	                   });
	                  $('.responsive-menu-item').click(function() {
	                       $('.responsive-menu').toggle(function() { 
	                       });
	                   });
	               }
	           dropdown();
	           
	           function menuScrolleffect(){
	               $(window).scroll(function(){
	                   if($(window).scrollTop() <= 40){
	                       $('.menu').addClass('menu-scroll');
	                   } else {
	                       $('.menu').removeClass('menu-scroll');
	                   }
	               });
	           };
	           menuScrolleffect();
	           function aboutAnimation() {
	               $(window).scroll(function() {
	                   if($(window).scrollTop() <= 800){
	                     $(".about-box").animate({opacity: 1, height: "270px",easing: "easein"}, 1000, function() {
	                     });
	                   } 
	               });
	           }
	           aboutAnimation();
               function formSubmit(){
                    $('.btn-start').click(function() {
                    $('.form-container').fadeOut();
                    $('.form-modal').fadeOut();
                    $('body').css('overflow','auto');
                    });
                }
                formSubmit();
	       });     
	</script>
    <?php include('php/form.php'); ?>
</body>
</html>