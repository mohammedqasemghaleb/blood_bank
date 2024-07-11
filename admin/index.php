<?php 
session_start();

if(!isset($_SESSION['admin']))
header('Location: login.php');



require_once '../include/connection.php';

$stmt=$con->prepare("SELECT count(id) c FROM medical_center ");
if($stmt->execute()){
    $count_m=$stmt->fetch(PDO::FETCH_OBJ);    
}


$stmt=$con->prepare("SELECT count(id) c FROM donors ");
if($stmt->execute()){
    $count_d=$stmt->fetch(PDO::FETCH_OBJ);    
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الرئيسية</title>
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
          <a id="donor" class="active d-flex align-center fs-14 c-black rad-6 p-10" href="#" >
            <i class="fa-regular fa-chart-bar fa-fw"></i>
            <span >المتبرعين</span>
          </a>
        </li>
        <li>
          <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="#">
            <i class="fa-regular fa-chart-bar fa-fw"></i>
            <span id="medical">الجهات الصحية</span>
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
      <div class="" style="background-color: #fff; margin-bottom:15px ; padding: 1px 10px;">
        <h1 class="p-relative">الرئيسية</h1>
      </div>
      <div class="wrapper gap-20">
        <!-- Start Welcome Widget -->
        <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
          <div class="intro p-20 d-flex space-between bg-eee">
            <div>
              <h2 class="m-0">مرحــــبـــــا</h2>
              <p class="c-grey mt-5"><span style="text-align: center; margin-right: 5px; font-size: 16px;"><?php echo $_SESSION['admin']['name'] ?></span></p>
            </div>
            <img class="hide-mobile" src="imgs/welcome.png" alt="" />
          </div>
          <div class="avatar d-flex center-flex bg-blue c-white" style="font-size: 40px;">&hearts;</div>
          <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
            <div>عدد المتبرعين <span class="d-block c-grey fs-14 mt-10"><?php echo $count_d->c;?></span></div>
            <div>عدد الجهات الصحية <span class="d-block c-grey fs-14 mt-10"><?php echo $count_m->c; ?></span></div>
          </div>
        </div>
        <!-- End Welcome Widget -->
        <!-- Start Projects Table -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20" id="title">المتبرعين</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>الإسم</td>
                  <td>رقم الهاتف</td>
                  <td> الإيميل</td>
                 
                  <td>الحالة</td>
                </tr>
              </thead>
              <tbody id="t">
                <?php 
                
                 ?>
                
                
              </tbody>
            </table>
            <!-- <div class="">
              <nav aria-label="Page navigation example">
                  <ul class="d-flex center-flex gap-20 align-center w-fit" style="margin: 1px auto; padding: 5px 10px;">
                      <li class="">
                          <a class="c-blue fs-25 fw-bold" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                          </a>
                      </li>
                      <li class="bg-blue" style="padding: 0px 8px; border-radius: 4px;"><a class="c-white" href="#">1</a></li>
                      <li class="" style="padding: 0px 8px; border-radius: 4px;"><a class="c-blue" href="#">2</a></li>
                      <li class="" style="padding: 0px 8px; border-radius: 4px;"><a class="c-blue" href="#">3</a></li>
                      <li class="">
                          <a class="c-blue fs-25 fw-bold" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                          </a>
                      </li>
                  </ul>
              </nav>
          </div> -->
          </div>
        </div>
        <!-- End Projects Table -->
      </div>
    </div>



    <script src="./js/script.js"></script>
</body>

</html>