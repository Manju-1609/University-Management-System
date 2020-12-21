<?php include('main.php') ?>
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
  background-image:url(https://t3.ftcdn.net/jpg/01/22/95/16/240_F_122951606_xkwklqLCyrMgCM0JxaVb1Mw5mvcy3PCr.jpg);
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
  <title>Registration Form</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Register</h2>
    </div>
    <form action="register.php" method="POST">
      <div>
        <?php if(count($errors)!=0): ?>
        <?php foreach ($errors as $error): ?>
          <?php echo $error; ?><br>
        <?php endforeach ?>
      </div>
        <?php endif ?>

      <div>
        <label for="username">Username</label>
        <input type="text" name="username" required><br><br>
      </div>
      <div>
        <label for="name">Name</label>
        <input type="text" name="name" required><br><br>
      </div>
      <div>
        <label for="DOB">DOB</label>
        <input type="date" name="DOB" required><br><br>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" name="email" required><br><br>
      </div>
      <div>
        <label for="mobile">Mobile No.</label>
        <input type="tel" name="mobile" required><br><br>
      </div>
      <div>
        <div>
          <label for="DOE">Date Of Enrollment</label>
          <input type="date" name="DOE" required><br><br>
        </div>
        <div>
          <label for="ColID">College ID</label>
          <input type="text" name="ColID" required><br><br>
        </div>
        <div>
          <label for="Sem">Semester</label>
          <input type="text" name="sem" required><br><br>
        </div>

        <label for="password">Password</label>
        <input type="password" name="password1" required><br><br>
      </div>
      <div>
        <label for="password">Re-enter password</label>
        <input type="password" name="password2" required><br><br>
      </div>

      <button type="submit" name="register"onclick="myFunction()">submit<a href="main.php"></a></button><br>
      <script>
      function myFunction() {
      alert("Registration done successfully!");
      }
      </script>
      <p>Already a user?<a href="login.php"><br>Log in</br></a></p>

    </form>
  </div>
</body>
</html>
