<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css files/nav.css">
    <link rel="stylesheet" href="css files/appointment.css">
    <link rel="stylesheet" href="css files/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6eb5927010.js" crossorigin="anonymous"></script>
    <title>Appointments</title>
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
   <div class="container-fluid banner align-items-center">
    <div class="row">
      <div class="main-text text-center mx-auto">
        <h1>Make your Appointment Now</h1>
      </div>
    </div>
    </div>

    <div class="container appointment-form">
      <div class="row">
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
            <label for="age">Select Date</label>
            <input type="date" id="age" name="age" class="age form-control">
          </div>
          <div class="form-group">
            <label for="age">Select Doctor</label>
            <select name="" id="" class="form-control">
              <option value="" selected="selected">Select the Doctor</option>
              <option value="">Dr. Pasindu Lakshan</option>
              <option value="">Dr. Thilina Heashan</option>
              <option value="">Dr. Kavindu Kaushal</option>
              <option value="">Dr. Chamoda Sankalpani</option>
            </select>
          </div>
          <div class="form-group">
           <a href="" class="btn btn-primary">Make Appointment</a>
           <a href="" class="btn btn-primary">Clear</a>
          </div>
          
        </form>
       </form>
      </div>
    </div>

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
  