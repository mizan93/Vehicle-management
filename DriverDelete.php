
<?php
//    getting  delete id

    $driverid = $_GET['driverid'];
    $connection= mysqli_connect("localhost", "root", "", "transport_management");
    $sql = "SELECT * FROM driver WHERE driverid='$driverid'";
    $getdata =mysqli_query($connection,$sql);;
    if ($getdata) {
        while ($delimage = $getdata->fetch_assoc()) {
            $dellink = $delimage['drphoto'];
            unlink($dellink);
        }
    }
    $sql="DELETE FROM driver WHERE driverid='$driverid'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
      $msg=" Driver deleted.";
    header("Location: DriverIndex.php?msg=".$msg);
   }else{
      
        die('unsuccessful' .mysqli_error($connection));
    
   }
    // echo $id;

?>
