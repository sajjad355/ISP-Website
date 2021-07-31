<?php
     include "includes/db_connect.php";
     $sql="";
     $name=$contactNumber=$problem=$pubg=$pubg1=$messageProblem=$internetBrowingProblem=$facebookBuffer=$YoutubeBrowingProblem=$dropLineTime=$ftp=$messageSatisfy=$messageComment=$packageWiseSpeed="";

     if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(!empty($_POST['name'])){
            $name = mysqli_real_escape_string($conn,$_POST['name']);
          }
          if(!empty($_POST['contactNumber'])){
            $contactNumber = mysqli_real_escape_string($conn,$_POST['contactNumber']);
          }
          if(!empty($_POST['problem'])){
            $problem = mysqli_real_escape_string($conn,$_POST['problem']);
          }
          if(!empty($_POST['pubg'])){
            $pubg = mysqli_real_escape_string($conn,$_POST['pubg']);
          }

          if(!empty($_POST['pubg1'])){
            $pubg1 = mysqli_real_escape_string($conn,$_POST['pubg1']);
          }



          if(!empty($_POST['messageProblem'])){
            $messageProblem = mysqli_real_escape_string($conn,$_POST['messageProblem']);
          }
          if(!empty($_POST['internetBrowingProblem'])){
            $internetBrowingProblem = mysqli_real_escape_string($conn,$_POST['internetBrowingProblem']);
          }
          if(!empty($_POST['facebookBuffer'])){
            $facebookBuffer = mysqli_real_escape_string($conn,$_POST['facebookBuffer']);
          }
          if(!empty($_POST['YoutubeBrowingProblem'])){
            $YoutubeBrowingProblem = mysqli_real_escape_string($conn,$_POST['YoutubeBrowingProblem']);
          }



          if(!empty($_POST['dropLineTime'])){
            $dropLineTime = mysqli_real_escape_string($conn,$_POST['dropLineTime']);
          }
          if(!empty($_POST['ftp'])){
            $ftp = mysqli_real_escape_string($conn,$_POST['ftp']);
          }
          if(!empty($_POST['messageSatisfy'])){
            $messageSatisfy = mysqli_real_escape_string($conn,$_POST['messageSatisfy']);
          }
          if(!empty($_POST['messageComment'])){
            $messageComment = mysqli_real_escape_string($conn,$_POST['messageComment']);
          }
          if(!empty($_POST['packageWiseSpeed'])){
            $packageWiseSpeed = mysqli_real_escape_string($conn,$_POST['packageWiseSpeed']);
          }
          $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
         
          $currDate=$dt->format('Y-m-d H:i:s');

          $sql = "INSERT INTO complain (Name,MobileNo,Date,AnyServiceProblem,AnyServiceProblemDesc,InternetBrowserProblem,DownloadProblem,FacebookBufferProblem,LineDropTime,PackageWiseDownloadOk
                ,HappyWithService,PubgFreefirePing,FtpServerProblem,AndroidIosAppProblem,CommentAboutCompany)
              VALUES ('$name','$contactNumber','$currDate','$problem','$messageProblem','$internetBrowingProblem','$pubg1','$facebookBuffer',
              '$dropLineTime','$packageWiseSpeed','$messageSatisfy','$pubg','$ftp','$YoutubeBrowingProblem','$messageComment');";
          mysqli_query($conn, $sql);
         
         echo "<script> alert(`Succesfully Submitted Your Complain!`) </script>";
         $sql="";
        $name=$contactNumber=$problem=$pubg=$messageProblem=$internetBrowingProblem=$facebookBuffer=$YoutubeBrowingProblem=$dropLineTime=$ftp=$messageSatisfy=$messageComment=$packageWiseSpeed="";

        
          $conn->close();



     }


?>


<!DOCTYPE html>
<html>
<head>
    <title>OVI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/complainstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="header" >
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" style="font-family:Brush Script MT; font-size:29px" href="#">O V I</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-uppercase">

                <li class="nav-item">
                  <a class="nav-link" href="index.php">BACK TO HOMEPAGE</a>
              </li>

              </ul>

            </div>
        </div>
        </nav>

    </div>
    <!-- Header Part End -->

