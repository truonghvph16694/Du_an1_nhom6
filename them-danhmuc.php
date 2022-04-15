<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
    
}

require_once './db2.php';
// date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_POST['cate_name'])){
$cate_name = $_POST['cate_name'];

$err=[];
if(empty($cate_name)){
    $err['cate_name'] = 'Bạn chưa nhập tên danh mục';
}



if(empty($err)){
$sql = "INSERT INTO `categories`
            (cate_name)
        values 
            ('$cate_name')"; 
            // var_dump($sql);die; 
$stmt = $connect->prepare($sql);
$stmt->execute();

header("location: quanlydanhmuc.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit-admin.css">
    <title>Thêm danh mục</title>
    <style>span{
        color: red;
    }
        </style>
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="" method="post" name="dang-ky">  
  <div class="form">
    
    <h1>Thêm danh mục</h1>
    <div>
            <label for="">Tên danh mục:</label> <br>
            <input type="text" name="cate_name" class="chixem"> 
        </div> <br>
        <div class="">
<span><?php echo (isset($err['cate_name'])) ? $err['cate_name'] : ''?></span>
</div>
   
        <div>

        <input type="submit" name="submit" class="submit" value="Lưu" >
  </form>
</div>
</div>
</div>

    
</body>
</html>