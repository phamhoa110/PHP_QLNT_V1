<?php
include("header1.php");
if (isset($_SESSION['dangnhap'])){
if(isset($_POST['vanchuyen'])){
	$ten=$_POST['hoten'];
	$diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
	$id=$_SESSION['userid'];
	
	$sql_vn="INSERT INTO thongtinnhanhang(hoten,diachi,sdt,userid) VALUES ('$ten','$diachi','$sdt','$id')";
	$query_vn=mysqli_query($conn,$sql_vn);
	if($query_vn){
		echo '<script>alert("cap nhat thong tin van chuyen thanh cong")</script>';
	}
	}
}
?>

<!doctype html>
<html class="no-js" lang="">
<meta charset="utf-8">

<body>

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Inner Banner Start
		*************************************-->
        <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bg_6.jpg">

        </div>
        <!--************************************
				Inner Banner End
		*************************************-->

        <!--************************************
				Main Start
		*************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
					News Grid Start
			*************************************-->
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                	<h3>Thông tin vận chuyển</h3>
                	 <div class="row">
                	 	<form action="" method="POST">
                	 		<label>Họ và tên</label>
                	 		<input type="text" name="hoten" required>  
                	 		<br> 
                	 		<label>Địa chỉ</label>
                	 		<input type="text" name="diachi" required>  
                	 		<br> 
                	 		<label>Số điện thoại</label>
                	 		<input type="text" name="sdt" required>  
                	 		<br>   
                	 		<button class="borrow" type="submit" name="vanchuyen">thông tin vận chuyển</button>           	 	
                	 	</form>

                	 </div>
                    <div class="row">
                        <div id="tg-twocolumns" class="tg-twocolumns">

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div>
                                
                                    <table class="styled-table">
                                        <thead>

                                            <tr>
                                                <th>STT</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Số lượng</th>
                                                <th>Đơn giá</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_SESSION['cart'])) {
                                                $stt = 0;
                                                $tongall=0;
                                                foreach ($_SESSION['cart'] as $cart_item) {
                                                    $stt++;
                                                    $tong=$cart_item['soluong']*$cart_item['DonGia'];
                                                    $tongall+=$tong;
                                                    //if ($sl <= 3) {
                                            ?>
                                                    <tr class="active-row">
                                                        <td> <?php echo $stt ?> </td>
                                                        <td> <?php echo $cart_item['MaSP'] ?> </td>
                                                        <td> <?php echo $cart_item['TenSP'] ?> </td>
                                                        <td> <img src=" images/books/<?= $cart_item['Anh'] ?>" alt="image description"> </td>
                                                        <td>
                                                            

                                                            <?php echo $cart_item['soluong'] ?>
                                                            
                                                        </td>
                                                        <td><?php echo $cart_item['DonGia'] ?></td>
                                                        <td><?php echo $tong ?></td>
                                                        
                                                    </tr>

                                                <?php
                                                    
                                                }
                                             
                                                ?>
                                            <?php
                                            } else { ?>
                                                <tr>
                                                    <td colspan="6">
                                                        <h5 style="color: red;">Hiện tại giỏ hàng trống</h5>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr class="active-row">
                                                <td colspan="6"><span style="font-size: 18px;">Tổng tiền</span></td>
                                                <td>
                                                    <?php
                                                        echo $tongall;
                                                    ?>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>

                               
                                <a href="dathang.php"> <input type="submit" name="borrow" class="borrow" value="Thanh toán"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    <!--************************************
					News Grid End
			*************************************-->
    </main>
    <!--************************************
				Main End
		*************************************-->

    <?php include("footer.php") ?>
    </div>
    <!--************************************
			Wrapper End
	*************************************-->
    <script src="js/vendor/jquery-library.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/countTo.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/gmap3.js"></script>
    <script src="js/main.js"></script>
</body>

</html>