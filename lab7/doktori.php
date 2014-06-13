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
<h2>Detalji o doktorima</h2></br>

<?php

echo'
<form action="doktori.php" method="get">
Ime: <input type="text" name="ime"><br>
Prezime: <input type="text" name="prezime"><br><br>
<input type="submit" value="Submit">
</form>
';

if (isset($_GET['ime'],$_GET['prezime'])){

$ime=$_GET["ime"];

$prezime=$_GET["prezime"];


$string = file_get_contents("http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php");

$json_a = json_decode($string, true);

echo '<br><br>';

foreach ($json_a as $person_name => $person_details) {

if(strlen($ime)>0 && strlen($prezime)>0){

if(strtolower($person_details['ime']) == strtolower($ime) AND strtolower($person_details['prezime']) == strtolower($prezime))
    { 
    echo "ID: " .$person_details['id']. "<br>";
	echo "Područni ured: " .$person_details['podrucni_ured']. "<br>";
	echo "Šifra ustanove: " .$person_details['sifra_ustanove']. "<br>";
	echo "Naziv ustanove: " .$person_details['naziv_ustanove']. "<br>";
	echo "Id broj: " .$person_details['id_broj']. "<br>";
	echo "Prezime: " .$person_details['prezime']. "<br>";
	echo "Ime: " .$person_details['ime']. "<br>";
	echo "Broj osiguranika: " .$person_details['broj_osiguranika']. "<br>";
	echo "Broj pošte: " .$person_details['broj_poste']. "<br>";
	echo "Naziv pošte: " .$person_details['naziv_poste']. "<br>";
	echo "Ulica: " .$person_details['ulica']. "<br>";
	echo "Kućni broj: " .$person_details['kucni_broj']. "<br>";
	echo "Grad: " .$person_details['grad']. "<br>";
	echo "<br><br>";
    }
}else{
if(strtolower($person_details['ime']) == strtolower($ime) OR strtolower($person_details['prezime']) == strtolower($prezime))
    {
        
    echo "ID: " .$person_details['id']. "<br>";
	echo "Područni ured: " .$person_details['podrucni_ured']. "<br>";
	echo "Šifra ustanove: " .$person_details['sifra_ustanove']. "<br>";
	echo "Naziv ustanove: " .$person_details['naziv_ustanove']. "<br>";
	echo "Id broj: " .$person_details['id_broj']. "<br>";
	echo "Prezime: " .$person_details['prezime']. "<br>";
	echo "Ime: " .$person_details['ime']. "<br>";
	echo "Broj osiguranika: " .$person_details['broj_osiguranika']. "<br>";
	echo "Broj pošte: " .$person_details['broj_poste']. "<br>";
	echo "Naziv pošte: " .$person_details['naziv_poste']. "<br>";
	echo "Ulica: " .$person_details['ulica']. "<br>";
	echo "Kućni broj: " .$person_details['kucni_broj']. "<br>";
	echo "Grad: " .$person_details['grad']. "<br>";
	echo "<br><br>";
    }
}
}
}else{
}
?>

</div>
<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>
</body>
</html>