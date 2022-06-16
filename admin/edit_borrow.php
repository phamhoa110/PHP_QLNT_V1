<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thông tin ngành</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap 
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"-->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body>
	<div class="wrapper">
      <!-- Preloader-->
      <!--div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/logo.png" alt="Logo" height="60" width="60">
      </div-->
    <?php include "include/header.php"; 
    require 'config.php';
	    $id=$_GET['id'];
		  $query=mysqli_query($conn,"SELECT * FROM book_borrow INNER JOIN book ON book_borrow.book_id = book.book_id INNER JOIN user ON user.user_id = book_borrow.user_id WHERE borrow_id ='$id'");
		
		$row=mysqli_fetch_assoc($query);
    ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Chỉnh sửa thông tin phiếu mượn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container ">
		    <form class="mt-3" method="POST" class="form">
		    	<label class="mt-3">Mã sách
          <input readonly class="form-control" name="bookid" value="<?php echo $row['book_id']; ?>"></label><br>

          <!--label class="mt-3">Tên sách
          <input class="form-control" name="name" value="<?//php echo $row['book_name']; ?>"></!--label><br-->


          <label class="mt-3">Số lượng
          <input class="form-control" name="sl" value="<?php echo $row['qty']; ?>"></label><br>

          <!--label class="mt-3">Mã sinh viên
          <input class="form-control" name="msv" value="<?//php echo $row['user_id']; ?>"></!--label><br-->

          <label class="mt-3">Ngày mượn
          <input class="form-control" name="borrow" value="<?php echo $row['borrow_date']; ?>"></label><br>

          <label class="mt-3">Số ngày mượn
          <input class="form-control" name="dl" value="<?php echo $row['deadline']; ?>"></label><br>

          <label class="mt-3">Ngày trả
          <input class="form-control" name="return" value="<?php echo $row['return_date']; ?>"></label><br>

          <label class="mt-3">Trạng thái
          <input class="form-control" name="st" value="<?php echo $row['status']; ?>"></label><br>

          <input type="submit" class="btn btn-small btn-primary mt-3" name="update_borrow" value="Sửa">


			</form>
		</div>
    <?php
          if (isset($_POST['update_borrow'])){
            
            if(isset($_POST['sl'])){
              $soluong =$_POST['sl'];
            }
            if(isset($_POST['borrow'])){
              $borrow =$_POST['borrow'];
            }
            if(isset($_POST['dl'])){
              $deadline =$_POST['dl'];
            }
            if(isset($_POST['return'])){
              $return =$_POST['return'];
            }

            if(isset($_POST['st'])){
              $status =$_POST['st'];
            }
            
            $sql = "UPDATE book_borrow  SET qty='$soluong', borrow_date = '$borrow', deadline = '$deadline', return_date = '$return', status = '$status' WHERE borrow_id='$id'";
            
            if (mysqli_query($conn, $sql)) {
              
              echo '<script>alert("Sửa sách mượn thành công\nMời bạn quay lại trang quản lý để xem chi tiết")</script>';
            }
          }
        ?>
	</section>
</div>

	<?php include 'include/footer.php'; ?>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="dist/js/adminlte.js"></script>
</body>
</html>