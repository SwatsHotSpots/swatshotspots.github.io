<?php

if($_POST["submit"]) {
    $recipient="swatshotspots@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["author"];
    $senderEmail=$_POST["email"];
    $message=$_POST["text"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    <!-- $thankYou="<p>Thank you! Your message has been sent.</p>"; -->
}
?>
<!-- PHP for sending form data as email-->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swat's Hot Spots</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2056 simple life
http://www.tooplate.com/view/2056-simple-life
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.scrollTo-min.js'></script>
<script type='text/javascript' src='js/jquery.localscroll-min.js'></script>
<script type="text/javascript">
$(document).ready(function () {
$.localScroll();
});
</script>
</head>

<body>
	<div id="tooplate_wrapper">
		<div id="tooplate_sidebar">
			<div id="site_title"><a href="#">Swat's Hot Spots<span>Finding Available Spaces</span></a></div>
			<div id="tooplate_menu">
				<ul>
					<li><a href="#home" class="home"><span></span>Home</a></li>
					<li><a href="#about" class="about"><span></span>About</a></li>
					<li><a href="#hardware" class="hardware"><span></span>Hardware</a></li>
					<li><a href="#software" class="software"><span></span>Software</a></li>
					<li><a href="#contact" class="contact"><span></span>Contact</a></li>
				</ul>
				<div class="cleaner"></div>
			</div> <!-- END of -->

			<!-- <div id="twitter">
				<h3>Twitter</h3>
				<ul>
					<li>Suspendisse at scelerisque urna. Aenean tincidunt massa ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
					<li>Cras rhoncus enim nec turpis mollis pellentesque. Donec at felis urna. <a href="#">http://bit.ly/Iuk00</a></li>
				</ul>
				<p>Copyright © 2048 <a href="#">Company Name</a> <br />
			    by <a href="http://www.tooplate.com/free-templates" target="_parent">Free Templates</a></p>
			</div> -->
		</div>

		<div id="tooplate_main">

			<div id="home" class="main_box">
				<h1>Welcome to Swat's Hot Spots</h1>
				<img src="images/tooplate_image_01.jpg" alt="image" class="img_frame img_float_l" />
				<!-- <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius consectetur arcu, ut fermentum sem adipiscing id.</em></p> -->
				<p align="justify">Discover if your favorite Study Space is occupied!</p>
				<div class="cleaner h40"></div>
				<div class="col_12 float_l">
					<h3>What We Do</h3>
					<ul class="tooplate_list">
						<li>List Goals here</li>
						<li>List Goals here</li>
						<!-- <li>Fusce risus tortor, interdum in malesuada pulvinar rutrum nec molestie</li>
						<li>Proin facilisis ullamcorper turpis, in placerat  sed, varius a nequ</li>
						<li>Sed vel justo quis ligula blandit commodo molestie  sed, varius a nequ</li>
						<li>Ut tristique sagittis arcu, vel laoreet turpis eu bibendum libero egestas</li> -->
					</ul>
				</div>
				<!-- <div class="col_12 float_r"> -->
					<!-- <h3>Testimonials</h3>
					<blockquote>
						<p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae risus turpis. </p>
						<cite>George - <span>Web Designer</span></cite>
					</blockquote>
					<blockquote>
						<p>Sed interdum quam id neque convallis ac convallis tortor scelerisque. Etiam viverra dictum urna, vitae consectetur justo egestas vel. Ut vulputate eros, vehicula aliquet enim cursus vitae. </p>
						<cite>Catherine - <span>Marketing Officer</span></cite>
					</blockquote>
				</div> -->
				<div class="cleaner"></div>
				<a href="#tooplate_main" class="gototop">Go To Top</a>
				<div class="cleaner"></div>
			</div> <!-- END of home -->

			<div id="about" class="main_box">
			  <h1>About</h1>
			  <img src="images/tooplate_image_02.jpg" alt="image" class="img_float_r img_frame" />
				<!-- <p><em>Aenean ipsum sapien, commodo sed pellentesque non, consequat a risus. <a href="#">Nunc lectus tellus</a>, elementum sed vestibulum ultrices, accumsan a mi. Duis sit amet purus nibh, eu sollicitudin nisi.</em></p> -->
				<p> Swat's Hot Spots is a capstone,
		      <a href="https://www.swarthmore.edu/engineering/e90-senior-design-project" target="_blank">"E90"</a>
		      Engineering project by Hannah Thompson and Rachel Hilburn <br>
		    This project will detect human presence in small areas, specifically
		    testing in Swarthmore College's <a href="https://www.swarthmore.edu/libraries/cornell-science-library" target="_blank">Cornell library</a>.
		    <br>
		    We will be using the <a href="https://www.digikey.com/en/product-highlight/o/omron/d6t-thermal-sensor" target="_blank"> Omrom D6T Thermal sensor</a>
		    to determine space occupancy.
			</p>
				<div class="cleaner h40"></div>
				<div class="mainbox">
				<h2>Who We Are</h2>
				<h3> Hannah </h3>
				<p> Hannah is graduating from Swarthmore in May, 2019. At Swarthmore she studied
	      both Engineering and Computer Science. <br>
	      Outside of class, she enjoyed playing on the softball team and hanging out with great friends. <br>
				<h3> Rachel </h3>
				TODO: Some bio stuff <br>
	      Rachel is awesome. She is smart, dedicated, organized and a great team player!
			</p>
					<!-- <blockquote>
						<p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae risus turpis. </p>
						<cite>Linda - <span>Web Team Manager</span></cite>
					</blockquote> -->
					<!-- <blockquote>
						<p>Sed interdum quam id neque convallis ac convallis tortor scelerisque. Etiam viverra dictum urna, vitae consectetur justo egestas vel. Ut vulputate eros, vehicula aliquet enim cursus vitae. </p>
						<cite>Candy - <span>Marketing Officer</span></cite>
					</blockquote> -->
				<!-- </div> -->
				<!-- <div class="col_12 float_r">
				-->
					<!-- <h3>Software</h3>
					<ul class="tooplate_list">
						<li>Nulla facilisi. Maecenas ac odio ipsum donec cursus ames ac turpis egesta</li>
						<li>Fusce risus tortor, interdum in malesuada pulvinar rutrum nec molestie</li>
						<li>Proin facilisis ullamcorper turpis, in placerat  sed, varius a nequ</li>
						<li>Sed vel justo quis ligula blandit commodo molestie  sed, varius a nequ</li>
						<li>Ut tristique sagittis arcu, vel laoreet turpis eu bibendum libero egestas</li>
					</ul>
				-->
				</div>
				<div class="cleaner"></div>
					<a href="#tooplate_main" class="gototop">Go To Top</a>
				<div class="cleaner"></div>
			</div> <!-- END of about -->



			<div id="hardware" class="main_box">
				<h1>Hardware</h1>
				<ul id="gallery">
					<li><a href="images/portfolio/01.jpg"><img src="images/portfolio/01.jpg" alt="Image 01" class="img_frame" /></a></li>
					<li><a href="images/portfolio/02.jpg"><img src="images/portfolio/02.jpg" alt="Image 02" class="img_frame" /></a></li>
					<li><a href="images/portfolio/03.jpg"><img src="images/portfolio/03.jpg" alt="Image 03" class="img_frame" /></a></li>
					<li><a href="images/portfolio/04.jpg"><img src="images/portfolio/04.jpg" alt="Image 04" class="img_frame" /></a></li>
				</ul>
				<div class="cleaner"></div>
				<a href="#tooplate_main" class="gototop">Go To Top</a>
				<div class="cleaner"></div>
			</div>
			<!--END of Hardware -->

			<div id="software" class="main_box">
				<h1>Software</h1>
				<img src="images/tooplate_image_01.jpg" alt="Image 01" class="img_float_l img_frame" />
				<!-- <p><em>Etiam vel purus ut eros ullamcorper faucibus ut ac mi. Sed eu elit diam. Sed cursus, sem eget auctor gravida, quam nunc faucibus diam, nec volutpat nunc nisi sed enim.</em></p> -->
				<p> TODO: add stuff about the software </p>
				<div class="cleaner h40"></div>
				<!-- <div class="col_12 float_l">
					<h3>Our Services</h3>
					<h6>Morbi luctus vitae cursus</h6>
					<p>Curabitur metus turpis, lacinia et iaculis ac, pharetra vitae risus. Praesent a nunc sapien.</p>
					<h6>Cum sociis natoque</h6>
					<p>Pellentesque gravida tempus sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<h6>Ut a augue a lorem</h6>
					<p>Nullam orci urna, gravida vel fringilla non, condimentum vitae erat. Ut a augue a lorem sodales egestas.</p>
				</div>
			-->
				<!--
				<div class="col_12 float_r">
					<h3>Testimonials</h3>
					<blockquote>
						<p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae risus turpis. </p>
						<cite>George - <span>Web Designer</span></cite>
					</blockquote>
					<blockquote>
						<p>Sed interdum quam id neque convallis ac convallis tortor scelerisque. Etiam viverra dictum urna, vitae consectetur justo egestas vel. Ut vulputate eros, vehicula aliquet enim cursus vitae. </p>
						<cite>Smith - <span>Internet Marketing Officer</span></cite>
					</blockquote>
				</div>
				<div class="cleaner"></div>
				<a href="#tooplate_main" class="gototop">Go To Top</a>
				<div class="cleaner"></div>
			</div>
		-->
			<!-- END of services-->

			<div id="contact" class="main_box">
				<h1>Contact Us</h1>
				<!-- <p> Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p> -->
					<div class="cleaner h30"></div>
					<div class="col_12 float_l">
					<h4>Quick Contact Form</h4>
						<div id="contact_form">

							<form method="post" name="contact" action="contact.php">
								<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
								<div class="cleaner h10"></div>

								<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
								<div class="cleaner h10"></div>

								<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>
								<div class="cleaner h10"></div>

								<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
								<div class="cleaner h10"></div>

								<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
								<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
							</form>

						</div>
					</div>

					<div class="col_12 float_r">
						<!-- <h4>Our Location</h4>
						<iframe width="300" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=EN&amp;q=time+square&amp;aq=&amp;sll=40.716558,-73.931122&amp;sspn=0.40438,1.056747&amp;ie=UTF8&amp;rq=1&amp;ev=p&amp;split=1&amp;radius=33.22&amp;hq=time+square&amp;hnear=&amp;ll=37.061753,-95.677185&amp;spn=0.438347,0.769043&amp;z=9&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=EN&amp;q=time+square&amp;aq=&amp;sll=40.716558,-73.931122&amp;sspn=0.40438,1.056747&amp;ie=UTF8&amp;rq=1&amp;ev=p&amp;split=1&amp;radius=33.22&amp;hq=time+square&amp;hnear=&amp;ll=37.061753,-95.677185&amp;spn=0.438347,0.769043&amp;z=9">View Larger Map</a></small>
						<div class="cleaner h30"></div> -->

						<h4>Mailing Address</h4>
						<h6>Engineering Department</h6>
						500 College Ave, <br />
						Swarthmore, PA 19081 <br />
						<br /><br />

						<!-- <b>Phone:</b> 030-030-0330<br /> -->
						<b>Email:</b> <a href="mailto:swatshotspots@gmail.com<">swatshotspots@gmail.com</a>
					</div>
				<div class="cleaner"></div>
				<a href="#tooplate_main" class="gototop">Go To Top</a>
				<div class="cleaner"></div>
			</div> <!-- END of contact -->

		</div> <!-- END of main -->

		<div class="cleaner"></div>
	</div>

</body>
</html>
