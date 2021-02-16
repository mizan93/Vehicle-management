
<?php
    session_start();
     $connection= mysqli_connect('localhost', 'root', '', 'transport_management');
    $select_query="SELECT * FROM tripcost";
    $result= mysqli_query($connection, $select_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>trip Details</title>
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
    <br><br>
    <div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Trip Details</h1>
                 
                </div>
                <?php
        if (isset($_GET['msg'])) {?>
       <div class="alert alert-danger alert-dismissable"  style="width: 300px; margin:0 auto;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <?php echo $_GET['msg'];?>
                  </div>
<?php
   } ?>
                
                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>Booking Id</th>
                        <th>User Name</th>
                        <th>Total Km</th>
                        <th>Oil Cost</th>
                        <th>Extra Cost</th>
                        <th>Total Cost Cost</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                       
                            while ($row=mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['booking_id']; ?></td>
                            <td><?php echo $row['username']; ?></td>

                            <td><?php echo $row['total_km']; ?></td>
                            <td><?php echo $row['oil_cost']; ?></td>
                            <td><?php echo $row['extra_cost']; ?></td>
                            <td><?php echo $row['total_cost']; ?></td>
                            <td>
                                <!-- <a class="btn btn-primary" href="DriverView.php?driverid=<?php echo $row["driverid"]; ?>">View</a>
                                <a class="btn btn-info" href="DriverEdit.php?driverid=<?php echo $row["driverid"]; ?>">Edit</a> -->
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete?');" href="tripDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php  }
                         ?>
                    </tbody>
                </table>
                
                
            </div>
     
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>