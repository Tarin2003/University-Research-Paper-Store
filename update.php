<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    <title>Update Teacher</title>
    
</head>
<body>

    

    <div class="registration">
        <form  action = "update.php" method = "POST">
        <h1>Update Teacher</h1>
        <label for="id"><b>Teacher ID</b></label>
        <input type="text" placeholder="Enter ID" name="id" value="<?php echo $_GET['id']; ?>" required>
        <label for="name"><b>Teacher Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" value="<?php echo $_GET['name']; ?>" required>
        <label for="contact"><b>Contact Number</b></label>
        <input type="text" placeholder="Enter Contact Number" name="contact" value="<?php echo $_GET['contact']; ?>"required>
        <button type="submit" name ="Add" class="registerbtn"><b>Update Teacher</b></button>
        
        </form>
        

    </div>
</body>
</html>
<?php
include('connection.php'); 

if(isset($_POST['Add'])){
    $id = $_POST['id'];  
    $name = $_POST['name']; 
    $contact = $_POST['contact'];   
    
      
      

    $sql = " UPDATE addteacher SET Name ='$name', Contact='$contact' WHERE ID='$id' ";
     
      $result = mysqli_query($con, $sql);
      if ($result){
        
       ?>
       <script type="text/javascript">
        alert("Teacher Info updated Successfully");
        window.location.assign("View Teacher.php");
       </script>
        
       <?php 
      }
      
    }
      
      mysqli_close($con);

     
   
   
    
     

     
?>     
   