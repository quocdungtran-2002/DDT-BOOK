<?php
require_once "../model/config/connectDB.php";

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>DDT-Book</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../view/images/Logo-DDT.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="..view//images/Logo-DDT.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../view/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../view/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../view/css/custom.css">

    <link rel="stylesheet" href="../view/css/popup.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>đ VND</option>
                            <option>$ USD</option>
                            <!-- <option>€ EUR</option> -->
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Hotline : <a href="#"> +84 367 621 947</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <!-- <li><a href="#">My Account</a></li> -->
                            <li><a href="#">Địa chỉ</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../view/images/Logo-DDT.png" class="logo"
                            alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php?act=home">Trang chủ</a></li>
                        <li class="nav-item active"><a class="nav-link" href="index.php?act=about">Giới thiệu</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Sản phẩm<i
                                    class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.html">Jackets</a></li>
                                                    <li><a href="shop.html">Shirts</a></li>
                                                    <li><a href="shop.html">Sweaters & Cardigans</a></li>
                                                    <li><a href="shop.html">T-shirts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.html">Swimwear</a></li>
                                                    <li><a href="shop.html">Skirts</a></li>
                                                    <li><a href="shop.html">Jeans</a></li>
                                                    <li><a href="shop.html">Trousers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Clothing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.html">Top Wear</a></li>
                                                    <li><a href="shop.html">Party wear</a></li>
                                                    <li><a href="shop.html">Bottom Wear</a></li>
                                                    <li><a href="shop.html">Indian Wear</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Accessories</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="shop.html">Bags</a></li>
                                                    <li><a href="shop.html">Sunglasses</a></li>
                                                    <li><a href="shop.html">Fragrances</a></li>
                                                    <li><a href="shop.html">Wallets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Shop<i
                                    class="fa fa-chevron-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li><a href="index.php?act=cart">Cart</a></li>
                                <li><a href="index.php?act=checkout">Checkout</a></li>
                                <li><a href="index.php?act=my-account">My Account</a></li>
                                <li><a href="index.php?act=wishlist">Wishlist</a></li>
                                <li><a href="index.php?act=shop-detail">Shop Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="index.php?act=service">Dịch vụ</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?act=contact-us">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span style="color:red;" class="badge">3</span>
                            </a></li>

                        <!-- Liên kết để hiển thị popup -->
                        <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])): ?>
                            <li>
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                        <li class="dropdown">
                                            <a id="logout" href="#" class="nav-link dropdown-toggle "
                                                data-toggle="dropdown"><i class="fa fa-user">&nbsp;
                                                    <?php echo $_SESSION['email']; ?><i class="fa fa-chevron-down"></i>
                                                </i></a>
                                            <ul class=" dropdown-menu">
                                                <li><a href=#>Thông tin tài khoản</a></li>
                                                <li><a href=#>Quên mật khẩu</a></li>
                                                <li><a href="index.php?act=logout">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <li><a href="#" id="open-popup"><i class="fa fa-user">&nbsp; Đăng nhập</i></a></li>
                <?php endif; ?>


                <!-- Thêm popup -->
                <div id="user-popup" class="popup">
                    <section class="container-p forms">
                        <div class="form login">
                            <span class="close-popup" id="close-popup"><i class="fa fa-times"></i></span>
                            <div class="form-content">
                                <header class="title">Đăng nhập</header>
                                <form action="index.php?act=login" method="POST">
                                    <div class="field input-field">
                                        <input name="email" type="email" placeholder="Email" class="input" required>
                                    </div>
                                    <div class="field input-field">
                                        <input name="password" type="password" placeholder="Mật khẩu" class="password"
                                            required>
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <div class="">
                                        <label for=""><input type="checkbox">Nhớ mật khẩu</label>
                                    </div>
                                    <div class="form-link">
                                        <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                                    </div>
                                    <div class="field button-field">
                                        <button id="login" name="login" value="login">Đăng nhập</button>
                                    </div>
                                </form>

                                <div class="form-link">
                                    <span>Chưa có tài khoản? <a href="#" class="link signup-link">Đăng
                                            ký</a></span>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="media-options">
                                <a href="#" class="field facebook">
                                    <i class='bx bxl-facebook facebook-icon'></i>
                                    <span>Đăng nhập với Facebook</span>
                                </a>
                            </div>

                            <div class="media-options">
                                <a href="#" class="field google">
                                    <img src="../view/images/google.png" alt="" class="google-img">
                                    <span>Đăng nhập với Google</span>
                                </a>
                            </div>

                        </div>

                        <!-- Signup Form -->

                        <div class="form signup">
                            <span class="close-popup" id="close-popup"><i class="fa fa-times"></i></span>
                            <div class="form-content">
                                <header class="title">Đăng ký</header>
                                <form action="index.php?act=signup" method="POST">
                                    <div class="field input-field">
                                        <input name="email" type="email" placeholder="Email" class="input" required>
                                    </div>

                                    <div class="field input-field">
                                        <input name="password" type="password" placeholder="Nhập mật khẩu"
                                            class="password" required>
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>

                                    <div class="field input-field">
                                        <input name="return_password" type="password" placeholder="Nhập lại mật khẩu"
                                            class="password" required>
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>

                                    <div class="field button-field">
                                        <button name="signup">Đăng ký</button>
                                    </div>
                                </form>

                                <div class="form-link">
                                    <span>Đã có tài khoản? <a href="#" class="link login-link">Đăng
                                            nhập</a></span>
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="media-options">
                                <a href="#" class="field facebook">
                                    <i class='bx bxl-facebook facebook-icon'></i>
                                    <span>Đăng nhập với Facebook</span>
                                </a>
                            </div>

                            <div class="media-options">
                                <a href="#" class="field google">
                                    <img src="../view/images/google.png" alt="" class="google-img">
                                    <span>Đăng nhập với Google</span>
                                </a>
                            </div>

                        </div>
                    </section>
                    <!-- </div> -->
                </div>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
            </div>