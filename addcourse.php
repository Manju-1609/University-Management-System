<?php
//session_start();
$errors=array();

$db=mysqli_connect('localhost','root','','practise'); //or die("couldnt connect to database");

if(isset($_POST['addcourse']))
{
  $CollegeID=mysqli_real_escape_string($db,$_POST['CollegeID']);
  $CourseID=mysqli_real_escape_string($db,(int)$_POST['CourseID']);
  $CourseName=mysqli_real_escape_string($db,$_POST['CourseName']);
  $CourseDuration=mysqli_real_escape_string($db,(int)$_POST['CourseDuration']);
  $course_check="SELECT * from course where CourseID='$CourseID' AND Col_ID='$CollegeID' LIMIT 1";
  $results=mysqli_query($db,$course_check);
  $row=mysqli_num_rows($results);
  if($row)
  {
    {
      array_push($errors,"Course already registered");
    }
  }

$college_check="SELECT * from course where Col_ID='$CollegeID' LIMIT 1";
$result=mysqli_query($db,$college_check);
$rows=mysqli_num_rows($result);
if($rows==0)
{
  {
    array_push($errors,"College not registered");
  }
}

  if(count($errors)==0)
  {

    $query="INSERT INTO course (CourseID,CourseName,Col_ID,Course_Duration) VALUES ('$CourseID','$CourseName','$CollegeID','$CourseDuration')";

    mysqli_query($db,$query);

        $_SESSION['msg']="Course Added";
        echo $_SESSION['msg'];     
}
}
?>
