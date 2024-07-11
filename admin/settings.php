<?php

session_start();

if (!isset($_SESSION['admin']))
  header('Location: login.php');

require_once '../include/connection.php';
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
          <form action="./php/updateAdmin.php" method="post">
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="first">إسم المستخدم</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" type="text" name="name" id="first" placeholder="waeridPlatform" value="<?php echo $admin->name ?>" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-5" for="last">كلمة المرور</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="password" id="last" type="text" placeholder="waerid#5252" value="<?php echo $admin->password ?>" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-5" for="email">البريد الإلكتروني</label>
              <input class="b-none border-ccc p-10 rad-6 w-full" name="email" id="email" type="email" placeholder="waerid@gmail.com" value="<?php echo $admin->email ?>" />
            </div>
            <div style="display: flex; justify-content: flex-end;">
              <button type="submit" name="updateAdmin" class="c-white bg-green" style="width: 40%; border-radius: 4px; padding: 6px;">حفظ التعديل</button>
            </div>
        </div>
        </form>
        <!-- End Settings Box -->
      </div>
    </div>
  </div>
</body>

</html>