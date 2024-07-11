<?php
session_start();
require_once '../../../include/connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];



        $stmt = $con->prepare('select * from medical_center where email=? and password=?');
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $r = $stmt->fetch();
                if (isset($_SESSION['user'])) {
                    unset($_SESSION['user']);
                }

                if (isset($_COOKIE['user'])) {
                   setcookie('user','',time()-60);
                }


                $medical_center = array('name' => $r['name'], 'id' => $r['id']);
                $_SESSION['medical'] = $medical_center;


                if (isset($_POST['remember'])) {

                    $remember = $_POST['remember'];
                    setcookie('medical_name',$medical_center['name'],time()+3600*24*10,'/'); /* expire in 10 days */
                    setcookie('medical_id',$medical_center['id'],time()+3600*24*10,'/'); /* expire in 10 days */
                }

                

                header('Location:../../../index.php');
            } else {
                $_SESSION['message'] = 'هناك خطأ في إسم المستخدم او كلمة المرور';
                header('Location:../index.php');
            }
        }
    }
} else {
    echo '404';
}
