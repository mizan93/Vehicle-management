
<?php
// $msg= "" ;

$conn= mysqli_connect('localhost', 'root', '', 'transport_management');
  
if (isset($_POST['submit'])) {
    $id= $_POST['id'];
    $period= $_POST['period'];
    $first= $_POST['first'];
    $second= $_POST['second'];
    $color= $_POST['third'];
   
    $res=false;
    $sql = "UPDATE  `schedule` SET 
    period='$period',
    first='$first',
    second='$second',
    third='$color'
   
    WHERE id=$id ";
    $res= mysqli_query($conn, $sql);
        
    if ($res==true) {
        $msg='schedule updated.';
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
    <title>Edit schedule</title> 
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
   
   $id= $_GET['id'];
   $conn=mysqli_connect('localhost', 'root', '', 'transport_management');
   $sql="SELECT * FROM schedule WHERE id=$id";
   $result=mysqli_query($conn, $sql);
   $data=mysqli_fetch_assoc($result);
?>

 <?php include 'navbar_admin.php'; ?>
 <br>
   <div class="container"> 
     <div class="row">
       <div class="page-header">
            <h1 style="text-align: center;">Edit schedule  </h1>
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
            <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
                <div class="input-group">
                  <span class="input-group-addon"><b>Period</b></span>
                  <input id="period" type="text" class="form-control" name="period" value="<?php echo $data['period'] ?>" required>
                </div>
                <br> 
                 <div class="input-group">
                  <span class="input-group-addon"><b>First</b></span>
                  <input id="first" type="text" class="form-control" name="first" value="<?php echo $data['first'] ?>" requiredd>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Second</b></span>
                  <input id="second" type="text" class="form-control" name="second" value="<?php echo $data['second'] ?>" required>
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Third</b></span>
                  <input id="third" type="text" class="form-control" name="third" value="<?php echo $data['third'] ?>" required>
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