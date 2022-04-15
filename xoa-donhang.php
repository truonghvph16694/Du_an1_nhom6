<?php

use function PHPSTORM_META\elementType;

include './db2.php';

session_start();

if(isset($_GET['order_id'])){
$order_id = $_GET['order_id'];
$sql = "DELETE FROM `order` WHERE `order_id` = $order_id";

$statement = $connect->prepare($sql);
$statement->execute();
header("location: quanlydonhang.php?Xóa đơn hàng thành công");

}
else{
    header("location: quanlydonhang.php?Xóa đơn hàng không thành công");
}


?>