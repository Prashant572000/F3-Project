<?php include '../../include_files/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <title>Admin Panel || Payment Data</title>

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
 <h1 class="text-center" > Display Payment Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Order_Id </th>
 <th> TRANJECTION_ID </th>
 <th> PAYMENT_DATE </th>
 <th> RECEIVED_AMOUNT </th>
 <th> INVOICE_VALUE </th>
 <th> RETURN_INVOICE_VALUE </th>
 <th> COMMISSION </th>
 <th> SHIPPING </th>
 <th> GST </th>
 <th> TCS</th>
 <th> TDS</th>
 <th> PENALTY_AND_OTHER_EXP </th>
 <th> COMPENSATION </th>
 <th> BANK_TRANSFER </th>
 <th> RECOVERY </th>
 <th> PORTAL </th>
 </tr>

 <?php

 include '../dbcon.php'; 
 $q = "select * from payments ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['ID'];  ?> </td>
 <td> <?php echo $res['Order_Id'];  ?> </td>
 <td> <?php echo $res['TRANJECTION_ID'];  ?> </td>
 <td> <?php echo $res['PAYMENT_DATE'];  ?> </td>
 <td> <?php echo $res['RECEIVED_AMOUNT'];  ?> </td>
 <td> <?php echo $res['INVOICE_VALUE'];  ?> </td>
 <td> <?php echo $res['RETURN_INVOICE_VALUE'];  ?> </td>
 <td> <?php echo $res['COMMISSION'];  ?> </td>
 <td> <?php echo $res['SHIPPING'];  ?> </td>
 <td> <?php echo $res['GST'];  ?> </td>
 <td> <?php echo $res['TCS'];  ?> </td>
 <td> <?php echo $res['TDS'];  ?> </td>
 <td> <?php echo $res['COMPENSATION'];  ?> </td>
 <td> <?php echo $res['PENALTY_AND_OTHER_EXP'];  ?> </td>
 <td> <?php echo $res['BANK_TRANSFER'];  ?> </td>
 <td> <?php echo $res['RECOVERY'];  ?> </td>
 <td> <?php echo $res['PORTAL'];  ?> </td>
 <!-- <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td> -->

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>