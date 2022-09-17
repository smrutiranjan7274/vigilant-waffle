<?php
session_start();
if (isset($_SESSION["uid"]) == 'Admin')
  print('<script>location.href="dashboard.php"</script>');
else
  include "guestUser.php";
?>

<div class="main-panel">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="left: 0;">
    <a class="navbar-brand" href="#">Project Name</a>
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
        <a href="login.php" style="text-decoration: none; color: #ffffff;">Login</a>
      </button>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="row">
      <center>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Welcome to Project Name</h4>
              <p class="card-description">
                Please login to continue
              </p>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>