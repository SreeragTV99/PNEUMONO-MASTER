<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Covido</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/psearch.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
      <!-- header -->
      <header class="header-area">
         <div class="right">
            <li><a href="logout.php">logout</a></li>
         </div>
         <div class="container">
            <div class="row d_flex">
               <div class="col-sm-3 logo_sm">
                  <div class="logo">
                     <a href="index.html"></a>
                  </div>
               </div>
               <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                  <div class="navbar-area">
                     <nav class="site-navbar">
                        <ul>
                           <li><a href="uindex.php">Home</a></li>
                           <li><a href="ucauses.php">Causes</a></li>
                           <li><a href="usymptoms.php">Symptoms</a></li>
                           <li><a href="index.php" class="logo_midle">PNEUMONO</a></li>
                           <li><a href="utypes.php">Types</a></li>
                           <li><a href="test.php">Diagonosis</a></li>
                           <li><a class="active" href="pulmonologists.php">Pulmonologists</a></li>
                        </ul>
                        <button class="nav-toggler">
                        <span></span>
                        </button>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
         <!-- doctors -->
      <div class="doctors">
         <div class="container">

         <!-- <form action="">
         <input type="search" placeholder="Search here ...">
         <i class="fa fa-search"></i>
         </form> -->

         <form class="example" action="" method="POST">
            <input type="text" placeholder="Search district here.." name="dd">
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
         </form><br>

         <!-- <form>
            <input type="text" class="form-control" name="dd" placeholder="Search here ...">
            <input type="submit" name="submit">
         </form>    -->
         <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Here We Are..</h2>
                  </div>
               </div><br>
            </div>
            <div class="row d_flex">
               <?php
               include('connection.php');
               ?>
               
               <?php
                  $res=mysqli_query($con,"SELECT * FROM dregister where approve='approved'");
                  while($row=mysqli_fetch_array($res))
                  {
                     ?>
                  <div class=" col-md-3">
                  <div id="ho_efcet" class="reader text_align_center"style="width: 250px;height: 450px;">
                  
                     <i><img src="pic/<?php echo $row['photo'] ?>" style="width: 200px;height: 200px;"/></i>
                     <h3><?php echo $row['d_name'] ?></h3>
                     <h4><?php echo $row['qualification'] ?></h4>
                     <p><?php echo $row['address'] ?></p>
                     <h5><?php echo $row['phone'] ?></h5>
                     <!-- <span><img src="images/do.png" alt="#"/></span> -->
                     
                  </div>
                  </div>
                  <?php
                  }
                  ?>
                  
                     
               </div>
         </div>
      </div>
      <!-- end cases -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a><li>
                                 <li><a href="javascript:void(0)">What we do</a><li>
                                 <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Making this the first true  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +01 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                              <div class="map">
                                <img src="images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>