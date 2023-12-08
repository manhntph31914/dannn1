
<?php
    extract($onesp);
	
?>
<link rel="stylesheet" href="view/css/cart.css">
<link rel="stylesheet" href="view/css/style.css">
<link rel="stylesheet" href="view/css.css">
<?php?>

	<a id="top"></a>

	<!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="index.php">TRANG CHỦ</a></li>
				<li class="active">CHI TIẾT SẢN PHẨM <?=$name?></li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.php">QUAY LẠI TRANG CHỦ</a>
			</div>
		</div>
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<!-- Single Product -->
	<div id="single-product" class="single-product">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- col-md-7 -->
				<div class="col-md-7">
					<div class="large-product">
						
						<div id="about-slider" class="flexslider col-md-9 col-sm-9 col-xs-9 product-slider">
						
							<?php
								$img=$img_path.$img;
								echo '
								<li>
									<img class="magniflier" src="'.$img.'" alt="product-thumb" />
								</li>';
							
                			?>
								
							
						</div>
					</div>
					<!-- Section Header /- -->
					<div class="page-header ow-bottom-padding categories">
						<h3>MỘT SỐ SẢN PHẨM TƯƠNG TỰ</h3>
					</div><!-- Section Header /- -->
					<div class="category-box-main product-box-main">
					<?php
                        foreach ($sp_cung_loai as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $linksp="index.php?act=chitietsp&&idsp=".$id;
                            $img=$img_path.$img;
                            echo '
							<div class="col-md-6 col-sm-6 col-xs-6 main-product">
							<div class="category-box product-box">
								<div class="inner-product">
									<img src="'.$img.'" alt="featured-img"/>
									<div class="product-box-inner">
										
										<a title="Add to cart" href="'.$linksp.'" class="btn">add to cart</a>
									</div>
								</div>
							</div>
							<a title="Luxury Gadgets" href="'.$linksp.'" class="product-title">'.$name.'</a>
		
							<span class="amount"><del>1000000000<u>đ</u></del>'.$price.'<u>vnđ</u></span>
						</div>';
                        }
                    ?> 
						
						<div class="drop-line bottom-shadow"></div>
					</div>
				</div><!-- col-md-7 /- -->
				
				<!-- col-md-5 -->
				<div class="col-md-5 single-product-sidebar">
					
					<div class="page-header">
						<h3><?=$name?></h3>
					</div>
				
				
					<h4>Thương hiệu</h4>
					<ul class="single-side-widget top-social ow-left-padding">
						
						<li><?=$tendm?></li>		
				
					</ul>

					<h4>Giá</h4>
					<ul class="single-side-widget top-social ow-left-padding">
					
						<li><?=$price?><u>đ</u></li>
						

						
					</ul>
					<h4>Mô tả</h4>
					<ul class="single-side-widget top-social ow-left-padding">
					
						<li><?=$mota?></li>
						
					</ul>
					<?php if(isset($_SESSION['user'])) {    echo "Chào mừng $user! Bạn có thể đặt hàng ở đây.";?>	
					<div>
                       <a href=""><button data-id="<?= $id ?>" class="btnCart" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)">Thêm vào giỏ hàng</button></a> 
                    </div>
					<?php } else {
						echo "Bạn cần đăng nhập để quá trình mua hàng không bị gián đoạn!";
						
						
						exit();
					} 
					?>
					<br>
					<div>
						<a href="index.php?act=order"><button class="btnCart1">Mua hàng</button></a>
						
					</div>

				

				
				</div>
				<!-- col-md-5 /- -->
			</div>
		</div><!-- Container /- -->
	</div>
	<!-- Single Product /- -->

	
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	
	<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
		});
	</script>
	<div class="row mb" align="center">
		<div class="boxtrai mr">
			<div class="row" id="binhluan">   
				<?php
					include "binhluan/binhluanform.php";
				?>              
			</div>
		</div>
	</div>
	