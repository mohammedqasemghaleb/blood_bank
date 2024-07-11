<?php
session_start();
require_once '../../include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['addDonor'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        // $age = $_POST['age'];
        $blood_type = $_POST['blood_type'];
        $medical_center = $_POST['medical'];
      

        $stmt = $con->prepare('select email from donors where email=?');
        $stmt->bindParam(1, $email);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $_SESSION['message'] = 'هذا البريد مستخدم بالفعل';
                 header('Location:../register.php');
            } else {

                $stmt = $con->prepare("insert into donors(name,email,phone,password,blood_type,medical_id)
                values('$name','$email','$phone','$password','$blood_type','$medical_center');
                ");

                if ($stmt->execute()) 
                {
                   
                    header('Location: ../index.php');
                }
            }
        }
    } else {
        echo '404';
    }
}
