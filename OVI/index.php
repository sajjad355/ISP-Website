<?php
     include "includes/db_connect.php";
     $sql="";
     $name=$phn=$mail=$currDate=$message="";

     if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(!empty($_POST['name'])){
            $name = mysqli_real_escape_string($conn,$_POST['name']);
          }
          if(!empty($_POST['phn'])){
            $phn = mysqli_real_escape_string($conn,$_POST['phn']);
          }
          if(!empty($_POST['mail'])){
            $mail = mysqli_real_escape_string($conn,$_POST['mail']);
          }
         


          if(!empty($_POST['message'])){
            $message = mysqli_real_escape_string($conn,$_POST['message']);
          }
         

          $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
         
          $currDate=$dt->format('Y-m-d H:i:s');

          $sql = "INSERT INTO contact (Name,MobileNumber,Email,Message,TimeStamp)
              VALUES ('$name','$phn','$mail','$message','$currDate');";
          mysqli_query($conn, $sql);
         
         echo "<script> alert(`Succesfully Send Your Message!`) </script>";
         $sql="";

         $name=$phn=$mail=$currDate=$message="";
          $conn->close();



     }


?>
<!DOCTYPE html>
<html>
<head>
    <title>OVI</title>
    <meta name="viewport" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" style="font-family:Brush Script MT; font-size:29px" href="index.html">O V I</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-uppercase">

                <li class="nav-item">
                  <a class="nav-link" href="#servicediv">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pricingdiv">Package</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#happyclients">Coverage Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactid">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#instruction">Instruction</a>
          </li>
                <li class="nav-item">
                    <a class="nav-link" href="complain.php">Complain Corner</a>
                </li>
              </ul>

            </div>
        </div>
        </nav>
        <section class="header-section" id="home">
              <div class="center-div">
                <br><br><br><br><br><br><br>
                  <h2 class="font-weight-bold">We are The ISP Provider</h2>
                  <p>We provide wifi connection</p>
                  <div class="header-buttons">
                      <a href="#footerdiv">Help Line</a>
                      <a href="#contactid">Contact</a>
                  </div>
              </div>
        </section>
    </div>
    <!-- Header Part End -->


    <section class="header-extra-div" id="extradiv">
      
        <div class="container">
            <div class="row">
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class=" fa-3x fa fa-wifi" aria-hidden="true"></i></a>
                    <h2>Fastest Internet Speed</h2>
                    <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
                </div>
                <div class=" extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-desktop" aria-hidden="true"></i></a>
                    <h2>Easyly Connection</h2>
                    <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
                </div>
                <div class=" extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-magic" aria-hidden="true"></i></a>
                    <h2>Quickly Response</h2>
                    <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="serviceoffers" id="servicediv">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold">WHAT DO WE OFFER</h1>
        <p class="text-center">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 ol">
            <div class="names my3">
              <h1>TBA</h1>
              <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%">100%</div>
            </div>
          </div>

          <div class="names my3">
            <h1>TBA</h1>
            <div class="progress w-75">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:10%">10%</div>
          </div>
        </div>

          <div class="names my3">
            <h1>TBA</h1>
            <div class="progress w-75">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:40%">40%</div>
          </div>
        </div>

        <div class="names my3">
          <h1>TBA</h1>
          <div class="progress w-75">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:50%">50%</div>
        </div>
      </div>

          <div class="names my3">
            <h1>TBA</h1>
            <div class="progress w-75">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:90%">90%</div>
          </div>
        </div>

        <div class="names my3">
          <h1>TBA</h1>
          <div class="progress w-75">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:50%">50%</div>
        </div>
      </div>


          </div>
          <div class="col-lg-6 col-md-12 col-12 servicediv">
            <div class="row">
              <div class="col-lg-2 col-2 service-icons">
                <i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10">
                <h2>Disline Connection</h2>
                <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
              </div>

            </div>

            <div class="row">
              <div class="col-lg-2 col-2 service-icons">
                <i class="fa-3x fa fa-wifi" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10">
                <h2>Wifi Connection</h2>
                <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
              </div>

            </div>

            <div class="row">
              <div class="col-lg-2 col-2 service-icons">
                <i class="fa-3x fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="col-lg-10 col-10">
                <h2>Support 24/7</h2>
                <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
              </div>

            </div>


          </div>
        </div>

      </div>
    </section>
    <!-- End offers -->



    <section class="project-work">
        <div class="container headings text-center">
            <p class="text-center font-weight-bold"><span style="font-size: 27px;">HAPPY CLIENTS </span><i style="font-size: 35px;"class="fa fa-smile-o" aria-hidden="true"></i></p>
        </div> 
      <div class="container d-flex justify-content-around align-items-center text-center wifidis">

        <!-- <div>
          <h1 class="count">800</h1>
          <p>Total Dis Connection</p>
        </div> -->

        <div>
          <h1 class="count">500</h1>
          <p>Total Wifi Connection</p>
        </div>

        <div>
          <h1 class="count">50</h1>
          <p>New Wifi Connection(Current Month)</p>
        </div>

        <!-- <div>
          <h1 class="count">7</h1>
          <p>New Dis Connection</p>
        </div> -->
      </div> 
    </section>     
    <!-- Happy clients end       -->



    <section class="pricing" id="pricingdiv">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white OBP">OUR BEST PRICING</h1><br>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">PACKAGE 1</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12 card-second">
            <div class="card text-center">
              <div class="card-header">PACKAGE 2</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">PACKAGE 3</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>
          

        </div>
        <br><br>

        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">PACKAGE 4</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12 card-five">
            <div class="card text-center">
              <div class="card-header">PACKAGE 5</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12">
            <div class="card text-center">
              <div class="card-header">PACKAGE 6</div>
              <div class="card-body">
                <li>BDT <span class="money">700</span>/Month</li>
                <li>10 mbps 1am-7pm</li>
                <li>YouTube Up-to 100 mb</li>
                <li>4 mbps 7pm-1am</li>
                <li>FTP Server Unlimited Downoad</li>
                <li>FTP Server Unlimited Downoad</li>
              </div>
              <div class="card-footer">
                <a href="#">CONTACT US</a>
              </div>
            </div>

          </div>
          

        </div>

      </div>
    </section> 
     <!-- End package -->


    <section class="happyclients" id="happyclients">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold">COVERAGE AREA</h1>
        <p class="text-capitalize pt-1">COVERAGE AREA</p>
      </div>
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
      
        <!-- The slideshow -->
        <div class="carousel-inner container">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Fulbari upazila</h1>
                  <h2>150 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 2</h1>
                  <h2>155 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 3</h1>
                  <h2>170 connection</h2>
                </div>
              </div>


            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 4</h1>
                  <h2>350 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 5</h1>
                  <h2>900 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 6</h1>
                  <h2>450 connection</h2>
                </div>
              </div>


            </div>          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4"style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 7</h1>
                  <h2>550 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 8</h1>
                  <h2>50 connection</h2>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                  <a href="#"><img src="images/header-bg.jpg" class="img-fluid img-yhumbnail" alt=""></a>
                  <p class="m-4" style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
                  <h1>Place 9</h1>
                  <h2>2 connection</h2>
                </div>
              </div>


            </div>          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
    </section>  

    <!-- End area -->
    <section class="contactus" id="contactid">
      <div class="container headings text-center">
        <h1 class="text-center font-weight-bold">CONTACT US</h1>
        <p class="text-capitalize pt-1">We're Here To Help And Answer Any Question You Might Have. We Look Forward To Hearing From You <i style="font-size: 23px; color: white;" class="fa fa-smile-o" aria-hidden="true"></i> </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="username" required autocomplete="off">
              </div>

              <div class="form-group">
                <input type="email" name="mail" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
              </div>

              <div class="form-group">
                <input type="text" name="phn" class="form-control" placeholder="Enter Mobile Number" id="mobileNumber" required autocomplete="off">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="4" id="comment"  placeholder="Enter Your Message"></textarea>
              </div>
               <div class="d-flex justify-content-center form-button " >
                <button type="submit" class="btn btn-primary">Submit</button>

               </div>
            </form>

          </div>

        </div>

      </div>
    </section>

    <!-- End Contact Us -->

    <section class="header-extra-div" id="instruction">
      <div class="container">
          <div class="row">
            <br><br>
              <div class="extra-div col-lg-4 col-md-4 col-12">
                  <a href="#"><i class="fa-3x fa fa-home" aria-hidden="true"></i></a>
                  <h2>SHIFTING NEW PLACE</h2>
                  <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
              </div>
              <div class="extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-home" aria-hidden="true"></i></a>
                <h2>CHANGING PACKAGE</h2>
                <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
            </div>
              <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <h2>LINE ACTIVATION AND DEACTIVATION PROCESS</h2>
                  <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am from Dinajpur.</p>
              </div>
          </div>
      </div>
  </section>
  <!-- End instruction -->

  <footer class="footersection" id="footerdiv">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
          <div>
            <h3>OVI COMPANY LIMITED</h3>
            <p style="  text-align: justify; text-justify: inter-word;">I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
          <div class="fnl">
            <h3>NIVIAGIATION LINKS</h3>         
            <li><a href="#servicediv">Service</a></li>          
            <li><a href="#pricingdiv">Package</a></li>          
            <li><a href="#happyclients">Coverage Area</a></li>          


          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12 footer-div text-center">
          <div class="sl">
            <h3>SOCIAL LINKS</h3>
            <li><a href="#"><i style="color:white;font-size:35px;" class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp; &nbsp;   &nbsp;    
            <a href="#"><i style="color:white;font-size:35px;"  class="fa fa-twitter" aria-hidden="true"></i></a>      &nbsp; &nbsp;   &nbsp;   
            <a href="#"><i style="color:white;font-size:35px;"  class="fa fa-linkedin-square" aria-hidden="true"></i></a>      &nbsp; &nbsp;   &nbsp;   
            <a href="#"><i style="color:white;font-size:35px;"  class="fa fa-instagram" aria-hidden="true"></i></a></li>          
                    </div>
        </div>
      </div>
      <div class="mt-5 text-center">
          <p>© SAJJAD. All Rights Reserved</p>
      </div>

      <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" id="myBtn" onclick="topfunction()" aria-hidden="true"></i>

      </div>

    </div>

  </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>

      $('.count').counterUp({
        delay: 10,
        time: 3000
      })

      mybutton=document.getElementById("myBtn");
      window.onscroll=function(){scrollFunction()};

      function scrollFunction(){
        if(document.body.scrollTop>20 || document.documentElement.scrollTop>20)
        {
          mybutton.style.display="block";
        }
        else{
          mybutton.style.display="none";
        }
      }

      function topfunction(){
        document.body.scrollTop=0;
        document.documentElement.scrollTop=0

      }
    </script>


</body>
</html>