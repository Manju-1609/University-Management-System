<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h3>STUDENT RECORDS</h3>
<?php
session_start();
//$errors=array();
$count=1;
$db=mysqli_connect('localhost','root','','practise');
  $sql="SELECT l.*,CourseName,Course_Duration FROM student l,course b WHERE l.CourseID=b.CourseID";
  $results=mysqli_query($db,$sql) ;
  if(mysqli_num_rows($results)>0)
  {
    while($row=mysqli_fetch_assoc($results))
    {
      echo "Serial No: ".$count++."<br>";
      echo "Registration_No: ".$row['Registration_No']."<br>";
      echo "Name: ".$row['Name']."<br>";
      echo "DOB: ".$row['DOB']."<br>";
      echo "Email: ".$row['Email']."<br>";
      echo "Mobile_No: ".$row['Mobile_No']."<br>";
      echo "Date_Of_Enrolment: ".$row['Date_Of_Enrolment']."<br>";
      echo "College_ID: ".$row['College_ID']."<br>";
      echo "Course_ID: ".$row['CourseID']."<br>";
      echo "Semester: ".$row['Semester']."<br>";
      echo "Fees_Description: ".$row['Fees_Description']."<br>";
      echo "CourseName: ".$row['CourseName']."<br>";
      echo "Course_Duration: ".$row['Course_Duration']."<br>";
    }
echo $_SESSION['count']=$count;
  }
  else
  {
    $_SESSION['msg']="RECORD NOT FOUND"."<br>";
    echo $_SESSION['msg'];
  }






?>
</div>
</div>
</body>
</html>
