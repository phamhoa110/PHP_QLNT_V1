<?php
include("header1.php");

// $error = array();
// $data  = array();


// if (!empty($_POST['borrow'])) {
//     $data['user_id']    = isset($_POST['user_id']) ? $_POST['user_id'] : '';
//     $data['fullname']    = isset($_POST['fullname']) ? $_POST['fullname'] : '';
//     $data['class']       = isset($_POST['class']) ? $_POST['class'] : '';
//     $data['email']       = isset($_POST['email']) ? $_POST['email'] : '';
//     $data['phone']       = isset($_POST['phone']) ? $_POST['phone'] : '';
//     $data['days']       = isset($_POST['days']) ? $_POST['days'] : '';

//     $user_id = '';
//     $fullname = '';
//     $class = '';
//     $email = '';
//     $phone = '';
//     $days = '';

//     if (empty($data['user_id'])) {
//         $error['user_id'] = 'Bạn chưa nhập mã sinh viên';
//     } else {
//         if (!preg_match('/((20)+([0-9]{8})\b)/', $data['user_id'])) {
//             $error['user_id'] = 'Mã sinh viên phải bao gồm 10 chữ số';
//         } else $user_id = $data['user_id'];
//     }

//     if (empty($data['fullname'])) {
//         $error['fullname'] = 'Bạn chưa nhập họ và tên';
//     } else {
//         // a-zA-Z\
//         if (!preg_match('/^[\D]{3,40}$/', $data['fullname'])) {
//             $error['fullname'] = 'Họ và tên phải là chữ (ít nhất 3 chữ cái)';
//         } else $fullname = $data['fullname'];
//     }

//     if (empty($data['class'])) {
//         $error['class'] = 'Bạn chưa nhập tên lớp';
//     } else {
//         if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/', $data['class'])) {
//             $error['class'] = 'Tên lớp phải tối thiểu 4 ký tự, ít nhất một chữ cái và một số';
//         } else $class = $data['class'];
//     }
//     if (empty($data['email'])) {
//         $error['email'] = 'Bạn chưa nhập email';
//     } else {
//         if (!preg_match('/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z]+(\\.[A-Za-z0-9]+)$/', $data['email'])) {
//             $error['email'] = 'Email: phải tuân thủ quy tắc gồm ký tự @ và sau đó là dấu . ';
//         } else $email = $data['email'];
//     }
//     if (empty($data['phone'])) {
//         $error['phone'] = 'Bạn chưa nhập số điện thoại';
//     } else {
//         if (!preg_match('/((09|03|07|08|05)+([0-9]{8})\b)/', $data['phone'])) {
//             $error['phone'] = 'Số điện thoại không hợp lệ ( bao gồm 10 chữ số). ';
//         } else $phone = $data['phone'];
//     }
//     if (empty($data['days'])) {
//         $error['days'] = 'Bạn chưa nhập số ngày mượn sách';
//     } else {
//         if ($data['days'] > 15 || $data['days'] < 0) {
//             $error['days'] = 'Bạn chỉ được mượn sách tối đa 14 ngày. ';
//         } else $days = $data['days'];
//     }

//     if (!$error) {
//         $insert_user = "INSERT INTO user(user_id,fullname,class,email,phone)
//             VALUES ('" . $user_id . "','" . $fullname . "','" . $class . "','" . $email . "','" . $phone . "')";
//         mysqli_query($conn, $insert_user);

//         foreach ($_SESSION['cart'] as $key => $value) {
//             $date = date('Y-m-j');
//             $newdate = strtotime ( '+'.$days.' day' , strtotime ( $date ) ) ;
//             $newdate = date ( 'Y-m-j' , $newdate );
//             $book_id = $value['id'];
//             $qty = $value['soluong'];
//             $insert_borrow = "INSERT INTO book_borrow(book_id,qty,borrow_date,user_id,deadline,return_date,status)
//                 VALUES ('" . $book_id . "','" . $qty . "','".$date."','" . $user_id . "','" . $days . "','".$newdate."','Chưa đặt cọc')";
//                 mysqli_query($conn, $insert_borrow);
//         }
//         echo '<script>alert("Mượn sách thành công \nBạn có thể xem phiếu mượn")</script>';
//         unset($_SESSION['cart']);
//     }
// }
?>

<!doctype html>
<html class="no-js" lang="">
<meta charset="utf-8">

<body>

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Inner Banner Start
		*************************************-->
        <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
            
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

                            <!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                                <aside id="tg-sidebar" class="tg-sidebar">

                                    <div class="tg-widget tg-widgetsearch">
                                        <form action="products.php?quanly=timkiem" class="tg-formtheme tg-formsearch " method="GET">
                                            <div class="form-group">

                                                <input type="text" name="search" class="form-group" placeholder="Tìm kiếm sách...">
                                                <button type="submit"><i class="icon-magnifier"></i></button>
                                            </div>
                                        </form>
                                    </div>

                                    <?php 
                                    //include("tuongtac.php") 
                                    ?>
                                </aside>
                            </div> -->

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    // echo '<pre>';
                                    // print_r($_SESSION['cart']);
                                    // echo '</pre>';
                                }
                                ?>
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
                                                            <td> <img src=" images/books/<?=$cart_item['Anh']?>" alt="image description"> </td>
                                                            <td><?php echo $cart_item['soluong'] ?>
                                                            </td>
                                                            <td><?php echo $cart_item['DonGia'] ?></td>
                                                            <td><?php echo $cart_item['DonGia']*
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
                                                    <td colspan="6" ><span style="font-size: 18px;">Tổng tiền</span></td>
                                                    <td>
                                                        <?php
                                                       if(isset($_SESSION['cart'])){
                                                        $cart = $_SESSION['cart'];
                                                        $tong=0;
                                                        foreach($cart as $k=>$v){
                                                            $tong+=$v['soluong']*$v['DonGia'];
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
                                    <a  href="dathang.php"> <input type="submit" name="borrow" class="borrow" value="Đặt hàng"></a>
                                    <a href="index1.php"><input type="submit" class="borrow"  value="Mua tiếp"></a>
                                    <a href="danhsachdh.php"><input type="submit" class="borrow"  value="Xem đơn đặt hàng"></a>
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