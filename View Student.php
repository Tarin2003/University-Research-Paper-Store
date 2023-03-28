<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view teacher.css">
    <title>View Student</title>
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            <a href="Add Teacher.php" >Add Teacher</a>
            <a href="Add Student.php">Add Student</a>
            <a href="View Teacher.php" >View Teacher</a>
            <a href="#" class="log">View Student</a>
            <a href="View Research.php">View Research Paper</a>
            
        </div>
    </div> 

    <div class="container">
        <form  action = "View Student.php" method = "POST">
        <h1>View Student</h1>
        
        
        </form>
        

    </div>
    <?php
include('connection.php'); 
  ?> 
   <table>
    
    <th>Student ID</th> 
    <th>Student Name</th> 
    <th>Batch</th> 
    <th>Student Contact Number</th> 
    <th>Update Data</th> 
    <th>Delete Data</th> 
    
   
<?php

    $sql= "SELECT * FROM addstudent"  ;
    $result = mysqli_query($con, $sql);
    while($info=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $info['ID'];?></td>
            <td><?php echo $info['Name'];?></td>
            <td><?php echo $info['Batch'];?></td>
            <td><?php echo $info['Contact'];?></td>
            <?php
           echo"
           <td><a href='Update S.php?id=$info[ID]&name=$info[Name]&batch=$info[Batch]&contact=$info[Contact]'>Update</a></td>
           <td><a href='Delete S.php?id=$info[ID]'>Delete</a></td>
           </tr>";
           ?>
    </tr>
    
        <?php
    }

    
      
      mysqli_close($con);

     
?> 
</table>  
</body>
</html>