<body>
    
    <br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align: center;">
                    <h2>COMPLAIN CORNER</h2>
                    <p>24 hours</p>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <section>
        <div class="container">
            <div>
                <div class="col-lg-12">
                    <h3>Start Complaining...</h3>
                    <br><br>
                    <form class="contact_us_form row"  method="post" >
                        <div class="form-group col-lg-6">
                                                               আপনার নাম
                            <br/>
                            <br/>
                            <input type="text" class="form-control" id="name" name="name" placeholder="নাম" required>
                        </div>


                        <div class="form-group col-lg-6">
                                                                     মোবাইল নম্বর
                            <br/>
                            <br/>
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="মোবাইল নম্বর " required>
                            <br/>
                        </div>
  
                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <br><br>
                            <label>১। &nbsp; আমাদের সার্ভিস এ কোনো সমস্যা পাচ্ছেন ?</label><br/>
                        </div>
                        <input type="radio" name="problem" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                        <input type="radio" name="problem" value="না"/> &nbsp না<br/>
                        </div>


                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <br><br>
                            <label>২। &nbsp;PUBG/FreeFire এ PING কত ?</label><br/>
                        </div>
                        <input type="radio" name="pubg" value="৫০ এর কম"/> &nbsp ৫০ এর কম<br/>
                        <input type="radio" name="pubg" value="১৫০"/> &nbsp ১৫০<br/>       
                        <input type="radio" name="pubg" value="২৫০+"/> &nbsp ২৫০+<br/>      
                        <input type="radio" name="pubg" value="৭০০+"/> &nbsp ৭০০+<br/>               
                        </div>

                        


                        <div class="form-group col-lg-6">
                            <br>
                            &nbsp কি কি সমস্যা পাচ্ছেন?
                             <br/>        
                            <textarea class="form-control" name="messageProblem" id="messageProblem" rows="1" placeholder="উত্তর"></textarea> 
                            <br/>
                            <br/>
                        </div>


                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <br>
                            <label>৩।&nbsp; ইন্টারনেট ব্রাউজ করতে কোনো সমস্যা হয়, ইন্টারনেট সাইট গুলো ওপেন হতে অনেক দেরি হয়?</label><br/>
                        </div>
                        <input type="radio" name="internetBrowingProblem" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                        <input type="radio" name="internetBrowingProblem" value="না"/> &nbsp না<br/>
                            <br/> <br>       
                        </div>


                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label>৪। &nbsp; ফেইসবুক এ ভিডিও চালালে কি বাফার করে?</label><br/>
                            </div>
                            <input type="radio" name="facebookBuffer" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                            <input type="radio" name="facebookBuffer" value="না"/> &nbsp না<br/>
                                <br/><br>
                        </div>


                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label>৫। &nbsp; ইউটিউব ব্রাউজ এবং ডাউনলোড এ কোনো সমস্যা আছে ?</label><br/>
                        </div>
                        <input type="radio" name="YoutubeBrowingProblem" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                        <input type="radio" name="YoutubeBrowingProblem" value="না"/> &nbsp না<br/>
                            <br/><br/>
                        </div>


                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label>৬। &nbsp; কোন টাইম এ লাইন ড্রপ করে?</label><br/>
                        </div>
                        <input type="radio" name="dropLineTime" value="রাতে"/> &nbsp রাতে<br/>
                        <input type="radio" name="dropLineTime" value="দিনে"/> &nbsp দিনে<br/>
                        <input type="radio" name="dropLineTime" value="সবসময়"/> &nbsp সবসময়<br/>
                            <br/><br/>
                        </div>



                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label>৭। &nbsp; প্যাকেজ ওয়াইজ ডাউনলোড আপলোড স্পিড কি ঠিক আছে?</label><br/>
                        </div>
                        <input type="radio" name="packageWiseSpeed" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                        <input type="radio" name="packageWiseSpeed" value="না"/> &nbsp না<br/>
                            <br/><br>
                        </div>


                        <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label>৮। &nbsp; FTP সার্ভার ব্যাবহারে কোনো ঝামেলা আছে?</label><br/>
                        </div>
                        <input type="radio" name="ftp" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                        <input type="radio" name="ftp" value="না"/> &nbsp না<br/>
                            <br/><br/>
                        </div>

                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label>৯। &nbsp;PUBG/FreeFire এ PING আপ-ডাউন করে কি না?</label><br/>
                            </div>
                            <input type="radio" name="pubg1" value="হ্যাঁ"/> &nbsp হ্যাঁ<br/>
                            <input type="radio" name="pubg1" value="না"/> &nbsp না<br/>
                                <br/><br/>
                            </div>


                         <div class="form-group col-lg-12">
                            &nbsp ১০।&nbsp;  আমাদের সার্ভিস ব্যবহার করে আপনি কতটুকু সন্তুষ্ট ?<br/>                
                            <textarea class="form-control" name="messageSatisfy" id="messageSatisfy" rows="4" placeholder="মতামত"></textarea>
                            <br/> <br/> <br/>
                        </div>


                        <div class="form-group col-lg-12">
                             &nbsp ১১। &nbsp; আমাদের কোম্পানি সম্পর্কে আপনার মূল্যবান মতামত দিন<br/>    
                             <textarea class="form-control" name="messageComment" id="messageComment" rows="4" placeholder="মতামত"></textarea>
                        </div>
 
                        <div class="form-group col-lg-12" style="text-align:center">
                            <br>
                            <button class="submitbutton" type="submit" value="submit">SUBMIT COMPLAIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br><br>





  <footer class="footersection" id="footerdiv"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 footer-div text-center">
          <div>
            <h3>OVI COMPANY LIMITED</h3>
            <p>I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.I am sajjadur rahman. I am from dinajpur. I am from Dinajpur.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-12 footer-div text-center sl">
          <div>
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
      });
    </script>


</body>
</html>