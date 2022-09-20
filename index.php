<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include "assets/helpers/header_include.php";
?>
</head>

<body>
  <?php
session_start();
if (isset($_SESSION["uid"]) == 'Admin')
  print('<script>location.href="dashboard.php"</script>');
else
  print('<script>location.href = "guestUser.php"</script>');
?>
  <?php include "assets/helpers/footer_include.php"; ?>
  </body>

</html>