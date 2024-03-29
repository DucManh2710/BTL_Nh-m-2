<?php
    require_once '../constant.php';
    require_once '../config/db.php';
?>

<?php
    if(isset($_GET['product_id'])){

        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM products WHERE products.prd_id = '$product_id'";
        $query = mysqli_query($connect, $sql);
        $product = mysqli_fetch_assoc($query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sanpham.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

                <div class="item">
                    <a href="../giohang/giohang.php">
                        <i class='bx bxs-shopping-bag'></i>
                    </a>

                </div>


            </div>
        

        </div>

        <div id="content">
            <div class="content-body">
                <div class="box-left">
                    <img src="<?php echo BaseURL.'img/'.$product['image']?>" alt="">
    
                </div>
                <div class="box-right">
                    <div class="heading">
                        <p>TRANG CHỦ / PIZZA</p>

                    </div>
                    <div class="product">
                        <P><?php echo $product['prd_name']?></P>
                        
                    </div>
                    <div class="price">
                    <P><?php echo $product['price'].'.vnd'?></P>

                    </div>
                    <div class="content">
                        <?php echo $product['description']?>
                    </div>
                    <div class="sub-content">
                        <div class="number">
                            <button id="tru">-</button> 
                            <p id="counter">1</p>
                            <button id="tang">+</button>
                        </div>
                        <div class="add">
                            <button id="btn_submit_cart">THÊM VÀO GIỎ</button>
                        </div>
                        <form id="cart" name="themgiohang" action="../giohang/xuligiohang.php" method = "POST">
                            <input type="hidden" name="product_id" value = "<?php echo $product_id?>"> 
                            <input id="cart_quantily" type="hidden" name="quantily" value = "1"> 
                            <input type="hidden" name="themgiohang" value = "themgiohang">
                        </form>

                    </div>
                    <div class="ship">
                        <div class="box">
                            <p>Tính phí ship tự động</p>
                            <div class="service">
                                <img src="./img/logo1.jpg" alt="">
                                <img src="./img/logo2.jpg" alt="">
                                <img src="./img/logo3.jpg" alt="">
                                <img src="./img/logo4.jpg" alt="">
                                <img src="./img/logo5.jpg" alt="">
                                <img src="./img/logo6.jpg" alt="">

                            </div>
                        </div>
                        <div class="box">
                            <p>Thanh toán</p>
                            <div class="service">
                                <img src="./img/logo7.jpg" alt="">
                                <img src="./img/logo8.jpg" alt="">
                                <img src="./img/logo9.jpg" alt="">
                                <img src="./img/logo10.jpg" alt="">
                                <img src="./img/logo11.jpg" alt="">
                                <img src="./img/logo12.jpg" alt="">
                                        
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div id="describe">
            <button> MÔ TẢ</button>
            <h2>Nguyên liệu cơ bản</h2>
            <p>
                -Bột mì <br>
                -Cà chua <br>
                -Bơ  <br>
                -Dăm bông  <br>
                -Basil
            </p>
            <h2>Burrata Parma Ham</h2>
            <p>Người ta tin rằng vào tháng 6 năm 1889, pizzaiolo (thợ làm pizza) Raffaele Esposito, đầu bếp của Brand Brandi, đã phát minh ra một món ăn gọi là "urrata Parma Ham" để vinh danh Hoàng hậu Ý, Margherita xứ Savoie và sự thống nhất của nước Ý, vì lớp phủ bên trên của nó bao gồm cà chua (đỏ), mozzarella (trắng) và húng quế (xanh lá cây), đại diện cho ba dải màu trên quốc kỳ Ý.</p>
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