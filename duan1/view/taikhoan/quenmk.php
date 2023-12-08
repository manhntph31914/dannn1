
					
	<a id="top"></a>
	

	<!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="index.php">TRANG CHỦ</a></li>
				<li class="active">QUÊN MẬT KHẨU</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.php">QUAY TRỞ VỀ TRANG CHỦ</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>QUÊN MẬT KHẨU</h3>

		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard">
		<!-- container -->
		<div class="container">
			<!-- contact-form-details -->
			<div class="contact-form-details row">
				<!-- col-md-6 -->
				<div class="col-md-6 col-sm-6">
					<div class="section-header">
						<h3>QUÊN MẬT KHẨU</h3>
					</div><!-- Section Header Over -->
					<div class="contact-form bottom-shadow">
						<form class="form-horizontal login-page" action="index.php?act=quenmk" method="post">
							<div class="form-group">
								<label class="col-md-4">EMAIL</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="txt_email" placeholder="NHẬP EMAIL" name="email" required />
								</div>
							</div>
							
							<div class="drop-line bottom-shadow"></div>
							<div class="form-group">
								
								<input type="submit" value="GỬI" name="guiemail" class="btn btn-default  pull-right">
							</div>
						</form>
                        <h2 class="thongbao" style=color:red;>
                            <?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                            ?>     
                        </h2> 
					</div>
				</div><!-- col-md-6 /- -->
				<!-- col-md-6 -->
				<div class="col-md-6 col-sm-6"> 
					<div class="section-header">
						<h3>NGƯỜI DÙNG MỚI</h3>
					</div><!-- Section Header Over -->
					<div class="contact-details new-user-register register-user bottom-shadow"> 
						<h3>ĐĂNG KÝ NGAY</h3>
						<p>Aliquam placerat, mi non interdum volutpat, nisi magna euismod arcu, at congue augue ex nec lectus. Phasellus fermentum libero id neque rhoncus, sed posuere sem dictum. In nec fermentum ante. Morbi et massa arcu. Suspendisse tempus mattis viverra. </p>
						<div class="drop-line bottom-shadow"></div>
						<a title="Continue" href="index.php?act=dangky" class="btn btn-next btn-fill btn-warning btn-wd btn-sm">ĐĂNG KÝ</a>
					</div>
				</div><!-- col-md-6 /- -->	
			</div><!-- Contact Form details /- -->
		</div>
	</div>
			