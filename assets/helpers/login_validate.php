<?php include "db_config.php";
session_start();
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

$sql = "SELECT role FROM tbl_login where uid='" . $uid . "' and pwd='" . $pwd . "'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
      $role = $row["role"];
      $_SESSION["uid"] = $uid;
      $_SESSION["ROLE"] = $role;
      echo "1";
   }
}
else {
   echo "0";
}
?>