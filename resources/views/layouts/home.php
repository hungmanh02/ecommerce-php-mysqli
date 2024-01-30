<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				SẢN PHẨM MỚI
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php 
						
			 			$sql_cate_home=mysqli_query($conn,"SELECT * FROM categories ORDER BY id DESC");
						while($row_cate_home=mysqli_fetch_array($sql_cate_home)){
							$id_category=$row_cate_home['id'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home['category_name']?></h3>
							<div class="row">
								<?php 
									$sql_product_home=mysqli_query($conn,"SELECT * FROM products ORDER BY id DESC");
									while($row_product_home=mysqli_fetch_array($sql_product_home)){
										if($row_product_home['category_id']==$id_category){
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php  echo $row_product_home['product_image']?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php  echo $row_product_home['id']?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php  echo $row_product_home['id']?>"><?php  echo $row_product_home['product_name']?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php  echo  number_format($row_product_home['product_discount']).'đ'?></span>
												<del><?php  echo  number_format($row_product_home['product_price']).'đ'?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php }}?>
							</div>
						</div>
						<!-- //first section -->	
						<?php }?>
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>	
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="images/image1.png" alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							<ul>
							<?php 
						
						$sql_cate_sidebar=mysqli_query($conn,"SELECT * FROM categories ORDER BY id DESC");
					   while($row_cate_sidebar=mysqli_fetch_array($sql_cate_sidebar)){
					   ?>
								<li>
									<input type="checkbox" class="checked">
									<span class="span"><?php echo $row_cate_sidebar['category_name'] ?></span>
								</li>
								<?php }?>
							</ul>
						</div>
						<!-- //electronics -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
								<?php 
									$sql_product_hot=mysqli_query($conn,"SELECT * FROM products WHERE product_hot='0' ORDER BY id DESC");
									while($row_product_hot=mysqli_fetch_array($sql_product_hot)){
								?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php  echo $row_product_hot['product_image']?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php  echo $row_product_hot['product_name']?></a>
											<a href="" class="price-mar mt-2"><?php  echo  number_format($row_product_hot['product_price']).'đ'?></a>
										</div>
									</div>
									<?php }?>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>