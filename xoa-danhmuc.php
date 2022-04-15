<?php
include './db2.php';

session_start();

if(isset($_GET['cate_id'])){
$cate_id = $_GET['cate_id'];
$sql = "delete from categories where cate_id = $cate_id";

$statement = $connect->prepare($sql);
$statement->execute();
header("location: quanlydanhmuc.php");
}


?>