<?php
    require 'connect.php';

if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_query = "SELECT * FROM tbl_users WHERE username='$username'";
        $result = mysqli_query($conn, $select_query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                if($password==$row['password']){
                    echo "<script>alert('Đăng nhập thành công')</script>";
                    // header("Location: index.php");
                } else {
                    echo "<script>alert('Mật khẩu không đúng')</script>";
                    // header("Location: index.php");

                }
            } else {
                echo "<script>alert('Tên người dùng không tồn tại')</script>";
            }
        } else {
            echo "<script>alert('Lỗi truy vấn SQL')</script>";
        }
    }
?>
<br>
<a href="index.html">Quay lại trang đã đăng nhập</a>