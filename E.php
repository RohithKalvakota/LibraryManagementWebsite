<html>
<head>
<style>
a:link {
  color: pink;
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
.tr
{font-size:25px;
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
<body><center>
<h1><b><u>Download the free E-resources</u></b></h1>
<h4 style="color:powderblue">"Knowledge comes by sharing with everyone and making everyone knowledgable is our goal"</h4>
<p class="tr"><u>Graphics</u></p>
<table width="100%">
<tr>
<td align="center"><img src="E-RESOURCE1.jpg"><br><br><a href="E-RESOURCE1.docx" download="Ray Tracing" title="Ray Tracing">Download</a></td>
<td align="center"><img src="E-RESOURCE2.jpg"><br><br><a href="E-RESOURCE2.docx" download="Real Time Rendering" title="Real Time Rendering">Download</a></td>
<td align="center"><img src="E-RESOURCE3.jpg"><br><br><a href="E-RESOURCE3.docx" download="Graphics and Multimedia" title="Graphics and Multimedia">Download</a></td>
<td align="center"><img src="E-RESOURCE4.jpg"><br><br><a href="E-RESOURCE4.docx" download="Grid Systems" title="Raster Graphics">Download</a></td>
<td align="center"><img src="E-RESOURCE5.jpg"><br><br><a href="E-RESOURCE5.docx" download="OpenGL" title="Computer Graphics">Download</a></td>
</tr>
</table>

<p class="tr"><u>Reference books</u></p>
<table width="100%">
<tr>
<td align="center">Mathematics<a href="E-RESOURCE6.docx" download="Mathematics">     (Download)</a></td>
</tr>
<tr>
<td align="center">Physics<a href="E-RESOURCE7.docx" download="Physics">    (Download)</a></td>
</tr>
<tr>
<td align="center">Chemistry<a href="E-RESOURCE8.docx" download="Chemistry">    (Download)</a></td>
</tr>
<tr>
<td align="center">Biology<a href="E-RESOURCE9.docx" download="Biology">    (Download)</a></td>
</tr>
<tr>
<td align="center">Economics<a href="E-RESOURCE10.docx" download="Economics">    (Download)</a></td>
</tr>
<tr>
<td align="center">Psychology<a href="E-RESOURCE11.docx" download="Psychology">    (Download)</a></td>
</tr>
</table>
<br><br>
<h1><b><u>Upload E-resources and let others gain knowledge</u></b></h1>
<table>
<tr>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <td align="justify" >Select Document to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Document" name="submit"></td>
</tr>
</table>
</form>
</center><br><br>
<hr>
<p>
<center>
  &copy All Rights Reserved. Site developed by<i><font face="courier" color="ivory"> K.Rohith and G.Suyash</i></font></center>
</p>
</body>
</html>