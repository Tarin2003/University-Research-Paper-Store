<?php
include('connection.php'); 

   
    $id = $_GET['id'];  
    
      
      

    $sql = " DELETE FROM addteacher  WHERE ID='$id' ";
     
      $result = mysqli_query($con, $sql);
      if ($result){
        ?>
      
       <script type="text/javascript">
        alert("Teacher Info Deleted Successfully");
        window.location.assign("View Teacher.php");
       </script>
        <?php
      
      }
      
    
      
      mysqli_close($con);

     
   
   
    
      

     
?>     
   