<!DOCTYPE html>

<html>

<head>
 <meta charset="UTF-8" />
 <title>ZKD</title>
 <link rel="stylesheet" href="stil.css" />
 <meta name="viewport" content="width= device-width, initial-scale = 1.0">
 </head>
 
<body>
<div class="header column-13">
<div class="logo column column-6">
 <img src="images/logo.png" style="height:80px; width:200px;">
 </div>
 <div class="login column column-6">
 </br>
 <?php 
 echo $_GET["username"]; 
 echo "&nbsp;&nbsp;";
 ?>
 <form action="logout.php">
    <input type="submit" value="Odjava" style="display: inline;">
</form>
 </div>
 </div>
<div class="content-left column column-4">
<ul style="list-style-type: none;">
    <li style="padding-bottom: 10px;"><a href="login.html">Početna</a></li>
    <li style="padding-bottom: 10px;"><a href="popispacijenata.html">Popis pacijenata</a></li>
    <li style="padding-bottom: 10px;"><a href="#">Kontakt</a></li>
</ul>
</div>
<div class="content-right column column-6">
<a href="#Osobni podaci">Osobni podaci</a>
<a href="#Podaci o školovanju">Podaci o školovanju</a>
<a href="#Podaci o radnom iskustvu">Podaci o radnom iskustvu</a>
<a href="#Znanja i vještine">Znanja i vještine</a>
</br>
<h2>ŽIVOTOPIS</h2>
<h3></br><a name="Osobni podaci">Osobni podaci</a></h3>
<p>Ime: Matija</br>
Prezime: Posarić</br>
Mjesto rođenja: Zagreb</br>
Datum rođenja: 15.07.1991.</br>
</p>
<h3><a name="Podaci o školovanju">Podaci o školovanju</a></h3>
<p>Osnovna škola: Pavleka Miškine</br>
Srednja škola: X.gimnazija "Ivan Supek"</br>
Fakultet: Tehničko Veleučilište u Zagrebu</br>
</p>
<h3><a name="Podaci o radnom iskustvu">Podaci o radnom iskustvu</a></h3>
<p>Ledo: 4 mjeseca</br>
Biolab: 4 mjeseca</br>
Kika: tjedan dana</br>
Baumax: tjedan dana</br>
Alukal: jedan dan</br>
</p>
<h3><a name="Znanja i vještine">Znanja i vještine</a></h3>
<ul style="color:#88B51E; font-size:18px;"><li>dobro poznavanje engleskog jezika</li>
<li>rad na računalu</li>
<li>vozačka dozvola B kategorije</li>
</ul>
</div>
</body>

<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>

</html>