<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-6 d-none d-lg-block" id="login-image"><img src="https://img.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37330.jpg" width="460" height="480" alt=""></div>
                            <div class="col-lg-6">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Login</h1>
										</div>
										<form class="login-form">
											<div class="form-group">
												<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?> form-control form-control-user"
													id="username" aria-describedby="emailHelp" value="<?= set_value('username') ?>" required
													placeholder="Enter Email Address...">
													<div class="invalid-feedback">
														<?= form_error('username') ?>
													</div>
											</div>
											<div class="form-group">
												<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?> form-control form-control-user"
													id="password" placeholder="Password" value="<?= set_value('password') ?>" required>
													<div class="invalid-feedback">
														<?= form_error('password') ?>
													</div>
											</div>
											<div class="form-group">
												<div class="custom-control custom-checkbox small">
													<input type="checkbox" class="custom-control-input" id="customCheck">
													<label class="custom-control-label" for="customCheck">Remember
														Me</label>
												</div>
											</div>
											<button type="button" onclick="login()" class="btn button btn-primary btn-user btn-block" value="Login">Login</button>
											<!-- <hr>
											<a href="index.html" class="btn btn-google btn-user btn-block">
												<i class="fab fa-google fa-fw"></i> Login with Google
											</a>
											<a href="index.html" class="btn btn-facebook btn-user btn-block">
												<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
											</a> -->
										</form>
										<hr>
										<div class="text-center">
											<a class="small" href="<?php echo site_url('forgot-password') ?>">Forgot Password?</a>
										</div>
										<div class="text-center">
											<a class="small" href="<?php echo site_url('Welcome/register') ?>">Create an Account!</a>
										</div>
									</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script type="text/javascript">
			function login(){
				// console.log('login');
				var data = new FormData($('.login-form')[0]);
				console.log(data);
				data.append('_token', '{{ csrf_token() }}');

				$.ajax({
						url: "<?php echo site_url('LoginController/login'); ?>",
						type: "post",
						data: data,
						processData: false,
						contentType: false,
				}).done(function(result) {
						if (result.status === 'success') {
								Swal.fire({
										icon: 'success',
										title: 'Selamat Datang !',
										text: result.message,
										timer: 1500,
										confirmButtonColor: '#1A4237',
								}).then(function() {
										window.location.href = "<?php echo site_url('HomeController/index'); ?>";
								});
						} else if (result.status === 'error') {
								Swal.fire({
										icon: 'warning',
										title: 'Whoops',
										text: result.message,
										confirmButtonColor: '#1A4237',
								});
						}
				}).fail(function(xhr, status, error, result) {
						Swal.fire({
								icon: 'error',
								title: 'Error',
								text: 'Maaf!, Terjadi Kesalahan, Silahkan Ulangi Kembali',
								// timer: 1500,
								showConfirmButton: false,
						});
				});
			}
		</script>

</body>

</html>
