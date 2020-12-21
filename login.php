<?php include('main.php'); ?>

<!DOCTYPE html>
<html>
<style>
h1{
        text-align:center;
        color:white;
        font-family:monospace;
    }

body{
        background:linear-gradient(35deg, #CCFFFF, #FFCCCC);
    }
p{
  color:white;
  text-align:center;
}
a{
  color:white;
}
.container{
        border-radius:2%;
        background-color:#2F4F4F;
        position:absolute;
        top:100px;
        left:400px;
        height:400px;
        width:500px;
        box-shadow:25px 10px 10px 4px #FF1493;
    }
    a{
      color:;
    }
label{
  color:white;
  position:absolute;
  left:100px;
}
img{
  width:20px;
  height:20px;
}
input{
  position:absolute;
  left:200px;
}
button{
  position:absolute;
  left:200px;
  border-radius: 5px;
  color: black;
  background-color:#DAA520;
  padding: 5px 10px 8px 10px;
}
</style>
<head>
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Login</h1>
    </div>
    <div>
      <?php if(count($errors)!=0): ?>
      <?php foreach ($errors as $error): ?>
        <?php echo $error; ?><br>
      <?php endforeach ?>
    </div>
    <div class="item1">
      <?php endif ?>
        <form action="login.php" method="post">
        <br><br>
      <div class="item1">
        <label for="username"><img src="https://icon-library.com/images/e7a5cf5c9e.svg.svg">  Username:</label>
        <input type="text" name="username" size=5 required>
      </div><br><br>
      <div class="item2">
        <label for="password"><img src="https://cdn1.iconfinder.com/data/icons/crime-and-security-3-5/48/147-512.png">  password: </label>
        <input type="password" name="password1" required>
      </div><br><br>
      <div class="item3">
      <button type="submit" name="login"onclick="myFunction()">submit<a href="main.php"></a></button><br><br>
      <script>
      function myFunction() {
      alert("You are logged in successfully!");
      }
      </script>
      <p>Not a user?<a href="register.php"><br>Click to Register</br></a></p>
      </div>
    </form>
    </div>
  </div>
</body>
</html>
