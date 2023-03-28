<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        width:100%;
        height:550px;
      }
      .div1{
        width:100%;
      }
    </style>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin Login.css">
    
    
</head>
<body>
<div class="div1">
      <?php
      include('connection.php');
      $id = $_GET['id'];  
      $name= $_GET['name'];  
      $sql="SELECT Paper from addresearchpaper WHERE SID='$id' AND Topic='$name' " ;
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['Paper'] ; ?>" width="900" height="500">
    <?php
      }
    
      ?>
</div>
   
</body>
</html>