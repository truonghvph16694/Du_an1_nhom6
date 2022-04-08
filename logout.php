<?php
session_start();
unset($_SESSION['auth']);
unset($_SESSION['cart']);
header('location: index-07.php');

?>