<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{

    if($_FILES['file2']['name']) {
        $filename=explode("." , $_FILES['file2']['name']);
        if($filename[1]=='csv')        {
            $handle = fopen($_FILES['file2']['tmp_name'] , 'r');
            $c=0;
            $count=0;
            while($data=fgetcsv($handle)) {
                $count++;
                $item1=mysqli_real_escape_string($conn , $data[0]);
                $item2=mysqli_real_escape_string($conn , $data[1]);
                $item3=mysqli_real_escape_string($conn , $data[2]);
                $item4=mysqli_real_escape_string($conn , $data[3]);
                $item5=mysqli_real_escape_string($conn , $data[4]);
                $item6=mysqli_real_escape_string($conn , $data[5]);
                $item7=mysqli_real_escape_string($conn , $data[6]);
                $item8=mysqli_real_escape_string($conn , $data[7]);
                $item9=mysqli_real_escape_string($conn , $data[8]);
                $item10=mysqli_real_escape_string($conn , $data[9]);
                $item11=mysqli_real_escape_string($conn , $data[10]);
                $item12=mysqli_real_escape_string($conn , $data[11]);
                $item13=mysqli_real_escape_string($conn , $data[12]);
                $item14=mysqli_real_escape_string($conn , $data[13]);
                $item15=mysqli_real_escape_string($conn , $data[14]);
                $item16=mysqli_real_escape_string($conn , $data[15]);

  $checkexistdata="SELECT * FROM `payments` Where Order_Id = '$item1' AND PAYMENT_DATE ='$item3' AND RECEIVED_AMOUNT='$item4'";
        $ressultcheckexistdata=mysqli_query($conn,$checkexistdata);
        $countexistdata=mysqli_num_rows($ressultcheckexistdata);
        if($countexistdata == 0) {
            if($count > 1) {
            $sql="INSERT INTO `payments`(`Order_Id`, `TRANJECTION_ID`, `PAYMENT_DATE`, `RECEIVED_AMOUNT`, `INVOICE_VALUE`, `RETURN_INVOICE_VALUE`, `COMMISSION`, `SHIPPING`, `GST`, `TCS`, `TDS`, `PENALTY_AND_OTHER_EXP`, `COMPENSATION`, `BANK_TRANSFER`, `RECOVERY`, `PORTAL`) 
            VALUES ('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16')";
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
