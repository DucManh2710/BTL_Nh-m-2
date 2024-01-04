<?php
    require 'connect.php';
    if(isset($_POST['btn'])){

        
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        
        if(!empty($fullname) &&!empty($username) && !empty($password) && !empty($email) && !empty($address)){
            //insert du lieu
            // echo" <pre>";
            // print_r($_POST);

            $sql = "INSERT INTO `tbl_users` (`fullname`, `username`, `password`, `email`, `address`) VALUE('$fullname', '$username',('$password'), '$email', '$address') " ;
            if($conn->query($sql)===TRUE){  
                echo"Lưu dữ liệu thành công ";
            }else{
                echo"Loi{$sql}".$conn->error;
            }

        }else{
            echo "Bạn cần nhập thông tin đầy đủ trước khi đăng kí";
        }
    }
?>
<br>
<a href="index.html">Quay lại trang đã đăng kí</a>