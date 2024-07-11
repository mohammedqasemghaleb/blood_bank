<?php 

session_start();

if(isset($_SESSION['medical'])){
    header('Location: ../../index.php');
}else{
    if(isset($_COOKIE['medical'])){
        $medical=array('name'=>$_COOKIE['medical_name'],'id'=>$_COOKIE['medical_id']);
        $_SESSION['medical']=$medical;
        header('Location: ../../index.php');
  }
}