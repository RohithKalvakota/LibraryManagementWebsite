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
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$docFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is a document" . $check["mime"] . ".<br><br>";
        $uploadOk = 1;
    } else {
        echo "File is not an document.<br><br>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br><br>";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 100000) {
    echo "Sorry, your file is too large.<br><a href=E.php>Go to E-resources Page<br><br></a>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br><a href=E.php>Go to E-resources Page<br><br></a>";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br><br>
         <a href=E.php>Go to E-resources Page</a>";
    } else {
        echo "Sorry, there was an error uploading your file. <br><a href=E.php>Go to E-resources Page</a>";
    }
}
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

