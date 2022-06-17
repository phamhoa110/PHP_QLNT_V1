<?php
session_start();
include("config.php");

//xoa sach
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        //ktra id trong session trùng với id được get ra k, in lại session ngoại trừ session có id trên
        if ($cart_item['MaSP'] != $id) {
            $product[] =  array('TenSP' => $cart_item['TenSP'], 'Anh' => $cart_item['Anh'], 'soluong' => $cart_item['soluong'], 'DonGia' => $cart_item['DonGia'], 'MaSP' => $cart_item['MaSP']);
        }
        $_SESSION['cart'] = $product;
        header('Location:giosach.php');
    }
}

//xoa tat ca sach
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location:index1.php');
}

//them
if (isset($_POST['themgiosach'])) {

    $id = $_POST['MaSP'];
    $soluong = (isset($_POST['soluong'])) ? $_POST['soluong'] : 1;
    $sql = "SELECT * FROM sanpham WHERE MaSP = '" . $id . "' LIMIT 1";
    $querry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($querry);
    if ($row) {
        if (isset($_SESSION['cart'])) //đã có giỏ thì lấy ra
        {
            $cart = $_SESSION['cart'];
        } else { //chưa có thì tạo
            $cart = [];
        }
        //Kiểm tra hàng có trong giỏ chưa
        if (array_key_exists($id, $cart)) { //hàng đã có trong giỏ
            $cart[$id]['soluong']++;
        } else { //chưa có sp trong giỏ
            $cart[$id] = array('TenSP' => $row['TenSP'], 'Anh' => $row['Anh'], 'MaSP' => $id, 'soluong' => $soluong, 'DonGia' => $row['DonGia'], 'MaSP' => $row['MaSP']);
        }
        //cập nhật lại giỏ hàng
        $_SESSION['cart'] = $cart;
    }
}
header('Location:index1.php');
