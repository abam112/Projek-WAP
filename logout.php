<?php
session_start();
session_destroy();

return header("location:../cassyier/login.php");

?>