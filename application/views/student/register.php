<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<div class="brand">
					<img src="<?= base_url('assets/login'); ?>/img/logo_mahasiswa.png" alt="bootstrap 4 login page">
				</div>
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title" style="text-align:center ;">Registration Student</h4>
						<form method="POST" class="my-login-validation" novalidate="" action="<?= base_url('student/register/registration'); ?>">
							<div class="form-group">
								<label for="nim">NIM</label>
								<input id="nim" type="text" class="form-control" name="nim" value="<?= set_value('nim') ?>" required autofocus >
								<div class="invalid-feedback">
									What's your nim?
								</div>
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" type="text" class="form-control" name="nama" value="<?= set_value('name') ?>" required autofocus >
								<div class="invalid-feedback">
									What's your name?
								</div>
							</div>

							<div class="form-group">
								<label for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email') ?>" required>
								<div class="invalid-feedback">
									Your email is invalid
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" type="password" class="form-control" name="password" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<div class="custom-checkbox custom-control">
									<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
									<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
									<div class="invalid-feedback">
										You must agree with our Terms and Conditions
									</div>
								</div>
							</div>

							<div class="form-group m-0">
								<button type="submit" class="btn btn-primary btn-block btn_regis">
									Register
								</button>
							</div>
							
							<div class="mt-4 text-center">
								Already have an account? <a href="<?= base_url('student/login'); ?>">Login</a>
							</div>
						</form>
						
					</div>
				</div>
				<div class="footer">
					Copyright &copy; 2017 &mdash; E-Job Vacancy
				</div>
			</div>
		</div>
	</div>
	
</section>
