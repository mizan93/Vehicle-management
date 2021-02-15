
<?php
//    getting  delete id

    $id = $_GET['delId'];
    $connection= mysqli_connect("localhost", "root", "", "transport_management");
    $sql = "SELECT * FROM vehicle WHERE veh_id='$id'";
    $getdata =mysqli_query($connection,$sql);;
    if ($getdata) {
        while ($delimage = $getdata->fetch_assoc()) {
            $dellink = $delimage['veh_photo'];
            unlink($dellink);
        }
    }
    $sql="DELETE FROM vehicle WHERE veh_id='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
    echo  $msg=" Vehicle deleted.";
    
    header("Location: vehicleList.php?msg=".$msg);
   }else{
       die('unsuccessful' .mysqli_error($connection));
   }
    // echo $id;

?>
