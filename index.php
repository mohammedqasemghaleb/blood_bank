<?php

session_start();


?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- website font Icons  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>الرئيسية</title>
</head>

<body dir="rtl">

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="" style="background-color: #ad0101;">
            <div class="container">
                <div class="media-nav d-flex justify-content-between align-items-center">
                    <div class="logos d-flex align-items-center">
                        <img src="imgs/Logo-Blood-Banck.png" alt="LOGO"
                            style="display:block; border-radius: 50%; width: 80px; height: 80px; background-color: #fff; padding: 5px; margin-top: 5px; margin-bottom: 5px;">
                        <span style="color: #fff; text-align: center; margin-right: 5px; font-size: 16px;">منصــــة
                            وريــــ&hearts;ــــد<br>
                            <b style="font-weight: bolder; font-size: 20px; letter-spacing: 3px;">WARID</b></span>
                    </div>
                    <div class="links-icons d-flex justify-content-center align-items-center">
                        <div class="links">
                            <a href="#"><i class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                            <a href="#"><i class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                            <a href="#"><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                            <a href="#"><i class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                        </div>
                        <div class="number" style="margin-right: 15px;">
                            <a href="" class="text-light">20 127 245 6884 +</a>
                        </div>

                    </div>
                    <div class="profile d-flex justify-content-between">
                        <div class="nav-item">
                            <a class="nav-link selected"
                                style="
                                display: flex;
                                align-items: center; justify-content: center;
                                border: 2px dotted #fff;
                                width: 50px; height: 50px; border-radius: 50%; background-color: #ccc; margin-right: 10px;"
                                href="profile.html">
                                <img src="imgs/avatar.svg" alt="Avatar" style="width: 40px; display:block;"></a>
                        </div>
                        <div class="name-users nav-item d-flex align-items-center justify-content-center mr-2">
                           
                                <?php

                                if (isset($_SESSION['user'])) {
                                    echo ' <a class="nav-link text-light " href="profileUser.php?donor='.$_SESSION['user']['id'].'&s=1"> '.$_SESSION['user']['name'].'  </a>';
                                } elseif (isset($_SESSION['medical'])) {
                                    echo ' <a class="nav-link text-light " href="profileMedical.php?medical='. $_SESSION['medical']['id'].'&s=1"> '. $_SESSION['medical']['name'].'  </a>';
                                }

                                ?>
                         
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2" style="border: none;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light flex-lg-row-reverse">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item" style="border: none;">
                        <a class="nav-link selected" href="index.html">الرئيسية</a>
                    </li>
                    <li class="nav-item" style="border: none;">
                        <a class="nav-link" href="About-us.html">ماذا عنا</a>
                    </li>
                    <li class="nav-item" style="border: none;">
                        <a class="nav-link" href="#">خدماتنا</a>
                    </li>
                    <li class="nav-item" style="border: none;">
                        <a class="nav-link" href="contact-us.html">تواصل معنا</a>
                    </li>
                    <?php
                    if(isset($_SESSION['user'])|| isset($_SESSION['medical']))
                    {
                        echo '  <li class="nav-item" style="border: none;">
                        <a class="nav-link" href="logout.php">تسجيل  خروج</a>
                    </li>';
                    }?>
                </ul>
                <?php 
                 
                
                    if(!isset($_SESSION['user'])&& !isset($_SESSION['medical']))
                    {
                      echo '  <a class="btn btn-danger" href = "Auth/Users-Auth/register.php">إنشاء حساب</a>
                      <a class="btn btn-success mr-2" href = "Auth/Users-Auth/index.php">تسجيل
                          الدخول</a>';
                    } 
                    
                    ?>

                
            </div>
        </nav>
    </section>
    <!-- Navbar 2 End -->

    <!-- Start Landing Page -->
    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info text-right">
                        <h1 style="color: #262534;">مـنـصـــــــة وريــــــــ&hearts;ـــــد</h1>
                        <h3 style="font-size: 16px; color: #262534;">
                            منصــــة وريــــــــد هي أول منصة متخصصة في مجال المتبرعين بالدم ومقرها
                            القصيم - بريدة ، تهدف إلى رفع مستوى الوعي بأهمية التبرع الطوعي بالدم، وكذلك تشجيع وتحفيز
                            المتبرعين الطوعيين بالدم، وتقديم المساندة والدعم لمرضى أمراض الدم.
                        </h3>
                        <h4 class="btn pb-1 pl-4 pr-4" style="width: 40%; background-color: #ad0101; color: #fff;">تبرع
                            الأن</h4>
                    </div>
                </div>
                <!-- Start Images Slider Button Click -->
                <!-- <div class="col-md-6">
                    <div class="containersImg">
                        <div class="image-container">
                            <img src="imgs/Blood-donation2.svg" id="content1" class="active">
                            <img src="imgs/Blood-donation.svg" id="content2">
                            <img src="imgs/Profile-details.svg" id="content3">
                            <img src="imgs/hospital-reception.png" id="content4">
                            <img src="imgs/healthy-man-donating-his-blood.png" id="content5">
                        </div>
                        <div class="dot-container">
                            <button onclick="dot(1)"></button>
                            <button onclick="dot(2)"></button>
                            <button onclick="dot(3)"></button>
                            <button onclick="dot(4)"></button>
                            <button onclick="dot(5)"></button>
                        </div>
                        <button id="prev" onclick="prev()"> &lt; </button>
                        <button id="next" onclick="next()"> &gt; </button>
                    </div>
                </div> -->
                <!-- End Images Slider Button Click -->

                <!-- ************************************************************* -->
                <!-- Start Image Slider Automatic -->
                 <div class="col-md-6 landingPage">
                </div> 
                <!-- End Image Slider Automatic -->
                <!-- ************************************************************* -->

            </div>
        </div>
    </section>
    <!-- End Landing Page -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>طلبات التبرع</h2>
            <hr class="line">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for=""></label>
                        <select class="form-control form-control" name="city" id="">
                            <option value="" disabled selected>إختار فصيلة الدم</option>
                            <option value="Alexandria">A+</option>
                            <option value="Cairo">O+</option>
                            <option value="Giza">A-</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for=""></label>
                        <select class="form-control form-control" name="city" id="">
                            <option value="" disabled selected>إختار الموقع</option>
                            <option value="Alexandria">الرياض</option>
                            <option value="Cairo">القصيم</option>
                            <option value="Giza">جدة</option>
                        </select>
                    </div>
                </div>

                <div class="search col-lg-2">
                    <button class="btn btn-danger">
                        <i class="fas fa-search" style="text-align: center;"></i>
                    </button>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-around align-items-center style-me">
                        <div class="col-lg-2">
                            <div class="type">
                                <h2>A+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h6>الإسم:</h6>
                            <h6>الجهة الصحية: مستشفى القصيم النموذجية</h6>
                            <h6>رقم الهاتف: 555-999-555-88</h6>
                            <h6>المدينة: القصيم</h6>
                            <h6>العمر: 16 سنة</h6>
                        </div>
                        <div class="col-lg-3 ">
                            <button onclick="window.location.href = 'donator.html';">تواصل</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-num ">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Requests End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-8">
                    <div class="foot-info " style="text-align: right;">
                        <div class="logos d-flex align-items-center">
                            <img src="imgs/Logo-Blood-Banck.png" alt="LOGO" style=" width: 120px; height: 120px;">
                            <span
                                style="color: #fff; text-align: center; margin-right: 5px; font-size: 16px; margin-top: 15px;">منصــــة
                                وريــــ&hearts;ــــد<br>
                                <b style="font-weight: bolder; font-size: 20px; letter-spacing: 3px;">WARID</b></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5 style="font-size: 12px; color: #fff; ">حساباتنا على مواقع التواصل الإجتماعي</h5>
                        </li class="">
                        <i class="fab fa-instagram" style="color: #e91e1e; font-size: 30px; margin-right: 10px;"></i>
                        <i class="fab fa-twitter" style="color: #2196f3; font-size: 30px;  margin-right: 10px;"></i>
                        <i class="fab fa-whatsapp" style="color: #41df48; font-size: 30px;  margin-right: 10px;"></i>
                        <i class="fab fa-facebook" style="color: #3F51B5; font-size: 30px;  margin-right: 10px;"></i>
                    </ul>
                    <p style="font-size: 14px; text-align: center; margin-top: 20px; color: #ccc;">جميع الحقوق محفوظة
                        <a href="index.html">
                            لدى <b style="color: #ad0101;">منصــــة
                                وريــــ&hearts;ــــد </b>&COPY;</p>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>