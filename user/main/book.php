<?php
	include("config.php");
	if (!isset($_GET['id'])) {

		$sql_pro = "SELECT* FROM sanpham";

	 } else {

		$id = $_GET['id'];
		$sql_pro = " SELECT* FROM sanpham where MaDM = '$id' ";
		
	 }
	
	$a = mysqli_query($conn, $sql_pro);

	$query_pro = mysqli_query($conn, $sql_pro);
?>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
	<div id="tg-content" class="tg-content">
		<div class="tg-products">
			<div class="tg-sectionhead">
				<h2><span>Tất cả sản phẩm</span>
					<?php
					 if (isset($_GET['id'])) {
						
					 }
					 ?> 
				</h2>
			</div>

			<div class="tg-productgrid">
				<?php
				while ($row = mysqli_fetch_array($query_pro)) {
				?>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<div class="tg-postbook">
							<form action="themgiosach.php?sach_id=<?php echo $row['MaSP'] ?>" method="POST">
								<figure class="tg-featureimg">
									<div class="tg-bookimg">
										<div class="tg-frontcover"><img src="images\books\<?php echo $row['Anh'] ?>" alt="image description"></div>
										<div class="tg-backcover"><img src="images\books\<?php echo $row['Anh'] ?>" alt="image description"></div>
									</div>

								</figure>
								<div class="tg-postbookcontent">
									<ul class="tg-bookscategories">
										<li><a href="#">
											<?php
												$ma_dm = $row['MaDM'];
												$sql_dm = "select * from danhmuc where MaDM = '$ma_dm'";
												$row_dm = mysqli_fetch_assoc(mysqli_query($conn, $sql_dm));
												echo $row_dm['TenDM'];
											?>
										</a></li>
									</ul>
									<div class="tg-booktitle">
										<h3><a href="productdetail.php?quanly=sach&book_id=<?php echo $row['MaSP'] ?>"><?php echo $row['TenSP'] ?> </a></h3>
									</div>
									<span class="tg-bookwriter">Gia : <a href="javascript:void(0);"> <?php echo $row['DonGia'] ?></a></span>
									<span class="tg-stars"><span></span></span>

									<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
										<button type="submit" class="themgiosach" name="themgiosach"><i class="fa fa-shopping-basket"></i>
											<em>Thêm vào giỏ</em></button>
									</a>
								</div>
							</form>
						</div>
					</div>
				<?php 
			} 
			?>

			</div>
		</div>
	</div>
</div>