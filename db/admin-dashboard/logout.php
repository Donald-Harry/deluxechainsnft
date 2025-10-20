<?php
session_start();
session_destroy();
header("location: ../enter/login.php");
exit(0);
?>
