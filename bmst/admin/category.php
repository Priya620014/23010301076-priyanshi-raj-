<?php 
include "header.php"
?>

    <!--<div class="cont">
        <div class="line"></div>
            <div class="box">1</div>
            <div class="lines"></div>
        </div>
        <p style=" text-align:center; color:black;margin-left:0px">Select Category</p>
        <div class="box2">
        <button class="buttons">New Product</button><br><br>
        <p class="product"><b>Product 1</b></p>

<div class="greyline">
    <div class="orange_line"></div>
</div><br>
<div class="checkbox">
<input type="checkbox" ></div>
<p class="copy">Copy input details to all the products</p>
<p class="copy">If you want to change specific fields for particular product like color,Name etc, you can change it by selecting that product.</p>
<div class="front_image">
<h3 class="he">Front Image</h3>  
    <div class="browse"><button class="files">Browse  Files</button></div></div>
<h3 class="images">Other Images</h3>
<div class="browse"><button class="files">Browse  Files</button></div><br><br><br><br><br><h5>SDF Price*</h5>
<input type="text" placeholder="product name">
<H5>Product Name*</H5>
<input type="text" placeholder="product name">
<h5>HSN Code*</h5>
<input type="text" placeholder="product name">-->





   
<?php include("footer.php");?>




<?php 
include("../config/config.php");

if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
    $message='<p>'.$Session['status'].'</p>';
    unset($_SESSION['status']);
}


?>

<h2>Employee</h2>
<a href="role_manage.php">Add New Role</p>
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>1</td>
            <td>Admin</td>
            <td>adhg@gmail.com</td>
            <td><button>Edit</button> <button>Delete</button></td>
        </tr>
    </tbody>
</table>




<?php include("footer.php");?>

