<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{

    if($_FILES['file4']['name']) {
        $filename=explode("." , $_FILES['file4']['name']);
        if($filename[1]=='csv')  {
            $handle = fopen($_FILES['file4']['tmp_name'] , 'r');
            $c=0;
            $count=0;
            while($data=fgetcsv($handle)) {
                $count++;
                $item1=mysqli_real_escape_string($conn , $data[0]);
                $item2=mysqli_real_escape_string($conn , $data[1]);
                $item3=mysqli_real_escape_string($conn , $data[2]);
                $item4=mysqli_real_escape_string($conn , $data[3]);
            $checkexistdata="SELECT * FROM `client_sku` Where `PORTAL SKU` = '$item1'";
            $ressultcheckexistdata=mysqli_query($conn,$checkexistdata);
            $countexistdata=mysqli_num_rows($ressultcheckexistdata);
            if($countexistdata == 0) {
                    if($count > 1) {
            $sql="INSERT INTO `client_sku`(`PORTAL SKU`, `PRODUCT NAME`, `TP`, `SKU`) 
            VALUES ('$item1','$item2','$item3','$item4')";
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