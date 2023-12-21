<!-- ?>
  
        
           <br>
       
        
   

    <div style="height:180px; margin-top:0px;">
        <h3 style ="color:green">Role Name *</h3>
        <input type="text" name="Role Name" id="Role Name" width="600px" style=" padding-left:200px; margin-left:450px;" ><br><br>
<div >
    <button style="height: 40px;
    width: 80px;
    background-color:rgb(215, 209, 209);
    color: black;
    border: none;
    border-radius: 5px; margin-left:550px">Cancel</button>
    <button style="  height: 40px;
    width: 80px;
    background-color: rgb(8, 108, 8);
    color: white;
    border: 1px solid black;
    border-radius: 5px; margin-left: 10px; , margin-bottom: 10px;">Save</button>
</div>



    </div>

?> 
-->     



<?php 
    include("../config/config.php");
    include("header.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml=' ';
    $result = $conn->query("select * from role");
    //update set table name columns
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            $id = $row['id'];
            $roleHtml .= '
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['description'].'</td>
                <td><a href="role_manage.php?id='.$id.'">Edit</a> /<button>Delete</button> </td>
            </tr>';
        }
    }

?>
<h2>Role</h2>
<?php echo $message?>
<a href="role_manage.php">Add New Role</a>
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $roleHtml;?>
    </tbody>
</table>
<?php 
    include("footer.php");
?>