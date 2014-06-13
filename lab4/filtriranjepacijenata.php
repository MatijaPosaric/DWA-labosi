<!DOCTYPE html>

<html>
<head>
 <meta charset="UTF-8" />
 <title>ZKD</title>
 <link rel="stylesheet" href="stil.css" />
 <meta name="viewport" content="width= device-width, initial-scale = 1.0">
 </head>
 
<body>
<?php
session_start();
if(!isset($_SESSION['myusername'])){
header('Location:login.html');
}
?>
<div class="header column-13">
<div class="logo column column-6">
 <img src="images/logo.png" style="height:80px; width:200px;">
 </div>
 <div class="login column column-6">
 </br>
 <?php
echo $_SESSION['myusername']; 
 echo "&nbsp;&nbsp;";
 ?>
 <form action="logout.php">
    <input type="submit" value="Odjava" style="display: inline;">
</form>
 </div>
 </div>
<div class="content-left column column-4">
<ul style="list-style-type: none;">
    <li style="padding-bottom: 10px;"><a href="login.php">Početna</a></li>
    <li style="padding-bottom: 10px;"><a href="popispacijenata.php">Popis pacijenata</a></li>
    <li style="padding-bottom: 10px;"><a href="podaciopacijentu.php">Upis pacijenta</a></li>
	<li style="padding-bottom: 10px;"><a href="filtriranjepacijenata.php">Filtriranje pacijenata</a></li>
	<li style="padding-bottom: 10px;"><a href="barchart.php">Bar chart</a></li>
</ul>
</div>
<div class="content-right column column-6" style="color:white;">
<h2>Filtriranje pacijenata kroz PDF</h2></br>
<form action="filtriranjepdf.php" method="post">
  Ime: <input type="text" name="ime"><br>
  Prezime: <input type="text" name="prezime"><br>
  Krvna grupa: <select name="krvnagrupa" required="required">
  <option value="nothing" selected="selected">Odaberi krvnu grupu</option>
  <option value="A pozitivna">A +</option>
  <option value="A negativna">A -</option>
  <option value="B pozitivna">B +</option>
  <option value="B negativna">B -</option>
  <option value="AB pozitivna">AB +</option>
  <option value="AB negativna">AB -</option>
  <option value="0 pozitivna">0 +</option>
  <option value="0 negativna">0 -</option>
</select></br></br></br>
  <input type="submit" value="Submit">
</form>
</div>
<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>
</body>
</html>