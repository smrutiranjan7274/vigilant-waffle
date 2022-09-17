<?php
session_start();
if (isset($_SESSION["uid"]) == '')
    print('<script>location.href="login.php"</script>');
?>