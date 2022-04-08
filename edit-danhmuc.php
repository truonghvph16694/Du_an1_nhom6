<?php

session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$cate_id = $_GET['cate_id'];
$sql = "SELECT * FROM `categories` WHERE cate_id = $cate_id";
$stmt = $connect->prepare($sql);
$stmt->execute();
$employees = $stmt->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit-admin.css">
    <title>Sửa danh mục</title>
   
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="save-edit-danhmuc.php?cate_id=<?= $employees['cate_id']?>" method="post" name="dang-ky">  
  <div class="form">
    
    <h1>Sửa danh mục</h1>
    <div>
            <label for="">ID đơn hàng:</label> <br>
            <input type="text" name="cate_id" class="chixem" value="<?= $employees['cate_id'] ?>" readonly> 
        </div> <br>

    <div>
            <label for="">ID người dùng:</label> <br>
            <input type="text" name="cate_name" class="chixem" value="<?= $employees['cate_name'] ?>"> 
        </div> <br>


        
        

        <input type="submit" name="submit" class="submit" value="Lưu" />
  </form>
</div>
</div>
</div>

    
</body>
</html>