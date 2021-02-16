<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $connection= mysqli_connect('localhost', 'root', '', 'transport_management');
    $sql="DELETE FROM tripcost WHERE id='$id'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_query($connection,$sql)){
       $msg="Trip deleted.";
       header("Location: trip_details.php?msg=".$msg);

    }else{
        die('unsuccessful' .mysqli_error($connection));
    }
}

?>
