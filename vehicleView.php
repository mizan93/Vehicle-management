<?php
    $connection= mysqli_connect("localhost", "root", "", "transport_management");
    
    session_start();

    $veh_id= $_GET['busid'];

    $sql= "SELECT * FROM `vehicle` WHERE veh_id='$veh_id' or veh_reg='$veh_id'";
    //echo $sql;
    $res= mysqli_query($connection, $sql);
    $row= mysqli_fetch_assoc($res);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Vehicles</title> 
    <meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
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
          <!-- <div class="fb-profile-text" id="h1" style="margin-top: 20px;">
                           
            </div> -->
            <hr>
            <h2><?php echo $row['veh_reg']; ?></h2>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="vehicle picture/<?php echo $row['veh_photo'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Vehicle </a>
                    </li>
                    
                    <!--
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                     Bill </a>
                    </li>
                    -->
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     <h4><strong>Brand</strong></h4>
                      <p><?php echo $row['brand']; ?></p>
                      
                      <h4><strong>Color</strong></h4>
                      <p><?php echo $row['veh_color']; ?></p>
                      
                      <h4><strong>Registration No</strong></h4>
                      <p>
                        <?php echo $row['veh_reg']; ?> 
                      </p>
                      <!--
                      
                      -->
                      <h4><strong>Type</strong></h4>
                      <p><?php echo $row['veh_type']; ?></p>
                      
                      <h4><strong>Chesis No</strong></h4>
                      <p><?php echo $row['chesisno']; ?></p>

                      <h4><strong>Vehicle Registration Date</strong></h4>
                      <p><?php echo $row['veh_regdate']; ?></p>
                      <h4><strong>Description</strong></h4>
                      <p><?php echo $row['veh_description']; ?></p>
                    </div>
                    <?php //if($_SESSION['username']!= null) {?>
                    
                    <!--
                    <div class="tab-pane" id="tab_default_2">
                      <div class="row">
                      <div class="col-sm-10">
                       <?php //include 'insertbill.php';?>
                          
                          <?php // }?>
                      </div>
                      </div>
                    </div>  
                    -->
                            
                  </div>
                
                </div>
              </div>
           </div>
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

</script>
</html>