<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','transport_management'); 

   $sql="DELETE FROM `booking` WHERE booking_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
    $msg="Booking deleted.";

       header("Location: bookinglist.php?msg=".$msg);
   }else{
         echo "Not deleted";
   }
   
?>
