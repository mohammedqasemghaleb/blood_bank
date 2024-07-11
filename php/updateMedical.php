

<?php
session_start();
require_once '../include/connection.php';


if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['updateMedical'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
       
        $phone=$_POST['phone'];
       

        $id=$_GET['medical'];

        $stmt=$con->prepare("update medical_center set name='$name',phone='$phone',password='$password' where id='$id'");
        if($stmt->execute()){
            if(isset($_GET['s']))
            $_SESSION['medical']['name']=$name;
            header("Location: ../profileMedical.php?medical=$id");
        }
    }
}