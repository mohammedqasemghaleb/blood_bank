<?php
session_start();
require_once '../../../include/connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];




        $stmt = $con->prepare('select * from donors where email=? and password=?');
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {

                $r = $stmt->fetch();


                $user = array('name' => $r['name'], 'id' => $r['id']);
                $_SESSION['user'] = $user;

                if (isset($_SESSION['medical'])) {
                    unset($_SESSION['medical']);
                }
                if (isset($_COOKIE['medical'])) {
                    setcookie('medical','',time()-3600);
                 }
                if (isset($_POST['remember'])) {

                    $remember = $_POST['remember'];
                    setcookie('user_name', $user['name'], time() + 3600 * 24 * 10, '/'); /* expire in 10 days */
                    setcookie('user_id', $user['id'], time() + 3600 * 24 * 10, '/'); /* expire in 10 days */
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
