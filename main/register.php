<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <div class="logo">
            <a href="index.html"> <img src="https://pubcdn.ivymoda.com/ivy2/images/logo.png" alt=""></a>
        </div>
        <div class="menu">
            <li><a href="">NỮ</a>
            <ul class="sub-menu">
                <li><a href="">Áo</a>
                <ul>
                    <li><a href="aosomi.htmld">Áo sơ mi</a></li>
                    <li><a href="">Áo thun</a></li>
                    <li><a href="">Áo len</a></li>
                </ul></li>
                <li><a href="">Áo khoác</a>
                    <ul>
                        <li><a href="">Áo khoác</a></li>
                        <li><a href="">Áo dạ</a></li>
                        <li><a href="">Áo Vest</a></li>
                    </ul></li>
                <li><a href="">Quần</a>
                <ul>
                    <li><a href="">Quần jean</a></li>
                    <li><a href="">Quần dài</a></li>
                    <li><a href="">Quần lửng</a></li>
                </ul></li>
                <li><a href="">Chân váy</a>
                    <ul>
                        <li><a href="">Chân váy</a></li>
                        <li><a href="">Chân váy xếp ly</a></li>
                        <li><a href="">Chân váy chữ A</a></li>
                    </ul></li>
                <li><a href="">Đầm</a>
                     <ul>
                        <li><a href="">Đầm thun</a></li>
                        <li><a href="">Đầm dạ hội</a></li>
                    </ul></li>
            </ul>
            </li>
            <li><a href="">NAM</a>
                <ul class="sub-menu">
                    <li><a href="">Áo</a>
                    <ul>
                        <li><a href="">Áo sơ mi</a></li>
                        <li><a href="">Áo thun</a></li>
                        <li><a href="">Áo vest</a></li>
                        <li><a href="">Áo Polo</a></li>
                        <li><a href="">Áo phao</a></li>
                        <li><a href="">Áo len</a></li>
                    </ul></li>
                    <li><a href="">Quần</a>
                    <ul>
                        <li><a href="">Quần jean</a></li>
                        <li><a href="">Quần dài</a></li>
                        <li><a href="">Quần lửng</a></li>
                        <li><a href="">Quần tây</a></li>
                    </ul></li>
                </ul>
            </li>
            <li><a href="">TRẺ EM</a>
                <ul class="sub-menu">
                    <li><a href="">Bé gái</a>
                    <ul>
                        <li><a href="">Áo bé gái</a></li>
                        <li><a href="">Quần bé gái</a></li>
                        <li><a href="">Váy bé gái</a></li>
                        <li><a href="">Chân váy</a></li>
                    </ul></li>
                    <li><a href="">Bé trai</a>
                    <ul>
                        <li><a href="">Áo bé trai</a></li>
                        <li><a href="">Quần bé trai</a></li>
                        <li><a href="">Phụ kiện bé trai</a></li>
                    </ul></li>
                </ul>
            </li>
            <li><a href="">SALE</a>
                <ul class="sub-menu">
                    <li><a href="">Sale</a>
                    <ul>
                        <li><a href="">30%</a></li>
                        <li><a href="">50%</a></li>
                        <li><a href="">70%</a></li>
                    </ul></li>
                </ul>
            </li>
            <li><a href="">KHẨU TRANG</a>
                <ul class="sub-menu">
                    <li><a href="">Khẩu trang</a>
                    <ul>
                        <li><a href="">Khẩu trang 4 lớp</a></li>
                        <li><a href="">Khẩu trang y tế</a></li>
                        <li><a href="">Khẩu trang tulip</a></li>
                    </ul></li>
                </ul>
            </li>
            <li><a href="">BỘ SƯU TẬP</a></li>
            <li><a href="">THÔNG TIN</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text">
            <i class="fas fa-search"></i></li>
            <li><a href="index.html"><i class="fa fa-paw"></i></a></li>
            <li><i class="fa fa-user"></i></li>
            <li><a href="giohang.html"><i class="fa fa-shopping-bag"></i></a></li>
        </div>
    </section>

    <div class="content">
            <div class="form">
                <h2>Bạn chưa có tài khoản IVY</h2>
                <form action="register.php" class="dangky" method="post">
                <input require type="text" name="username" placeholder="Nhập tài khoản">
                <input require type="password" name="password" placeholder="Nhập mật khẩu">
                <input require type="email" name="email" placeholder="Nhập email">
                <input require type="submit" name="dangky" class="btnn" value="Đăng ký"/>
                <?php require 'xuly.php'; ?>
                
             

                <div class="icons">
                    <a href="https://vi-vn.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://twitter.com/?lang=vi"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.google.com.vn/?hl=vi"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="https://www.youtube.com/?hl=vi"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>

            </div>
                </div>
                
    <section class="app-container">
        <hr width="100%">
        <p class="app-first">Tải ứng dụng IVY moda</p>
        <div class="app-google">
            <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" alt="">
            <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" alt="">
        </div>
        <p>Nhận bản tin IVY moda</p>
        <input type="text" placeholder="Nhập email của bạn...">

    </section>

    <section class="footer">
        <div class="footer-top">
            <li><a href=""><img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt=""></a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Tuyển dụng</a></li>
            <li><a href="">Giới thiệu</a></li>
            <li>
                <a href="" class="fab fa-facebook"></a>
                <a href="" class="fab fa-twitter"></a>
                <a href="" class="fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer-center">
            <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br>
                Địa chỉ đăn

g ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam <br>
                Số điện thoại: <b>0243 205 2222/ 090 589 8683</b> <br>
                Email: <b>cskh@ivy.com.vn</b> 
            </p>
        </div>
        
        <div class="footer-bottom">
            ©IVYmoda All rights reserved
        </div>
        </section>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
    </html>
