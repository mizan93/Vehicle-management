<?php
    $connection= mysqli_connect("localhost", "root", "", "transport_management");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Vehicles</title> 
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
            <p> <h1 style="text-align: center;"> Vehicle List </h1>
            <a class="btn btn-primary float-right" href="vehicleAdd.php" role="button">Add Vehicle</a>
          </p>
             <!-- <?php echo $msg; ?> -->
      </div> 
       <div class="col-md-3">
        <?php
        if (isset($_GET)) {
           echo $_GET['msg'];
        }
        ?>
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
        <?php
        if (mysqli_num_rows($res)>0) { ?>
    
            
                <br>
                <table class="table">
                    <thead>
                        <th>Bus Picture</th>
                        <th>Bus Registration No</th>
                    </thead>  

                    <?php while ($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><img height="100px" width="100px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp"></td>

                            <td><a href="busprofile.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["veh_reg"] ?></a></td>
                        </tr>
                    </tbody> 
                <?php } }?>
                </table>
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

     
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>