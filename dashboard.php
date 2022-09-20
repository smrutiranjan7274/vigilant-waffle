<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "assets/helpers/header_include.php"; 
  include "assets/helpers/checkuser.php";
  
  $conn = mysqli_connect('localhost', 'root', '', 'db_admin');
  
  $query = "SELECT m_uid, m_name, m_qrcode FROM `add_machine`;";
  $result = mysqli_query($conn, $query);

  $complaints_query = "SELECT * FROM `add_machine` INNER JOIN `complaints` ON complaints.c_uid = add_machine.m_uid;";
  $complaints = mysqli_query($conn, $complaints_query);

  $unresolved = "";
  $resolved = "";
  
  ?>
</head>

<body>
  <div class="container-scroller">
    <?php include "assets/helpers/sidebar.php"; ?>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body" id="card-body-list">
                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h3 class="mb-1">Add New Machine</h3>
                    <p class="text-muted mb-1">Add a new machine to the database</p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <a href="add_machine.php" style="text-decoration: none;">
                      <h6 class="font-weight-bold mb-0" style="font-size: 50px;">+</h6>
                    </a>
                  </div>
                </div>

                <br>

                <h4 class="card-title">Inventory</h4>

                <?php include 'assets/helpers/fetchlist.php'?>

                <!-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h4 class="mb-1">' . $rows['m_name'] . '</h4>
                    <p class="text-muted mb-1">Unique ID: ' . $rows['m_uid'] . </p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <img src="" alt="QR">
                    <img src="" alt="QR">
                  </div>
                </div> -->

              </div>
            </div>
          </div>

          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                <h1>Complaints Status:</h1>
                <?php include 'assets/helpers/fetchchart.php'?>
                <div id="piechart" style="height: 100%;"></div>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                  <h4 class="card-title mb-1">Complaints</h4>
                  <button class="btn btn-outline-success" onclick="loadCompList()" style="font-size: 20px;">Get List</button>
                </div>
                <div hidden id="list">
                  <?php include 'assets/helpers/fetchcomplaints.php'?>
                </div>
              </div>
            </div>
          </div>       
        </div>
      </div>
    </div>
  </div>
  <?php include "assets/helpers/footer_include.php"; ?>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  google.charts.load('current', { 'packages': ['corechart'] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Status', 'Complaints'],
      ['Unresolved', <?php echo $unresolved ?>],
      ['Resolved', <?php echo $resolved ?>]
        
      ]);

    var options = {
      slices: {
        0: { color: '#db3236' },
        1: { color: '#3cba54' }
      }
    };


    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
  </script>
  <script>
    
    function loadCompList(){
      document.getElementById("list").hidden = false;
    }
    
  </script>
</body>

</html>