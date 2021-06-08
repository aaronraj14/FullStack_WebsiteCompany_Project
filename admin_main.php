<html>
<?php 
session_start();
include("dbconnect.php");
 ?>
<head>
<title>Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
body{background-color:#001a39;}
th{color:#FFFF00;}
td{color:#FFFFFF;}
h4{color:#00FF00;}
</style>
</head>
<body>
<ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a href="admin_main.php" class="nav-link">
			<?php if(isset($_SESSION['admincode']))
			{ echo "Admin: ".$_SESSION['admincode']; 
		} 
		else{ 
		echo "<script>location.href='adminLogin.php'</script>"; } ?>
		</a>
          </li>
		    <li class="nav-item">
            <?php echo "<a class='nav-link' href='adminlogout.php'>Logout</a>"?>
          </li>
        </ul>
<section>
<div class="container-md">
<h4>Apply now(Resumes)</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
	  <th scope="col">Position</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM resume";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
 ?>
    <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['position'];?></td>
	  <td><a style="color:red;" href="print2.php?resume_id=<?php echo $row['resume_id'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
<div class="container-md">
<h4>Talent</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
	  <th scope="col">Company</th>
	  <th scope="col">Position</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM talent";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['firstname'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['company'];?></td>
      <td><?php echo $row['position'];?></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
<div class="container-md">
<h4>Customer Service</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM customer_service";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>

<div class="container-md">
<h4>Advertised Manager</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM advertised_manager";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
<div class="container-md">
<h4>Analog Engineer</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM  analog_engineer";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
<div class="container-md">
<h4>Business Analyst</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM  business_analyst";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>

<div class="container-md">
<h4>Custom Layout Engineer</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM  custom_layout_engineer";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
<div class="container-md">
<h4>Software Developer</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Select Job</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM  software_developer";
  $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result))
 {
  ?>
    <tr>
      <td><?php echo $row['your_name'];?></td>
      <td><?php echo $row['your_email'];?></td>
      <td><?php echo $row['your_job'];?></td>
	  <td><a style="color:red;" href="print.php?csID=<?php echo $row['csID'];?>&your_job=<?php echo $row['your_job'];?>">View</a></td>
    </tr>
 <?php
 }
 ?> 
  </tbody>
</table>
</div>
</section>
</body>
</html>