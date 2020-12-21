<?php include('addcourse.php') ?>
<!DOCTYPE html>
<html>
<style>
button{
  position:absolute;
  left:200px;
  border-radius: 5px;
  color: black;
  background-color:#DAA520;
  padding: 5px 10px 8px 10px;
}
h2{
  text-align:center;
  font-family:monospace;
}
p{
 text-align:center;
}
body{
  background-image:url(https://image.freepik.com/free-vector/abstract-dark-blue-polygonal-background_1035-9700.jpg);
}
label{
  position:absolute;
  left:100px;
}
input{
  position:absolute;
  left:250px;
}
.container{
  border-radius:2%;
  background-color:#FFFFF0;
  position:absolute;
  top:100px;
  left:400px;
  height:600px;
  width:500px;
}
</style>
<head>
  <title>New Course Registration</title>
</head>
<body>
  <div class="container">
    <div class="header">
    <br>
      <h2>Add Course</h2><br><br><br>
    </div>
    <div>
      <?php if(count($errors)!=0): ?>
      <?php foreach ($errors as $error): ?>
        <?php echo $error; ?><br>
      <?php endforeach ?>
    </div>
      <?php endif ?>
    <form action="course.php" method="POST">
      <div>
        <label for="CollegeID">CollegeID</label>
        <input type="number" name="CollegeID" required><br><br>
      </div>

        <label for="CourseID">CourseID</label>
        <input type="number" name="CourseID" required><br><br>
      </div>
      <div>
        <label for="CourseName">CourseName</label>
        <input type="text" name="CourseName" required><br><br>
      </div>
      <div>
        <label for="CourseDuration">CourseDuration</label>
        <input type="number" name="CourseDuration" required><br><br><br>
      </div>
      <button type="submit" name="addcourse"onclick="myFunction()">Add Course<a href="addcourse.php"></a></button>
      <script>
      function myFunction() {
      alert("Course added successfully!");
      }
      </script>
      </form>
      
    </div>
  </body>
  </html>
