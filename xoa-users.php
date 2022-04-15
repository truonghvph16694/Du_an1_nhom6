<?php
include './db2.php';

session_start();

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "delete from users where id = $id";

$statement = $connect->prepare($sql);
$statement->execute();
header("location: admin.php");
}


?>