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
            <a href="index.php" style="text-decoration: none; color: #ffffff; font-size: 20px;">Back</a>
          </button>
        </div>
      </nav>
      <div class="content-wrapper">
        <br>
        <center>
          <h2>Welcome, please login to continue!</h2>
        </center>
        <br><br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <table class="table table-borderless" style="width:100%; border: none;">
              <tr>
                <td>Username</td>
                <td><input type="text" class="form-control" name="uid" id="uid"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" class="form-control" name="pwd" id="pwd"></td>
              </tr>
              <tr>
                <td colspan=2>
                  <center><button class="btn btn-success" id="login">Login</button></center>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php include "assets/helpers/footer_include.php"; ?>
  <script>
    $("#login").click(function () {
      $.post("assets/helpers/login_validate.php", {
        uid: $("#uid").val(),
        pwd: $("#pwd").val(),
      }).done(function (data) {
        if ($.trim(data) == "1") {
          // alert("Successfully logged In");
          location.href = "dashboard.php";
        } else {
          alert("Login failed! Check Credentials!");
        }
      });
    });
  </script>
</body>



</html>