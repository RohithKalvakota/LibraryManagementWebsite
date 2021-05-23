<html>
<head>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: powderblue;
  background-color: transparent;
  text-decoration: underline;
}
table,th
{  border: 2px solid black;
   border-collapse:collapse;
   
}
mark { 
  background-color:#FFE633;
  color: black;
}
th
{  padding:15px;
   background-color:#ffd633;
}
.tag{ font-size:25px;
          color:white;
}
</style>
<title>VIGHNAAN LIBRARY</title>
<link rel="stylesheet" type="text/css" href="external css1.css">
 <link rel="icon" href="reading.png" type="image/gif">
<br>
<br>
<br>

<h3 style="color:yellow"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Welcome to the VIGHNAAN LIBRARY,click <a href="Catalogue.php">here</a> to access the books available.</marquee></h3>
<hr>
<script>
function val()
{  var x=document.forms["myf"]["email"].value;
   if(x=="")
   {   alert("Email is empty!!!");
       return false;
  }
  var y=document.forms["myf"]["psw"].value;
   if(y=="")
   {  alert("Password is empty!!!");
       return false;
   }
}
function myFunction() {
  var a = document.getElementById("myinput");
  if (a.type === "password") {
    a.type = "text";
  } else {
    a.type = "password";
  }
}
</script>
</head>
<div class="header">
<a href="1.php"><img src="logo.png" width="10%" height="120px"align="left"></a>
<br><br>
<p align="center" class="tag">VIGHNAAN LIBRARY</p>
<p align="right"><a href="https://twitter.com/"><img src="twitter.png" height="40" width="3%"></a>
  <a href="https://www.facebook.com/"><img src="face.png" width="3%"></a>  
  <a href="https://www.instagram.com/?hl=en"><img src="insta.jpg" height="40" width="4%"></a></p>
<table width="100%">
<tr>
<th><a href="1.php">Home</a></th>
<th><a href="LOGIN.php">Login</a></th>
<th><a href="structure.php">Register</a></th>
<th><a href="Catalogue.php">Books Catalogue</th>
<th><a href="E.php">E-Resources</th>
<th><a href="Donate.php">Donate</th>
</tr>
</table>
</div>
<body>
<form name="myf" onsubmit="return val()" action="search.php" method="GET">
<center>
<br><br>
<p style="color:powderblue;">Enter your E-mail</p>
<input type="text" placeholder="Email" name="email" autocomplete="off"><br>
<p style="color:powderblue;">Enter your Password</p>
<input type="password" placeholder="Password" name="psw" Id="myinput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password
<br><br><br>
<input type="submit" name="edit" value="Submit"><br><br>
<input type="reset" name="edit" value="Reset">
<br><br>
<p>Not a existing user? Register <a href="structure.php" style="color:orange;">here</a></p>
</center>
</form>
<br><br>
<br><br>
<hr>
<p>
<center>
  &copy All Rights Reserved. Site developed by<i><font face="courier" color="ivory"> K.Rohith and G.Suyash</i></font></center>
</p>
</body>
</html>