<!DOCTYPE html>
<html>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
<head>
  <title>Admin</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h3>COURSES OFFERED</h3>
<?php
session_start();
//$errors=array();
$count=1;
$db=mysqli_connect('localhost','root','','practise');

  $sql="SELECT * FROM course";
  $results=mysqli_query($db,$sql);
  if(mysqli_num_rows($results)>0)
  {
    while($row=mysqli_fetch_assoc($results))
    {
      echo "Course_ID: ".$row['CourseID']."<br>";
      echo "CourseName: ".$row['CourseName']."<br>";
      echo "College_ID: ".$row['Col_ID']."<br>";
      echo "Course_Duration: ".$row['Course_Duration']."<br><br>";
    }
  }
  else
  {
    $_SESSION['msg']="COURSES NOT FOUND"."<br>";
    echo $_SESSION['msg'];
  }
?>
</div>
</div>
</body>
</html>
