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
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
      
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
                              <li><a href="pulmonologists.php">Pulmonologists</a></li>
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
      
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
               <div class="col-md-7">
               <div class="titlepage text_align_left">
               <h2>Diagnosis</h2>

               <form action="" style="width: 30%; padding: 10px;" method="POST" enctype="multipart/form-data">
               <h5>Upload X-Ray Image(jpeg)</h5><br>
               <input type="file" style="text-align: center;width: 300px;" name="uploadedfile"  required id="ip1" accept="image/*" class='form-control' style="width: 600px;"><br>
   
               <div class="text-center" style="padding-left: 100px;"><input type="Submit" name="Submit" value="Submit" class='btn btn-primary' id="p1"></div><br>
               </form>
               <?php
               if(isset($_POST['Submit']))
               {
                  echo"<h2>OUTPUT</h2>";

               $target_path = "input/test/image.jpg";
               if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                  $python=`python test.py`;
            
                  $myfile = fopen("out.txt", "r") or die("Unable to open file!");
                  $out=fread($myfile,filesize("out.txt"));
                  fclose($myfile);

                  echo "<br><br><h3>".$out."</h3>";
                           
                           //header('location:output.php');
                           
                           } else{
                              echo "There was an error uploading the file, please try again!";
                           }

                        }
                  ?>
                                  <!-- <a class="read_more" href="about.html">About More</a> -->
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
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
                                 <!-- <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li> -->
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Pneumonia is a lung infection that can range from mild to so severe that you have to go to the hospital.But we provide an opportunity to detect pneumonia without consulting doctor.</p>
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
                           <a href="Javascript:void(0)">Email : abcd@gmail.com</a>
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
                        <p>© 2022 All Rights Reserved. Design by <a href="https://html.design/"> S V T</a></p>
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