<!DOCTYPE html>
<html>

<head>
    <?php 
    include "assets/helpers/header_include.php";
    include "assets/helpers/checkuser.php";
    include "assets/helpers/insertdata.php";
    
    $url = "https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";
?>
    
</head>

<body>
    <div class="container-scroller">
    <?php include "assets/helpers/sidebar.php"; ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <br><br><br>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4"">
                    <?php if (mysqli_query($conn, $sql)) { ?>
                    <center>
                      <h2>Machine Registered Successfully!</h2>
                      <br><br>
                    </center>
                        <p>
                        <label for=" m_name">Machine Name:</label>
                        <input class="form-control" type="text" maxlength="25" name="m_name" id="m_name" readonly
                            placeholder="<?php echo " $m_name"; ?>">
                        </p>
                        <p>
                            <label for="m_uid">Machine Unique ID:</label>
                            <input class="form-control" type="number" maxlength="5" name="m_uid" id="m_uid" readonly
                                placeholder="<?php echo " $m_uid"; ?>">
                        </p>
                        <p>
                            <label for="m_long">Longitude:</label>
                            <input class="form-control" type="number" maxlength="15" step="any" name="m_long"
                                id="m_long" readonly placeholder="<?php echo " $m_long"; ?>">
                        </p>
                        <p>
                            <label for="m_lat">Latitude:</label>
                            <input class="form-control" type="number" maxlength="15" step="any" name="m_lat" id="m_lat"
                                readonly placeholder="<?php echo " $m_lat"; ?>">
                        </p>
                        <p>
                            <label for="m_desc">Machine Description:</label>
                            <textarea class="form-control" type="text" maxlength="100" name="m_desc" id="m_desc"
                                rows="2" readonly placeholder="<?php echo " $m_desc"; ?>"></textarea>
                        </p>
                        <p>
                            <label for="m_image">Machine Image:</label> <br>
                            <center> <img src="<?php echo " $target_dir"; ?>" alt="Machine Image" width="50%" height="50%"> </center>
                        </p>
                            <div class="mb-3">
                                <label for="qr_code">Click on the QR Code to download</label>
                                <br><br>
                                <center>
                                    <!-- class="btn btn-success" -->
                                    <a  href="<?php echo $url ?>" download="QR Code" target="_blank">
                                        <img src="<?php echo $url ?>" alt="QR Code" width="100%" height="100%">
                                    </a>
                                </center>
                            </div>
                        

                        <?php }?>

                        <br>
                        <center>
                            <button class="btn btn-outline-primary" onclick="goBack()" style="font-size: 20px;" name="back">Back</button>
                            <button style="background-color: transparent; border: none;">
                                <a class="btn btn-outline-success" href="add_machine.php" style="font-size: 20px;" readonly>Add Another Machine</a>
                            </button>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function goBack() {
        location.href = "dashboard.php";
    }
</script>

</html>