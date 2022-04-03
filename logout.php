<?php
session_start();
unset($_SESSION['auth']);
header('location: index-07.php');

?>