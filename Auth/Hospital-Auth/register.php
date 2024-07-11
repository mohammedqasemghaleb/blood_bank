<?php



require_once '../../include/auth_medical.php';

?>

<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>إنشاء حساب</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

</head>

<body dir="rtl" class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card fat mt-5 ">
						<div class="card-body">
							<div class="brand">
								<img src="img/Logo-Blood-Banck.png" alt="logo">
							</div>
							<h4 class="text-center mb-4" style="color: #ad0101 ; font-weight: bolder;">مرحبا بك في وريـــــ  &hearts;  ـــــد</h4>
							<h5 class="card-title">إنشاء حساب جهة صحية</h5>
							<h7 class="card-title "><?php if (isset($_SESSION['message'])) echo $_SESSION['message'] ?></h7>
							<form method="POST" action="php/register.php" class="my-login-validation" novalidate=""
								style="    text-align: right;">

								<div class="form-group">
									<label for="name">إسم الجهة الخاصة</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										ما اسمك؟
									</div>
								</div>

								<div class="form-group">
									<label for="email">عنوان البريد الإلكتروني</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										بريدك الالكتروني مطلوب أو خاطئ
									</div>
								</div>

								<div class="form-group">
									<label for="password">كلمة المرور</label>
									<input id="password" type="password" class="form-control" name="password" required
										data-eye>
									<div class="invalid-feedback">
										كلمة المرور مطلوبة
									</div>
								</div>

								<div class="form-group">
									<label for="phone">رقم الجهة الخاصة</label>
									<input id="phone" type="text" class="form-control" name="phone" required autofocus>
									<div class="invalid-feedback">
										كم هو رقمك؟
									</div>
								</div>

								<!-- Start Get User Location Map -->
								<div class="form-group">
									<div class="text-center">
										<button type="button" class="btn btn-outline-danger" data-toggle="modal"
											data-target="#modalRegular">حدد موقع بواسطة خرائط جوجل</button>
									</div>
									<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog"
										aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-body mb-0 p-0">
													<div id="map-container-google-16"
														class="z-depth-1-half map-container-9" style="height: 400px">
														<iframe
															src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
															frameborder="0" style="border:0" allowfullscreen></iframe>
													</div>
												</div>
												<div class="modal-footer justify-content-center">
													<button type="button" class="btn btn-info btn-md ml-2">حفظ الموقع<i
															class="fas fa-map-marker-alt ml-1"></i></button>
													<button type="button" class="btn btn-outline-info btn-md"
														data-dismiss="modal">إغلاق <i
															class="fas fa-times ml-1"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Get User Location Map -->

								<h5 style="text-align: center;">أو</h5>
								<!-- Start Get User Location -->
								<div class="form-group">
									<div class="container-location">
										<img src="img/icons8-location.gif" />
										<div id="location-details">انقر فوق الزر "للحصول على موقعك"</div>
										<input type="text" name="latitude" id="latitude" value="" hidden required>
										<input type="text" name="longitude" id="longitude" value="" hidden required>
										<button id="get-location">حدد موقعك</button>
									</div>
								</div>
								<!-- End Get User Location -->

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input"
											required="">
										<label for="agree" class="custom-control-label">أنا أوافق على <a
												href="#">الأحكام والشروط</a></label>
										<div class="invalid-feedback">
											يجب أن توافق على الشروط والأحكام الخاصة بنا
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="register" class="btn btn-danger btn-block">
										إنشاء الحساب
									</button>
								</div>

								<div class="mt-4 text-center">
									هل لديك حساب? <a href="index.php">تسجيل الدخول</a>
									<span>أو</span>
									<a class="mr-1" href="../Users-Auth/index.php">التسجيل كامتبرع</a>
								</div>
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="js/my-login.js"></script>
</body>

</html>