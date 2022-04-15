<?php



session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$cate_id = $_GET['cate_id'];

$cate_name  = $_POST['cate_name'];





$sql = "update `categories`
        set    
        cate_name = '$cate_name'  
        where cate_id = $cate_id";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: quanlydanhmuc.php?Sửa thành công");



?>