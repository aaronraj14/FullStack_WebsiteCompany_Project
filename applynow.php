<?php
include("dbconnect.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Two95 International Malaysia Sdn Bhd</title>
    <!-- primary -->
    <link rel="canonical" href=""/> <!--seo-->
    <meta name="description" content=""><!--seo-->
    <meta name="keywords" content=",,,,,,,,,,,,,,,,,,,,,"><!--seo-->
    <!-- bootstrap css js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/brands.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- include styling -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/style1.css">
    <!-- animate on scroll -->
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <link rel="mask-icon" href="assets/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<style>
/* Add a black background color to the top navigation */
.topnav {
  position: relative;
  background-color: #F7F9F9;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 40px 40px;
  text-decoration: none;
  font-size: 18px;                                 <!-- Font size for the navbar -->
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: white;                      <!-- When you hover it -->
  color: blue;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: white;
  color: white;
}

/* Centered section inside the top navigation */            
.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

/* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }

  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
h1{
  font-size:20px;
}
}
.dropbtn {
  background-color: white;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 250px;
  box-shadow: 0px 8px 20px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 15px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: whilte;}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
}
</style>
<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
  <a><img src="assets/web_logo_1.png" href="index.php" class="active" width="200" height="100"></a>        <!-- Two95 logo -->
  </div>

  <!-- Left-aligned links (default) -->
 
  <a href="index.php">Home</a>
  <a href="careers.php">Job Seekers</a>
  <a href="employers.php">Employers</a>

  <!-- Right-aligned links -->
<div class="topnav-right">
    <a href="about.php">About Us</a>
    <a href="services.php">Speciality</a>
    <a href="applynow.php">Apply Now</a>     <!-- Submit CV -->
  </div>
</div>
  <!-- Add font awesome icons -->
</div>
<section class="about" id="Apply">
<p><center><i>
	Whether you are actively looking for a new job or just keeping your options open, submit your resume below and we’ll be in touch with any suitable opportunities!
    </i></center></p>      
      <div class="container">
        <div class="sectiontitle">
          <h3>
            Submit Your Resume
          </h3>
          </div>
<div class="container">
  <form action="#" method="post" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone..">
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="job">Job Position</label>
    <input type="text" id="job position" name="jobposition" placeholder="Your job position..">
    
    <p>Resume(PDF Format)</p>


  <input type="file" id="myFile" name="file">
<br>
<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
</div> 
<?php
		 if(isset($_POST['submit']))
		{
			$Name=$_POST['name'];
			$Phone=$_POST['phone'];
			$Email=$_POST['email'];
			$jobposition=$_POST['jobposition'];
			
			 $filename=addslashes($_FILES["file"]["name"]);$filename1=$_FILES["file"]["name"];
			 $tmpname=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));$tmpname1=$_FILES["file"]["tmp_name"];
			 $filetype=addslashes($_FILES["file"]["type"]);
			 $array=array('jpg','jpeg','png','pdf');
			 $ext=pathinfo($filename,PATHINFO_EXTENSION);
			 move_uploaded_file($tmpname1,"upload/".$filename1);
			   if(!empty($filename)){
			if(in_array($ext,$array)){
				mysqli_query($conn,"INSERT INTO resume(name,phone,email,position,file_name,temp_name) VALUES ('$Name','$Phone','$Email','$jobposition','$filename','$tmpname')");
			echo "<script>location.href='index.php'</script>";
			}
			else{
				echo "unsupported file";
			}
		}else{
			
			echo "please select the image";
		}  
			
		}
		
		
		?>   

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="team.php">Our Team</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="testimonial.php">Testimonials</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="join.php">Join Us</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="contact.php">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem"></p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-silver-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fas fa-envelope fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">©Two95 International Recruitment Agency Sdn. Bhd.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </section>
</body>
</html>