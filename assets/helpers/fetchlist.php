<?php
while ($rows = mysqli_fetch_assoc($result)) {

    // echo '<pre>';
    // print_r($rows);
    // echo '</pre>';

    print('<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">');
    print('<div class="text-md-center text-xl-left">');
    print('<h4 class="mb-1">' . $rows['m_name'] . '</h4>');
    print('<p class="text-muted mb-1">Unique ID: ' . $rows['m_uid'] . '</p>');
    print('</div>');
    print('<div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">');
    print('<img src="' . $rows['m_qrcode'] . '" alt="QR Code" width="20%">');
    print('</div>');
    print('</div>');
}
?>