<?php
include './db2.php';

session_start();

if(isset($_GET['pro_id'])){
    $pro_id = $_GET['pro_id'];
$sql = "delete from products where pro_id = $pro_id";

$statement = $connect->prepare($sql);
$statement->execute();
header("location: quanlysp.php?Xóa sản phẩm thành công");
}


?>