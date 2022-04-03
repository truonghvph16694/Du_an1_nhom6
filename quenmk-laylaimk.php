<?php
session_start();

require './db2.php';



    if(isset($_POST['email'])){


        
    $userpassword = $_POST['userpassword'];
    $ruserpassword = $_POST['ruserpassword'];
    $email = $_POST['email'];
    
 
    
   
// mã hóa mật khẩu

$hash = isset($_POST['userpassword'])?password_hash($userpassword, PASSWORD_DEFAULT):'';


//    validate lỗi

    $err=[];
    
    if(empty($userpassword)){
        $err['userpassword'] = 'Bạn chưa nhập mật khẩu mới!!';
    }
    if($ruserpassword != $userpassword){
        $err['ruserpassword'] = 'Bạn chưa nhập khớp mật khẩu!!';
    }
   
    
     
    
// var_dump(password_verify($userpassword, $users['userpassword']));die;
   
// Kiểm tra tài khoản, mk 
   

if(empty($err)){

    $sql = "update users
        set     userpassword = '$hash'  
        where email = '$email'";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location:formdangnhap.php?msg = Đổi mật khẩu thành công!"); 
} else {
   header("location:quenmk-laylaimk.php?msg= Lấy lại mật khẩu không thành công!");
}
   }
    

  
?>
<?php
if (isset($_SESSION['email'])):?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/dangnhap1.css">
    <title>Đổi mật khẩu mới</title>
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
    <h2>Hãy nhập mật khẩu mới</h2>
    <h1>Quên mật khẩu</h1>
    <div>
    <label for="">Email:</label>
    <input type="text" name="email" readonly  value="<?php 
        if(isset($_SESSION['email'])) echo $_SESSION['email']['email']      ?>"/> <br> <br>




        <label for="">Nhập mật khẩu mới:</label>
<input type="password" name="userpassword" placeholder="Nhập mật khẩu mới.." value="<?php 
         if(isset($userpassword)) echo $userpassword     ?>"/> <br> <br>
<div class="">
<span><?php echo (isset($err['userpassword'])) ? $err['userpassword'] : ''?></span> <br> <br>
</div>
<div>
        <label for="">Nhập lại mật khẩu mới:</label>
<input type="password" name="ruserpassword" placeholder="Nhập lại mật khẩu mới.." value="<?php 
            ?>"/> <br> <br>
<div class="">
<span><?php echo (isset($err['ruserpassword'])) ? $err['ruserpassword'] : ''?></span> 
</div>
</div>


<input type="submit" name="submit" class="submit" value="Xác nhận thay đổi" />
<p class="dki">Chưa có tài khoản? <a href="formdangki.php">Đăng kí ngay</a></p> 


  </div>
  </form>
  <?php endif?> 
</div>
</div>
</div>
</html>