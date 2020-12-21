<!DOCTYPE html>
<html>
<style>
 h2{
        position:absolute;
        left:400px;
        text-align:center;
        color:white;
        font-family:monospace;
    }
   table{
       position:absolute;
       top:80px;
       color:white;
   }
    body{
        background-image:url(https://wallpaperaccess.com/full/1551423.jpg);
    }
    .container{
        border-radius:2%;
        background-color:#000000;
        position:absolute;
        top:200px;
        left:250px;
        height:300px;
        width:1000px;
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
  <title>Admin</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>STUDENT RECORDS</h2>
      <?php
      session_start();
      //$errors=array();
      $db=mysqli_connect('localhost','root','','practise');
      $sql="SELECT Registration_No,Name,Email,Mobile_No,Semester,Fees_Description FROM student";
      $results=mysqli_query($db,$sql);
      ?>
      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile_No</th>
          <th>Semester</th>
          <th>Fees_Description</th>
        </tr>
        <?php
      if(mysqli_num_rows($results)>0)
      {
        while($row=mysqli_fetch_assoc($results))
        {
          echo "<tr><form action='edit.php' method=POST>";
          echo "<td><input type=text name=name value='".$row['Name']."'></td>";
          echo "<td><input type=text name=email value='".$row['Email']."'></td>";
          echo "<td><input type=text name=mobile value='".$row['Mobile_No']."'></td>";
          echo "<td><input type=text name=sem value='".$row['Semester']."'></td>";
          echo "<td><input type=text name=fee value='".$row['Fees_Description']."'></td>";
          echo "<input type=hidden name=id value='".$row['Registration_No']."'></td>";
          echo "<td><input type=submit name=edit onclick=myFunction()>";
          echo "</form></tr>";
        }
      }
      ?>
      <script>
      function myFunction() {
      alert("Updated successfully!");
      }
      </script>
    </body>
    </html>
