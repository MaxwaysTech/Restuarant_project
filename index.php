<?php
//header
session_start();
 include "./include/header.php";
 include "connection/connection.php";

?>
  
  <!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/main1.jpg" alt="">
				<div class="container">
		<div class="row">
						
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Next Meal Restaurant</strong></h1>
							<p class="m-b-40">Experience culinary excellence at our restaurant - where great taste meets freshness.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="myorder.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/main2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Next Meal Restaurant</strong></h1>
							<p class="m-b-40">Taste the Difference at Our Restaurant - Fresh, Delicious Food Every Time!.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="myorder.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/main3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Next Meal Restaurant</strong></h1>
							<p class="m-b-40">Taste the World - Experience the Food at our Restaurant.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="myorder.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Next Meal Restaurant</span></h1>
						<!-- <h4>Little Story</h4> -->
						<p>Welcome to our African restaurant, where we have been serving delicious meals for 7 years with excellence. Our restaurant is the perfect place to enjoy a meal with friends and family. We offer a comfortable eating environment with dedicated staff to ensure you have a pleasant experience.

Our menu features a variety of African dishes, from t>Next Meal Restaurantraditional favorites to modern interpretations. We use only the freshest ingredients to create flavorful dishes that will tantalize your taste buds </p>
						<!-- <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p> -->
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/aboutPic.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	



	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Simply hover through our easy-to-navigate site and click on the individual items you would like to add to your cart. From there, you can fill in all the necessary details, such as your order</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery1.jpg">
							<img class="img-fluid" src="images/gallery1.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery2.jpg">
							<img class="img-fluid" src="images/gallery2.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/efoandpyam.jpg">
							<img class="img-fluid" src="images/efoandpyam.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery4.jpg">
							<img class="img-fluid" src="images/gallery4.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/pty.jpg">
							<img class="img-fluid" src="images/pty.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/ricechick.jpg">
							<img class="img-fluid" src="images/ricechick.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Developer</h6> -->
								<p class="m-0 pt-3">I recently tried the food, and I have to say it was top notch! The food was cooked perfectly and had a great flavor. The portion size was just right, and I got to eat the whole meal with satisfaction. I'm particularly impressed by the freshness of the ingredients used in the dishes, as well as the attentive and friendly service I received. I highly recommend ABC Restaurant to anyone who wants a delicious, freshly prepared meal!.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<!-- <h6 class="text-dark m-0">Web Designer</h6> -->
								<p class="m-0 pt-3">I was pleasantly surprised! The food was delicious, fresh, and arrived on time. The flavors were amazing and the presentation was beautiful. The customer service was also top-notch. They were friendly and helpful, and they went out of their way to make sure I was satisfied with my order. .</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<!-- <h6 class="text-dark m-0">Seo Analyst</h6> -->
								<p class="m-0 pt-3">I recently ordered food from this restaurant and I was very pleased with the quality of the food. The food was cooked to perfection and the flavors were amazing. The presentation was also very nice and the portions were generous. The service was also great and the staff was very friendly and helpful. I would definitely recommend this restaurant to anyone looking for a great meal..</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							090 6792 9878
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							samasd87@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
						Adetokunbo Street, House 3, Wuse Abuja
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Adetokunbo Street, House 3, Wuse Abuja</p>
					<p class="lead"><a href="#">090 2714 3580</a></p>
					<p><a href="#"></a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="#">Next Meal Restaurant</a> Design By : 
					<a href=#>Maximum Way Technology</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>