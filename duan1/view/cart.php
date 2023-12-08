<!doctype html>
<!--
**********************************************************************************************************
    Copyright (c) 2022 Webstrot Technology 
********************************************************************************************************** -->
<!-- 
Template Name: Luxury Shop Ecommerce HTML Template
Version: 1.0.0
Author: webstrot
Website: http://webstrot.com/
Purchase: http://themeforest.net/user/webstrot  -->

<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""> <!--<![endif]-->

<!-- Mirrored from webstrot.com/html/luxuryshop/06_Luxury_Gadgets/06_shopping_cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 14:25:14 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>Luxury Shop Ecommerce HTML Template</title>
		
	<link rel="shortcut icon" href="images/favicon.png">
    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="libraries/fuelux/jquery-ui.min.css">
    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="libraries/flexslider/flexslider.css" rel="stylesheet" /> <!-- flexslider -->
	<link href="libraries/magnific-popup.css" rel="stylesheet"/> <!-- Light Box -->
    <link href="css/components.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
	<link id="color" href="css/color-schemes/default.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,400italic,300italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>	
    
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="load-position">
			<div class="logo"><img src="images/logo.png" alt="logo"></div>
			<h6>Please wait, loading...</h6>
			<div class="loading">
				<div class="loading-line"></div>
				<div class="loading-break loading-dot-1"></div>
				<div class="loading-break loading-dot-2"></div>
				<div class="loading-break loading-dot-3"></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	

	
	<a id="top"></a>
	

	
	<!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="index.html">TRANG CHỦ</a></li>
				<li class="active">GIỎ HÀNG</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.html">QUAY LẠI TRANG CHỦ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>GIỎ HÀNG</h3>

		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard shopping-cart shopping-product-table">
		<!-- container -->
		<div class="container">
			<!-- Shopping-cart-table -->
			<div class="shopping-cart-table bottom-shadow">
				<table class="shop_table cart">
					<thead>
						<tr>
							<th class="product-name">Ảnh</th>
							<th class="product-description">Tên</th>
							<th class="product-brand">Thương hiệu</th>
							<th class="product-color">Màu</th>							
							<!-- <th class="product-size">Size</th> -->
							<th class="blank-space"></th>
							<th class="product-price">Giá</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng tiền</th>
							<th class="product-change">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="javascript:;"><img src="images/summary/summary-1.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="javascript:;">
									<b>Acer Nitro 5 Tiger</b>
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><b>Acer</b></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<!-- <td data-title="Size" class="product-size">
								<span class="choose-size">xs</span>
							</td> -->
							<td data-title="" class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<span>1</span>
							</td>
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Trash Icon" href="javascript:;"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>	
						
						<!-- <tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="javascript:;"><img src="images/summary/summary-2.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="javascript:;">
									<b>Acer Nitro 5 Tiger</b>
						
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><b>Acer</b></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">L</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<span>1</span>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="javascript:;"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="javascript:;"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="javascript:;"><img src="images/summary/summary-3.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a href="javascript:;">
									<b>Acer Nitro 5 Tiger</b>
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><b>Acer</b></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size color3">M</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<span>1</span>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="javascript:;"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="javascript:;"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="javascript:;"><img src="images/summary/summary-4.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="javascript:;">
									<b>Acer Nitro 5 Tiger</b>
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><b>Acer</b></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">S</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<span>1</span>
							</td>
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="javascript:;"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="javascript:;"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="javascript:;"><img src="images/summary/summary-5.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="javascript:;">
									<b>Acer Nitro 5 Tiger</b>
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><b>Acer</b></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color2"></span>
							</td>							
							<td data-title="Size" class="product-size">
								
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<span>1</span>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="javascript:;"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="javascript:;"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr> -->
					</tbody>
				</table>				
				<div class="shopping-cart-footer">
					<a title="Continue Shopping" href="index.php" class="btn btn-default">Tiếp tục mua sắm</a>
					<a title="Continue Shopping" href="#" class="btn btn-default">Mua hàng</a>
					Tổng thanh toán:
					<td data-title="Price" class="product-price">
						<span class="amount">&dollar; 19.99</span>
					</td>
				</div>
			</div>
		</div>
	</div>



	