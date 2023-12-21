<?php 
include("config.php");
include("header.php");

if($conn->connect_error){
   echo'failed';
}
else{
   echo'pass';
}
?>

<h2>Category  Manage</h2>
<form action="POST" action="category.php" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit">

<?php include("footer.php");?>