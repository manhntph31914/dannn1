<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
	<!-- Category Section -->
	<div id="category-section" class="category-section bottom-shadow">
		<!-- container -->
		<div class="container">

			<div class="col-md-3 categories-title col-sm-4">
			</div>

			<div class="col-md-6 col-sm-4">
				<h4>Danh mục</h4>
			</div>

			<div class="col-md-3 col-sm-4 categories-title">
			</div>

			<div class="category-box-main categories-slider">
				<!-- Owl Carousel -->
				<div id="categories-list" class="owl-carousel owl-theme our-partner">
				<?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm="index.php?act=sanpham&&iddm=".$id2;
                    echo '<div class="item">						
							<div class="category-box">
								<a title="Gadgets" href="'.$linkdm.'">
									<img src="view/images/category/cat-img-1.jpg" alt="cat-img" />
									<span>'.$name2.'</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>';
                }
            	?>
					
				
					
					<!-- <div class="item">						
						<div class="category-box">
							<a title="Gadgets" href="index.php?act=listsanpham">
								<img src="view/images/category/cat-img-1.jpg" alt="cat-img" />
								<span>Macbook</span>
								<div class="cat-hover"></div>
							</a>
						</div>
					</div>
					<div class="item">						
						<div class="category-box">
							<a title="Gadgets" href="index.php?act=listsanpham">
								<img src="view/images/category/cat-img-1.jpg" alt="cat-img" />
								<span>Macbook</span>
								<div class="cat-hover"></div>
							</a>
						</div>
					</div>
					<div class="item">						
						<div class="category-box">
							<a title="Gadgets" href="index.php?act=listsanpham">
								<img src="view/images/category/cat-img-1.jpg" alt="cat-img" />
								<span>Macbook</span>
								<div class="cat-hover"></div>
							</a>
						</div>
					</div>
					<div class="item">						
						<div class="category-box">
							<a title="Gadgets" href="index.php?act=listsanpham">
								<img src="view/images/category/cat-img-1.jpg" alt="cat-img" />
								<span>Macbook</span>
								<div class="cat-hover"></div>
							</a>
						</div>
					</div> -->
					
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Category Section /- -->
	
	
	<!-- Feature Product -->
	<Section id="featured-products" class="featured-products bottom-shadow">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>DANH SÁCH SẢN PHẨM</h3>
			</div><!-- Section Header /- -->
			
			<div class="category-box-main product-box-main">
				
			<?php
			foreach ($spnew as $sp) {
				extract($sp);
				$linksp="index.php?act=chitietsp&&idsp=".$id;
                $hinh=$img_path.$img;
				echo '
					<div class="col-md-3 col-sm-6 col-xs-6 main-product">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="'.$hinh.'" alt="featured-img"/>
								<div class="product-box-inner">
									
									<a title="Add to cart" href="'.$linksp.'" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a title="Luxury Gadgets"  href="" class="product-title">'.$name.'</a>
						
						<span class="amount">'.$price.'vnđ;</span>
					</div>';

			}
			?>
				<!-- <div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div> -->
			</div>

			

		</div><!-- container /- -->

		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>TOP SẢN PHẨM HOT</h3>
			</div><!-- Section Header /- -->
			
			<div class="category-box-main product-box-main">
			<?php

            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp="index.php?act=chitietsp&&idsp=".$id;
                $img=$img_path.$img;
				
                echo '<div class="col-md-3 col-sm-6 col-xs-6 main-product ">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="'.$img.'" alt="featured-img"/>
								<div class="product-box-inner">
									
									<a title="Add to cart" href="'.$linksp.'" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a title="Luxury Gadgets"  href="" class="product-title">'.$name.'</a>
						
						<span class="amount">'.$price.'vnđ;</span>
					</div>';
			
            }
        	?>
			
				
				
           	
				
				<!-- <div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 main-product">
					<div class="category-box product-box">
						<div class="inner-product">
							<img src="view/images/featured/featured-2.jpg" alt="featured-img"/>
							<div class="product-box-inner">
								<ul>
									<li><a title="Eye" href="images/featured/featured-2.jpg"><i class="fa fa-eye"></i></a></li>
									<li><a title="Heart" href="javascript:;"><i class="fa fa-heart"></i></a></li>
								</ul>
								<a title="Add to cart" href="index.php?act=chitietsp" class="btn">add to cart</a>
							</div>
						</div>
					</div>
					<a title="Luxury Gadgets"  href="04_single_product.html" class="product-title">Luxury Gadgets</a>
					<ul class="star">
						<li>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						</li>
					</ul>
					<span class="amount">&dollar;19.99</span>
				</div> -->
			</div>
			</div>
		</div><!-- container /- -->
		
	</section>
	<!-- Feature Product /- -->
	
	<!-- Feature Product -->
	