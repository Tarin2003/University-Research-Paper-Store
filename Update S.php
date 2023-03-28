<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    <title>Update Student</title>
    
</head>
<body>



    <div class="registration">
        <form  action = "Update S.php" method = "POST">
        <h1>Update Student</h1>
        <label for="id"><b>Student ID</b></label>
        <input type="text" placeholder="Enter ID" name="id" value="<?php echo $_GET['id']; ?>" required>
        <label for="name"><b>Student Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" value="<?php echo $_GET['name']; ?>" required>
        <label for="batch"><b>Batch</b></label>
        <input type="text" placeholder="Enter Batch" name="batch" value="<?php echo $_GET['batch']; ?>" required>
        <label for="contact"><b>Contact Number</b></label>
        <input type="text" placeholder="Enter Contact Number" name="contact" value="<?php echo $_GET['contact']; ?>" required>
        <button type="submit" name ="Add" class="registerbtn"><b>Update Student</b></button>
        
        </form>
        

    </div>
</body>
</html>
<?php
include('connection.php'); 
if(isset($_POST['Add'])){
    $id = $_POST['id'];  
    $name = $_POST['name']; 
    $batch = $_POST['batch']; 
    $contact = $_POST['contact']; 

    
      
      

    $sql = " UPDATE addstudent SET Name ='$name', Batch = '$batch', Contact='$contact' WHERE ID='$id' ";
     
    $result = mysqli_query($con, $sql);
    if ($result){
      
     ?>
     <script type="text/javascript">
      alert("Student Info updated Successfully");
      window.location.assign("View Student.php");
     </script>
      
     <?php 
    }
    
  }
    
    mysqli_close($con);


     
?>     
   