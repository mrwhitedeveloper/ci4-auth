<div class="container hold-transition login-page">
	<style>
.login-page
{
	background-color: #F4F6F9;
}
</style>
<div class="login-box pt-5">
	<!-- /.login-logo -->
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<b class="text-primary">Forgot Password</b>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
                            <?php echo \Config\Services::validation()->listErrors(); ?>
				</div>
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
			<form id="norm_form" action="<?php echo base_url(); ?>forgot-password" method="post">
<input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />	
	<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Mobile No." id="mobile" name="mobile" required/>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-phone"/>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="icheck-primary">
							<label for="remember">
								<a href="<?php echo base_url() ?>login">Login</a>
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-8">
						<input type="submit" class="btn btn-primary btn-block btn-flat" value="Reset Password"/>
					</div>
					<!-- /.col  -->
				</div>
			</form>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>	
	<script type="text/javascript">
$(document).ready(function() {

    validateData("#norm_form", {
        telephone:'required',
        email:'required',
    });

});
</script>