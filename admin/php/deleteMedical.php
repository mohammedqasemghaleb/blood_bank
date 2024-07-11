
<?php 

require_once '../../include/connection.php';


if(isset($_GET['medical'])){
    $id=$_GET['medical'];

    $stmt=$con->prepare("DELETE FROM medical_center where id='$id' ");
    if($stmt->execute()){
       header('Location: ../index.php');
    }
}