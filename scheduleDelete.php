
<?php
//    getting  delete id

    $id = $_GET['id'];
    $connection= mysqli_connect("localhost", "root", "", "transport_management");
    
    $sql="DELETE FROM schedule WHERE id='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
      $msg=" Schedule deleted.";
    header("Location: scheduleList.php?msg=".$msg);
   }else{
      
        die('unsuccessful' .mysqli_error($connection));
    
   }
    // echo $id;

?>
