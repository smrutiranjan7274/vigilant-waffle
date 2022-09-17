<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include "assets/helpers/header_include.php";
  include "assets/helpers/checkuser.php";
  ?>
</head>

<body onload="getLocation(), getUID()">
  <div class="container-scroller">
    <?php include "assets/helpers/sidebar.php"; ?>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <br><br><br>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <center>
              <h2>Enter Machine Data to Store:</h2>
            </center>
            <br>
            <div class="container">

            </div>
            <form action="insert.php" method="post" enctype="multipart/form-data">
              <div class="form-outline mb-4">
              <label for="m_name">Machine Name:</label>
              <input class="form-control" type="text" maxlength="25" name="m_name" id="m_name" required>
          </div>
          <div class="form-group">
            <label for="m_uid">Machine Unique ID:</label>
            <input class="form-control" type="number" maxlength="5" name="m_uid" id="m_uid" readonly required>
          </div>
          <div class="form-group">
            <label for="m_long">Longitude:</label>
            <input class="form-control" type="number" maxlength="15" step="any" name="m_long" id="m_long" readonly
              required>
          </div>
          <div class="form-group">
            <label for="m_lat">Latitude:</label>
            <input class="form-control" type="number" maxlength="15" step="any" name="m_lat" id="m_lat" readonly
              required>
          </div>
          <div class="form-group">
            <label for="m_desc">Machine Description:</label>
            <textarea class="form-control" type="text" maxlength="100" name="m_desc" id="m_desc" rows="2"
              required></textarea>
          </div>
          <label for="m_image">Upload Machine Image:</label>
          <div class="form-group">
            <input class="form-control" type="file" id="uploadfile" name="uploadfile" value=""
            style="padding-left: 16px;"/>
          </div>

          <div hidden class="form-group">
            <label for="qr_data">QR Data:</label>
            <input class="form-control" type="text" id="qr_data" name="qr_data" value="" />
          </div>
          <center><button class="btn btn-primary" type="submit" name="upload">Register Machine</button></center>
          </form>
        </div>
        <center>
          <br>
          <button class="btn btn-primary" onclick="goBack()" name="back">Back</button>
        </center>
      </div>
    </div>
  </div>
</body>
<script>
  var x = document.getElementById("demo");

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    document.getElementById("m_lat").value = position.coords.latitude;
    document.getElementById("m_long").value = position.coords.longitude;
  }

  function getUID() {
    var uid = Math.floor(Math.random() * 100000);
    document.getElementById("m_uid").value = uid;
    document.getElementById("qr_data").value = uid;
  }

  function goBack() {
    location.href = "dashboard.php";
  }
</script>

</html>