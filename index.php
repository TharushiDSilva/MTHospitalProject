<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css files/home.css">
  <link rel="stylesheet" href="css files/nav.css">
  <link rel="stylesheet" href="css files/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="JavaScript/jquery.convform.js"></script>
  <script src="https://kit.fontawesome.com/6eb5927010.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css files/jquery.convform.css">
  <title>MT Hospital</title>
</head>

<body>
  <!-----------------------Navigation bar and Logo------------------------>

  <div class="container-fluid nav-section">
    <div class="row">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">MT Hospital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="facility.php">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.php">Appoinment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
            <li class="sample" id="btn1">
              <a class="btn btn-primary btnnav" href="login.php">Login</a>
            </li>
            <li class="sample" id="btn2">
              <a class="btn btn-primary btnnav" href="singup.php">Signup</a>
            </li>

            <li class="username" id="user">
              <?php
              if (isset($_GET["email"])) {
                echo $_GET["email"];
              } else {
                echo "No User";
              }
              ?>
            </li>

            <li class="sample" id="btn3">
              <a class="btn btn-primary btnnav" href="index.php">Logout</a>
            </li>
          </ul>
          <?php
          if (isset($_GET["email"])) {
            echo "<script>
                        document.getElementById('user').classList.add('show');
                        document.getElementById('btn1').classList.add('hide');
                        document.getElementById('btn2').classList.add('hide');
                        document.getElementById('btn3').classList.add('show');
                      </script>";
          } else {
            echo "<script>
                      document.getElementById('user').classList.add('hide');
                      document.getElementById('btn1').classList.add('show');
                      document.getElementById('btn2').classList.add('show');
                      document.getElementById('btn3').classList.add('hide');
                        
                    </script>";
          }

          ?>
        </div>
      </nav>
    </div>
  </div>


  <!--------------------Banner Section----------------------->

  <div class="container-fluid banner-section">
    <div class="row">
      <div class="col-sm-6">
        <div class="banner-text text-center">
          <h1>Welcome to<br>MT Hospital</h1>
          <h3>The Largest health care center</h3>
          <a href="#" class="btn btn-primary banbtn">Join with Us</a>
          <a href="#" class="btn btn-primary banbtn">Make Appointment</a>
        </div>
      </div>
      <div class="col-sm-6">
        <img src="images/hospital1.jpg" alt="Banner Image" class="banner-image">
      </div>
    </div>
  </div>

  <!--------------------About Us Section--------------------->
  <div class="container aboutus-section">
    <div class="row">
      <div class="col-sm-6 column-left">
        <h1>Our Story</h1>
        <p>As a hospital service we did a big service since 2019. Leading surgery delivery hospital, largest pharmcy service, dentist services, E-Channeling services and many other services that you can find from our hospital. And also you can find friendly and experienced doctors and other medical staff members in our hospital and you can find your all medical checkups and tests with very low of charges in our hospital.</p>
        <a href="" class="aboutus">Read More >></a>
      </div>
      <div class="col-sm-6 column">
        <img src="https://media.istockphoto.com/id/482858629/photo/doctors-hospital-corridor-nurse-pushing-gurney-stretcher-bed.jpg?b=1&s=612x612&w=0&k=20&c=QA5AU7uv9cnJUXBdMstov5CcpErsIQEke05Hn98SEvs=" alt="Hospital Image" class="story-img">
        <div class="overlay">
          <p class="text">Best Hospital</p>
        </div>
      </div>
    </div>
  </div>

  <!--------------------Services Section--------------------->
  <div class="container services-section">
    <div class="row">

      <h1 class="text-end services-topic">Our Services</h1>

      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-image text-center">
            <img src="data:image/png;base64,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" alt="service1">
          </div>
          <div class="card-body">
            <div class="card-title">
              <h3>E Channeling Service</h3>
              <p class="card-text">We have experienced doctors for all of your services. You can find them from our e channeling service.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-image">
            <img src="data:image/png;base64,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" alt="">
          </div>
          <div class="card-body">
            <div class="card-title">
              <h3>Pharmacy Service</h3>
              <p class="card-text">You can find any kind of drugs, injections and any other medical components from our pharmacy service.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-image">
            <img src="https://www.pngitem.com/pimgs/m/79-795637_emergency-care-icon-png-transparent-png.png" alt="">
          </div>
          <div class="card-body">
            <div class="card-title">
              <h3>Emergency Service</h3>
              <p class="card-text">We are open 24 X 7. So you can find our emergency service in any time of a day.</p>
            </div>
          </div>
        </div>
      </div>

      <a href="services.html" class="show-more btn btn-primary text-center">Show all services &nbsp; <i class="fa-sharp fa-solid fa-circle-arrow-right"></i></a>
    </div>
  </div>

  <!--------------------Facilities Section--------------------->
  <div class="container facilities">
    <div class="row">
      <h1 class="facilities-topic">Our Facilities</h1>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://thumbs.dreamstime.com/b/hospital-ward-beds-medical-equipment-interior-new-empty-room-75224097.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://media.istockphoto.com/id/1216959568/photo/hospital-bed-with-medical-equipment-in-hospital-room.jpg?s=612x612&w=0&k=20&c=y8lN8Ij4hDdVdBjkIWbXzCA3QzcTkJ7ND9eOZOeTo4E=" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://thumbs.dreamstime.com/b/pharmacy-interior-blurred-background-58416047.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://www.dailyrounds.org/blog/wp-content/uploads/2019/09/emergency.jpg" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://www.astron.international/blog/wp-content/uploads/2018/10/Healthcare-facility.jpg" alt="Fifth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <a href="facility.html" class="show-more btn btn-primary text-center">Show all Facilities &nbsp; <i class="fa-sharp fa-solid fa-circle-arrow-right"></i></a>
    </div>
  </div>

  <!--------------------Contact Us Section--------------------->
  <h1 class="text-end contact-topic">Contact Us</h1>
  <a name="contact"></a>
  <div class="container-fluid contactus-section">

    <div class="row">
      <div class="col-sm-6">
        <div class="container contact-form">
          <form action="" class="contact" Method="POST">
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" class="fname form-control">
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" class="lname form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" id="age" name="age" class="age form-control">
            </div>
            <div class="form-group">
              <label for="tpno">Telephone Number</label>
              <input type="text" id="tpno" name="tpno" class="tpno form-control">
            </div>
            <div class="form-group">
              <a href="" class="btn btn-primary">Submit</a>
              <a href="" class="btn btn-primary">Clear</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="container info">
          <div class="group open-time">
            <i class="fa-sharp fa-solid fa-clock"></i>
            <p>Open 24 X 7</p>
          </div>
          <div class="group phone-no">
            <i class="fa-solid fa-phone-volume"></i>
            <p>+94 11 222 333 44</p>
          </div>
          <div class="group address">
            <i class="fa-sharp fa-solid fa-location-dot"></i>
            <p>No. 1, Main Street, Colombo 4</p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!---------------Chat Bot---------------------------------->

  <div class="chat_icon">
    <i class="fa-solid fa-comments"></i>
  </div>

  <div class="chat_box">
    <div class="conv-form-wrapper">
      <form action="index.html" method="POST" class="hidden">
        <select name="patient" data-conv-question="Welcome To MT Hospital... Do you need any help?">
          <option value="yes">Yes</option>
          <option value="no">No..</option>
        </select>
        <div data-conv-fork="patient">
          <div data-conv-case="yes">
            <select name="secondquestion" data-conv-question="Please Select what kind of servic you need " class="second_que">
              <option value="appointment">Appointment</option>
              <option value="doctors">Doctors</option>
              <option value="facilities">Facilities</option>
              <option value="contact">Contact Info</option>
            </select>

            <div data-conv-fork="secondquestion">
              <div data-conv-case="appointment">
                <input type="text" name="appointment_answer" data-conv-question="If you need to place appointment, You should go to the Appointment section in the navigation bar.">
              </div>
              <div data-conv-case="doctors">
                <input type="text" name="doctors_answer" data-conv-question="If you need to find details about doctors, You should go to the Doctors section in the navigation bar.">
              </div>
              <div data-conv-case="facilities">
                <input type="text" name="facility_answer" data-conv-question="If you need to find facilities of our hospital, You should go to the facility section in the navigation bar.">
              </div>
              <div data-conv-case="contact">
                <input type="text" name="contact_answer" data-conv-question="Contact No : +94 11 2 236 236">
              </div>
            </div>

            <select name="thirdquestion" data-conv-question="Do you need another Help ?" class="thirds_que">
              <option value="yes">Yes</option>
              <option value="no">No..</option>
            </select>
            <div data-conv-fork="thirdquestion">
              <div data-conv-case="yes">
                <select name="secondquestion" data-conv-question="Please Select what kind of servic you need " class="second_que">
                  <option value="appointment">Appointment</option>
                  <option value="doctors">Doctors</option>
                  <option value="facilities">Facilities</option>
                  <option value="contact">Contact Info</option>
                </select>

                <div data-conv-fork="secondquestion">
                  <div data-conv-case="appointment">
                    <input type="text" name="appointment_answer" data-conv-question="If you need to place appointment, You should go to the Appointment section in the navigation bar.">
                  </div>
                  <div data-conv-case="doctors">
                    <input type="text" name="doctors_answer" data-conv-question="If you need to find details about doctors, You should go to the Doctors section in the navigation bar.">
                  </div>
                  <div data-conv-case="facilities">
                    <a href="facility.html" target="_blank"></a>
                  </div>
                  <div data-conv-case="contact">
                    <input type="text" name="contact_answer" data-conv-question="Contact No : +94 11 2 236 236">
                  </div>
                </div>
              </div>
              <div data-conv-case="no">
                <input type="text" name=" no_answer" data-conv-question="So, Enjoy the web site Sir/Madam">
              </div>
            </div>
          </div>


          <div data-conv-case="no">
            <input type="text" name=" no_answer" data-conv-question="So, Enjoy the web site Sir/Madam">
          </div>
        </div>
      </form>
    </div>
  </div>


  <script src="javaScript/chatbot.js"></script>
  <!--------------------Footer Section--------------------->
  <footer>
    <div class="container-fluid footer-section">
      <div class="row">
        <div class="col-sm-4 column text-light">
          <h3>Useful Links</h3>
          <ul type="none">
            <li><a class="footer-item" href=""><i class="fa-solid fa-hand-point-right hand"></i>Services</a></li>
            <li><a class="footer-item" href=""><i class="fa-solid fa-hand-point-right hand"></i>Facilities</a></li>
            <li><a class="footer-item" href=""><i class="fa-solid fa-hand-point-right hand"></i>Doctors</a></li>
            <li><a class="footer-item" href=""><i class="fa-solid fa-hand-point-right hand"></i>Appointments</a></li>
          </ul>
        </div>
        <script>
          $(document).ready(function() {
            $('.footer-item').onmouseenter(function() {
              $('.hand').style.display = "block";
            });
            $('.footer-item').onmouseleave(function() {
              $('.hand').style.display = "none";
            });
          });
        </script>
        <div class="col-sm-4 column text-light newsletter">
          <h3>Newsletter</h3>
          <form action="">
            <div class="form-group">
              <input type="email" placeholder="Your Email">
              <input type="submit" class="btn-submit" value="Submit">
            </div>
          </form>
        </div>
        <div class="col-sm-4 column">
          <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Colombo&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 100%;
                  width: 100%;
                }
              </style><a href="https://embedgooglemap.2yu.co/">html embed google map</a>
              <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 100%;
                  width: 100%;
                }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>