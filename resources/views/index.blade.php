<!DOCTYPE HTML>
<html>
<head>
<title>Produce A Health Care Production Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Produce Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Add fancyBox main JS and CSS files -->
<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
</head>
<body>
<div class="header">
	<div class="logo"><a href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt=""/></a></div>
	<div class="header-home">
	<div class="fixed-header">
	   <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li><a href="#home" class="scroll"><h3>Home</h3></a></li>
					<li><a href="#about" class="scroll">About the Product</a></li>
					<li><a href="#benefit" class="scroll">Benefits</a></li>
					<li><a href="{{route('catalog')}}">Catalog</a></li>
					<li class="active"><a href="{{route('blog')}}">Blog</a></li>
					<li><a href="{{route('contacts')}}">Contacts</a></li>
				</ul>
				<script type="text/javascript" src="{{asset('js/nav.js')}}"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
				 <!--script-->
		<script>
			$(document).ready(function(){
				$(".nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
        </div><!-- end h_menu4 -->
       </div>
     </div>
     <div class="header_bottom" id="home">
       <div class="container">
	     	<div class="col-sm-7 header_left">
	     		<span> </span>
	     	</div>
	     	<div class="col-sm-5 header_right">
	     	   <h1>Increase your engergy level with <span class="m_1">garcinia cambogia</span></h1>
	     	   <div class="header_box">
	     	   	<h2>Try it today</h2>
	     	      <form>
					  <label class="fa-btn btn2 btn-2 btn-1e"><input type="submit" value="Order Now"></label>
					  <ul class="form_lock">
					  	<li><i class="lock"> </i></li>
					  	<li class="lock_desc"><p>Don't worry your email infomation is safe with us.
						We hate spam as much as you hate. </p></li>
						<div class="clearfix"> </div>
					  </ul>
			      </form>
	     	</div>
       </div>
    </div>
  </div>
</div>
<div class="about" id="about">
 <div class="about_top">
	<h2>About Garcinia Cambogia</h2>
	<div class="sm_hr"></div>
	<h3 class="m_10">Reduce food intake and promote <span class="m_2">Weight loss fast</span>!</h3>
	<p class="m_8">Effective thermogenic supplements are those that contain key ingredients that create a fat burning 'thermogenic'
	environment by working together and in synergy. Some of these ingredients also aid
	in reducing appetite and spiking an increase in short-term energy. Dosage of Garcinia cambogia, beginning
	from 750 mg to 1,500 mg, takes 2-3 times in individual dose before meals.</p>
 </div>
 <div class="about_bottom">
 	<h4>Other <span class="m_2">Related</span> Products</h4>
 	<div class="about_box">
 		<div class="container">
 		<div class="col-sm-4 grid_8 grid_7">
 			<div class="view view-fifth">
                   <img src="{{asset('images/p1.jpg')}}" class="img-responsive" alt=""/>
                    <div class="mask">
                      <div class="mask1">
                          <a class="popup-with-zoom-anim" href="#small-dialog1"> <div class="info"><img src="{{asset('images/search.png')}}" alt=""/></div></a>
		                     <div id="small-dialog1" class="mfp-hide">
							   <div class="pop_up1">
							   	 <h3>Duis autem vel </h3>
								  <img src="{{asset('images/p1.jpg')}}" class="img-responsive" alt=""/>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								   <a href="{{route('catalog')}}">To catalog</a>
							   </div>
							 </div>
                        </div>
                     </div>
            </div>
 		</div>
 		<div class="col-sm-4 grid_8 grid_7">
 			<div class="view view-fifth">
                   <img src="{{asset('images/p2.jpg')}}" class="img-responsive" alt=""/>
                    <div class="mask">
                      <div class="mask1">
                          <a class="popup-with-zoom-anim" href="#small-dialog2"> <div class="info"><img src="{{asset('images/search.png')}}" alt=""/></div></a>
		                     <div id="small-dialog2" class="mfp-hide">
							   <div class="pop_up1">
							   	 <h3>Duis autem vel </h3>
								  <img src="{{asset('images/p2.jpg')}}" class="img-responsive" alt=""/>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								   <a href="{{route('catalog')}}">To catalog</a>
							   </div>
							 </div>
                        </div>
                     </div>
            </div>
 		</div>
 		<div class="col-sm-4 grid_8">
 			<div class="view view-fifth">
			   <img src="{{asset('images/p3.jpg')}}" class="img-responsive" alt=""/>
				<div class="mask">
				  <div class="mask1">
					  <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="{{asset('images/search.png')}}" alt=""/></div></a>
						 <div id="small-dialog3" class="mfp-hide">
						   <div class="pop_up1">
							 <h3>Duis autem vel </h3>
							  <img src="{{asset('images/p3.jpg')}}" class="img-responsive" alt=""/>
							  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
							   <a href="{{route('catalog')}}">To catalog</a>
						   </div>
						 </div>
					</div>
				 </div>
            </div>
 		</div>
 	  </div>
 	</div>
 </div>
</div>
<div class="benefit" id="benefit">
	<div class="container">
		<ul class="benefit_head">
			<li class="benefit_head-left">
				<h3>What are<br> the benefits</h3>
			</li>
			<li class="benefit_head-right">
				<p>Obesity is an imbalance between fat intake and energy expenditure.
					Now day obesity is a problem of health and mind in many people.</p>
			</li>
			<div class="clearfix"> </div>
		</ul>
		<div class="benefit_box">
		<p class="m_3">The rush hours working lifestyle make many people take junk food and fast food more than nutritionists.
			The important factor is Generic, it is found that one obese patient has a 40% chance of obesity and both
			obese patients have 80% chance of obesity. The chronic diseases that are developed from obesity are
			diabetes, high blood pressure, stroke, heart attack, cancer, gout and sleep apnea. So control the weight
			is the best way to void health problem.</p>
				   <p class="m_4">Control the body weight helps you against the chronic diseases and make good looking. There are many
			ways to reduce and control the weight. Using weight control products is not the best way, especially use
			potential dangerous diet products without consult from the doctors or the pharmacists. Balance the energy
			 expenditure and fat intake is an important point. If you eat more you have to exercise more. Other ways
			are break bad habits such as alcohol intake, watching T.V. during eating, or ignore vegetables. You have
			to realize how much the fat in each menu and should the low cholesterol with high nutrition. </p>
			       <p class="m_5">Here are the Beneftis You can get from <span class="m_2">Garcinia Combogia :</span></p>
        <div class="benefit_grid">
            <div class="benefit_box-left">
		                <ul>
		                   <li><a href="">Increases energy levels</a></li>
		                    <li><a href="">Powerful insulin potentiator</a></li>
		                    <li><a href="">Balances blood sugar levels</a></li>
		                    <li><a href="">Transports blood sugar into the cells</a></li>
		                    <li><a href="">Aids in controlling carbohydrate cravings</a></li>
		                </ul>
	        </div>
	       <div class="benefit_box-left span1">
		                <ul>
		                   <li><a href="">Increases energy levels</a></li>
		                    <li><a href="">Powerful insulin potentiator</a></li>
		                    <li><a href="">Balances blood sugar levels</a></li>
		                    <li><a href="">Transports blood sugar into the cells</a></li>
		                    <li><a href="">Aids in controlling carbohydrate cravings</a></li>
		                </ul>
	       </div>
	       <div class="clearfix"> </div>
	      </div>
      </div>
	</div>
  </div>
{{--<div class="product">
	<div class="container">
		<ul class="product_grid">
			<li class="product_grid-left">
				<p>Obesity is an imbalance between fat intake and energy expenditure.
Now day obesity is a problem of health and mind in many people.</p>
			</li>
			<li class="product_grid-right">
				<h3>How to use <br>this product</h3>
			</li>
			 <div class="clearfix"> </div>
		</ul>
	<h3 class="m_10">Reduce food intake and promote <span class="m_2">Weight loss fast</span>!</h3>
	<p class="m_8 m_9">Effective thermogenic supplements are those that contain key ingredients that create a fat burning 'thermogenic'
	environment by working together and in synergy. Some of these ingredients also aid
	in reducing appetite and spiking an increase in short-term energy. Dosage of Garcinia cambogia, beginning
	from 750 mg to 1,500 mg, takes 2-3 times in individual dose before meals.</p>
	 <div class="product_box">
	 	<div class="col-sm-4">
	 		<div class="product_box1">
	 			<div class="product_box1-num">1</div>
	 			<p>The active ingredient in Garcinia
					Cambogia is Hydroxyciric acid (HCA).
					It works as inhibit fat and cholesterol
					accumulation by slowing down
					the enzyme.</p>
       		</div>
	 	</div>
	 	<div class="col-sm-4">
	 		<div class="product_box1">
	 			<div class="product_box1-num">2</div>
	 			<p>The active ingredient in Garcinia
					Cambogia is Hydroxyciric acid (HCA).
					It works as inhibit fat and cholesterol
					accumulation by slowing down
					the enzyme.</p>
       		</div>
	 	</div>
	 	<div class="col-sm-4">
	 		<div class="product_box1">
	 			<div class="product_box1-num">3</div>
	 			<p>The active ingredient in Garcinia
					Cambogia is Hydroxyciric acid (HCA).
					It works as inhibit fat and cholesterol
					accumulation by slowing down
					the enzyme.</p>
       		</div>
	 	</div>
	 	<div class="clearfix"> </div>
	 </div>
   </div>
</div>
<div class="img_body">
	<div class="container">
		<ul class="column_center">
			<li class="column_center-left">
				<h3>Image your body so healthy !</h3>
			</li>
			<li class="column_center-right">
				<a href="#" class="fa-btn btn-1 btn-1e btn1">Try This Product<br><span class="btn_desc">Money Back Guarantee</span></a>
			</li>
			<div class="clearfix"> </div>
		</ul>
	</div>
</div>
<div class="index-banner" id="test">
	<div class="container">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	 <div class="banner-wrap">
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic1.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
								      <h4><a href="#">annette Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic2.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
									<h4><a href="#">John Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="clearfix"> </div>
				   	 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;">
				   	  <div class="banner-wrap">
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic2.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
										<h4><a href="#">annette Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic1.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
										<h4><a href="#">John Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="clearfix"> </div>
				   	 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic1.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
										<h4><a href="#">annette Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="col-md-6">
				   	 		<ul class="grid-1">
				   	 			<li class="grid-1_left">
				   	 				<img src="images/pic2.jpg" class="img-responsive" alt=""/>
				   	 			</li>
				   	 			<li class="grid-1_right">
				   	 				<p>Garcinia cambogia is one of the main
										components in one of the best-selling
										supplemental weight loss products,
										Hydroxycut., and researchers have
										concluded that "the evidence for G.
										cambogia is not compelling.</p>
										<h4><a href="#">John Doe</a> | Abc Company</h4>
				   	 			</li>
				   	 			<div class="clearfix"> </div>
				   	 		</ul>
				   	 	</div>
				   	 	<div class="clearfix"> </div>
				   	 </div>
					 </article>
				 </div>

                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
            </div>
            <script src="js/jquery.wmuSlider.js"></script>
			  <script>
       			$('.example1').wmuSlider();
   		     </script>
      </div>
</div>
<div class="call_grid" id="buy">
	<div class="container">
		<div class="col-sm-6 call_grid-left">
			<h3>Increase your Energy level<br> with <span class="m_1">Garcinia Cambogia</span></h3>
			<p>It works as inhibit fat and cholesterol accumulation by
				slowing down the enzyme. Get The Most Effective
				Fat Burning Supplement Now!</p>
							<h4>Promotes weight loss
				Suppresses appetite
				Increases fat oxidation
				Promotes glycogen synthesis</h4>
			<a href="#" class="fa-btn btn-1 btn-1e btn2">Try It Now</a>
		</div>
		<div class="col-md-6 call_grid-right">
			<span> </span>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="contact" id="contact">
    <div class="col-md-7 contact_left">
      <div class="grid_3">
		<ul class="msg">
			<i class="msg_icon"> </i>
			<li class="msg_desc"><p>San Isidro, Lopez Jaena St.<br>
				Jaro Iloilo City, Philippines 5000<br>
				Tell: 0927-338-2289<br>
				Email: <a href="mailto:info(at)produce.com"> info@produce.com</a></p></li>
	    </ul>
	    <ul class="msg msg_grid">
			<i class="msg_icon"> </i>
			<li class="msg_desc"><p>San Isidro, Lopez Jaena St.<br>
				Jaro Iloilo City, Philippines 5000<br>
				Tell: 0927-338-2289<br>
				Email: <a href="mailto:info(at)produce.com"> info@produce.com</a></p></li>
	    </ul>
	  </div>
	  <div class="grid_4">
	  	 <h4>Secured Payment Trough :</h4>
	  	 <img src="images/paypal.png" class="img-responsive" alt=""/>
	  </div>
	  <div class="grid_5">
	  	 <h4>Disclaimer :</h4>
	  	 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
	      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
	  </div>
    </div>
	<div class="col-md-5 contact_right">
		<div class="header_box grid_6">
	     	   	<h3>Contact Us</h3>
	     	   	  <form method="post" action="contact-post.html">
				      <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					  <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					  <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					 <textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					  <label class="fa-btn btn2 btn-2 btn-1e btn3"><input type="submit" value="Send Message"></label>
					  <ul class="form_lock">
					  	<li><i class="lock"> </i></li>
					  	<li class="lock_desc"><p>Don't worry your email infomation is safe with us.
					We hate spam as much as you hate. </p></li>
						<div class="clearfix"> </div>
					  </ul>
			      </form>
	     	</div>
	</div>
	<div class="clearfix"></div>
 </div>--}}
 <div class="footer">
 	<div class="container">
 		    <div class="copy">
 		    	<img src="{{asset('images/logo.png')}}" alt=""/>
			    <p>&copy;2015 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		    <ul class="footer_social">
			   <li><a href="#"> <i class="fb"> </i> </a></li>
			   <li><a href="#"> <i class="pin"> </i> </a></li>
			   <li><a href="#"> <i class="linkedin"> </i> </a></li>
			   <li><a href="#"> <i class="google"> </i> </a></li>
			   <li><a href="#"> <i class="tw"> </i> </a></li>
		    </ul>
		 <div class="clearfix"> </div>
 	</div>
 	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 </div>
</body>
</html>		