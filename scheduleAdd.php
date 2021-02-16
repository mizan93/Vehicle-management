
<?php

$conn= mysqli_connect('localhost', 'root', '', 'transport_management');
  
if (isset($_POST['submit'])) {
    $period= $_POST['period'];
    $first= $_POST['first'];
    $second= $_POST['second'];
    $color= $_POST['third'];
   
    $sql="INSERT INTO `schedule`(`period`, `first`, `second`, `third`) VALUES ('$period','$first','$second','$third')";

    $res= mysqli_query($conn, $sql);
        
    if ($res==true) {
        $msg='schedule added.';
        header('Location:scheduleList.php?msg='.$msg);
    } else {
        die('unsuccessful' .mysqli_error($connection));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add schedule</title> 
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
 <?php include 'navbar_admin.php'; ?>
 <br>
   <div class="container"> 
     <div class="row">
       <div class="page-header">
            <h1 style="text-align: center;">Add schedule  </h1>
            <a class="btn btn-primary float-right" href="scheduleList.php" role="button">Schedule List</a>

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
                <div class="input-group">
                  <span class="input-group-addon"><b>Period</b></span>
                  <input id="period" type="text" class="form-control" name="period" required>
                </div>
                <br> 
                 <div class="input-group">
                  <span class="input-group-addon"><b>First</b></span>
                  <input id="first" type="text" class="form-control" name="first" requiredd>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Second</b></span>
                  <input id="second" type="text" class="form-control" name="second" required>
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Third</b></span>
                  <input id="third" type="text" class="form-control" name="third"  required>
                </div>
                <br>
                
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