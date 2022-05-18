<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Pencaker Login </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets_admin/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="assets_admin/css/style.css">
	<link rel="stylesheet" href="assets_admin/css/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url('images/login.jpg')">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">

                        @if (session()->has('success'))
                        <div class="box-body pad res-tb-block">
                            <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{session('success')}}
                            </div>
                        </div>
                      @endif

                        @if (session()->has('loginError'))
                        <div class="box-body pad res-tb-block">
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{session('loginError')}}
                            </div>
                        </div>
                      @endif



						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to WebkitX.</p>
							</div>
							<div class="p-40">
								<form action="/login" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="text" name="email" id="email" class="form-control ps-15 bg-transparent @error('email') is-invalid
                                            @enderror" autofocus required value="{{old('email')}}" placeholder="Email">
										</div>
                                        @error('email')
                                            <div class="form-control-feedback">{{ $message}}</div>
                                        @enderror
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" name="password" id="password" autofocus required placeholder="Password">
										</div>
									</div>
									  <div class="row">

										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Sudah punya akun? <a href="register" class="text-warning ms-5">Register</a></p>
								</div>
							</div>
						</div>
						<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="asets_admin/js/vendors.min.js"></script>
	<script src="asets_admin/js/pages/chat-popup.js"></script>
    <script src="asets_admin/assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
