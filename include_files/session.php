<?php
session_start();
   if(isset($_SESSION['uid'])) {
	// echo $_SESSION['uid'];
	echo "";
}
else {
	   header('location:index.php');
   }
?>