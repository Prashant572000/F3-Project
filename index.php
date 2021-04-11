<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   header('location:staff.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login || Admin Panel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/extra.css">
  <link rel="stylesheet" href="css/style.css">
<style type="text/css">
	html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  /*background: -webkit-linear-gradient(left, #a445b2, #fa4299);*/
}
</style>

</head>
<body style="background-color:#eee;" >
      <section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-12">
            <h1> Login To Access Admin Panel  </h1>
          </div>
        </div>
        <div class="row blog-entries" >
          <div class="col-md-12 col-lg-6  main-content">



            <form action="index.php" method="post" class="col-md-12 col-lg-12">
                  <div class="row">

                  <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="ENTER YOUR E-MAIL ID">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="ENTER YOUR PASSWORD">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="login_btn-sen" value="Submit" class="btn btn-info">     
                   </div>                   
                  </div>
                </form>
          </div>
</body>
</html>

<?php

include 'include_files/dbcon.php';
if(isset($_POST['login_btn-sen'])) {
	$email   = $_POST['email'];
	$password= $_POST['password'];
    $qry="SELECT * FROM login WHERE email ='$email' AND password='$password'";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Email or Password not match ! !');
         window.open('index.php','_self');
      </script>	  
		 <?php
}
else {
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
$_SESSION['uid']=$id;
header("Location:staff.php");
}	
}

?>