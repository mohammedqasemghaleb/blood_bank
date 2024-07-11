<?php 


session_start();
unset($_SESSION['user']);
unset($_SESSION['medical']);


setcookie('medical_name',$medical_center['name'],time()-1,'/'); /* expire in 10 days */
setcookie('medical_id',$medical_center['id'],time()-1,'/'); /* expire in 10 days */

setcookie('user_name', $user['name'], time() -1, '/'); /* expire in 10 days */
setcookie('user_id', $user['id'], time() -1, '/'); /* expire in 10 days */
header('Location:index.php');