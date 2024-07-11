<?php
    try{
        $con=new PDO('mysql:host=localhost;dbname=blood_bank','root','');
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $ex){die('error connection width database'.$ex->getMessage());}
?>
