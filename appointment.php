<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital_appointments";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("INSERT INTO appointments (first_name, last_name, age, telephone_number, appointment_date, doctor) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $first_name, $last_name, $age, $telephone_number, $appointment_date, $doctor);

    // Set parameters and execute statement
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
    $telephone_number = $_POST['tpno'];
    $appointment_date = $_POST['appointment_date'];
    $doctor = $_POST['doctor'];
    $stmt->execute();

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect or show success message
    echo "<script>alert('Appointment successfully scheduled!');</script>";
}
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
    <link rel="stylesheet" href="css files/nav.css">
    <link rel="stylesheet" href="css files/appointment.css">
    <link rel="stylesheet" href="css files/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6eb5927010.js" crossorigin="anonymous"></script>
    <title>Appointments</title>
    <script>
        function validateForm(form) {
            var fname = form.fname.value;
            var lname = form.lname.value;
            var age = form.age.value;
            var tpno = form.tpno.value;
            var appointment_date = form.appointment_date.value;
            var doctor = form.doctor.value;

            if (fname == "" || lname == "" || age == "" || tpno == "" || appointment_date == "" || doctor == "") {
                alert("Please fill in all fields.");
                return false;
            }
            if(0>age || age>100){
              alert("Invalid age");
              return false;
            }
            var format = /^\d{10}$/; 
            if (!format.test(tpno)) {
              alert("Invalid phone number.");
              return false;
            }

            return true;
        }
    </script>
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact" onsubmit="return validateForm(this)">
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
                <label for="appointment_date">Select Date</label>
                <input type="date" id="appointment_date" name="appointment_date" class="appointment_date form-control">
            </div>
            <div class="form-group">
                <label for="doctor">Select Doctor</label>
                <select name="doctor" id="doctor" class="form-control">
                    <option value="" selected="selected">Select the Doctor</option>
                    <option value="Dr. S.M.D Silva">Dr. S.M.D Silva</option>
                    <option value="Dr. Dr. R.P.S Kumara">Dr. R.P.S Kumara</option>
                    <option value="Dr. L.M Hafeez">Dr. L.M Hafeez</option>
                    <option value="Dr. Nimal Rajapaksha">Dr. Nimal Rajapaksha</option>
                    <option value="Dr. P.I Chandrasiri">Dr. Nimal Rajapaksha</option>
                    <option value="Dr. Pasindu Lakshan">Dr. Pasindu Lakshan</option>
                    <option value="Dr. Thilina Heashan">Dr. Thilina Heashan</option>
                    <option value="Dr. Kavindu Kaushal">Dr. Kavindu Kaushal</option>
                    <option value="Dr. Chamoda Sankalpani">Dr. Chamoda Sankalpani</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Make Appointment</button>
                <button type="reset" class="btn btn-primary">Clear</button>
            </div>
        </form>
    </div>
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
