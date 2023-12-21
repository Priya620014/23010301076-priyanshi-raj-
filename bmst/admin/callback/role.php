<?php 
include('../../config/config.php');
if(isset($_POST['tittle']) && trim($_POST['tittle'])!=''){
//insert
$tittle =$_POST['tittle'];
$description =$_POST['description'];
$query = "INSERT INTO role(name , description) VALUES('$tittle','$description')";
$checkresult = $conn->query($query);
if($checkresult){
    $_SESSION['status']='success';
    header("location:../role.php");
    echo 'success';
}
else{
    $_SESSION['status']='fail';
    echo 'fail';
}
}
//insert
//update
//delete
 ?>