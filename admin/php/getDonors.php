<?php 


require_once '../../include/connection.php';


$stmt=$con->prepare("SELECT * FROM donors ");

if($stmt->execute()){
    $count_d=$stmt->rowCount();
    $donors=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($donors as $donor) {
        echo '<tr>
        <td>'.$donor->name.'</td>
        <td>'.$donor->phone.'</td>
        <td>'.$donor->email.'</td>
     
        <td style="display: flex; ">
          <a href="./php/deleteDonor.php?donor='.$donor->id.'" class="label btn-shape bg-blue c-white w-full d-block txt-c"
            style="padding: 5px 8px; border: none; outline: none; font-weight: 500; width: 50%;margin-left: 1px;">
            حذف
          </a>
          <a href="../profileUser.php?donor='.$donor->id.'"   class="label btn-shape bg-blue c-white w-full d-block txt-c" 
            style="padding: 5px 8px; border: none; outline: none; font-weight: 500;width: 50%; margin-right: 1px;">
            تعديل
          </a>
        </td>
      </tr>';
      }
}



