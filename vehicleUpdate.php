
<?php
// $msg= "" ;
$conn= mysqli_connect('localhost', 'root', '', 'transport_management');

    $veh_id= $_POST['veh_id'];
    $regno= $_POST['vehregno'];
    $type= $_POST['type'];
    $chesisno= $_POST['vehchesis'];
    $brand= $_POST['vehbrand'];
    $color= $_POST['vehcolor'];
    $regdate= $_POST['vehregdate'];
    $description= $_POST['vehdescription'];
    $photo= $_FILES['file']['name'];
    
    //image Upload
    move_uploaded_file($_FILES['file']['tmp_name'], "photos/".$_FILES['file']['name']);
    //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']);
   
    $res=false;
    $sql = "UPDATE  vehicle SET 
    veh_reg='$regno',
    veh_type='$type',
    chesisno='$chesisno',
    brand='$brand',
    veh_color='$color',
    veh_regdate='$regdate',
    veh_description='$description',
    veh_photo='$photo',
    WHERE veh_id='$veh_id' ";
    $res= mysqli_query($conn, $sql);
        
    if ($res==true) {
        $msg='Vehicle updated.';
        header('Location:vehicleList.php?msg='.$msg);
    }else{
        echo '<script> alert("not updated.")</script>';
        header('Location:vehicleEdit.php?veh_id='.$veh_id);

    }
?>