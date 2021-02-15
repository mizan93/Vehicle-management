
<?php
// $msg= "" ;

$conn= mysqli_connect('localhost', 'root', '', 'transport_management');
  
if (isset($_POST['submit'])) {
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
    $sql = "UPDATE  `vehicle` SET 
    veh_reg='$regno',
    veh_type='$type',
    chesisno='$chesisno',
    brand='$brand',
    veh_color='$color',
    veh_regdate='$regdate',
    veh_description='$description',
    veh_photo='$photo'
    WHERE veh_id=$veh_id ";
    $res= mysqli_query($conn, $sql);
        
    if ($res==true) {
        $msg='Vehicle updated.';
        header('Location:vehicleList.php?msg='.$msg);
    } else {
      die('unsuccessful' .mysqli_error($connection));
      
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit vehicle</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
<?php
    if (!isset($_SESSION)) {
        session_start();
    }
   
   $veh_id= $_GET['veh_id'];
   $conn=mysqli_connect('localhost', 'root', '', 'transport_management');
   $sql="SELECT * FROM vehicle WHERE veh_id=$veh_id";
   $result=mysqli_query($conn, $sql);
   $data=mysqli_fetch_assoc($result);
?>

 <?php include 'navbar_admin.php'; ?>
 <br>
   <div class="container"> 
     <div class="row">
       <div class="page-header">
            <h1 style="text-align: center;">Edit Vehicle  </h1>
      </div> 
       <div class="col-md-3">
       </div>
       <?php
       if (isset($_GET['msg'])) {?>
           <p><?php
           echo $_GET['msg'];
           ?></p> 
       <?php
       }
       ?> 
        <div class="col-md-6 animated bounceIn"> 
        
                <br>

            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="veh_id" value="<?php echo $data["veh_id"] ?>">
                <div class="input-group">
                  <span class="input-group-addon"><b>Registration Number</b></span>
                  <input id="vehreg" type="text" class="form-control" name="vehregno" value="<?php echo $data['veh_reg'] ?>" required>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                  <?php if ($data['veh_type']=='bus') { ?>
                      <input type="radio" name="type" checked value="bus" required>Bus
                      <?php
                  } else {?>
                    <input type="radio" name="type"  value="bus" required>Bus
                 <?php }?>
                      
                    </label>
                <label class="radio-inline">
                <?php if ($data['veh_type']=='car') { ?>
                      <input type="radio" name="type" checked value="car" required>Car
                      <?php
                  } else {?>
                    <input type="radio" name="type"  value="car" required>Car
                <?php    }  ?>
                </label>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Chesis No</b></span>
                  <input id="vehchesis" type="text" class="form-control" name="vehchesis" value="<?php echo $data['chesisno'] ?>" requiredd>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Brand</b></span>
                  <input id="vehbrand" type="text" class="form-control" name="vehbrand" value="<?php echo $data['brand'] ?>" required>
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Color</b></span>
                  <input id="vehcolor" type="text" class="form-control" name="vehcolor" value="<?php echo $data['veh_color'] ?>" required>
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Registration Date</b></span>
                  <input id="vehregdate" type="text" class="form-control" name="vehregdate" value="<?php echo $data['veh_regdate'] ?>" required>
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker();
                      } );
                </script> 
                
                
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Description</b></span>
                     <textarea rows="5" id="draddress" type="text" class="form-control" name="vehdescription"  required> <?php echo $data['veh_description'] ?></textarea>
                  
                </div>
                <br>
                
                <!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="vehphoto" type="file" class="form-control" name="file">
                </div>
                <br>
                -->
                <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                
                 
                
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>