<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>D-Square | System Login</title>
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
	   	<a href="/">D-Squared</a>
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
   	
	</header>
    
    <section id="styles" >
        <div class="row half-bottom">
		   <div class="col-seven tab-full">

		      <h1>Register New User</h3>
		      <form method="POST" action="{{route('store.register')}}">
                @csrf
                <div>
			        	<label for="email">Enter UserName Gaymer</label>
			        	<input class="full-width" type="text" placeholder="New Username" id="name" name="name" autofocus>
			      </div> 
			     	<div>
			        	<label for="email">Enter Email</label>
			        	<input class="full-width" type="email" placeholder="test@mailbox.com" id="email" name="email" autofocus>
			      </div> 
                  <div>
			        	<label for="password">Enter Password: (Must be Longer than 8 words)</label>
			        	<input class="full-width" type="password" placeholder="********" id="password" name="password">
			      </div> 
                  <input class="button-primary" type="submit" value="Submit">
                </form>
            </div>
            <br><br><br><br>
            <div class="col-five tab-full">
		     <aside class="pull-quote">
				   <blockquote>
					   <p>Are You Nikocado Avacado Or Something!? Go play some games.</p>
                       <cite>Ninja Tortoise</cite>
					</blockquote>
				</aside>

</div>
     </div>
    </section>
    <footer>

        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <div class="footer-logo"></div>

                    <p>
                    Welcome to D-squared Group Pvt. Ltd! We're a recruitment agency that helps people find work abroad in countries like Romania, Dubai, Qatar, Saudi Arabia, and Europe. We recruit for various jobs such as security, cleaning, scaffolding, masonry, electricians, and more.
				 Contact us today to learn how we can help you find your Desired job overseas.  </p>

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
                    Sambhu Marga, Airport<br>
                    Kathmandu<br>
                    94043 NP<br>		        
                    </p>

                    <p>
                    groupdsquared@gmail.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{url('/about/')}}">About Us</a></li>
                        <li><a href="{{url('/jobs/')}}">Jobs</a></li>
                        <li><a href="{{url('/announcement/')}}">Announcement</a></li>
                        <li><a href="#">Apply for Job</a></li>
                        <li><a href="{{url('/login/')}}">System</a></li>
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
		         	<span>Created by <a href="#">S.W.A.M.P</a></span>		         	
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