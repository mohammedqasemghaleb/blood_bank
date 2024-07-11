<?php 

session_start();

if(isset($_SESSION['user'])){
    header('Location: ../../index.php');
}else{
    if(isset($_COOKIE['user_name'])){
        $user=array('name'=>$_COOKIE['user_name'],'id'=>$_COOKIE['user_id']);
        $_SESSION['user']=$user;
        header('Location: ../../index.php');
  }
}