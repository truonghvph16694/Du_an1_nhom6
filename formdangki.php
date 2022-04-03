<?php
session_start();
include './db2.php';


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];
    $ruserpassword = $_POST['ruserpassword'];
    $fullname = $_POST['fullname'];


// mã hóa mật khẩu

$hash = isset($_POST['userpassword'])?password_hash($userpassword, PASSWORD_DEFAULT):'';




 
    
        
 
        

// Validate form đăng kí
$err=[];
if(empty($username)){
    $err['username'] = 'Bạn chưa nhập tên đăng nhập!!';
}

if(empty($phonenumber)){
    $err['phonenumber'] = 'Bạn chưa nhập số điện thoại!!';
}

if(strlen($phonenumber)<9){
    $err['phonenumber'] = 'Số điện thoại chưa hợp lệ!! (phải từ 10 số trở lên)!!';
}

if(empty($fullname)){
    $err['fullname'] = 'Bạn chưa nhập tên đầy đủ!!';
}

if(empty($email)){
    $err['email'] = 'Bạn chưa nhập email!!';
}

if(empty($userpassword)){
    $err['userpassword'] = 'Bạn chưa nhập mật khẩu!!';
}

if(strlen($userpassword)<3){
    $err['userpassword'] = 'Mật khẩu của bạn phải từ 3 kí tự trở lên';
}

if($ruserpassword != $userpassword){
    $err['ruserpassword'] = 'Bạn chưa nhập khớp mật khẩu!!';
}




if(empty($err)){
$sql = "insert into users
        (username, phonenumber, fullname, email, userpassword)
    values 
        ('$username', '$phonenumber','$fullname','$email','$hash')"; 
        // var_dump($sql);die; 
$stmt = $connect->prepare($sql);
$stmt->execute();

header("location: formdangnhap.php?Đăng kí thành công");
}
}

?>





    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dangki1.css">
    <title>Đăng kí tài khoản</title>
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
    <h1>Đăng kí ngay</h1>
    <div>
<label for="">Tên đăng nhập:</label> <br> 
<input type="text" class="" placeholder="Nhập tài khoản đăng nhập.." name="username" maxlength="60" value="<?php 
        if(isset($username)) echo $username          ?>"><br><br>
<div class="">
<span><?php echo (isset($err['username'])) ? $err['username'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Số điện thoại:</label> <br>
<input type="text" class="" placeholder="Nhập số điện thoại.." name="phonenumber" maxlength="11" value="<?php 
            if(isset($phonenumber)) echo $phonenumber    ?>">  <br> <br>
<div class="has-error">
<span><?php echo (isset($err['phonenumber'])) ? $err['phonenumber'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Tên đầy đủ: </label> <br>
<input type="text" class="" placeholder="Nhập tên đầy đủ.." name="fullname" maxlength="210" value="<?php 
               if(isset($fullname)) echo $fullname    ?>"><br><br>
<div class="has-error">
<span><?php echo (isset($err['fullname'])) ? $err['fullname'] : ''?></span> 
</div><br>
</div>

<div>
<label for="">Email:</label> <br>
<input type="email" class="" placeholder="Nhập email.." name="email" maxlength="60" value="<?php 
           if(isset($email)) echo $email         ?>"><br><br>
<div class="has-error">
<span><?php echo (isset($err['email'])) ? $err['email'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Mật khẩu:</label> <br>
<input type="password" class="" placeholder="Nhập mật khẩu.." name="userpassword" maxlength="15" value="<?php 
           if(isset($userpassword)) echo $userpassword          ?>"><br><br>
<div class="has-error" >
<span><?php echo (isset($err['userpassword'])) ? $err['userpassword'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Nhập lại mật khẩu:</label> <br>
<input type="password" class="" placeholder="Nhập lại mật khẩu.." name="ruserpassword" maxlength="15"><br> 
<div class="has-error" > <br> 
<span><?php echo (isset($err['ruserpassword'])) ? $err['ruserpassword'] : ''?></span>
</div> <br>
</div>

<input type="submit" name="submit" class="submit" value="Đăng kí" />
<p class="dki">Bạn đã có tài khoản rồi? <a href="formdangnhap.php">Đăng nhập ngay</a></p>
  </form>
</div>
</div>
</div>

    
</body>
</html>