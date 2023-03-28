<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view teacher.css">
    <link rel="stylesheet" href="a.css">
    <title>View Teacher</title>
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            <a href="Add Teacher.php" >Add Teacher</a>
            <a href="Add Student.php">Add Student</a>
            <a href="#" class="log">View Teacher</a>
            <a href="View Student.php">View Student</a>
            <a href="View Research.php">View Research Paper</a>
            
        </div>
    </div> 

    <div class="container">
        <form  action = "View Teacher.php" method = "POST">
        <h1>View Teacher</h1>
        
        
        </form>
        

    </div>


    <?php
include('connection.php'); 
  ?> 
   <table>
    
    <th>Teacher ID</th> 
    <th>Teacher Name</th> 
    <th>Teacher Contact Number</th> 
    <th>Update Data</th> 
    <th>Delete Data</th> 
    

   
<?php

    $sql= "SELECT * FROM addteacher"  ;
    $result = mysqli_query($con, $sql);
    while($info=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $info['ID'];?></td>
            <td><?php echo $info['Name'];?></td>
            <td><?php echo $info['Contact'];?></td>
           <?php
           echo"
           <td><a href='update.php?id=$info[ID]&name=$info[Name]&contact=$info[Contact]'>Update</a></td>
           <td><a href='delete.php?id=$info[ID]'>Delete</a></td>
           </tr>";
           ?>
             
           
   
        <?php
    }

    
      
      mysqli_close($con);

     
?>  
 </table>   
</body>
</html>

   

    

     
