<?php
session_start();

require './db2.php';

if(isset($_POST['submit'])){


    $email = $_POST['email'];
    

    $sql = "select * from users where email = '$email'";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetch();
    
   
//    validate lỗi

    $err=[];
    if($email!=$users['email']){
        $err['email'] = 'Email không tồn tại!!';
    }
    
    if(empty($email)){
        $err['email'] = 'Bạn chưa nhập email!!';
    }
   
    
    if ($users['email'] == $email) {
        $_SESSION['email'] = [
            'id' => $users['id'],
            'username' => $users['username'],
            'phonenumber' => $users['phonenumber'],
            'email' => $users['email'],
            'userpassword' => $users['userpassword'],
            'fullname' => $users['fullname'],
            'role' => $users['role'],
        ];
    }
    
// var_dump(password_verify($userpassword, $users['userpassword']));die;
   
// Kiểm tra tài khoản, mk 
   

if(empty($err)){

        if ($users['email'] == $email) {
           
            header("location:quenmk-laylaimk.php?msg = Vui lòng nhập mật khẩu mới!"); 
         } else {
            header("location:quenmk.php?msg= Lấy lại mật khẩu không thành công!");
   }

   }

  }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/dangnhap1.css">
    <title>Quên mật khẩu</title>
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
    <h2>Hãy nhập gmail của bạn đã đăng kí <br> lúc đầu để lấy mật khẩu!</h2>
    <h1>Quên mật khẩu</h1>
    <div>
        <label for="">Gmail:</label>
<input type="email" name="email" placeholder="Nhập email.." value="<?php 
         if(isset($email)) echo $email     ?>"/> <br> <br>
<div class="">
<span><?php echo (isset($err['email'])) ? $err['email'] : ''?></span> <br> <br>
</div>
</div>


<input type="submit" name="submit" class="submit" value="Xác minh" />
<p class="dki">Chưa có tài khoản? <a href="formdangki.php">Đăng kí ngay</a></p> 
<p class="quenmk"> <a href="formdangnhap.php">Đăng nhập</a></p>

  </div>
  </form>
</div>
</div>
</div>
</html>