<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style media="screen">

div{
        border: ;
        width: 500px;
        padding: 60px;
        margin-left: 400px;
        margin-top: 00px;
        background-color: bisque;
      }
      #teacher_id,#teacher_name,#student_id,#student_name,#batch,#file{
        width: 300px;
        padding: 5px;
        margin-top: 5px;
      }
      label{
        font-weight: bold;
        font-size: 16px;
      }
      form{
        margin-left: 30px;
      }
      #submit{
        margin-left: 0px;
        width: 300px;
        padding: 3px;
        font-size: 18px;
        font-weight: bold;
        background-color: black;
        color: white;
        border-radius: 20px;
        border: ;
      }

      nav{
    background-color:black;
    height:10% ;
    position:fixed;
    width:100%;
}
nav ul li{
    display: inline-block;
    line-height:50px;
    margin: 5px;
} 
nav ul li a{
    color: white;
}
a{
    padding: 20px;
}
a:hover{
    background:blueviolet;
}
a:active{
    background:brown;
}
a.te{
    background-color: gray;
}
h2{
  text-align: center;}
  #submit:hover{
    background-color: brown;
    transition: .5s;}
    *{
    padding: 0;
    margin: 0;
    text-decoration:none;
    list-style:none;
    box-sizing: border-box;
}
 textarea{
    padding: 30px;
    width: 300px;
    height: 20%;
 }
    
    </style>
</head>
<body>
    <nav>
        <label class="logo"></label>
        <ul>
            <li><a href="Home Page.php">Home</a></li>
        
            <li><a href="#" class="te" >Add Research Paper</a></li>
            <li><a href="view.php">View Research Paper</a></li>
        </ul>
    </nav>
    <div>
        <h2>Add Research paper</h2><br>
        <form class="" action="AddResurch.php" method="post" enctype="multipart/form-data">
        <label for="">Teacher ID</label><br>
        <input id="teacher_id" type="text" name="teacher_id" value="" placeholder="Enter Your id" required><br><br>
        <label for="">Teacher Name</label><br>
        <input id="teacher_name" type="text" name="teacher_name" value="" placeholder="Enter Your Name" required>
        <br><br>
        <label for="">Student ID</label><br>
        <input id="student_id" type="text" name="student_id" value="" placeholder="Enter Student id" required><br><br>
        <label for="">Student Name</label><br>
        <input id="student_name" type="text" name="student_name" value="" placeholder="Enter Student Name" required>
<br><br>
                                            
        <label>Batch</label></br>
<input id="batch" type="text" name="batch" value="" placeholder="Enter Student Batch" required>
</br></br>
<label for="date">Date</label><br>
<input type="date" id="date" name="date" placeholder="Enter Current Date" required></br></br>   
        <label>Research Paper Topic</label></br></br>
        <textarea id="text" name="text" placeholder="Enter Topic" required></textarea><br/> 
        <label for="">Choose Your PDF File</label><br><br>                                                      
        <input id="pdf" type="file" name="pdf" value="" required><br><br></br></br>
                                                                                                            <input id="submit" type="submit" name="submit" value="ADD"><br>
                                                                                                            <?php
                                                                                                            include('connection.php');

   if (isset($_POST['submit'])) {
    
      $teacher_id=$_POST['teacher_id'];
      $teacher_name=$_POST['teacher_name'];
      $student_id=$_POST['student_id'];
      $student_name=$_POST['student_name'];
      $batch=$_POST['batch'];
      $date=$_POST['date'];
      $text=$_POST['text'];
      $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);
      $sql="INSERT INTO addresearchpaper(TID, TName, SID, SName, Batch, Date, Topic, Paper) 
       values('$teacher_id','$teacher_name','$student_id','$student_name','$batch','$date','$text', '$pdf')";
       $query=mysqli_query($con,$sql);

      }                                                                                                 
       ?>
            
        </form>
        </div>
</body>
</html>