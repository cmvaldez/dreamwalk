<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title> Book Now </title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Faviconss ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<meta name="msapplication-TileColor" content="#d4ae60">
	<meta name="msapplication-TileImage" content="mstile.png">
	<meta name="theme-color" content="#d4ae60">

	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700">
    
    <!-- /// FontAwesome Icons 4.2.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="assets/css/solid.css">
    
	<!-- /// JS Plugins CSS ////////  -->
	<link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">
    
   
</head>
<body class="sticky-header menu-style-1">
	
   
    <div id="page-loader">
		<img src="content/backgrounds/logo.png" alt="">
	</div><!-- end #page-loader -->
    
    
	<div id="wrap">
		
        <div id="header-wrap">
			<div id="header">
			
			<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                           <!-- // Logo // -->
                           <div id="logo">
                            <a href="home.php">
                                <img src="content/backgrounds/logo.png" alt="website logo">
                            </a>
                        </div>
                        
                        </div><!-- end .span3 -->
                        <div class="span9">
                        
                            <!-- // Mobile menu trigger // -->
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            <!-- // Custom search // -->                                        
                            
                            <div class="fullscreen" id="custom-search-form-container">
                        
                                <form id="custom-search-form" action="#">
                                    <input type="text" placeholder="Search here and press enter..." name="s" id="s">
                                    <input type="submit" id="custom-search-submit" value="">
                                </form>
                                
                            </div><!-- end #custom-search-form-container -->
        
                            <a id="custom-search-button" href="#"></a>
                            
                            <!-- // Menu // -->
                            
                            <nav>
                                <ul class="sf-menu fixed" id="menu">
                                    <li class="dropdown current">
                                    	<a href="home.php">Home</a>
                                       
                                    </li>
                                    <li class="dropdown">
                                         
                                    	<a href="book.php"> How to Book</a>
                                       
                                    </li>                                    
                                    <li class="dropdown">
                                        <a href="contact-us.php">Contact Us </a>
                                        
                                            
                                            </div><!-- end .sf-mega-section -->
      
                                    </li>
                                </ul>
                            </nav>	
    
                        </div><!-- end .span9 -->
                    </div><!-- end .row -->		
				</div><!-- end .container -->
			
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div><!-- end #header -->
		</div><!-- end #header-wrap -->
		
		<div id="content">
		
        
        <?php
  // define variables and set to empty values
  $FirstNameErr = $LastNameErr = $EmailErr = $ContactNumberErr = "";
  $FirstName = $LastName = $Email = $ContactNumber = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["FirstName"])) {
      $FirstNameErr = "First Name is required";
    } else {
      $name = filter_input($_POST["FirstName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) {
        $FirstNameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["LastName"])) {
        $LastNameErr = "Last Name is required";
      } else {
        $LastName = filter_input($_POST["LastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
          $LastNameErr = "Only letters and white space allowed";
        }
      }
    
    if (empty($_POST["Email"])) {
      $EmailErr = "Email is required";
    } else {
      $Email = filter_input($_POST["Email"]);
      // check if e-mail address is well-formed
      if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $EmailErr = "Invalid email format";
      }
    }

    if (empty($_POST["ContactNumber"])) {
      $ContactNumberErr = "Contact Number is required";
    } else { 
      $ContactNumber = filter_input($_POST["ContactNumber"]);
      if(!preg_match('/^[0-9]{10}+$/', $phone)) {
        $ContactNumberErr = "Invalid contact number";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

                		<!-- /// CONTENT  ///////////////////////////////// -->
	
            <div class="container">
                <div class="row">
                    <div class="span12 text-center">
                        
                        <div class="headline">
                            
                        <div id="respond" class="comment-respond">
                        
                                
                        <form method="POST" action="book.php">  
                    
                            <h1>Book now</h1>
                            <h6></h6>


                            <!----seat html -->
                        
                            <label for="name">First Name</label>
                            <input type="text" id="name" name="FirstName" placeholder="CheyLyn" value="<?php set_value('firstName') ?>" pattern=[A-Z\sa-z]{3,20} required>
                                       
                            
                            <label for="name">Last Name</label>
                            <input type="text" id="name" name="LastName"  placeholder="Alinevdez" value="<?php set_value('lastName') ?>" pattern=[A-Z\sa-z]{3,20} required>

                            <div class="elem-group">
                            <label for="email"> E-mail</label>
                            <input type="text" id="email" name="Email"  placeholder="Cheveri_Joy@email.com" value="<?php set_value('email') ?>" required>
                                        
                            <div class="elem-group">
                            <label for="phone"> Contact Number</label>
                            <input type="text" id="phone" name="ContactNumber"  placeholder="09XXXXXXXXX" value="<?php set_value('contactnumber') ?>">

                        <!----
                            <div class="elem-group inlined">
                            <label for="child">Children</label>
                            <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
                            </div>
                            <div class="elem-group inlined">
                            <label for="checkin-date">Departure Trip Date</label>
                            <input type="date" id="checkin-date" name="checkin" required>
                            </div>
                            
                            <div class="elem-group">
                            <label for="room-selection">Select Arrival Place</label>
                            <select id="room-selection" name="room_preference" required>
                                <option value="tarlac">Tarlac</option>
                                <option value="pampanga">Pampanga</option>
                                <option value="bulacan">Bulacan</option>
                                <option value="bataan">Bataan</option>
                                <option value="baguio">Baguio</option>
                                <option value="cabanatuan">Cabanatuan City</option>
                                <option value="la-union">La Union</option>
                                <option value="tuguegarao">Tuguegarao</option>
                            </select>
                            </div> -->

                            <hr>
                            <p class="form-submit">
                            <input class="elem-group" name="submit" type="submit" id="submit" value="Send">
                            </p>
                            </form> 


<?php
$FirstName = filter_input(INPUT_POST, 'FirstName');
$LastName = filter_input(INPUT_POST, 'LastName');
$Email = filter_input(INPUT_POST, 'email');
$ContactNumber = filter_input(INPUT_POST, 'ContactNumber');

if (!empty($FirstName)){
  if (!empty($LastName)){
    if(!empty($Email)){
      if(!empty($ContactNumber)){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dreamwalk_db";
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

        if (mysqli_connect_error()){
          die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
          }
          else{
          $sql = "INSERT INTO booking (firstName,lastName, email, contactnumber)
          values ('$FirstName','$LastName','$Email','$ContactNumber')";
          if ($conn->query($sql)){
          echo "New record is inserted sucessfully";
          }
          else{
          echo "Error: ". $sql ."
          ". $conn->error;
          }
          $conn->close();
          }
      }
      else{
        echo "Messages should not be empty";
        die();
      }
    }
    else{
      echo "Service should not be empty";
      die();
    }
  }
  else{
    echo "LastName should not be empty";
    die();
  }
}
else{
  echo "FirstName should not be empty";
  die();
}
?>


                    </div><!-- end .headline -->
                                                
                    </div><!-- end .span12 -->
                 </div><!-- end .row -->
            </div><!-- end .container -->


<!--end ---->
           
		<div id="footer">
		
		<!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="container">
            <div class="row">
                <div class="span9" id="footer-widget-area-1">
                    
                    <div class="widget ewf_widget_contact_info">
                        
                        <ul>
                            <li class="ewf_widget_contact_info_address">
                                <h3> Location</h3>
                                
                                720 Epifanio de los Santos Ave,  <br>
                                Pasay, 1100 Metro Manila 
                            </li>
                            <li class="ewf_widget_contact_info_contact">
                                <h3>Contact</h3>
                                
                                Tel.: (+63) 919 5240 3230  <br>
                                Mail: <a href="mailto:#">office@dreamwalk.com</a>
                            </li>
                            
                        </ul>
                        
                    </div><!-- end .ewf_widget_contact_info -->
                    
                </div><!-- end .span9 -->
                <div class="span3" id="footer-widget-area-2">
                    
                    <div class="widget ewf_widget_social_media"> 
                    
                        <h3 class="widget-title">Connect</h3>
                        
                        <div class="fixed">
                            
                            <a href="#" class="facebook-icon social-icon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            
                            <a href="#" class="twitter-icon social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                            <a href="#" class="googleplus-icon social-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            
                            <a href="#" class="pinterest-icon social-icon">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            
                            <a href="#" class="wordpress-icon social-icon">
                                <i class="fa fa-wordpress"></i>
                            </a>
                            
                            <a href="#" class="youtube-icon social-icon">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            
                        </div>
                    
                    </div><!-- end .ewf_widget_social_media -->
                    
                </div><!-- end .span3 -->                                                                   
            </div><!-- end .row -->
        </div><!-- end .container -->
        
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #footer -->
    <div id="footer-bottom">
    
    <!-- /// FOOTER BOTTOM     /////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="container">
            <div class="row">
                <div class="span12" id="footer-bottom-widget-area-1">
                    
                    <div class="widget widget_text">
                    
                        <div class="textwidget">
                            <p><strong class="text-uppercase">DreamWalk</strong> &copy; 2023. </p>
                        </div>
                        
                    </div><!-- end .widget_text -->
                    
                </div><!-- end .span12 -->				
            </div><!-- end .row -->
        </div><!-- end .container -->
        
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div><!-- end #footer-bottom -->
    
</div><!-- end #wrap -->

<a id="back-to-top" href="#">
    <i class="ifc-up4"></i>
</a>

<!-- /// jQuery ////////  -->
<script src="assets/vendors/jquery-2.1.3.min.js"></script>

<!-- /// Loader ////////  -->
<script src="assets/vendors/queryloader2/queryloader2.min.js"></script>

<!-- /// ViewPort ////////  -->
<script src="assets/vendors/viewport/jquery.viewport.js"></script>

<!-- /// Easing ////////  -->
<script src="assets/vendors/easing/jquery.easing.1.3.js"></script>


<!-- /// Slick ////////  -->
<script src="assets/vendors/slick/slick.min.js"></script>

<!-- /// Animations ////////  -->
<script src="assets/vendors/animations/animate.js"></script>
 
<!-- /// Superfish Menu ////////  -->
<script src="assets/vendors/superfish/hoverIntent.js"></script>
<script src="assets/vendors/superfish/superfish.js"></script>


<!-- /// bxSlider ////////  -->
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>

   <!-- /// Magnific Popup ////////  -->
<script src="assets/vendors/magnificpopup/jquery.magnific-popup.min.js"></script>

<!-- /// Isotope ////////  -->
<script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>

<!-- /// Parallax ////////  -->
<script src="assets/vendors/parallax/jquery.parallax.min.js"></script>

<!-- /// EasyPieChart ////////  -->
<script src="assets/vendors/easypiechart/jquery.easypiechart.min.js"></script>

<!-- /// YTPlayer ////////  -->
<script src="assets/vendors/itplayer/jquery.mb.YTPlayer.js"></script>

<!-- /// Easy Tabs ////////  -->
<script src="assets/vendors/easytabs/jquery.easytabs.min.js"></script>	

<!-- /// Form validate ////////  -->
<script src="assets/vendors/jqueryvalidate/jquery.validate.min.js"></script>

<!-- /// Form submit ////////  -->
<script src="assets/vendors/jqueryform/jquery.form.min.js"></script>

<!-- /// gMap ////////  -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDG-gTAgMTtgV3DOK0UQIkcruOy2yDDauc&sensor=false"></script>
<script src="assets/vendors/gmap/jquery.gmap.min.js"></script>


<!-- /// Custom JS ////////  -->
<script src="assets/js/solid.js"></script>

</body>
</html>