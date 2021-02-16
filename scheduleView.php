<?php
$connection = mysqli_connect("localhost", "root", "", "transport_management");

session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM `schedule` WHERE id='$id'";
//echo $sql;
$res = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Schedule View</title>
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
 <?php include 'navbar_admin.php';?>
 <br>
 <div class="container">
          <div class="row">
          <!-- <div class="fb-profile-text" id="h1" style="margin-top: 20px;">

            </div> -->
            <hr>
           <div class="col-sm-3">
                  
           </div>

           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Schedule </a>
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

                     <h4><strong>Period</strong></h4>
                      <p><?php echo $row['period']; ?></p>

                      <h4><strong>First</strong></h4>
                      <p><?php echo $row['first']; ?></p>

                      <h4><strong>Second</strong></h4>
                      <p>
                        <?php echo $row['second']; ?>
                      </p>
                      <!--

                      -->
                      <h4><strong>Third</strong></h4>
                      <p><?php echo $row['third']; ?></p>


                    </div>


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