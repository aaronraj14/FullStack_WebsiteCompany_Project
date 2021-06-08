<?php

session_start();

if(isset($_SESSION['admincode']))
{
	session_destroy();
	
	echo "<script>location.href='adminLogin.php'</script>";
}
else{
	echo "<script>location.href='adminLogin.php'</script>";
}

?>