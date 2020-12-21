<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .cell{
    border-radius:2%;
    background-color:white;
  }
      h3{
        animation-name:colorchange;
        animation-duration:15s;
        animation-iteration-count:infinite;
      }
      p{
        animation-name:colorchange;
        animation-duration:15s;
        animation-iteration-count:infinite;
      }
      @keyframes colorchange{
        0%{color:#191970;}
        50%{color:#000000;}
        100%{color:#800000;}
      }
      img{
          width:70px;
          height:70px;
      }
      h1{
          font-weight:100px;
          color:#FFD700;
          font-family:Helvetica,sans-serif;
          position:relative;
          left:500px;
          font-family:serif;
      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height:510px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:#008080;
      height: 100%;
    }
    .anim-body{
        animation-name:bccolor;
        animation-duration:15s;
        animation-iteration-count:infinite;
    }
    @keyframes bccolor{
        0%{background-image:url(https://adrianweale.files.wordpress.com/2015/10/cambridge.jpg);}
        50%{background-image:url(https://cms.qz.com/wp-content/uploads/2017/05/ap_100270986276-e1494991419413.jpg?quality=75&strip=all&w=1600&h=900&crop=1);}
        100%{background-image:url(https://theithacan.org/wp-content/uploads/2014/10/Laptops_CH-1024x576.jpg);}
    }
    body{
        background-size:cover;
        background-attachment:fixed;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 20px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body class="anim-body">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><div class="logo"></div></div></a>
    </div class="colorback">
    <h1><img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0f/Adrian_College_seal.svg/1200px-Adrian_College_seal.svg.png">  ADRIAN UNIVERSITY</h1>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="displaycourses.php">Courses</a></li>
        <li><a href="login.php">Admin</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span>Sign up</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
  <div class="cell">
      <p>Adrian University is one of the top universities located in Chennai,Tamil Nadu.Our university offers a wide range of undergraduate, postgraduate programs in Engineering.</p>
      </div><div class="cell">
      <p>Well trained faculty members and councillors are present to guide students accordingly.</p>
      <p>Also students who wish to do higher studies are guided by faculties.</p></div>
      <div class="cell">
      <p>Internship,hackathons are compulsary to help students gain experience. A variety of programs are conducted to improve confidence and it results as a stress buster for everyone.
     </p>
      </div>
    </div>
    <div class="col-sm-8 text-left"> 
        <div class="titlebar">
        </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Study materials for UG and PG are easily available in our library.Sports,music,dance or other extra curricular activities are provided.</p>
      </div>
      <div class="well">
        <p>92% results in University exam every year.Campus interview trainings are done at the end of the fifth semester.</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>NAAC APPROVED<br>NBA 100<br>TNEA </p>
</footer>

</body>
</html>
