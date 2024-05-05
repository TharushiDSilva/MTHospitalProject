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
    <link rel="stylesheet" href="css files/surgeryservices.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Surgery Services</title>
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

    <div class="container-fluid services">
        <div class="row">
          <h1>Surgery Services</h1>
        </div>
    </div>

    <div class="container surgery-prices">
        <div class="row">
            <div class="col-md-4">
            <div class="card heart-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Heart Surgery</h5>
                        <p class="card-text">Price: 250,000 LKR<br><br>Description: Heart surgery is a common procedure with various techniques used to repair damaged arteries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card kidney-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Kidney Surgery</h5>
                        <p class="card-text">Price: 450,000 LKR<br><br>Description: Kidney surgery involves the removal of tumors or cysts, or the transplant of a new kidney.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card lung-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Lung Surgery</h5>
                        <p class="card-text">Price: 375,000 LKR<br><br>Description: Lung surgery includes procedures to treat conditions such as lung cancer, infections, or collapsed lungs.</p>
                    </div>
                </div>
            </div>
            <!-- Add three more surgery types below -->
            <div class="col-md-4">
            <div class="card brain-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Brain Surgery</h5>
                        <p class="card-text">Price: Based on the condition<br><br>Description: Brain surgery is performed to treat various conditions such as tumors, aneurysms, or brain injuries.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card orthopedic-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Orthopedic Surgery</h5>
                        <p class="card-text">Price: 565,000 LKR<br><br>Description: Orthopedic surgery involves the treatment of musculoskeletal injuries or conditions, including joint replacements and fracture repairs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card plastic-surgery">
                    <div class="card-body">
                        <h5 class="card-title">Plastic Surgery</h5>
                        <p class="card-text">Price: Based on the type(Contact Hospital)<br><br>Description: Plastic surgery encompasses a wide range of procedures aimed at altering or restoring the appearance of the body, often for cosmetic purposes.</p>
                    </div>
                </div>
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