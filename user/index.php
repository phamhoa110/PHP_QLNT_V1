<?php
	//require 'config1.php';
	require 'config.php';
	include("header1.php");
	// if(!isset($_SESSION['dangnhap'])){
	// 	header("Location:login.php");
	// }

	//$sql_count = "SELECT COUNT(*) FROM sanpham WHERE  = 'Nam'";
?>

<!doctype html>
<html class="no-js" lang="">



<body class="tg-home tg-homeone">
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bg_1.jpg">
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->

		<!--************************************
					Best Selling Start
			*************************************-->
		<section class="tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-sectionhead">
							<h2><span>Khách hàng yêu mến</span>Sản phẩm Nổi bật</h2>
							<a class="tg-btn" href="products.php">Xem tất cả</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">

							<?php
							
							$sql="SELECT * FROM sanpham ";

							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_array($result)) {
							?>
							
								<div class="item">
									
							<form action="themgiosach.php?MaSP=<?php echo $row['MaSP'] ?>" method="POST">
									<div class="tg-postbook">
										<figure class="tg-featureimg">
											<div class="tg-bookimg">
												<div class="tg-frontcover"><img src="images\books\<?=$row['Anh']?>" alt="image description"></div>
												<div class="tg-backcover"><img src="images\books\<?=$row['Anh']?>" alt="image description"></div>
											</div>

										</figure>
										<div class="tg-postbookcontent">
											<ul class="tg-bookscategories">
												<li><?php 
													$ma_dm = $row['MaDM'];
													$sql_dm = "select * from danhmuc where MaDM = '$ma_dm'";
												$row_dm = mysqli_fetch_assoc(mysqli_query($conn, $sql_dm));
												echo $row_dm['TenDM'];
												?></li>
											</ul>
											<div class="tg-booktitle">
												<h3><a href="productdetail.php?MaSP=<?php echo $row['MaSP'] ?>"><?php echo $row['TenSP'] ?> </a></h3>
											</div>
											<span class="tg-bookwriter"><a href="javascript:void(0);"> <?php echo $row['DonGia'] ?></a></span>
											
											<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
												<button type="submit" class="themgiosach" name="themgiosach"><i class="fa fa-shopping-basket"></i>
													<em>Thêm vào giỏ</em></button>
											</a>
										</div>
									</div>
									<div class="tg-postbook">
										<figure class="tg-featureimg">
											<div class="tg-bookimg">
												<div class="tg-frontcover"><img src="images\books\<?=$row['Anh']?>" alt="image description"></div>
												<div class="tg-backcover"><img src="images\books\<?=$row['Anh']?>" alt="image description"></div>
											</div>

										</figure>
										<div class="tg-postbookcontent">
											<ul class="tg-bookscategories">
												<li><?php 
													$ma_dm = $row['MaDM'];
													$sql_dm = "select * from danhmuc where MaDM = '$ma_dm'";
												$row_dm = mysqli_fetch_assoc(mysqli_query($conn, $sql_dm));
												echo $row_dm['TenDM'];
												?></li>
											</ul>
											<div class="tg-booktitle">
												<h3><a href="productdetail.php?MaSP=<?php echo $row['MaSP'] ?>"><?php echo $row['TenSP'] ?> </a></h3>
											</div>
											<span class="tg-bookwriter"><a href="javascript:void(0);"> <?php echo $row['DonGia'] ?></a></span>
										

											<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
												<button type="submit" class="themgiosach" name="themgiosach"><i class="fa fa-shopping-basket"></i>
													<em>Thêm vào giỏ</em></button>
											</a>
										</div>
									</div>
								</div>

								</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
	</div>
	</section>

	<!--************************************
					Featured Item End
			*************************************-->
	<?php 
	// include("new_book.php") 
	?>
	<!--************************************
					Collection Count Start
			*************************************-->
	<section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bg_5.jpg">
		<div class="tg-sectionspace tg-collectioncount tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-collectioncounters" class="tg-collectioncounters">
						<div class="tg-collectioncounter tg-drama">
							<div class="tg-collectioncountericon">
								<i class="icon-envelope"></i>
							</div>
							<div class="tg-titlepluscounter">
								<h2>Bàn ghế</h2>
								<?php
									$sql_BanGhe = "select count(MaSP) as SoSanPham from sanpham inner join danhmuc on sanpham.MaDM = danhmuc.MaDM where danhmuc.TenDM = 'Bàn ghế';";
									$banghe = mysqli_fetch_assoc(mysqli_query($conn, $sql_BanGhe));
								?>
								<h3 data-from="0" data-to="<?= $banghe['SoSanPham']?>" data-speed="1000" data-refresh-interval="50">
									<?php
										
										echo $banghe['SoSanPham'];
									?>
								</h3>
							</div>
						</div>
						<div class="tg-collectioncounter tg-horror">
							<div class="tg-collectioncountericon">
								<i class="icon-envelope"></i>
							</div>
							<div class="tg-titlepluscounter">
								<h2>Giường</h2>
								<h3 data-from="0" data-to="7" data-speed="1000" data-refresh-interval="50">7</h3>
							</div>
						</div>
						<div class="tg-collectioncounter tg-romance">
							<div class="tg-collectioncountericon">
								<i class="icon-envelope"></i>
							</div>
							<div class="tg-titlepluscounter">
								<h2>Tủ</h2>
								<h3 data-from="0" data-to="6" data-speed="1000" data-refresh-interval="50">6</h3>
							</div>
						</div>
						<div class="tg-collectioncounter tg-fashion">
							<div class="tg-collectioncountericon">
								<i class="icon-envelope"></i>
							</div>
							<div class="tg-titlepluscounter">
								<h2>Kệ</h2>
								<h3 data-from="0" data-to="7" data-speed="1000" data-refresh-interval="50">7</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
					Collection Count End
			*************************************-->
	<?php include("favorite_products.php") ?>
	<!--************************************
					Testimonials Start
			*************************************-->
	
	<!--************************************
					Testimonials End
			*************************************-->



	</main>
	<!--************************************
				Main End
		*************************************-->
	</div>

	<?php include("footer.php"); ?>
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