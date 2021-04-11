<?php include '../../include_files/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <title>Admin Panel || Order Data</title>

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
 <h1 class="text-center" > Display Order Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> PORTAL </th>
 <th> ORDER_DATE </th>
 <th> Order_ID </th>
 <th> PORTAL_SKU </th>
 <th> PINCODE </th>
 <th> STATE </th>
 <th> ZONE </th>
 <th> BILL_FROM_STATE </th>
 <th> QTY </th>
 <th> AMOUNT</th>
 <th> STATUS </th>
 </tr >

 <?php

 include '../dbcon.php'; 
 $q = "select * from orders ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['ID'];  ?> </td>
 <td> <?php echo $res['PORTAL'];  ?> </td>
 <td> <?php echo $res['ORDER_DATE'];  ?> </td>
 <td> <?php echo $res['Order_ID'];  ?> </td>
 <td> <?php echo $res['PORTAL_SKU'];  ?> </td>
 <td> <?php echo $res['PINCODE'];  ?> </td>
 <td> <?php echo $res['STATE'];  ?> </td>
 <td> <?php echo $res['ZONE'];  ?> </td>
 <td> <?php echo $res['BILL_FROM_STATE'];  ?> </td>
 <td> <?php echo $res['QTY'];  ?> </td>
 <td> <?php echo $res['AMOUNT'];  ?> </td>
 <td> <?php echo $res['STATUS'];  ?> </td>
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