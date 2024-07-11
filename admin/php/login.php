<?php
session_start();
require_once '../../include/connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];




        $stmt = $con->prepare('select * from admin where email=? and password=?');
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $admin=$stmt->fetchObject();
                $r = array('name' => $admin->name, 'id' => $admin->id);
                $_SESSION['admin'] = $r;

                
                header('Location: ../index.php');
            } else {
                $_SESSION['message'] = 'هناك خطأ في إسم المستخدم او كلمة المرور';
                header('Location:../login.php');
            }
        }
    }
} else {
    echo '404';
}
