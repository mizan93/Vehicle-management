<?php
    session_start();
  
$connection = mysqli_connect("localhost", "root", "", "transport_management");


$sql = "SELECT * FROM `schedule`";
$res = mysqli_query($connection, $sql);


?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to Transport management system</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>


<body style="margin:80px auto">
<?php include 'navbar.php';?>  
<div class="container foo">
<div class="row header" style="text-align:center">
<h3>Permanent Bus Schedule</h3>
</div>



<?php
      if (mysqli_num_rows($res) > 0) { ?>

<table id="myTable" class="table table-bordered table-striped table-hover table-condensed" >  


<thead>  
          <tr>  
            <th>NO</th>  
            <th>PERIOD</th>  
            <th>FIRST</th>  
            <th>SECOND</th>  
            <th>THIRD</th>  
          </tr>  
        </thead>
        
       <tbody>  
       <?php while ($row = mysqli_fetch_assoc($res)) {?> 
          <tr>  
          <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["period"] ?></td>
                <td><?php echo $row["first"] ?></td>
                <td><?php echo $row["second"] ?></td>
                <td><?php echo $row["third"] ?></td>
                <?php }
        } ?>
          </tr> 
          
          
        </tbody>  

</table>
	  </div>
	  
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        
</script>
    
</body>  

</html>