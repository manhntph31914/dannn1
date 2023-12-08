
	<a id="top"></a>
	
	
	<!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="index.php">TRANG CHỦ</a></li>
				<li class="active">Cập nhật tài khoản</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.php">TRỞ VỀ TRANG CHỦ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Cập nhật tài khoản</h3>
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<!-- contact-form-details -->
	<div class="contact-form-details">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6"><!-- User Form -->
					<div class="section-header">
						<h3>THÔNG TIN NGƯỜI DÙNG </h3>
					</div><!-- Section Header /- -->
					<div class="contact-form">
					<?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
						<form class="form-horizontal" action="index.php?act=edit_taikhoan" method="post">
							<div class="form-group">
								
                               
								<label for="firstname" class="col-md-4"  value="<?=$user?>">TÊN</label>
								
								<div class="col-md-8">
									<input type="text" class="form-control" id="firstname" name="name" placeholder="NHẬP TÊN CỦA BẠN" required value="<?=$user?>" />
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">EMAIL</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="txt_email" name="email" placeholder="NHẬP EMAIL" required value="<?=$email?>"/>
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">ĐỊA CHỈ</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="txt_email" name="address" placeholder="NHẬP ĐỊA CHỈ" required value="<?=$address?>"/>
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">SỐ ĐIỆN THOẠI</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="txt_email" name="tel" placeholder="NHẬP SDT" required value="<?=$tel?>"/>
								</div>
							</div>
							<div class="form-group">
								<label  class="col-md-4">TÀI KHOẢN</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="txt_email" name="user" placeholder="NHẬP TÀI KHOẢN" required value="<?=$user?>"/>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-4">MẬT KHẨU</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="password" name="pass" placeholder="*****" required value="<?=$pass?>"/>
								</div>
							</div>
							<div class="drop-line bottom-shadow"></div>
							 <div class="form-group">
								 <input type="hidden" name="idnd" value="<?=$idnd?>">
								<input type="submit" value="Cập nhật" class="btn btn-default  pull-right" name="capnhat">
							</div>
						</form>
						<h2 class="thongbao" style=color:red;>
							<?php
								if(isset($thongbao)&&($thongbao!="")){
									echo "update sucsses";
								}
							?>     
                    	</h2>   
					</div>
				</div><!-- User Form /- -->
				
				<div class="col-md-6 col-sm-6"> 
					<!-- Section Header -->
					<div class="section-header">
						<h3>NGƯỜI DÙNG ĐÃ ĐĂNG KÍ</h3>
					</div><!-- Section Header /- -->
					<div class="contact-details register-user"> 
						<div class="register-user-banner">
							<img src="view/images/register/register-user.png" alt="register-user">
							<h2>100% KHÁCH HÀNG HÀI LÒNG</h2>
						</div>						
						<h3>Nếu bạn có tài khoản, hãy đăng nhập trực tiếp</h3>
						<p>Aliquam placerat, mi non interdum volutpat, nisi magna euismod arcu, at congue augue ex nec lectus</p>
						<div class="drop-line bottom-shadow"></div>
						<a title="sign in" href="index.php?act=dangnhap" class="btn btn-default">ĐĂNG NHẬP</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Contact Form Details /- -->
	
	