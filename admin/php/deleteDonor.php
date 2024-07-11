
<?php 

require_once '../../include/connection.php';


if(isset($_GET['donor'])){
    $id=$_GET['donor'];

    $stmt=$con->prepare("DELETE FROM donors where id='$id' ");
    if($stmt->execute()){
       header('Location: ../index.php');
    }
}