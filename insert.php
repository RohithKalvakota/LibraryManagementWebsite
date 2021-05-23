<html>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color:orange;
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
<h3 style="color:yellow"><marquee>Welcome to the VIGHNAAN LIBRARY,click <a href="Catalogue.php" style="color:black;">here</a> to access the books available.</marquee></h3>
<hr>
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
<th><a href="1.php" style="color:black;">Home</a></th>
<th><a href="LOGIN.php" style="color:black;">Login</a></th>
<th><a href="Catalogue.php" style="color:black;">Books Catalogue</th>
<th><a href="E.php" style="color:black;">E-Resources</th>
<th><a href="Donate.php" style="color:black;">Donate</th>
</tr>
</table>
</div>
<body><center>
<?php
$email=$_GET['email'];
$name=$_GET['name'];
$psw=$_GET['psw'];
$cpsw=$_GET['cpsw'];
$con=mysqli_connect('localhost','root','','db1');

if($_GET['edit']=='Register')
{  $query1="SELECT * FROM db2 WHERE EMAIL='$email' ";
   $result=$con->query($query1);
      if ($result->num_rows >0)
	 {   echo"<br><br><br>Email is already Registered!!!<br><br><u><a href=structure.php >Retry using another account</a></u><br><br><u><a href=LOGIN.php>login</a></u><br><br><u><a href=1.php>Go back to home page</a></u>";
	 }
	 else
	 {  $query="INSERT INTO db2(EMAIL,NAME,PASS,CPASS) VALUES('$email','$name','$psw','$cpsw') ";
        if(mysqli_query($con,$query)==TRUE)
		{  echo"<br><br><br><br>Registered successfully <a href=structure.php ><br><br><u>Go to home page</u></a>";
		}
		else
		{  echo"Error:";
		}
	}
}

mysqli_close($con);
?>
</center>
<br><br>
<br><br>
<br><br>
<hr>
<p>
<center>
  &copy All Rights Reserved. Site developed by<i><font face="courier" color="ivory"> K.Rohith and G.Suyash</i></font></center>
</p>
</body>
</html>
