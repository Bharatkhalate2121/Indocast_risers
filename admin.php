<?php?>     

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indocast Risers</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>


  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style=" background-color: #330d00; position:fixed; width:100%; z-index:11;">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.html"
        style="z-index:100; position:fixed;margin-top: 3%;   margin-bottom:3%; margin-left:2%;">
        <img src="logo.png" width="270" height="73" alt="">
      </a>

      <a href="index.html" class="logo me-auto">
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="/l3.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="abtus.html">About</a></li>
          <li><a class="nav-link scrollto" href="product.html">Products</a></li>
          <li><a class="nav-link   scrollto" href="machinary.html">Machinary</a></li>
          <li><a class="nav-link scrollto" href="admin.php">Responses</a></li>
          <li>
          <li><a class="getstarted scrollto" href="mailto:indocastrisers@gmail.com?subject=Subject%20of%20the%20email&body=Body%20of%20the%20email">Get To US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all records from the table
$sql = "SELECT * FROM msg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output table header
    echo "<table border='1' style='margin-top:5%; margin-left:5%;'>";
    echo "<tr><th>Name</th><th>Email</th><th>Subject</th><th>Mobile No</th><th>Message</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"]. "</td>";
        echo "<td>" . $row["Email"]. "</td>";
        echo "<td>" . $row["Subject"]. "</td>";
        echo "<td>" . $row["Mobile_No"]. "</td>";
        echo "<td>" . $row["Messages"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Indocast Risers</h3>
              <p>Santosh Nagar , Waki , <br>
                Khed ,<br>
                Maharashtra .<br><br>
                <strong>Phone:</strong> +91 7420840400<br>
                <strong>Email:</strong> indocastrisers@gmail.com<br>
              </p>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="abtus.html">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="product.html">Products</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="abtus.html">Privacy policy</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Connect with us on social media for the latest updates and behind-the-scenes content .</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Indocast Risers</a> </span></strong> All Rights Reserved
        </div>
        <div class="credits">                                                             
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>