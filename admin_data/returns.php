<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{

    if($_FILES['file3']['name']) {
        $filename=explode("." , $_FILES['file3']['name']);
        if($filename[1]=='csv')        {
            $handle = fopen($_FILES['file3']['tmp_name'] , 'r');
            $c=0;
            $count=0;
            while($data=fgetcsv($handle)) {
                $count++;
                $item1=mysqli_real_escape_string($conn , $data[0]);
                $item2=mysqli_real_escape_string($conn , $data[1]);
                $item3=mysqli_real_escape_string($conn , $data[2]);
                $item4=mysqli_real_escape_string($conn , $data[3]);


  $checkexistdata="SELECT DISTINCT Order_Id  FROM `returns` Where Order_Id = '$item1'";
        $ressultcheckexistdata=mysqli_query($conn,$checkexistdata);
        $countexistdata=mysqli_num_rows($ressultcheckexistdata);
        if($countexistdata == 0) {
            if($count > 1) {
                $sql="INSERT INTO `returns`(`Order_Id`, `Return_Request_Date`, `Return_Delivered_Date_As_Per_Website`, `Portal`)
                VALUES ('$item1','$item2' , '$item3' , '$item4')";
            mysqli_query($conn,$sql);
            }
        }
    }
            fclose($handle);
            ?>
            <script>
               alert('Data Imported Successfully !!!');
               window.open('../staff.php','_self');
               </script>
            <?php
        }
        else {
            ?>
            <script>
            alert('Invalid File Format !!!');
               window.open('../staff.php','_self');
               </script>
        <?php
    }
}
}
?>