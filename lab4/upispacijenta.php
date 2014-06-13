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
<div class="content-right column column-6" style="color:white; font-size:18px;">
<?php
echo '<h2>Podaci o pacijentu</h2></br>';
echo 'Ime: '.$_POST["ime"];
echo '</br>';
echo 'Prezime: '.$_POST["prezime"];
echo '</br>';
echo 'Spol: '.$_POST["spol"];
echo '</br>';
echo 'Datum rođenja: '.$_POST["datumrodjenja"];
echo '</br>';
echo 'Mjesto rođenja: '.$_POST["mjestorodjenja"];
echo '</br>';
echo 'Adresa i mjesto stanovanja: '.$_POST["mjestostanovanja"];
echo '</br>';
echo 'Krvna grupa: '.$_POST["krvnagrupa"];
echo '</br>';
echo 'Prijašnje medicinske tegobe: '.$_POST["tegobe"];
echo '</br>';
if(!empty($_POST["popistegoba"])){echo 'Popis medicinskih tegoba koje pacijent ima: '.$_POST["popistegoba"];echo '</br>';}
echo 'Korištenje lijekova: '.$_POST["lijekovi"];
echo '</br>';
if(!empty($_POST["popislijekova"])){echo 'Popis lijekova koje pacijent koristi: '.$_POST["popislijekova"];echo '</br>';}
echo '</br>';echo '</br>';

$link = mysqli_connect("localhost","root","","dwa") or die("Gršska prilikom spajanja na bazu podataka" . mysqli_error($link));
mysqli_set_charset($link,"utf8");
$query = "INSERT INTO upispacijenta(Ime,Prezime,Spol,Datumrodjenja,Mjestorodjenja,Mjestostanovanja,Krvnagrupa,Medicinsketegobe,Popistegoba,Lijekovi,Popislijekova) VALUES ('".$_POST["ime"]."','".$_POST["prezime"]."','".$_POST["spol"]."','".$_POST["datumrodjenja"]."','".$_POST["mjestorodjenja"]."','".$_POST["mjestostanovanja"]."','".$_POST["krvnagrupa"]."','".$_POST["tegobe"]."','".$_POST["popistegoba"]."','".$_POST["lijekovi"]."','".$_POST["popislijekova"]."');";
if(!mysqli_query($link,$query)){die('Greška prilikom izvrsavanja upita!');}
else{echo 'Uspješno dodano u bazu! :)';}
mysqli_close($link);

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