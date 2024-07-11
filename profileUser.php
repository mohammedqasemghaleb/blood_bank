<?php

require_once './include/connection.php';

require_once './Auth/Users-Auth/php/selectMedical.php';

$id = $_GET['donor'];
$stmt = $con->prepare("SELECT * from donors where id=$id");
if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        $donor = $stmt->fetchObject();
    } else {
        header('Location:index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>البروفايل</title>



</head>

<body dir="rtl">

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="" style="background-color: #ad0101;">
            <div class="container">
                <div class="media-nav d-flex justify-content-between align-items-center">
                    <div class="logos d-flex align-items-center">
                        <img src="imgs/Logo-Blood-Banck.png" alt="LOGO" style="border-radius: 50%; width: 80px; height: 80px; background-color: #fff; padding: 5px; margin-top: 5px; margin-bottom: 5px;">
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
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->


    <!-- donator Start -->
    <section id="donator">
        <div class="container-fluid" style="width: calc(100% - 50px); margin: 50px; background-color: transparent; box-shadow: none; border: none;">
            <div class="row d-flex justify-content-lg-between align-items-center flex-md-column-reverse flex-lg-row flex-sm-column-reverse flex-wrap">
                <div class="col-lg-6" style="box-shadow: 0px 0px 15px -4px #938e8e; padding: 15px 18px ; border-radius: 8px;">
                    <form action="php/updateDonor.php?donor=<?php echo $id ;?>&<?php echo isset($_GET['s'])?'s=1':''; ?>" method="post">
                        <div class="col-md-12 mb-3">
                            <label for="validationServerUsername">إسم المستخدم</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" name="name" class="form-control" id="validationServerUsername" value="<?php echo $donor->name ?>" aria-describedby="inputGroupPrepend3">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3" dir="ltr">
                            <label for="validationServerUsername">كلمة المرور</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">###</span>
                                </div>
                                <input type="password" name="password" class="form-control" id="validationServerUsername" value="<?php echo $donor->password ?>" aria-describedby="inputGroupPrepend3">
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
                                <input type="email"  class="form-control is-invalid" id="validationServerUsername" value="<?php echo $donor->email ?>" aria-describedby="inputGroupPrepend3" disabled>
                                <div class="invalid-feedback text-right">
                                    هذا الحقل لا يمكنك تغيرة
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3" dir="ltr">
                                <label for="validationServerUsername">رقم الهاتف</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3">+966</span>
                                    </div>
                                    <input type="phone" name="phone" class="form-control is-invalid" id="validationServerUsername" value="<?php echo $donor->phone ?>" aria-describedby="inputGroupPrepend3">
                                    <div class="invalid-feedback text-right">
                                        هذا الحقل لا يمكنك تغيرة
                                    </div>
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
                                <input type="hidden" id="m_c" value="<?php echo $donor->medical_id ?>">
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
                                <input type="hidden" id="b_t" value="<?php echo $donor->blood_type ?>">
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
                                <button type="submit" name="updateUser" class="btn btn-danger w-100 mt-2" style="background-color: #ad0101;">حفظ التعديلات</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">
                    <!-- <h3 style="text-align: center; margin-top: 15px;  font-weight: bold;">ملفك الشخصي عزيزي المتبرع</h3> -->
                    <div class="images">
                        <img src="imgs/Profile-details.svg" alt="" width="" style="width: 100%; margin: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Who End -->


    <script defer  >
     
        let bloodType = document.querySelector('#bloodType');
        bloodType.value=document.querySelector('#b_t').value;
     
        let medical=document.querySelector('#medical');
        medical.value=document.querySelector('#m_c').value;
    </script>

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