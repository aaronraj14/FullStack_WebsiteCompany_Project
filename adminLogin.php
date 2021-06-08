<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<style>
body{background-color:#001a39;}
#title{color:white;}
#box{margin-top:100px;}
h4{text-align:center;}
</style>
</head>



<!--login-->
<?php

if($_POST){
	 session_start();
		$errors = array();
		$admin_code=$_POST['admin_code'];
		$admin_password=$_POST['admin_password'];
	

if(empty($admin_code)){
	$errors['adminCode']="ERROR:The code is required";
}

if(empty($admin_password)){
	$errors['passwordCode']="ERROR:Password is required";
}



		if(count($errors) == 0){
	
		   include("dbconnect.php");
		   if(isset($_POST['signin']))
		   {
		   $admin_code=$_POST['admin_code'];
		   $admin_password=$_POST['admin_password'];
			
		   
		   if($admin_code!="" && $admin_password!="")
		   {
			  $sql1="select * from admin where admin_code='$admin_code' and admin_password='$admin_password'"; 
			  $result=mysqli_query($conn,$sql1);
		      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		   
		 
		   if($row['admin_code']==$admin_code && $row['admin_password']==$admin_password)
		   {
			 
			  $sql2="select *  from admin where admin_code='$admin_code'";
			  $result2=mysqli_query($conn,$sql2);
			  $row=mysqli_fetch_array($result2,MYSQLI_ASSOC);
			 // $_SESSION['user_email']=$email;
					$_SESSION['adminid']=$row['admin_id'];
					$_SESSION['admincode']=$row['admin_code'];
					$_SESSION['adminpassword']=$row['admin_password'];
			  //$_SESSION['user']=$row['USER_NAME'];
			  header("location:admin_main.php");
		  }
		   
		   else
		   {
			   ?>
		       <script>alert("ERROR:\nInvalid code or password\nPlease try again.");</script>
		<?php	
		
		echo "<script>location.href='adminLogin.php'</script>";
		
		}
	
		  }
		   }
		
}

}
			 ?>








<body>  

<div class="container">
<br/>
	
<h3 class="text-center" id="title"><i>©Two95 International Recruitment Agency Sdn. Bhd.</i></h3>
<hr>


<div id="box" class="row justify-content-center">
<div class="col-md-5">
<div class="card">
<header class="card-header">
<div class="row text-center">
<div class="col-md-12">
<img src="assets/favicon.png" height="60px;" class="img-circle" alt="login" style="border-radius: 100px;">
</div>
<div>
<h4>Two95 Admin</h4>
</div>
	</div>
	</header>
<article class="card-body">
<form action="" method="post" name="loginfrm">
	<div class="form-row">
	<div class="col form-group">
		
		  	<label for="user_email">Admin</label>
			<input id="Email" name="admin_code" class="form-control" id="admin_code" type="text" placeholder="" value="<?php if(isset($_POST['admin_code'])) echo $_POST['admin_code']; ?>"/>
			<span id="email_error" style="color:red;"><?php if(isset($errors['adminCode'])) echo $errors['adminCode'];   ?></span>	
	</div>
	
	</div>
		<div class="form-group">
		  <label  for="user_password">Password</label>              
		  <input  name="admin_password"  id="admin_code" class="form-control" type="password" placeholder="" value="" />
		  <span id="passworderr" style="color:red;"><?php if(isset($errors['passwordCode'])) echo $errors['passwordCode']; ?></span>
		
		</div> 
		
	<!-- form-group end.// -->  
    
	
	<div class="form-group">
	<button   type="submit" name="signin"  class="btn btn-success btn-lg btn-block" style="background-color:#000000;">Log in</button>
    </div> <!-- form-group// -->      
    <small class="text-muted"></small>                                          
</form>
</article> <!-- card-body end .// -->
</div> 
</div> 

</div> 


</div>

<!--container end.//-->
<br/><br/><br/><br/>

</body>
</html>