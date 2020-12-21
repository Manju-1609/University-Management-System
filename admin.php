<?php include('course.php')?>

<!DOCTYPE html>
<html>
<style>
    h1{
        text-align:center;
        color:white;
        font-family:monospace;
    }
   
    body{
        background-image:url(https://image.freepik.com/free-vector/abstract-black-polygon-red-light-futuirstic-technology-background_33869-444.jpg);
    }
    .container{
        border-radius:2%;
        background-color:#000000;
        position:absolute;
        top:100px;
        left:300px;
        height:600px;
        width:700px;
        box-shadow:25px 10px 10px 0px white;
    }
    .item1{
        border-radius:2%;
        background:gray;
        position:absolute;
        top:100px;
        left:100px;
        height:400px;
        width:500px;
    }
    button {
    position:absolute;
    left:170px;
    border-radius: 5px;
    color:black;
    background-color:#FF8C00;
    padding: 5px 10px 8px 10px;
  }
  button:hover{
    animation-name: background-color;
    animation-duration: 500ms;
    animation-fill-mode: forwards;
  }
</style>
<head>
  <title></title>
</head>
<body>
    <div class="container">
        <h1>WELCOME ADMIN!!</h1>
      <div class="item1"><br><br>
<button onclick="location.href='register.php'">Register</button><br><br><br>
<button onclick="location.href='editmain.php'">Edit Records</button><br><br><br>
<button onclick="location.href='course.php'">Add Course</button>
      </div>
    </div>
</body>
</html>