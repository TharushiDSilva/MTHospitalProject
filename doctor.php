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
    <div class="container-fluid banner-doctros">
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
                    <img src="https://th.bing.com/th/id/OIP.iVs3gb0RXSckBSdQL_mF_wHaF8?w=263&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" class="card-image">
                    <div class="card-title">Dr. SMD Silva</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://th.bing.com/th/id/OIP.vSIzxTuBoOKCCcx7mwNvKgAAAA?w=140&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" class="card-image">
                    <div class="card-title">Dr. RPS Kumara</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="data:image/jpeg;base64,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" alt="" class="card-image">
                    <div class="card-title">Dr.PQS Jayaweera</div>
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
                    <img src="data:image/jpeg;base64,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" alt="" class="card-image">
                    <div class="card-title">Dr. LM Hafeez</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://th.bing.com/th/id/OIP.IVwf85npYYUcwRp4EIhqDgHaJm?pid=ImgDet&rs=1" alt="" class="card-image">
                    <div class="card-title">Dr. Nimal Rajapaksha</div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card d-block w-100 text-center">
                    <img src="https://th.bing.com/th/id/OIP.p2gsFyT-7IUNNBB3CwIkLwHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1.3" class="card-image">
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
                  <img src="https://th.bing.com/th/id/OIP.A18tRvzNi8rU69mFJ-Ta5wAAAA?pid=ImgDet&w=185&h=197&c=7&dpr=1.3" alt="" class="card-image">
                  <div class="card-title">Dr. JS Perera</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://th.bing.com/th/id/OIP.VoNGL9kYOG4ySx_OjcPVQgHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1.3" alt="" class="card-image">
                  <div class="card-title">Dr. AR Pushpakumara</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://th.bing.com/th/id/OIP.8vGFNhJe9PAhg1lRBNQD9wHaF9?pid=ImgDet&w=185&h=148&c=7&dpr=1.3" alt="" class="card-image">
                  <div class="card-title">Dr. Rajendran</div>
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
                  <img src="data:image/jpeg;base64,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" alt="" class="card-image">
                  <div class="card-title">Dr. NM Lakmal</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://th.bing.com/th/id/OIP.h6DqZ5YQ-stg8czbl7rMhwD9D3?w=190&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" class="card-image">
                  <div class="card-title">Dr. P Siripala</div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card d-block w-100 text-center">
                  <img src="https://th.bing.com/th/id/OIP.O0lJ1OVjFzAxEGESIDopUwHaHu?w=189&h=198&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="card-image">
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