<?php include '../../include_files/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel || Client Ticket Data</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-center" > Display Client Ticket  Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> ID </th>
 <th>ORDER ID/SUB ORDER ID </th>
 <th>TICKET ID </th>
 <th> PANEL</th>
 <th> CLAIM TYPE</th>
 <th> STATUS</th>
 <th> PERSON</th>
 <th> FOLLOW UP BY</th>
 </tr >

 <?php

 include '../dbcon.php'; 
 $q = "select * from client_ticket ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['ID'];  ?> </td>
 <td> <?php echo $res['ORDER ID/SUB ORDER ID'];  ?> </td>
 <td> <?php echo $res['TICKET ID'];  ?> </td>
 <td> <?php echo $res['PANEL'];  ?> </td>
 <td> <?php echo $res['CLAIM TYPE'];  ?> </td>
 <td> <?php echo $res['Status'];  ?> </td>
 <td> <?php echo $res['Person'];  ?> </td>
 <td> <?php echo $res['FOLLOW UP BY'];  ?> </td>
 <!-- <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td> -->

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

</body>
</html>