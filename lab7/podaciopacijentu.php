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
	<li style="padding-bottom: 10px;"><a href="doktori.php">Doktori</a></li>
	<li style="padding-bottom: 10px;"><a href="previousnext.php">Pacijenti</a></li>
</ul>
</div>
<div class="content-right column column-6" style="color:white;">
<h2>Formular za upis pacijenata</h2></br>
<form action="upispacijenta.php" method="post">
  Ime: <input type="text" name="ime" required><br>
  Prezime: <input type="text" name="prezime" required><br>
  Spol: <input type="radio" name="spol" value="m" required> M
        <input type="radio" name="spol" value="z"> Ž<br>
  Datum rođenja: <input type="date" name="datumrodjenja" required><br>
  Mjesto rođenja: <input type="text" name="mjestorodjenja" required><br>
  Adresa i mjesto stanovanja: <input type="text" name="mjestostanovanja" required><br>
  Krvna grupa: <select name="krvnagrupa" required>
  <option value="A pozitivna">A +</option>
  <option value="A negativna">A -</option>
  <option value="B pozitivna">B +</option>
  <option value="B negativna">B -</option>
  <option value="AB pozitivna">AB +</option>
  <option value="AB negativna">AB -</option>
  <option value="0 pozitivna">0 +</option>
  <option value="0 negativna">0 -</option>
</select></br>


Ima li prijašnjih medicinskih tegoba (srčane tegobe, tlak, virusne bolesti (Hepatits, HIV)):
<input type="radio" name="tegobe" value="da" required> Da
<input type="radio" name="tegobe" value="ne"> Ne<br>
  Ako je odgovor na prijašnje pitanje "Da" popuniti:</br>
Koje tegobe osoba ima: <input type="text" name="popistegoba"><br>
  Je li osoba alergična na lijekove: <input type="radio" name="lijekovi" value="da" required> Da
  <input type="radio" name="lijekovi" value="ne"> Ne
<input type="radio" name="lijekovi" value="nezna"> Ne zna<br>
  Ako je odgovor na prijašnje pitanje "Da" popuniti:</br>
Na koje lijekove je osoba alergična: <input type="text" name="popislijekova"><br><br>
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