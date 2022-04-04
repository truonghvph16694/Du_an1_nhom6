<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: formdangnhap.php');die;}
include './db2.php';

$sql = "select * from users";

$statement = $connect->prepare($sql);

$statement->execute();

$users = $statement->fetchAll();



?>

<h3>Mời chọn danh sách cần xem:</h3>
<a href="index.php">+)Trang chủ</a> <br>

<table>
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Userpassword</th>
        <th>Full name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['username'] ?></td>
                <td><?= $value['userpassword'] ?></td>
                <td><?= $value['fullname'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['phonenumber'] ?></td>
                <td><?= $value['role'] ?></td>
                <td>
                    
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="xoa-users.php?id=<?= $value['id'] ?>">Xóa</a>
                </td>
                
            </tr>
        <?php endforeach ?>
    </tbody>
</table>