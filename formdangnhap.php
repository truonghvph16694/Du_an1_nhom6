<?php
session_start();

require './db2.php';

if(isset($_POST['username'])){


    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    $sql = "select * from users where username = '$username'";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetch();
    
   
//    validate lỗi

    $err=[];
    if($username!=$users['username']){
        $err['username'] = 'Tài khoản không tồn tại!!';
    }
    if(empty($username)){
        $err['username'] = 'Bạn chưa nhập tài khoản đăng nhập!!';
    }
    if(empty($userpassword)){
        $err['userpassword'] = 'Bạn chưa nhập mật khẩu!!';
    }
   
    if(isset($users['userpassword'])){
        password_verify($userpassword, $users['userpassword']); 
    }
     
    
// var_dump(password_verify($userpassword, $users['userpassword']));die;
   
// Kiểm tra tài khoản, mk 
   

if(empty($err)){
        if ($users['username'] ==  $username&&password_verify($userpassword, $users['userpassword'])  ) {
           
            header("location:index-07.php?msg = Đăng Nhập Thành Công!"); 
         } else {
            header("location:formdangnhap.php?msg= Đăng Nhập KHÔNG Thành Công! = Vui lòng kiểm tra lại mật khẩu");
         
       
          
        


       


   }
   
   }

   if ($users['username'] ==  $username&&password_verify($userpassword, $users['userpassword'])  ){
        $_SESSION['auth'] = [
            'id' => $users['id'],
            'username' => $users['username'],
            'phonenumber' => $users['phonenumber'],
            'email' => $users['email'],
            'userpassword' => $users['userpassword'],
            'fullname' => $users['fullname'],
            'role' => $users['role'],
        ];
       
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
    <title>Đăng nhập</title>
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
    <h2>Chào mừng bạn đến với shop <br> quần áo chúng tôi!!</h2>
    <h1>Đăng nhập</h1>
    <div>
        <label for="">Tài khoản:</label>
<input type="text" name="username" placeholder="Nhập tài khoản" value="<?php 
         if(isset($username)) echo $username     ?>"/> <br> <br>
<div class="">
<span><?php echo (isset($err['username'])) ? $err['username'] : ''?></span> <br> <br>
</div>
</div>
<div>
<label for="">Mật khẩu:</label>
<input type="password" name="userpassword" placeholder="Nhập mật khẩu" value="<?php 
          ?>"/> <br> <br>
<div class="">
<span><?php echo (isset($err['userpassword'])) ? $err['userpassword'] : ''?></span>
</div>
</div>

<input type="submit" name="submit" class="submit" value="Đăng nhập" />
<p class="dki">Chưa có tài khoản? <a href="formdangki.php">Đăng kí ngay</a></p> 
<p class="quenmk"> <a href="quenmk.php">Quên mật khẩu?</a></p>

  </div>
  </form>
</div>
</div>
</div>
</html>