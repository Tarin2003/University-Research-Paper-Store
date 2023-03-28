<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view teacher.css">
    <title>View Research Paper</title>
    
</head>
<body>

    <div class="nevbar">
        <div class="menubar">
            <a href="Home Page.php">Home</a>
            
            <a href="AddResurch.php" >Add Research Paper</a>
            <a href="#" class="log">View Research Paper</a>
            
        </div>
    </div> 

    <div class="container">
        <form  action = "view.php" method = "POST">
        <h1>View Research Paper</h1>
        
        
        </form>
        

    </div>
    <?php
include('connection.php'); 
  ?> 
   <table>
    
    <th>Teacher ID</th> 
    <th>Teacher Name</th> 
    <th>Student ID</th> 
    <th>Student Name</th> 
    <th>Batch</th> 
    <th>Publication Date</th> 
    <th>Research Paper Topic</th> 
    <th>View Paper</th> 
    
    
   
<?php

    $sql= "SELECT * FROM addresearchpaper"  ;
    $result = mysqli_query($con, $sql);
    while($info=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $info['TID'];?></td>
            <td><?php echo $info['TName'];?></td>
            <td><?php echo $info['SID'];?></td>
            <td><?php echo $info['SName'];?></td>
            <td><?php echo $info['Batch'];?></td>
            <td><?php echo $info['Date'];?></td>
            <td><?php echo $info['Topic'];?></td>
            <?php
           echo"
          
           <td><a href='Download.php?id=$info[SID]&name=$info[Topic]'>Download</a></td>
          
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