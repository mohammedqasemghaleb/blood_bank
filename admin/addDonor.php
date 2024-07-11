<?php

session_start();

if (!isset($_SESSION['admin']))
    header('Location: login.php');

require_once '../include/connection.php';
require_once '../Auth/Users-Auth/php/selectMedical.php';
$id = $_SESSION['admin']['id'];
$stmt = $con->prepare("SELECT * FROM admin where id= '$id'");
if ($stmt->execute()) {
    $admin = $stmt->fetch(PDO::FETCH_OBJ);
}

?>


<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>البروفايل</title>
     <link rel="stylesheet" href="css/all.min.css" />
     <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" /> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

</head>

<body dir="rtl">
    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">
                <span style="text-align: center; margin-right: 5px; font-size: 16px;">منصــــة
                    وريــــ&hearts;ــــد</span>
            </h3>
            <ul>
                <li>
                    <a id="donor" class="active d-flex align-center fs-14 c-black rad-6 p-10" href="index.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>المتبرعين</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="index.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span id="medical">الجهات الصحية</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="addDonor.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span id="medical">إضافة متبرع</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="addMedical.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span id="medical"> إضافة جهة صحية</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.php">
                        <i class="fa-solid fa-gear fa-fw"></i>
                        <span>الإعدادات</span>
                    </a>
                </li>
            </ul>
       
        </div>
        <div class="content w-full">
            <h1 class="p-relative">الإعدادات</h1>
            <div class="settings-page m-20">
                <!-- Start Settings Box -->
                <div class="bg-white rad-10" style="padding: 25px;">
                    <h2 class="mt-0 mb-10">
                        <span style="text-align: center; margin-right: 5px; font-size: 16px;"> بيانات منصــــة
                            وريــــ&hearts;ــــد</span>
                    </h2>
                    <div class="col-lg-6" style="box-shadow: 0px 0px 15px -4px #938e8e; padding: 15px 18px ; border-radius: 8px;">
                    <form action="php/addDonor.php" method="post">
                        <div class="col-md-12 mb-3">
                            <label for="validationServerUsername">إسم المستخدم</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" name="name" class="form-control" id="validationServerUsername" value="" aria-describedby="inputGroupPrepend3">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3" dir="ltr">
                            <label for="validationServerUsername">كلمة المرور</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">###</span>
                                </div>
                                <input type="password" name="password" class="form-control" id="validationServerUsername" value="" aria-describedby="inputGroupPrepend3">
                                <div class="invalid-feedback text-right">
                                    الرجاء كتابة إسم المستخدم الصحيح
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3" dir="ltr">
                            <label for="validationServerUsername">البريد الإلكتروني</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">example@.com</span>
                                </div>
                                <input type="email" name="email"  class="form-control " id="validationServerUsername" value="" aria-describedby="inputGroupPrepend3" >
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3" dir="ltr">
                                <label for="validationServerUsername">رقم الهاتف</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3">+966</span>
                                    </div>
                                    <input type="phone" name="phone" class="form-control is-invalid" id="validationServerUsername" value="" aria-describedby="inputGroupPrepend3">
                                    
                                </div>
                            </div>
                            <!-- <div class="col-md-6 mb-3" dir="ltr">
                                <label for="validationServerUsername">تاريخ ميلادك</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3" value="<?php echo $donor->age ?>">
                                </div>
                            </div> -->

                            <div class="col-md-6 mb-3" dir="ltr">
                                <label for="medical">جهة التبرع</label>
                                
                                <select class="form-control form-control-file" name="medical" id="medical">
                                    <option >إختار جهة التبرع</option>
                                    <?php

                                    foreach ($medicals as $medical) {
                                        echo '<option value="' . $medical->id . '">' . $medical->name . '</option>
												';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-7">
                               
                                <label for="validationServer04">فصيلة دمك</label>
                                <select class="form-control is-valid" id="bloodType" name="bloodType" required>
                                    <option >إختار فصيلة الدم</option>
                                    <option value="O+">O+</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                </select>
                                <div class="valid-feedback text-right">
                                    الرجاء إختار فصيلة دمك الصحيحة
                                </div>
                            </div>
                            <div class="col-5">
                                <button type="submit" name="addDonor" class="btn btn-danger w-100 mt-2" style="background-color: #ad0101;">حفظ </button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>

                <!-- End Settings Box -->
            </div>
        </div>
    </div>

</body>

</html>