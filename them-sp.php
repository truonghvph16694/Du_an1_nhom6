<?php
session_start();
include './db2.php';


if(isset($_POST['submit'])){
    $cate_id = $_POST['cate_id'];
    $pro_name = $_POST['pro_name'];
    $file = $_FILES['pro_image'];
    $pro_price = $_POST['pro_price'];
    $pro_sale = $_POST['pro_sale'];
    $pro_intro = $_POST['pro_intro'];




    $sql = "select * from products";

    $statement = $connect->prepare($sql);
    
    $statement->execute();
    
    $employees = $statement->fetch();
    
    $filename = $employees['pro_image'];
    if($file['size'] > 0){
        $filename =  $file['name'];
        move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
       
    }


    



// Validate form đăng kí
$err=[];


if(empty($pro_name)){
    $err['pro_name'] = 'Bạn chưa nhập tên sản phẩm!!';
}

if(empty($pro_price)){
    $err['pro_price'] = 'Bạn chưa nhập giá sản phẩm!!';
}

if(empty($pro_sale)){
    $err['pro_sale'] = 'Bạn chưa nhập giá sau khi sale!';
}

if(empty($pro_intro)){
    $err['pro_intro'] = 'Bạn chưa nhập thông tin sản phẩm';
}






if(empty($err)){
$sql = "insert into `products`
        (cate_id, pro_name, pro_price, pro_sale, pro_intro, pro_image)
    values 
        ('$cate_id', '$pro_name','$pro_price','$pro_sale','$pro_intro', '$filename')"; 
        // var_dump($sql);die; 
$stmt = $connect->prepare($sql);
$stmt->execute();

header("location: quanlysp.php?Thêm sản phẩm thành công");

}
else{
    header("location: quanlysp.php?Thêm sản phẩm không thành công");  
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
    <title>Thêm sản phẩm</title>
    <style>span{
        color: red;
    }
        </style>
</head>

<div class="backgroundlg">
    <div class="pd">
<div class="login">
<form action="" method="post" name="dang-ky" enctype="multipart/form-data">  
  <div class="form">
    <h1>Thêm sản phẩm</h1>
    <div>
    <label for="">Chọn danh mục muốn thêm:</label> <br> <br>
    <select name="cate_id" id="">
            
            <?php
            $sql = "select * from categories ";

            $kq = $connect->query($sql);
         
            foreach($kq as $ca){ ?>
               
                <option  value="<?= $ca['cate_id'] ?>"><?php echo $ca['cate_name'] ?></option>
            <?php } ?>
        </select> 
<div> <br>
<label for="">Tên sản phẩm:</label> <br>
<input type="text" class="" placeholder="Nhập tên sản phẩm.." name="pro_name"  value="<?php 
            if(isset($pro_name)) echo $pro_name    ?>">  <br> <br>
<div class="has-error">
<span><?php echo (isset($err['pro_name'])) ? $err['pro_name'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Ảnh sản phẩm: </label> <br>
<input type="file" class=""  name="pro_image" 
                   ><br><br>
<div class="has-error">
<span><?php echo (isset($err['pro_image'])) ? $err['pro_image'] : ''?></span> 
</div><br>
</div>

<div>
<label for="">Giá sản phẩm:</label> <br>
<input type="number" class="" placeholder="Nhập giá sản phẩm" name="pro_price"  value="<?php 
           if(isset($pro_price)) echo $pro_price         ?>"><br><br>
<div class="has-error">
<span><?php echo (isset($err['pro_price'])) ? $err['pro_price'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Giá sản phẩm sau khi sale:</label> <br>
<input type="number" class="" placeholder="Nhập giá giảm giá" name="pro_sale"  value="<?php 
           if(isset($pro_sale)) echo $pro_sale          ?>"><br><br>
<div class="has-error" >
<span><?php echo (isset($err['pro_sale'])) ? $err['pro_sale'] : ''?></span>
</div><br>
</div>

<div>
<label for="">Thông tin sản phẩm:</label> <br>
<input type="text" class="" placeholder="Nhập thông tin sản phẩm" name="pro_intro"  value="<?php 
           if(isset($pro_intro)) echo $pro_intro          ?>"><br><br>
<div class="has-error" >  
<span><?php echo (isset($err['pro_intro'])) ? $err['pro_intro'] : ''?></span>
</div> <br>
</div>

<input type="submit" name="submit" class="submit" value="Thêm" />

  </form>
</div>
</div>
</div>

    
</body>
</html>