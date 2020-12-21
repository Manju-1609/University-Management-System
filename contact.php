<!DOCTYPE html>
<html>
<style>
.item1{background:LightSkyBlue;
grid-area:2/2/3/3;}
.item2{background:LightSalmon;
    grid-area:2/3/3/4;}
  .container {
    font-size: 15px;
    max-height:500px;
    width:500px;
    background: LightGray;
    display: grid;
    position:absolute;
    top:200px;
    left:400px;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    justify-items:bottom;
    align-items:bottom;
    grid-gap: 10px;
    grid-template-areas:
      "header header header"
      "advert content content"
      "advert content content"
      "footer footer footer";
  }
  body{
      background-image:url(https://images.template.net/wp-content/uploads/2016/11/21131124/polygonal.jpg);
  }
  h2{
      font-family:monospace;
      text-align:center;
  }
    
</style>
<head>
  <title></title>
</head>
<body>
<div class="container">
<h2><u>CONTACT US :</u></h2>
<div class="item1">
<p>
<strong>Address :</strong>
876,MTH Road,Anna Nagar,Chennai-600 101
<br><br></p>
</div>
<div class="item2">
</p>
<strong>Call us :</strong>
9888456372, 044-25673863
</p>  
</div>
</div>
</body>
</html>