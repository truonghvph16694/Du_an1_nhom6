<?php



session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');die;
}
require_once './db2.php';


$id = $employees['id'];
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phonenumber  = $_POST['phonenumber'];
$role  = $_POST['role'];





$sql = "update users
        set     username = '$username', 
        fullname = '$fullname', 
        email = '$email',
        phonenumber = '$phonenumber',
        role = '$role'  
        where id = $id";  
$stmt = $connect->prepare($sql);
$stmt->execute();
header("location: admin.php?Thay đổi thành công");



?>