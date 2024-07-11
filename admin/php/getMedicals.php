<?php 


require_once '../../include/connection.php';


$stmt=$con->prepare("SELECT * FROM medical_center ");

if($stmt->execute()){
    $count_d=$stmt->rowCount();
    $medicals=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($medicals as $medical) {
        echo '<tr>
        <td>'.$medical->name.'</td>
        <td>'.$medical->phone.'</td>
        <td>'.$medical->email.'</td>
        
        <td style="display: flex; ">
          <a href="./php/deleteMedical.php?medical='.$medical->id.'" class="label btn-shape bg-blue c-white w-full d-block txt-c"
            style="padding: 5px 8px; border: none; outline: none; font-weight: 500; width: 50%;margin-left: 1px;">
            حذف
          </a>
          <a href="../profileMedical.php?medical='.$medical->id.'"   class="label btn-shape bg-blue c-white w-full d-block txt-c" 
            style="padding: 5px 8px; border: none; outline: none; font-weight: 500;width: 50%; margin-right: 1px;">
            تعديل
          </a>
        </td>
      </tr>';
      }
}



