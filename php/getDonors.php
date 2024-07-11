<?php 


// if($_SERVER['REQUEST_METHOD']==='POST'){

//     if()
// }


require_once '../include/connection.php';

$stmt=$con->prepare("SELECT d.*,m.name medical_name FROM donors d , medical_center m where d.medical_id=m.id; ");

if($stmt->execute()){
$donors=$stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($donors as $donor) {
        echo '<div class="data col-lg-6">
    <h6>'.$donor->name.'</h6>
    <h6>'.$donor->medical_name.'</h6>
    <h6>رقم الهاتف: 555-999-555-88</h6>
    <h6>المدينة: القصيم</h6>
    <h6>العمر: 16 سنة</h6>
</div>';
    }

// print_r($donors);
// echo $donors[0]->name;
   
}