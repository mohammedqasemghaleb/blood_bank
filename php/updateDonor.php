

<?php
session_start();
require_once '../include/connection.php';


if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['updateUser'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $bloodType=$_POST['bloodType'];
        $phone=$_POST['phone'];
        $medical=$_POST['medical'];

        $id=$_GET['donor'];

        $stmt=$con->prepare("update donors set name='$name',phone='$phone',password='$password',blood_type='$bloodType',medical_id='$medical' where id='$id'");
        if($stmt->execute()){
            if(isset($_GET['s']))
            $_SESSION['user']['name']=$name;
            header("Location: ../profileUser.php?donor=$id");
        }
    }
}