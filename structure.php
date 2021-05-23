<html><head>
<title>Form Structure</title>
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
th
{  padding:15px;
   background-color:#ffd633;
}
.tag{ font-size:25px;
          color:white;
}
</style>

<br>
<link rel="stylesheet" type="text/css" href="external css1.css">
<link rel="icon" href="reading.png" type="image/gif">
<br>
<h3 style="color:yellow"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Welcome to the VIGHNAAN LIBRARY,click <a href="Catalogue.php">here</a> to access the books available.</marquee></h3>
<hr>
 <script type="text/javascript">
 function val()
{  var x=document.forms["myf"]["email"].value;
   if(x=="")
   {   alert("Email is empty!!!");
       return false;
  }
var y=document.forms["myf"]["name"].value;
   if(y=="")
   {   alert("Name is empty!!!");
       return false;
  }
  var z=document.forms["myf"]["psw"].value;
   if(z=="")
   {  alert("Password is empty!!!");
       return false;
   }
var a=document.forms["myf"]["cpsw"].value;
   if(a=="")
   {   alert("Enter your password again!!");
       return false;
  }
}
function myFunction() {
  var a = document.getElementById("psw");
  if (a.type === "password") {
    a.type = "text";
  } else {
    a.type = "password";
  }
var a = document.getElementById("cpsw");
  if (a.type === "password") {
    a.type = "text";
  } else {
    a.type = "password";
  }
}
        
function Validate() {
            var psw = document.getElementById("psw").value;
            var cpsw = document.getElementById("cpsw").value;
            if (psw != cpsw) {
                alert("You first Password is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>
</head>
<div class="header">
<title>VIGHNAAN LIBRARY</title><br>
<a href="1.php"><img src="logo.png" height="100" width="100"></a>
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
</div>
<body>
<?php
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
?>
<br><br>
<div><center>
<form name="myf" onsubmit="return val()" action="insert.php" method="GET">
<p style="color:powderblue;">Enter your E-mail</p>
<input type="email" placeholder="Email" name="email" autocomplete="off"><br><br>
<p style="color:powderblue;">Enter your Name</p>
<input type="text" placeholder="Name" name="name" autocomplete="off"><br><br>
<p style="color:powderblue;">Enter your Password</p>
<input type="password" placeholder="Password" id="psw" name="psw"><br><br>
<p style="color:powderblue;">Confirm your Password</p>
<input type="password" placeholder="Confirm Password" id="cpsw" name="cpsw"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password<br><br>
<input type="submit" name="edit" value="Register" onclick="return Validate()">
<br><br>
<input type="reset" name="edit" value="Reset">
</center>
</div>
</form>
<br><br><br><br><hr>
<p>
<center>
  &copy All Rights Reserved. Site developed by<i><font face="courier" color="ivory"> K.Rohith and G.Suyash</i></font></center>
</p>
</body></html>
