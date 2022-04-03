<?php 

$conn = mysqli_connect('localhost','root','','pro10142');
if($conn) {
    mysqli_set_charset($conn,"utf8");
    
}else{
    echo ' ket noi loi';
}