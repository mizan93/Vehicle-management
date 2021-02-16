<?php
     $connection= mysqli_connect("localhost", "root", "", "transport_management");

     session_start();
     $sql= "SELECT * FROM `driver` ORDER BY driverid DESC";
     $res=mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Drivers</title> 
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
   <div class="container"> 
     <div class="row">
        <div class="page-header">
            <p> <h1 style="text-align: center;">Driver List </h1>
            <a class="btn btn-primary float-right" href="DriverCreate.php" role="button">Add Driver</a>
          </p>
             <!-- <?php echo $msg; ?> -->
      </div> 
        <?php
        if (isset($_GET['msg'])) {?>
       <div class="alert alert-danger alert-dismissable"  style="width: 300px; margin:0 auto;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <?php echo $_GET['msg'];?>
                  </div>
<?php
        }
?></div>
        <div class="col-md-12 animated bounceIn"> 
          
        <?php
        if (mysqli_num_rows($res)>0) { ?>
    
                <br>
                <table  id="myTable" class="table table-bordered animated bounce">
                    <thead>
                    <th>Profile Picture</th>
                        <th>Driver Name</th>
                        <th>Action</th>
                    </thead>  

                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($res)) {  ?>

                        <tr>
                
                            <td><img height="100px" width="100px" src="picture/<?php echo $row["drphoto"]; ?>" alt="dp"></td>

                            <td><a href="driverprofile.php?driverid=<?php echo $row["driverid"]; ?>"> <?php echo $row["drname"] ?></a></td>
                        
                            <td>
                                <a class="btn btn-primary" href="DriverView.php?driverid=<?php echo $row["driverid"]; ?>">View</a>
                                <a class="btn btn-info" href="DriverEdit.php?driverid=<?php echo $row["driverid"]; ?>">Edit</a>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete?');" href="DriverDelete.php?driverid=<?php echo $row['driverid']; ?>">Delete</a>
                                
                            </td>
                        </tr>
                        <?php } }?>

                    </tbody> 
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
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>