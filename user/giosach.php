<?php
include("header1.php");


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
                    <div class="row">
                        <div id="tg-twocolumns" class="tg-twocolumns">

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div>
                                <form action="" autocomplete="off" method="POST">
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
                                                <th>Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_SESSION['cart'])) {
                                                $stt = 0;
                                                $sl = 0;
                                                foreach ($_SESSION['cart'] as $cart_item) {
                                                    $stt++;
                                                    $sl++;
                                                    //if ($sl <= 3) {
                                            ?>
                                                    <tr class="active-row">
                                                        <td> <?php echo $stt ?> </td>
                                                        <td> <?php echo $cart_item['MaSP'] ?> </td>
                                                        <td> <?php echo $cart_item['TenSP'] ?> </td>
                                                        <td> <img src=" images/books/<?= $cart_item['Anh'] ?>" alt="image description"> </td>
                                                        <td><?php echo $cart_item['soluong'] ?>
                                                        </td>
                                                        <td><?php echo $cart_item['DonGia'] ?></td>
                                                        <td><?php echo $cart_item['DonGia'] *
                                                                $cart_item['soluong'] ?></td>
                                                        <td><a href="themgiosach.php?xoa=<?php echo $cart_item['MaSP'] ?>">Xóa </a></td>
                                                    </tr>

                                                <?php
                                                    // } else {
                                                    //         echo 'Mỗi sinh viên chỉ được mượn tối đa 5 quyển sách';
                                                    //         break;
                                                }
                                                //}
                                                ?>
                                            <?php
                                            } else { ?>
                                                <tr>
                                                    <td colspan="6">
                                                        <h5 style="color: red;">Hiện tại giỏ sách trống</h5>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr class="active-row">
                                                <td colspan="6"><span style="font-size: 18px;">Tổng tiền</span></td>
                                                <td>
                                                    <?php
                                                    if (isset($_SESSION['cart'])) {
                                                        $cart = $_SESSION['cart'];
                                                        $tong = 0;
                                                        foreach ($cart as $k => $v) {
                                                            $tong += $v['soluong'] * $v['DonGia'];
                                                        }
                                                        echo $tong;
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <td colspan="6">
                                                <a class="delete" href="themgiosach.php?xoatatca=1">XÓA TẤT CẢ</a>
                                            </td>
                                        </tbody>
                                    </table>

                                    <div class="form-group">

                                        <!-- <li class="list-group-item active">Nhập thông tin sinh viên </li>
                                            <div class="form-group">
                                                <label for="user_id">Mã sinh viên <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="user_id" value="<?php echo isset($_POST['user_id']) ? $_POST['user_id'] : ''; ?>">
                                                    <div style="color: red;"><?php echo isset($error['user_id']) ? $error['user_id'] : ''; ?></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fullname">Họ và tên <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="fullname" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : ''; ?>">
                                                    <div style="color: red;"><?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="class">Lớp <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="class" value="<?php echo isset($_POST['class']) ? $_POST['class'] : ''; ?>">
                                                    <div style="color: red;">
                                                        <?php echo isset($error['class']) ? $error['class'] : ''; ?></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                                                    <div style="color: red;">
                                                        <?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Số điện thoại <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                                                    <div style="color: red;">
                                                        <?php echo isset($error['phone']) ? $error['phone'] : ''; ?></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Số ngày mượn <span style="color: red;">*</span> </label>
                                                <div>
                                                    <input class="form-control" type="text" name="days" value="<?php echo isset($_POST['days']) ? $_POST['days'] : ''; ?>">
                                                    <div style="color: red;">
                                                        <?php echo isset($error['days']) ? $error['days'] : ''; ?></div>
                                                </div>
                                            </div> -->

                                    </div>
                                </form>
                                <a href="dathang.php"> <input type="submit" name="borrow" class="borrow" value="Đặt hàng"></a>
                                <a href="index1.php"><input type="submit" class="borrow" value="Mua tiếp"></a>
                                <a href="danhsachdh.php"><input type="submit" class="borrow" value="Xem đơn đặt hàng"></a>
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