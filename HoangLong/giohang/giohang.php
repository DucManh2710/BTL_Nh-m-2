<?php
    require_once '../constant.php';
    require_once '../config/db.php';
?>

<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <a href="" class="logo">
                <img src="<?php echo BaseURL;?>img/logo.png" alt="">
            </a>

            <div id="menu">
                <div class="item">
                    <a href="../index.php">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="#">Giới thiệu</a>
                </div>
                <div class="item">  
                    <a href="#products">Sản phẩm</a>
                </div>
                <div class="item">
                    <a href="#footer">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="#">Feedback</a>
                </div>
                

            </div>

            <div id="actions">
                <div class="item">
                    <a href="">
                        <i class='bx bxs-user' ></i>
                    </a>

                </div>
                <div class="item">
                    <button class="login">
                        ĐĂNG NHẬP
                    </button>
                </div>
                <div class="item">
                   <button class="signin">
                        ĐĂNG KÝ

                   </button>
                </div>


            </div>
        

        </div>

        <div id="content">
            <div class="content-body">
                
                <div class="content-heading">
                GIỎ HÀNG
                </div>
                <table>
                <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng đã đặt</th>
                <th>Thành tiền</th>
                </tr>
                <?php 
                $tongtien = 0;
                if (!isset($_SESSION['giohang'])){
                    echo "<td>Giỏ hàng hiện không có sản phẩm nào được thêm !</td>";
                }
                else{
                    
                    for($i = 0 ; $i < sizeof($_SESSION['giohang']) ;$i++){
                        $tongtien += $_SESSION['giohang'][$i][3]* $_SESSION['giohang'][$i][4];
                        ?>
                    <tr>
                        <td><?php echo $i + 1?></td>
                        <td><?php echo $_SESSION['giohang'][$i][0] ?></td>
                        <td><?php echo $_SESSION['giohang'][$i][1] ?></td>
                        <td><img class="cart-image" src="<?php echo BaseURL.'img/'.$_SESSION['giohang'][$i][2] ?>" alt=""></td>
                        <td><?php echo $_SESSION['giohang'][$i][3] ?></td>
                        <td><?php echo $_SESSION['giohang'][$i][4] ?></td>
                        <td><?php echo $_SESSION['giohang'][$i][3]* $_SESSION['giohang'][$i][4]?></td>
                    </tr>
                    <?php
                    }
                }
                
                ?>
                    <tr>
                        <td>
                        Tổng tiền : <?php echo $tongtien?> VND
                        </td>
                    </tr>
            </table>
            <form action="xuligiohang.php" method="POST">
                <input type="submit" value="Xoa gio hang"name = "xoagiohang">
            </form>
            <a href="../index.php#products">Tiếp tục mua </a>
            </div>

        </div>

        <div id="register">
            <div class="register-body">
                <h2>Đăng ký để nhận cập nhật</h2>

                <p>Để lại email để không bỏ lỡ bất kì ưu đãi nào</p>
                <div class="register-button">
                    <input type="text" placeholder="Email">
                    <button>Đăng ký</button>
                </div>


            </div>

        </div>

    
  
        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="<?php echo BaseURL;?>img/logo.png" alt="">
                    
                </div>
                <div class="information">
                    <div class="inf-logo">
                        <i class='icon-logo bx bx-map'>

                        </i>
                        <a href="https://maps.app.goo.gl/hFD8mKvRsT4LjKpcA">18 P. Viên, Đông Ngạc, Bắc Từ Liêm, Hà Nội 100000, Việt Nam</a>
                    </div>
                    <div class="inf-logo">
                        <i class='icon-logo bx bxs-phone'></i>
                        <a href="tel:0963543864">0963543864</a><br>
                        <a href="tel:0985136103">0963543864</a>
                    </div>
                    <div class="inf-logo">
                        <i class='icon-logo bx bx-envelope'></i>
                        <a href="mailto:dinhhoanglong010@gmail.com">dinhhoanglong010@gmail.com</a>
                        <a href="mailto:tdmanh2710@gmail.com">tdmanh2710@gmail.com</a>
                    </div>
                    <div class="inf-logo">
                        <i class='icon-logo bx bxl-facebook-circle' >
                        <a href="https://www.facebook.com/profile.php?id=100012601712023">Hoàng Long</a><br>
                        <a href="https://www.facebook.com/profile.php?id=100079764056370">Trần Đức Mạnh</a>
                        </i>
                    </div>
                </div>



                
            </div>
            <div class="box">
                <h3>NỘI DUNG</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="">Sản phẩm</a>
                    </div>
                    <div class="item">
                        <a href="">Giới thiệu</a>
                    </div>
                    <div class="item">
                        <a href="">Liên hệ</a>
                    </div>
                    <div class="item">
                        <a href="">Feedback</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h3>SẢN PHẨM</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Rau củ</a>
                    </div>
                    <div class="item">
                        <a href="">Trái cây</a>
                    </div>
                    <div class="item">
                        <a href="">Đồ uống</a>
                    </div>
                    <div class="item">
                        <a href="">Đồ khô</a>
                    </div>
                    
                </ul>
            </div>
            <div class="box">
                <h3>LIÊN HỆ</h3>
                <form action="">
                    <input type="text" placeholder="Địa chỉ email">
                    <button>Nhận tin</button>
                </form>
            </div>

        </div>
        
    </div>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class='bx bx-x'></i>
            </div>
            <header class="modal-header">
                ĐĂNG NHẬP
            </header>

            <div class="modal-body">
                <label for="username" class="modal-label">
                    Tên đăng nhập
                </label>
                <input id="username" type="text" class="modal-input" placeholder="Tên đăng nhập">

                <label for="password" class="modal-label">
                    
                    Mật khẩu
                </label>
                <input id="password" type="password" class="modal-input" placeholder="Mật khẩu">

                <button id="login">
                        LOGIN
                </button>



            </div>

            <footer class="modal-footer">
                <p class="modal-help"><a href="">Quên mật khẩu?</a></p>
            </footer>
        </div>
    </div>

    <script src="sanpham.js"></script>


</body>
</html>