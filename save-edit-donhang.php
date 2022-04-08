<?php



session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$order_id = $_GET['order_id'];

$order_stt  = $_POST['order_stt'];





$sql = "update `order`
        set    
        order_stt = '$order_stt'  
        where order_id = $order_id";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: quanlydonhang.php?Thay đổi thành công");



?>