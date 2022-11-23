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
      <title>Pneumono</title>
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
   
   <script>
         function formValidation()
         {
            var name = document.forms["RegForm"]["name"].value;
            var regName = /\d+$/g;
            if(name == "" || regName.test(name))
            {
               window.alert("Please enter your Name properly.");
               // window.location = 'ulog.php';
               document.getElementById("name").focus()
               // name.focus();
               return false;
            }
            var phone = document.forms.RegForm.phoneNumber.value;
            var regPhone = /^\d{10}$/;
            if(phone == "" || !regPhone.test(phone))
            {
               window.alert("Please enter valid phone number.");
               document.getElementById("phoneNumber").focus();
               return false;
            }
            var email = document.forms.RegForm.email.value;
            // var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email == "")   // || regEmail.test(email)
            {
               window.alert("Please enter a valid e-mail address.");
               document.getElementById("email").focus();
               return false;
            }
            var qualification = document.forms.RegForm.qualification.value;
            if(qualification == "")
            {
               window.alert("Please enter qualification.");
               document.getElementById("qualification").focus();
               return false;
            }

            var address = document.forms.RegForm.address.value;
            if(address == "")
            {
               window.alert("Please enter address.");
               document.getElementById("address").focus();
               return false;
            }
            var district = document.forms.RegForm.district.value;
            if(district == "")
            {
               window.alert("Please enter district.");
               document.getElementById("district").focus();
               return false;
            }
            

             // checking password
            var password = document.getElementById("password");
            var cpassword = document.getElementById("cpassword");
            if (!password.value.match(/^.{5,15}$/)) 
            {
               alert("Password length must be between 5-15 characters!");
               document.getElementById("password").focus();
               return false;
            }
            
            if(document.RegForm.password.value!=document.RegForm.cpassword.value)
            {
            alert('Password and Repeat Password field does not match');
            document.RegForm.cpassword.focus();
            return false;
            }
            return true;
         }
         
   </script>
      
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
            <div class="left">
               <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
               <a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                        <ul>
                           <li><a class="active" href="index.php">Home</a></li>
                           <li><a href="causes.php">Causes</a></li>
                           <li><a href="symptoms.php">Symptoms</a></li>
                           <li><a href="index.php" class="logo_midle">PNEUMONO</a></li>
                           <li><a href="types.php">Types</a></li>
                           <li><a href="">Diagonosis</a></li>
                           <li><a href="ulog.php">Sign In </a></li>
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

      <!-- contact -->
     <div class="contact">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="titlepage text_align_left">
                        <h2>Sign Up</h2>
                     </div>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" name="RegForm" onsubmit="return formValidation() " action="dregaction.php" method="POST" class="main_form"  enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="text" name="name" id="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email" id="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone" type="text" name="phoneNumber" id="phoneNumber">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="qualification" type="text" name="qualification" id="qualification"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="address" type="text" name="address" id="address"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="district" type="text" name="district" id="district"> 
                        </div>
                        <div class="col-md-12">
                           <input  class="contactus"  type="file" name="photo" id="photo" > 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="password" id="password"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="CPassword" type="password" name="cpassword" id="cpassword"> 
                        </div>
                        
                        <div class="col-md-12">
                           <p>Already have account ? <a href="ulog.php"> Sign In</a></p>
                        </div>
                        <div class="col-md-12">
                        <p style="float: left;width: 130px;"><button class="send_btn" type="reset" name="reset">Reset</button></p>
                        <p style="float: right;width: 130px"><button class="send_btn" type="submit">Sign Up</button></p>
                        </div>
                     </div>
                  </form>
               </div>
                <!-- <div class="col-md-6">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <!-- end contact -->
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
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> S V T </a></p>
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