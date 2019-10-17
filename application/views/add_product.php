<!DOCTYPE html>
<html lang="zxx" class="no-js">
<body>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Add Product</h1>
					<nav class="d-flex align-items-center">
						<a href="<?php echo site_url('welcome/index');?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?php echo site_url('welcome/add_product');?>">Add Product</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container"><br>
			<div class="row">
				<div class="col-lg-9">
					<form class="row contact_form" action="<?php echo site_url('welcome/add_product');?>" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="price" placeholder="Enter price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter price'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea type="text" class="form-control" name="description" placeholder="Enter Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" class="primary-btn" name="submit" value="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
</body>
</html>