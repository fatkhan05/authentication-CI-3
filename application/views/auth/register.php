<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
	<style>
		.custom-file-inputs,
		.custom-file-inputs::after,
		.custom-file-inputs::before {
			/* Sembunyikan teks placeholder default */
			color: transparent;
		}
		.custom-file-inputs::-webkit-file-upload-button {
		visibility: hidden; /* Sembunyikan tombol upload bawaan pada Chrome */
		}

		.custom-file-inputs::before {
			content: 'Choose image'; /* Teks yang akan ditampilkan sebelum tombol */
			display: inline-block; /* Atur tampilan agar sejajar */
			background-color: #007bff; /* Warna latar belakang tombol */
			color: #fff; /* Warna teks tombol */
			border: none; /* Hapus border */
			border-radius: .25rem; /* Atur border-radius */
			padding: .3205rem .75rem; /* Atur padding */;
			cursor: pointer; /* Ubah kursor saat diarahkan ke tombol */
			outline: none; /* Hapus outline saat tombol di-fokuskan */
			font-size: 0.740rem;
			padding-bottom: .100rem;
		}

		.custom-file-inputs:hover::before {
		background-color: #0056b3; /* Ganti warna latar belakang saat dihover */
		}

		.custom-file-inputs:focus::before {
		box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25); /* Tambahkan shadow saat input di-fokuskan */
		}

	</style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
					<!-- https://img.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37328.jpg -->
                    <div class="col-lg-5 d-none d-lg-block"><img src="https://img.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37328.jpg" width="460" height="500" alt=""></div> 
                    <div class="col-lg-7">
                        <div class="p-5 mt-5 ms-2">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
									<div class="col-sm-6">
										<div class="form-group">
                                            <input type="file" class="form-control form-control-user custom-file-inputs"
                                                id="input_foto" placeholder="Input Photo">
                                        </div>
									</div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="<?php echo site_url('../') ?>">Already have an account? Login!</a>
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

</body>

</html>
