<?php
session_start();
session_start();
unset($_SESSION["NOMEUSU"]);
unset($_SESSION["CODUSU"]);
header("location: index.php");
?>