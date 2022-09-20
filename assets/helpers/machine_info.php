<?php
if (isset($_POST['getDetails'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'db_admin');
    $query = "SELECT * FROM `add_machine` WHERE m_uid = '$text';";
    $result = mysqli_query($conn, $query);

    while ($rows = mysqli_fetch_assoc($result)) {
        print('<div class="card">');
        print('<div class="card-body">');
        print('<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">');
        print('<div class="text-md-center text-xl-left">');
        print('<h4 class="mb-1">' . $rows['m_name'] . '</h4>');
        print('<p class="text-muted mb-1">Unique ID: ' . $rows['m_uid'] . '</p>');
        print('<p class="text-muted mb-1">Latitude: ' . $rows['m_lat'] . ' &nbsp;&nbsp;&nbsp; Latitude: ' . $rows['m_long'] . '</p>');
        print('<p class="text-muted mb-1">Machine Description: ' . $rows['m_desc'] . '</p>');
        print('</div>');
        print('<div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">');
        print('<img src="assets/images/uploads/' . $rows['m_image'] . '" alt="QR Code" width="20%">');
        print('</div>');
        print('</div>');
        print('</div>');
        print('<form action="registerComplaint.php" method="post" enctype="multipart/form-data">');
        print('<label hidden for="m_uid"></label>');
        print('<input hidden type="text" name="m_uid" id="m_uid" value="' . $rows['m_uid'] . '">');
        print('<center><button type="submit" name="regComplaint" class="btn btn-outline-danger mb-3">Register an issue!</button></center>');
        print('</form>');
        print('</div>');
    }

}
?>