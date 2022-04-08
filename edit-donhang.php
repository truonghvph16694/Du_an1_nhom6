<?php

session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$order_id = $_GET['order_id'];
$sql = "SELECT * FROM `order` WHERE order_id = $order_id";
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
    <title>Thay đổi trạng thái đơn hàng</title>
   
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="save-edit-donhang.php?order_id=<?= $employees['order_id']?>" method="post" name="dang-ky">  
  <div class="form">
    
    <h1>Thay đổi trạng thái đơn hàng</h1>
    <div>
            <label for="">ID đơn hàng:</label> <br>
            <input type="text" name="order_id" class="chixem" value="<?= $employees['order_id'] ?>" readonly> 
        </div> <br>

    <div>
            <label for="">ID người dùng:</label> <br>
            <input type="text" name="user_id" class="chixem" value="<?= $employees['user_id'] ?>"readonly> 
        </div> <br>

<div>
            <label for="">Tổng tiền:</label>
            <input type="text" name="order_price" class="chixem" value="<?= $employees['order_price']?>" readonly>
        </div><br>

        <div>
            <label for="">Địa chỉ:</label>
            <input type="text" name="addres" class="chixem" value="<?= $employees['addres']?>"readonly>
        </div><br>

        <div>
            <label for="">Ghi chú:</label>
            <input type="text" name="order_note" class="chixem" value="<?= $employees['order_note']?>"readonly> 
        </div><br>


        <div>
            <label for="">Thời gian đặt hàng:</label>
            <input type="text" name="time" class="chixem" value="<?= $employees['time']?>"readonly>
        </div> <br>
        <div>
            <label for="">Trạng thái đơn hàng:</label>
            <input type="text" name="order_stt"  value="<?= $employees['order_stt']?>">
        </div> 
        

        <input type="submit" name="submit" class="submit" value="Lưu" />
  </form>
</div>
</div>
</div>

    
</body>
</html>