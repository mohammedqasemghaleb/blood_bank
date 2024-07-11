<?php





$stmt=$con->prepare('select * from medical_center');

if($stmt->execute()){

    $medicals=$stmt->fetchAll(PDO::FETCH_OBJ);
   

}else{
    echo 'error in select medical senter';
}




