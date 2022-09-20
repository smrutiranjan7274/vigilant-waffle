<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_admin');

// Check connection
if ($conn === false) {
    die('ERROR: Could not connect. ' . mysqli_connect_error());
}

if (isset($_SESSION["uid"]) == 'Admin') {
    $target_dir = "assets/images/uploads/";
    $target_dir = $target_dir . basename($_FILES["uploadfile"]["name"]);

    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir)) {

    }
    else {
        echo "Sorry, file not uploaded, please try again!";
    }

    $m_name = $_REQUEST['m_name'];
    $m_uid = $_REQUEST['m_uid'];
    $m_long = $_REQUEST['m_long'];
    $m_lat = $_REQUEST['m_lat'];
    $m_desc = $_REQUEST['m_desc'];
    $m_image = $_FILES["uploadfile"]["name"];

    $data = $_POST["qr_data"];
    $width = 500;
    $height = 500;

    $url = "https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";


    $sql = "INSERT INTO add_machine VALUES ('$m_name','$m_uid','$m_long','$m_lat','$m_desc','$m_image','$url')";
}
?>