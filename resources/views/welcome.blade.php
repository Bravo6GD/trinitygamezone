<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trinity Games | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/base.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <style type="text/css" media="screen">
      #styles { 
   	    background: white;
   		 padding-top: 15rem;
   		 padding-bottom: 12rem;   	
   	}      	
   </style>  

<script src="{{asset('js/modernizr.js')}}"></script>
   <script src="{{asset('js/pace.min.js')}}"></script>

</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

		<div class="header-logo">
	   	<a href="/">TRINITY</a>
	   </div>

	   <nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li class="current"><a href="/" title="home">Home</a></li>
            <li><a href="{{url('/about/')}}" title="about">About</a></li>
				<li><a href="{{url('/login/')}}">Login</a></li>	
			</ul>

         <a href="{{url('/register/')}}" title="sign-up" class="button button-primary cta">Register</a>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
	</header> <!-- end header -->


   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">        

                <div class="row contents">                     
                     <div class="home-content-left">

                        <h3 data-aos="fade-up">Welcome to TRINITY</h3>

                        <h1 data-aos="fade-up">
                            Game On<br>
                            World Off!<br>
                            - Trinity Games
                        </h1>

                        <div class="buttons" data-aos="fade-up">
                            <a href="#download" class="smoothscroll button stroke">
                                <span class="icon-pen" aria-hidden="true"></span>
                               Create Your Profile
                            </a>
                            <a href="" data-lity class="button stroke">
                                <span class="icon-search" aria-hidden="true"></span>
                                Find Games
                            </a>
                        </div>                                         

                     </div>

                     <div class="home-image-right">
                        <img src="images/iphone-app-470.png" 
                             srcset="images/iphone-app-470.png 1x, images/iphone-app-940.png 2x"  
                             data-aos="fade-up">
                     </div>
                </div>            
        </div>

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#styles" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

   </section> <!-- end home -->  


   <!-- styles
   ================================================== -->
   <section id="styles">
		
	   <div class="row narrow add-bottom text-center">

   	   <div class="col-twelve tab-full">

   		   <h1>Trinity Gaming Zone</h1>

   			<p class="lead">At Trinity Gaming Zone, we believe that gaming should be accessible to everyone regardless of their budget. That's why we specialize in offering affordable games for different platforms including PC, consoles, and mobile devices. Our mission is to make gaming an enjoyable experience for everyone by providing a wide range of games at a lower cost compared to our competitors. We understand that gaming is not just a hobby, it's a passion, and we want to help you fuel your passion without breaking the bank. Our commitment to quality and affordability sets us apart, and we take pride in offering our customers the best possible gaming experience. 
                Join us at Trinity Gaming Zone and take your gaming experience to the next level!</p>   			

   		</div>

     	</div>

		<div class="row half-bottom">

	      <div class="col-three tab-full">
      		<h2>Featured Games</h2>
      		<p><img src="images/jobs/mason.jpg" class="jobs_animation"></p>
      	  </div>

		  <div class="col-three tab-full">
		    <h2></h2><br>
            <p><img src="images/jobs/driver.png" class="jobs_animation2"></p>
          </div>
		  
		  <div class="col-three tab-full">
		    <h2></h2><br>
            <p><img src="images/jobs/cleaner.png" class="jobs_animation2"></p>
          </div>
 
		  <div class="col-three tab-full">
		    <h2></h2><br>
            <p><img src="images/jobs/scaffolding.png" class="jobs_animation2"></p>
          </div>
 
 
	      	
      </div> <!-- end row -->
	  
</section> <!-- end styles -->   
    
  

   <!-- footer
   ================================================== -->
   <footer>

        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <div class="footer-logo"></div>

                    <p>At Trinity Gaming Zone, we believe that gaming should be accessible to everyone regardless of their budget. That's why we specialize in offering affordable games for different platforms including PC, consoles, and mobile devices. Our mission is to make gaming an enjoyable experience for everyone by providing a wide range of games at a lower cost compared to our competitors. We understand that gaming is not just a hobby, it's a passion, and we want to help you fuel your passion without breaking the bank. Our commitment to quality and affordability sets us apart, and we take pride in offering our customers the best possible gaming experience. 
                Join us at Trinity Gaming Zone and take your gaming experience to the next level!
                     </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    <p>
                    Online Business<br>
                    94043 NP<br>		        
                    </p>

                    <p>
                    trinityZone@gmail.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{url('/about/')}}">About Us</a></li>
                        <li><a href="{{url('/jobs/')}}">Explore</a></li>
                        <li><a href="{{url('/announcement/')}}">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="{{url('/login/')}}">Dashboard</a></li>
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>We will Contact You</h4>

                    <p>Leave Your E-mail Here! We will Email The Process Back!</p>

                    <div class="subscribe-form">
                
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required=""> 
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>

                    </div>	      		
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>Be Happy</span> 
		         	<span>Created by <a href="#">A.M</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- end footer-bottom -->     	

      </div>

    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>