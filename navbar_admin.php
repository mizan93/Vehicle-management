<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <style>
            #active {
                background: burlywood;
            }
        </style>
            <div class="collapse navbar-collapse" id="mynavbar">
            <?php
            $path = $_SERVER['SCRIPT_FILENAME'];
            $currenpage = basename($path, '.php');

            ?>
                <ul class="nav navbar-nav">
                    <!-- <li><a href="newdriver.php">Add New Driver</a></li> -->
                   
                    <li <?php
                    if($currenpage=='admin'){echo 'id="active"';}
                    ?>><a href="admin.php">Dashboard</a></li>
                    <li <?php
                    if($currenpage=='DriverIndex'){echo 'id="active"';}
                    ?>><a href="DriverIndex.php">Driver</a></li>
                    <li <?php
                    if($currenpage=='vehicleList'){echo 'id="active"';}
                    ?>><a href="vehicleList.php">Vehicle</a></li>
                    <li <?php
                    if($currenpage=='scheduleList'){echo 'id="active"';}
                    ?>><a href="scheduleList.php">Schedule</a></li>
                    <li <?php
                    if($currenpage=='indexbill'){echo 'id="active"';}
                    ?>><a href="indexbill.php">Billing</a></li>
                    <li <?php
                    if($currenpage=='bookinglist'){echo 'id="active"';}
                    ?>><a href="bookinglist.php">Booking</a></li>
                    <li <?php
                    if($currenpage=='trip_details'){echo 'id="active"';}
                    ?>><a href="trip_details.php">Trip Details</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="index.php">Visit Site</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


