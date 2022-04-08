<?php



session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';

$pro_id = $_GET['pro_id'];
$cate_id = $_POST['cate_id'];
$pro_name = $_POST['pro_name'];
$file = $_FILES['pro_image'];
$pro_price = $_POST['pro_price'];
$pro_sale  = $_POST['pro_sale'];
$pro_intro  = $_POST['pro_intro'];


$sql = "select * from products";

$statement = $connect->prepare($sql);

$statement->execute();

$employees = $statement->fetch();
$filename = $employees['pro_image'];
if($file['size'] > 0){
    $filename =  $file['name'];
    move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
   
}

$sql = "update products
        set     
        pro_id = '$pro_id',
        cate_id = '$cate_id', 
        pro_name = '$pro_name', 
        pro_image = '$filename',
        pro_price = '$pro_price',
        pro_sale = '$pro_sale',
        pro_intro = '$pro_intro' 
        where pro_id = $pro_id";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: quanlysp.php?Lưu thành công");



?>