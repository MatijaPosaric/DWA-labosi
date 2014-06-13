<!DOCTYPE html>

<html>

<head>
 <meta charset="UTF-8" />
 <title>ZKD</title>
 <link rel="stylesheet" href="stil.css" />
 <meta name="viewport" content="width= device-width, initial-scale = 1.0">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
 <!--<div id="reklama">
 <div id="iks">
 <img src="images/x.png" style="z-index:10000; float:right;">
 </div>
 </div>-->
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
</ul>
</div>
<div class="content-right column column-6">
<div id="sidra" style="float:right; padding-top:100px;">
<a href="#Osobni_podaci">Osobni podaci</a>
<a href="#Podaci_o_školovanju">Podaci o školovanju</a>
<a href="#Podaci_o_radnom_iskustvu">Podaci o radnom_iskustvu</a>
<a href="#Znanja_i_vještine">Znanja i vještine</a>
</br>
</div>
<h2>ŽIVOTOPIS</h2>
<div id="osobnipodaci"><h3></br><a name="Osobni_podaci">Osobni podaci</a></h3></div>
<div id="osobnipodacitekst"><p>Ime: Matija</br>
Prezime: Posarić</br>
Mjesto rođenja: Zagreb</br>
Datum rođenja: 15.07.1991.</br>
</p>
</div>
<div id="podacioskolovanju"><h3><a name="Podaci_o_školovanju">Podaci o školovanju</a></h3></div>
<div id="podacioskolovanjutekst"><p>Osnovna škola: Pavleka Miškine</br>
Srednja škola: X.gimnazija "Ivan Supek"</br>
Fakultet: Tehničko Veleučilište u Zagrebu</br>
</p>
</div>
<div id="podacioradnomiskustvu"><h3><a name="Podaci_o_radnom_iskustvu">Podaci o radnom iskustvu</a></h3></div>
<div id="podacioradnomiskustvutekst"><p>Ledo: 4 mjeseca</br>
Biolab: 4 mjeseca</br>
Kika: tjedan dana</br>
Baumax: tjedan dana</br>
Alukal: jedan dan</br>
</p>
</div>
<div id="znanjaivjestine"><h3><a name="Znanja_i_vještine">Znanja i vještine</a></h3></div>
<div id="znanjaivjestinetekst"><ul style="color:#88B51E; font-size:18px;"><li>dobro poznavanje engleskog jezika</li>
<li>rad na računalu</li>
<li>vozačka dozvola B kategorije</li>
</ul>
</div>
</div>
<script>
 $(document).ready(function() {
        $('#osobnipodaci').click(function() {
                $('#osobnipodacitekst').toggle("fast");
        });
		$('#podacioskolovanju').click(function() {
                $('#podacioskolovanjutekst').toggle("fast");
        });
		$('#podacioradnomiskustvu').click(function() {
                $('#podacioradnomiskustvutekst').toggle("fast");
        });
		$('#znanjaivjestine').click(function() {
                $('#znanjaivjestinetekst').toggle("fast");
        });
		$('#iks').click(function() {
                $('#reklama').toggle("fast");
        });
    });
 </script>
<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>
</body>
</html>