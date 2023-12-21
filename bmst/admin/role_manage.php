
<?php include('header.php'); ?>
  
        
          <!-- <br>
       
        
   

    <div style="height:180px; margin-top:0px;">
        <h3>Role Name *</h3>
        <input type="text" name="Role Name" id="Role Name" width="600px" style=" padding-left:200px; margin-left:450px;" placeholder="enter roll name"><br>
<div ><br>
    <button style="height: 40px;
    width: 80px;
    background-color:rgb(215, 209, 209);
    color: black;
    border: none;
    border-radius: 5px; ">Cancel</button>
    <button style="  height: 40px;
    width: 80px;
    background-color: rgb(8, 108, 8);
    color: white;
    border: 1px solid black;
    border-radius: 5px; margin-left: 10px; , margin-bottom: 10px;">Save</button>
</div>



    </div>-->


<?php include("footer.php");?>






<?php 
    include("../config/config.php");
    include("header.php");

    $id='';
    $title='';
    $description='';
    if(isset($_GET['id']) && $_GET['id']>0){
        $id=$_GET['id'];     
        
        $result = $conn->query("select name,description from role where id=".$id);

        echo $result->num_rows;
        if($result->num_rows>0){
           $c = $result->fetch_assoc();
           $title=$c['name'];
       $description=$c['description'];
        }
       
    }
    // add
    //
    // $title='';
    // $description='';
    // if(isset($_GET['id']) && $_GET['id']>0){
    //     // edit
    //     $result = $conn->query("select * from role where id=".$_GET['id']);
    //     if($result->num_rows > 0){
    //         $row = $result->fetch_assoc();
    //         $title=$row['name'];
    //         $description=$row['description'];
    //     }
    // }
?>
<h2>Role Manage</h2>
<form method="POST" action="callback/role.php" enctype="multipart/form-data">
<input type="text" name="title" value="<?php echo $title;?>" required>
<textarea name="description"><?php echo $description;?></textarea>
<input type="submit">
</form>
<?php 

    include("footer.php");
?>