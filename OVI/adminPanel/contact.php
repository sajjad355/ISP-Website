<?php
  session_start();
  include "includes/db_connect.php";
  if(isset($_SESSION['uname']))
  {
    $commentsQuery = "SELECT * from contact ORDER BY TimeStamp DESC";
    $resultComments = mysqli_query($conn, $commentsQuery);
    

  }
  else
  {
    header("Location:index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    ISP
    </title>
    <link rel="shortcut icon" href="/images/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
        <a href="#"><img src="./img/download.png" alt="Comapny logo"></a>

            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./img/user.png" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    Ovi
                </div>
            </div>
            <button class="btn btn-outline">
                <a href="logout.php"><i class='bx bx-log-out bx-flip-horizontal'></i></a>
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-home'></i>
                    <span>dashboard</span>
                </a>
            </li>
            
            
            
           
            <li>
                <a href="contact.php" class="active">
                    <i class='bx bx-chat'></i>
                    <span>Message List</span>
                </a>
            </li>
            
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>settings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Complain dashboard
            </div>
        </div>
        <div class="main-content">
            

            <div class="row">
                
                
                
            <?php
   
              if($resultComments->num_rows>0)
              { 
              while($row = mysqli_fetch_assoc($resultComments))
              {
              ?> 
                <div class="col-12">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">
                            Message #<?php echo $row["Id"]; ?>
                        </div>
                        <div class="box-body overflow-scroll">
                              <div class="order-owner">
                                <div class="col-4"> <span> Message No. :</span> </div>
                                <div class="col-8"><span><?php echo $row["Id"]; ?></span></div>
                                                 
                              </div>
                              <div class="order-owner">
                                <div class="col-4"> <span> Name :</span> </div>
                                <div class="col-8"><span><?php echo $row["Name"]; ?></span></div>
                                                 
                              </div>
                              <div class="order-owner">
                                <div class="col-4"> <span> Mobile Number :</span> </div>
                                <div class="col-8"><span><?php echo $row["MobileNumber"]; ?></span></div>
                                                 
                              </div>
                              <div class="order-owner">
                                <div class="col-4"> <span> Email:</span> </div>
                                <div class="col-8"><span><?php echo $row["Email"]; ?></span></div>
                                                 
                              </div>

                              <div class="order-owner">
                                <div class="col-4"> <span> Time Stamp :</span> </div>
                                <div class="col-8"><span><?php echo $row["TimeStamp"]; ?></span></div>
                                                 
                              </div>
                              <div class="order-owner">
                                <div class="col-4"> <span> Message :</span> </div>
                                <div class="col-8"><span><?php echo $row["Message"]; ?></span></div>
                                                 
                              </div>
                             
                              
                                       
                        </div>
                        
                    </div>
                    
                    <!-- End Complain box -->
                </div>
                <?php 
                }
              }
                else
                {
                  ?>
                  <div class="col-12" style="text-align:center">
                    <h3><span>No Message</span></h3>
                    </div>

              <?php
                }
                ?>



            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/apps.js"></script>

</body>

</html>