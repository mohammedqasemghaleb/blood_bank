<?php
session_start();
require_once '../../include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['addMedical'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        
        $stmt = $con->prepare('select email from medical_center where email=?');
        $stmt->bindParam(1, $email);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $_SESSION['message'] = 'هذا البريد مستخدم بالفعل';
                header('Location:../register.php');
            } else {

                $stmt = $con->prepare("insert into medical_center(name,email,password,phone)
                values('$name','$email','$password','$phone');
                ");

                if ($stmt->execute()) {
                    $id= $con->lastInsertId();
                   
                    header('Location:../index.php');
                }
            }
        }
    } else {
        echo '404';
    }
}
