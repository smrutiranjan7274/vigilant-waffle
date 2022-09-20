<?php

$var = 0;

if (isset($_POST['regComplaint'])) 
{
    $conn = mysqli_connect('localhost', 'root', '', 'db_admin');
    $var = $_POST['m_uid'];

    $query = "SELECT * FROM `add_machine` WHERE m_uid = '$var';";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_fetch_assoc($result);
}
else if (isset($_POST['regIssue'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'db_admin');

    $c_uid = $_POST['c_uid'];
    $c_desc = $_POST['c_desc'];
    $c_status = $_POST['c_status'];

    $query = "INSERT INTO `complaints`(`c_uid`, `c_desc`, `c_status`) VALUES ('$c_uid', '$c_desc', '$c_status');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $msg = "Complaint Registered Successfully!";
        echo "<script>alert('$msg')</script>";
        print('<script>location.href = "index.php"</script>');
    }
    else {
        $msg = "Complaint Registration Failed!";
        echo "<script>alert('$msg')</script>";
        print('<script>location.href = "index.php"</script>');
    }
}
else {
    print('<script>location.href = "index.php"</script>');
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
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="left: 0;">
                <a class="navbar-brand" href="#">Machine Management</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                        </li>
                    </ul>

                    <button class="btn btn-outline-success">
                        <a href="login.php" style="text-decoration: none; color: #ffffff;">Admin Login</a>
                    </button>
                </div>
            </nav>

            <div class="content-wrapper">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Register your Complaint!</h3>
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">Fill in all the details and issues to register a complaint for this
                                    device.</p>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <h2>Machine Unique Id:
                                            <?php echo $var; ?>
                                        </h2>
                                        <input hidden name="c_uid" value="<?php echo $var; ?>" id="c_uid">
                                        <label class="form-check-label" for="c_status">Is Solved?</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input" name="c_status" type="checkbox"
                                            onchange="setValue(this.value)" value="0" id="c_status">
                                        <textarea name="c_desc" id="c_desc" rows="4" placeholder="Issue Description:"
                                            style="width: 100%;padding: 8px;border-radius: 4px;"></textarea>

                                    </div>
                                    <center>
                                        <button class="btn btn-outline-danger" name="regIssue">Complaint</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function setValue(value) {
            if (value == 0) {
                document.getElementById('c_status').value = 1;
            }
            else {
                document.getElementById('c_status').value = 0;
            }
        }
    </script>
</body>

</html>