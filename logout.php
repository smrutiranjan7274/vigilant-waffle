<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header_include.php"; ?>
    <?php
session_start();
session_unset();
header("location:index.php");
?>
</head>

</html>