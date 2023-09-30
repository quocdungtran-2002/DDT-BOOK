<?php
session_start();
ob_start();
include "../model/config/connectDB.php";
include "../model/lib.php";
?>

<?php require_once "../view/header.php"; ?>

<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            include "../view/about.php";
            break;
        case 'cart':
            include "../view/cart.php";
            break;
        case 'checkout':
            include "../view/checkout.php";
            break;
        case 'contact-us':
            include "../view/contact-us.php";
            break;
        case 'my-account':
            include "../view/my-account.php";
            break;
        case 'service':
            include "../view/service.php";
            break;
        case 'shop-detail':
            include "../view/shop-detail.php";
            break;
        case 'shop':
            include "../view/shop.php";
            break;
        case 'wishlist':
            include "../view/wishlist.php";
            break;
        case 'login':
            if ((isset($_POST['login'])) && ($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = checkuser($email, $password);
                $kq = getuserinfo($email, $password);
                $_SESSION['role'] = $role;

                if ($role == 1) {
                    header('location: ../index.php');
                } else if ($role == 2) {
                    header('location: ../index.php');
                } else if ($role == 3) {
                    $_SESSION['role'] = $role;
                    $_SESSION['id_user'] = $kq[0]['id_user'];
                    $_SESSION['email'] = $kq[0]['email'];
                    header('location: ../index.php');
                } else {
                    header('location:../index.php');
                }
            }
            break;
        case 'logout':
            session_unset();
            session_destroy();
            header('Location: ../index.php');
            break;
        case 'signup':
            if (isset($_POST['signup'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = "";
                $phonenumber = "";
                $address = "";
                $role = "3";
                $status = "1";
                $result = insertinfo($email, $password, $name, $phonenumber, $address, $role, $status);

                if ($result) {
                    header('Location: ../index.php');
                    exit;
                } else {
                    echo "Đăng ký thất bại.";
                }
            }
            break;

        default:
            include "../view/home.php";
            break;
    }

} else {
    include "../view/home.php";
}
?>

<?php require_once "../view/footer.php"; ?>