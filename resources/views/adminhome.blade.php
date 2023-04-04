<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    
        <div class="logo_name">Trinity Games</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="{{url('/admin_page/')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>

     <li>
       <a href="{{url('/create_game/')}}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Upload Game</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Explore</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Favrouite</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Edit Profile</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">Ashraya Karki</div>
             <div class="job">The Great Pedo</div>
           </div>
         </div>
         <a href="{{url('/logout/')}}"><i class='bx bx-log-out' id="log_out" ></a></i>
     </li>
    </ul>
  </div>
  <section class="home-section" style="background-color: black; overflow-x:hidden;">

		
      <div class="text" style="color: white;">Dashboard</div>

      <div class="row half-bottom">

	      <div class="col-three tab-full" style="margin: 0px 40px;">
      		<h2 style="color: white;">Featured Games</h2>
      		<p><img src="images/jobs/mason.jpg" class="jobs_animation"></p>
      	  </div>

		  <div class="col-one tab-full" style="margin: 0px 40px;">
		    <h2></h2><br>
            <p><img src="images/jobs/driver.png" class="jobs_animation2"></p>
          </div>
		  
		  <div class="col-three tab-full" style="margin: 0px 40px;">
		    <h2></h2><br>
            <p><img src="images/jobs/cleaner.png" class="jobs_animation2"></p>
          </div>
 
		  <div class="col-three tab-full" style="margin: 0px 40px;">
		    <h2></h2><br>
            <p><img src="images/jobs/scaffolding.png" class="jobs_animation2"></p>
          </div>
</div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>