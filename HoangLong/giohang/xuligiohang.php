<?php
    require_once '../constant.php';
    require_once '../config/db.php';
?>
<?php
session_start();

if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang'] = [];
}
if(isset($_POST['themgiohang'])){
    $product_id = $_POST['product_id'];
        $sql = "SELECT * FROM products WHERE products.prd_id = '$product_id'";
        $query = mysqli_query($connect, $sql);
        $product = mysqli_fetch_assoc($query);
        $sp = [$product['prd_id'],$product['prd_name'],$product['image'],$product['price'],$_POST['quantily']];
        $_SESSION['giohang'][] = $sp;
        header('location: giohang.php');
}


if(isset($_POST['xoagiohang'])){
    session_unset();
    header('location: giohang.php');
}

?>