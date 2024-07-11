<?php


require_once '../include/auth_user.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>تسجيل الدخول</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Auth/Users-Auth/css/my-login.css">
</head>
<!-- 262534 -->
<body dir="rtl" class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">
							<div class="brand">
								<img src="img/Logo-Blood-Banck.png" alt="logo">
							</div>
							<h4 class="text-center mb-4" style="color: #ad0101 ; font-weight: bolder;">مرحبا بك في وريـــــ  &hearts;  ـــــد</h4>
							<h5 class="card-title">تسجيل دخول المدير</h5>
							<h7 class="card-title "><?php if (isset($_SESSION['message'])) echo $_SESSION['message'] ?></h7>
							<form method="POST" action="php/login.php" class="my-login-validation text-right" novalidate="">
								<div class="form-group">
									<label for="email">عنوان الإيميل</label>
									<input id="email" type="email" class="form-control" name="email" value="" required
										autofocus>
									<div class="invalid-feedback">
										بريدك الالكتروني خاطئ
									</div>
								</div>

								<div class="form-group">
									<label for="password">كلمة المرور
										<a href="forgot.html" class="float-left">
											نسيت كلمة المرور?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required
										data-eye>
									<div class="invalid-feedback">
										كلمة المرور غير متطابقة
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember"
											class="custom-control-input">
										<label for="remember" class="custom-control-label">قم بتذكيري</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="login" class="btn btn-block" style="background-color: #ad0101; color: #FFF;">
										تسجيل الدخول
									</button>
								</div>
								<!-- <div class="mt-4 text-center">
									ليس لديك حساب? <a href="register.php">إنشاء حسابك</a>
									<span>أو</span>
									<a class="mr-1" href="../Hospital-Auth/register.php">إنشاء حساب جهة صحية </a>
								</div> -->
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2023 &mdash; Your Blood Bank
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="js/my-login.js"></script>
</body>

</html>