<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css files/doctors.css">
    <link rel="stylesheet" href="css files/nav.css">
    <link rel="stylesheet" href="css files/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6eb5927010.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <title>Doctors</title>
</head>
<body>
    <!-----------------------Navigation bar and Logo------------------------>

    <div class="container-fluid nav-section">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">MT Hospital</a>
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
                        <li class="">
                          <a class="btn btn-primary btnnav" href="login.php">Login</a>
                        </li>
                        <li class="">
                          <a class="btn btn-primary btnnav" href="singup.php">Signup</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
    </div>
    
    <!-- --------------------Banner Section ---------------------- -->
    <div class="container-fluid banner-doctros" style="background-image: linear-gradient(rgb(0 9 67 / 80%), rgb(164 160 200 / 80%)), url('https://www.canadaqbank.com/blog/storage/2024/03/How-can-International-Medical-Students-and-Doctors-Practice-in-the-US.jpg');">
        <h1 class="banner-text">Doctors</h1>
    </div>
    <!-- ------------------------Doctors Section 1 ------------------------ -->
    <div class="container spdoctors">
      <h1>Specialist Doctors (VP Category) </h1>
      <!-- Carousel wrapper -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row justify-content-around">
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBFnI3l9al0-KU3pSrkENgygeb1bG90tKmb3MApmd71oACdZCZ2MbFHoTk2S1r8QVLjlI&usqp=CAU" alt="" class="card-image">
                    <div class="card-title">Dr. Y Bandaragodage</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://doctoroncare.org/system/storage/app/public/uploads/429111798-indian-doctor-woman-23073235%20(2).jpg" alt="" class="card-image">
                    <div class="card-title">Dr. P Jayasinghe</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://media.licdn.com/dms/image/C4D03AQE50fIz9wbwOg/profile-displayphoto-shrink_400_400/0/1631453401208?e=1720656000&v=beta&t=C4AQX1J374riECqIgZtxHSFYhhjwKfs_wo7uHJlYhqg" alt="" class="card-image">
                    <div class="card-title">Dr. K Weheragoda</div>
                  </div>
                </div>
              </div>
             </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row justify-content-around">
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://t3.ftcdn.net/jpg/06/86/76/30/360_F_686763077_MTnm8azWJ1Y7k0E1jEDDKkf7yPh6mhnN.jpg" width="300px"alt="" class="card-image">
                    <div class="card-title">Dr. LM Hafeeza</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://kdahweb-static.kokilabenhospital.com/kdah-2019/product/1675342153.jpg" alt="" class="card-image">
                    <div class="card-title">Dr. Swetha Rajendran</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://s3-media0.fl.yelpcdn.com/bphoto/v6AOJUNLTp3sCjXWFJZktA/300s.jpg" class="card-image">
                    <div class="card-title">Dr. PI Chandrasiri</div>
                  </div>
                </div>
              </div>
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
        
      </div>
  </div>

  <div class="container spdoctors">
    <h1> Head of Wards </h1>
    <!-- Carousel wrapper -->
    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row justify-content-around">
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://media.licdn.com/dms/image/C5603AQFaKnBk1ibmJw/profile-displayphoto-shrink_800_800/0/1657368798504?e=2147483647&v=beta&t=_LB1tk2PQOvqusIcNl7Aiz_BKxwfeQWWWUPyOj39Rjw" alt="" class="card-image">
                  <div class="card-title">Dr. J.S. Perera</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://s3-ap-south-1.amazonaws.com/images.hospals.com/uploads/images/654517038362410823426.jpg" alt="" class="card-image">
                  <div class="card-title">Dr. A R Pushpakumara</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs8Dm0K7TF2oa7y-xKdm2eRgNEFpx8arisZiU4ngs189aov6moLPxGDtUKaqAHJbt6GyU&usqp=CAU" alt="" class="card-image">
                  <div class="card-title">Dr. R Dissanayaka</div>
                </div>
              </div>
            </div>
           </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row justify-content-around">
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlFIvaAlxpnFCbNZT4Tkut1KrQy4WuBrV2dzJ08Eefpze9Tqf1w3MfUC1HejMI6Z8DRsE&usqp=CAU" alt="" class="card-image">
                  <div class="card-title">Dr. NM Lakmali</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://cdn.ceylonmirror.net/english/wp-content/uploads/2022/02/272337601_4742900292429917_8295696093157779587_n-e1643756466421.jpg" alt="" class="card-image">
                  <div class="card-title">Dr. P Shriyani</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzQzFCAG4jo7YmEtl_KwKRkQu2z00xAgiPB5xPZ--u5tzfwG5kwUqm0mJU5tLW5shaA9I&usqp=CAU" class="card-image">
                  <div class="card-title">Dr. Kelum Dissanayaka</div>
                </div>
              </div>
            </div>
           </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      

</div>
</div>
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
              $(document).ready(function(){
                $('.footer-item').onmouseenter(function(){
                  $('.hand').style.display= "block";
                });
                $('.footer-item').onmouseleave(function(){
                  $('.hand').style.display= "none";
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
              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Colombo&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
            </div>
          </div>
        </div>
    </footer>
</body>
</html>
