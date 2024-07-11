<?php
session_start();
require_once '../../../include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $latitude =strval($_POST['latitude']);
        $longitude =strval($_POST['longitude']);

        $stmt = $con->prepare('select email from medical_center where email=?');
        $stmt->bindParam(1, $email);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $_SESSION['message'] = 'هذا البريد مستخدم بالفعل';
                header('Location:../register.php');
            } else {

                $stmt = $con->prepare("insert into medical_center(name,email,password,phone,latitude,longitude)
                values('$name','$email','$password','$phone','$latitude','$longitude');
                ");

                if ($stmt->execute()) {
                    $id= $con->lastInsertId();
                    $medical = array('name' => $name, 'id' => $id);
                    $_SESSION['medical'] = $medical;


                    if (isset($_SESSION['user'])) {
                        unset($_SESSION['user']);
                    }
                    if (isset($_COOKIE['user_id'])) {
                        setcookie('user_name','',time()-3600);
                        setcookie('user_id','',time()-3600);
                     }

                    header('Location:../../../index.php');
                }
            }
        }
    } else {
        echo '404';
    }
}
