<?php

session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$pro_id = $_GET['pro_id'];
$sql = "select * from products where pro_id = $pro_id";
$stmt = $connect->prepare($sql);
$stmt->execute();
$employees = $stmt->fetch();





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


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dangki1.css">
    <title>Sửa sản phẩm</title>
   
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="save-edit-sp.php?pro_id=<?= $employees['pro_id']?>" method="post" name="dang-ky" enctype="multipart/form-data">  
  <div class="form">
    
    <h1>Sửa sản phẩm</h1>
    <div>
            <label for="">ID sản phẩm:</label> <br>
            <input type="text" name="pro_id" class="chixem" value="<?= $employees['pro_id'] ?>" readonly>  
        </div> <br>

    <div>
            <label for="">ID danh mục:</label> <br>
            <input type="text" name="cate_id" value="<?= $employees['cate_id'] ?>"> 
        </div> <br>

<div>
            <label for="">Tên sản phẩm:</label>
            <input type="text" name="pro_name" value="<?= $employees['pro_name']?>" >
        </div><br>

        <div>
            <label for="">Ảnh sản phẩm:</label>
            <input type="file" name="pro_image" value="<?= $employees['pro_image']?>"> Ảnh cũ:
            <img src="uploads/<?= $employees['pro_image'] ?>" width="120">
        </div><br>

        <div>
            <label for="">Giá sản phẩm:</label>
            <input type="text" name="pro_price" value="<?= $employees['pro_price']?>"> 
        </div><br>


        <div>
            <label for="">Giá sale:</label>
            <input type="text" name="pro_sale" value="<?= $employees['pro_sale']?>">
        </div><br>

        <div>
            <label for="">Thông tin sp:</label>
            <input type="text" name="pro_intro"  value="<?= $employees['pro_intro']?>">
        </div>
        <div>

        <input type="submit" name="submit" class="submit" value="Lưu" />
  </form>
</div>
</div>
</div>

    
</body>
</html>