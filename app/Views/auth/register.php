<div class="container hold-transition login-page">
	<style>
.login-page
{
	background-color: #F4F6F9;
}
</style>
	<div class="login-box">
		<div class="login-logo">
			<h1>Register</h1>
		</div>
		             <?php
if (session()->has('message')) {
    ?>
		<div class="alert <?=session()->getFlashdata('alert-class')?>">
                        <?=session()->getFlashdata('message')?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
                    <?php
}
?>
<?php echo \Config\Services::validation()->listErrors(); ?>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Register a new membership</p>
				<form action="<?=base_url();?>register" method="post">
					<input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>"/>
					<div class="input-group mb-3">
						<input name="full_name" type="text" class="form-control" placeholder="Full name">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"/>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input name="mobile" type="text" class="form-control" placeholder="Mobile No.">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-phone"/>
									</div>
								</div>
							</div>
						<div class="input-group mb-3">
							<input name="email" type="email" class="form-control" placeholder="Email">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope"/>
									</div>
								</div>
							</div>
							<div class="input-group mb-3">
								<input name="password" type="password" class="form-control" placeholder="Password">
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-lock"/>
										</div>
									</div>
								</div>
								<div class="input-group mb-3">
									<input  name="confirm_password" type="password" class="form-control" placeholder="Retype password">
										<div class="input-group-append">
											<div class="input-group-text">
												<span class="fas fa-lock"/>
											</div>
										</div>
									</div>
									<div class="social-auth-links  mb-3">
										<input type="submit" class="btn  btn-primary" value="Register ">
           &nbsp;&nbsp;&nbsp;
								
									<a href="<?=base_url();?>/login" class="text-center">Login</a>
										</div>
									</form>
								</div>
								<!-- /.login-card-body -->
							</div>
						</div>
						<!-- /.login-box -->
					</div>