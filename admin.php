<?php
    
        
        // session_start();
        $connection=mysqli_connect("localhost", "root", "", "transport_management");
$sql="select * from driver";
$dcount=mysqli_query($connection, $sql);
$sql="select * from vehicle";
$vcount=mysqli_query($connection, $sql);
$sql="select * from tripcost";
$tcount=mysqli_query($connection, $sql);
$sql="select * from user";
$ucount=mysqli_query($connection, $sql);
$sql="select * from bill";
$bcount=mysqli_query($connection, $sql);
$sql="select * from booking";
$bookingcount=mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'navbar_admin.php'?>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center">Admin Panel</h1>
           </div>
           <div class="col-md-12 animated bounceIn"> 
        
                  <table  id="myTable" class="table  animated bounce">
                      <thead>
                          <th> Total vehicle</th>
                          <th> Total Driver</th>
                          <th> Total Trip</th>
                          <th> Total Booking</th>
                          <th> Total Billing</th>
                      </thead>  
  
                     
                      <tbody>
                          <tr>
                             <td><?php echo mysqli_num_rows($vcount);  ?></td>
                             <td><?php echo mysqli_num_rows($dcount);  ?></td>
                             <td><?php echo mysqli_num_rows($tcount);  ?></td>
                             <td><?php echo mysqli_num_rows($bookingcount);  ?></td>
                             <td><?php echo mysqli_num_rows($bcount);  ?></td>
                            
                          </tr>
                         
                      </tbody> 
                
                  </table>
          </div>  

           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>