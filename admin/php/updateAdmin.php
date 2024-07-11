

<?php
session_start();
require_once '../../include/connection.php';


if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['updateAdmin'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];

        $id=$_SESSION['admin']['id'];

        $stmt=$con->prepare("update admin set name='$name',email='$email',password='$password' where id='$id'");
        if($stmt->execute()){
            
            $_SESSION['admin']['name']=$name;
            header("Location: ../index.php");
        }
    }
}