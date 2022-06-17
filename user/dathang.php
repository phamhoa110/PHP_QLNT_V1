<?php
	
include_once("config.php");
include("header1.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (!empty($_SESSION['dangnhap'])) {
	$ten=$_SESSION['dangnhap'];
                    if (!empty($_SESSION['cart'])) {
                       
                            $cart_item = $_SESSION['cart'];
	//kết nối csdl
	
	$odate = date("Y-m-d H:i:s");
	$otime = date('H:i:s');
	$total = 0;
	$userid=$ten;
	foreach($cart_item as $k=>$v){
		$total+=$v['soluong']*$v['DonGia'];
	}
	$sql = "INSERT INTO tblorder (odate,otime,tong,user_id) VALUES('$odate','$otime','$total','$userid')";
	
	mysqli_query($conn,$sql);
	//lấy id của bản ghi vừa chèn (sau cùng);
	$id = mysqli_insert_id($conn);
	
	foreach($cart_item as $k=>$v){
		
		$quantity = $v['soluong'];
		$price = $v['DonGia'];
		$sql = "INSERT INTO tblorderdetails (orderid,sanphamid,soluong,dongia) VALUES('$id','$k','$quantity','$price')";
		
		mysqli_query($conn,$sql);
	}
	unset($_SESSION['cart']);
	mysqli_close($conn);
	echo "<script>window.location.href='danhsachdh.php';</script>";
                       
          }
        else {
            echo '<script>alert("Chưa có sản phẩm nào trong giỏ hàng!")</script>';
            echo '<script>window.location.href="index1.php";</script>';
        }
 } else {
    echo '<script>alert("Bạn chưa đăng nhập!")</script>';
 }
