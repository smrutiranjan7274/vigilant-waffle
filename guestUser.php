<?php

require("vendor/autoload.php");
use Zxing\QrReader;

if (isset($_POST['getDetails'])) {

  $filename = $_FILES['qrCode']['name'];
  $filetype = $_FILES['qrCode']['type'];
  $filetmp = $_FILES['qrCode']['tmp_name'];
  $filetype = explode('/', $filetype);

  if ($filetype[0] !== 'image') {
    $msg = "Please upload a valid image file!";
    echo "<script>alert('$msg')</script>";
  }
  else {
    $newfilename = md5(rand() . time()) . $filename;
    move_uploaded_file($filetmp, "assets/images/qr/" . $newfilename);
    $qrScan = new QrReader("assets/images/qr/" . $newfilename);
    $text = $qrScan->text();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "assets/helpers/header_include.php"; ?>
</head>

<body>
  <div class="container-scroller">
    <div class="main-panel">
      <nav class="navbar fixed-top navbar-expand navbar-dark bg-dark" style="left: 0;">
        <a class="navbar-brand" href="index.php" style="font-size: 30px;">Welcome to QR Based Machine Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            </li>
          </ul>

          <button class="btn btn-outline-success">
            <a href="login.php" style="text-decoration: none; color: #ffffff; font-size: 20px;">Admin Login</a>
          </button>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 600px;">
            <img class="d-block w-100" src="assets/images/carousel/3.jpg" style="min-height: 500px; object-fit: cover;"
              alt="Second slide">
          </div>
          <div class="carousel-item" style="height: 600px;">
            <img class="d-block w-100" src="assets/images/carousel/4.jpg" style="min-height: 500px; object-fit: cover;"
              alt="Third slide">
          </div>
          <div class="carousel-item" style="height: 600px;">
            <img class="d-block w-100" src="assets/images/carousel/5.jpg" style="min-height: 500px; object-fit: cover;"
              alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="content-wrapper">
        <div class="row">
          <div class="col">
            <!-- <h1 class="title">Welcome to QR Based Machine Management</h1> -->
            <div class="card">
              <div class="card-body">
                <p class="card-text" style="font-size: 20px;">This is a web application that allows you to report any
                  issues with the machines.
                  To raise a complaint, you will need to scan the QR code on the machine and enter the machine data. To
                  view the machine data, location of the machine you will need to scan the QR code on the machine.
                </p>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="qrCode" class="form-label" style="font-size: 20px;">Upload QR file</label>
                    <input class="form-control" type="file" accept="image/*" name="qrCode" id="qrCode"
                      style="padding-left: 16px;">
                  </div>
                  <center>
                    <button type="submit" name="getDetails" class="btn btn-outline-success" style="font-size: 20px;">Get
                      Details</button>
                  </center>
                </form>
              </div>
            </div>
            <br>
            <?php include "assets/helpers/machine_info.php"; ?>
            <!-- <div class="card">
              <div class="card-body">
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h4 class="mb-1">Sub Machine Gun</h4>
                    <p class="text-muted mb-1">Unique ID: 42083</p>
                    <p class="text-muted mb-1">Latitude: 85.8384 &nbsp;&nbsp;&nbsp; Latitude: 20.2935</p>
                    <p class="text-muted mb-1">Machine Description: a short and rapid firing gun</p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <img src="assets/images/uploads/logo.png" alt="QR Code" width="20%">
                  </div>
                </div>
              </div>
              <form action="registerComplaint.php" method="post" enctype="multipart/form-data">
                <label for="m_uid"></label>
                <input hidden type="text" name="m_uid" id="m_uid">
                <button type="submit" class="btn btn-outline-danger">Register an issue!</button>
              </form>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "assets/helpers/footer_include.php"; ?>
</body>

</html>