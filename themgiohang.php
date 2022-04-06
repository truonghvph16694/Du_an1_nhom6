<?php 
 session_start();
 require_once 'db.php';
if (isset($_GET['idsp'])) {
    $idsp = $_GET['idsp'];
}
$action=(isset($_GET['action'])) ? $_GET['action'] : 'add' ;


$sqlcate="SELECT * FROM products where pro_id = $idsp";
    $query=$conn->query($sqlcate);

if ($query) {
    $product = mysqli_fetch_assoc($query);
}

$item =[
     'id'=> $product['pro_id'],
     'name'=> $product['pro_name'],
     'image'=> $product['pro_image'],
     'price'=> $product['pro_price'],
     'quantity'=> 1
];
if ($action == 'add') {
    if (isset($_SESSION['cart'][$idsp])){
        $_SESSION['cart'][$idsp]['quantity'] +=1;
       
    }else{
        $_SESSION['cart'][$idsp] = $item;
    }
}
if ($action == 'delete') {
    unset($_SESSION['cart'][$idsp]);
}

header('location:cart.php');


// thêm mới vào giỏ hàng

//cập nhât giỏ hàng

// xóa sản phẩm

?>