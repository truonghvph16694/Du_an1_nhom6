<?php

session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$id = $_GET['id'];
$sql = "select * from users where id = $id";
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
    <title>Sửa thông tin tài khoản</title>
   
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="save-edit-user.php?id=<?= $employees['id']?>" method="post" name="dang-ky">  
  <div class="form">
    
    <h1>Sửa thông tin tài khoản cá nhân</h1>
    <div>
            <label for="">ID:</label> <br>
            <input type="text" name="id" class="chixem" value="<?= $employees['id'] ?>"readonly> 
        </div> <br>

    <div>
            <label for="">Username:</label> <br>
            <input type="text" name="username" class="chixem" value="<?= $employees['username'] ?>" readonly> 
        </div> <br>

<div>
            <label for="">Tên đầy đủ:</label>
            <input type="text" name="fullname" value="<?= $employees['fullname']?>" >
        </div><br>

        <div>
            <label for="">Email:</label>
            <input type="email" name="email" value="<?= $employees['email']?>">
        </div><br>

        <div>
            <label for="">Số điện thoại:</label>
            <input type="text" name="phonenumber" value="<?= $employees['phonenumber']?>"> 
        </div><br>


        <div>
            <label for="">Vai trò:</label>
            <input type="text" name="role" maxlength="1" value="<?= $employees['role']?>">
        </div>
        <div>

        <input type="submit" name="submit" class="submit" value="Lưu" />
  </form>
</div>
</div>
</div>

    
</body>
</html>