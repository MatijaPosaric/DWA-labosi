<!DOCTYPE html>

<html>

<head>
 <meta charset="UTF-8" />
 <title>ZKD</title>
 <link rel="stylesheet" href="stil.css" />
 <meta name="viewport" content="width= device-width, initial-scale = 1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
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
 <input type="text" id="pretrazivanjepacijenata" placeholder="Pretraži pacijente" >

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
<div class="content-right column column-6">

<table id="tablicapacijenata" style="width: 600px;">
<tr><th>Ime</th><th>Prezime</th><th>Spol</th><th>Datum rođenja</th><th>Mobitel</th><th>Adresa</th><th>Mjesto</th></tr>
<tr><td>Marina</td><td>Milinović</td><td>Ž</td><td>12.12.1961</td><td>099/6669101</td><td>Raosa, Ivana 4</td><td>Zagreb</td></tr>
<tr><td>Katarina</td><td>Cindrić</td><td>Ž</td><td>9.7.1991</td><td>022/4547668</td><td>Ratarska 11</td><td>Zagreb</td></tr>
<tr><td>Josip</td><td>Bošnjak</td><td>M</td><td>25.4.1951</td><td>099/2720846</td><td>Andraševečka 8</td><td>Zagreb</td></tr>
<tr><td>Vjeran</td><td>Rukavina</td><td>M</td><td>27.5.1959</td><td>031/6298645</td><td>Remetinec 11</td><td>Zagreb</td></tr>
<tr><td>Lino</td><td>Kučić</td><td>M</td><td>10.5.1960</td><td>021/4133537</td><td>Ribnjak 27</td><td>Zagreb</td></tr>
<tr><td>Lino</td><td>Kučić</td><td>M</td><td>10.5.1960</td><td>021/4133537</td><td>Ribnjak 27</td><td>Zagreb</td></tr>
<tr><td>Štefica</td><td>Ostojić</td><td>Ž</td><td>17.3.1937</td><td>091/7121688</td><td>Redovka 9</td><td>Zagreb</td></tr>
<tr><td>Ivan</td><td>Kušan</td><td>M</td><td>19.7.1979</td><td>098/1667148</td><td>Marinovečka 12</td><td>Zagreb</td></tr>
<tr><td>Hrvoje</td><td>Radić</td><td>M</td><td>6.6.1944</td><td>098/7317883</td><td>Dore Pejačević 28</td><td>Zagreb</td></tr>
<tr><td>Elena</td><td>Mandić</td><td>Ž</td><td>25.9.1992</td><td>098/6248116</td><td>Rebrovac 23</td><td>Zagreb</td></tr>
<tr><td>Vjeran</td><td>Kušec</td><td>M</td><td>13.3.1978</td><td>01/9155118</td><td>Donadinieva 30</td><td>Zagreb</td></tr>
<tr><td>Kristina</td><td>Novosel</td><td>Ž</td><td>21.6.1937</td><td>031/5618736</td><td>Sakačeva 31</td><td>Zagreb</td></tr>
<tr><td>Saša</td><td>Lučić</td><td>M</td><td>8.6.1974</td><td>022/7612321</td><td>Markovićev Brijeg 21</td><td>Zagreb</td></tr>
<tr><td>Kristina</td><td>Galić</td><td>Ž</td><td>27.3.1962</td><td>021/1019527</td><td>Rakeki 16</td><td>Zagreb</td></tr>
<tr><td>Petra</td><td>Babić</td><td>Ž</td><td>18.5.1975</td><td>01/4099326</td><td>Martijanečka 27</td><td>Zagreb</td></tr>
<tr><td>Davor</td><td>Vuković</td><td>M</td><td>27.7.1948</td><td>091/2187950</td><td>Andrića, Ive 13</td><td>Zagreb</td></tr>
<tr><td>Petra</td><td>Marić</td><td>Ž</td><td>15.2.1983</td><td>099/6347122</td><td>Rudina 22</td><td>Zagreb</td></tr>
<tr><td>Ana</td><td>Vuković</td><td>Ž</td><td>20.11.1978</td><td>098/7492266</td><td>Martinovski Put 13</td><td>Zagreb</td></tr>
<tr><td>Katarina</td><td>Vukić</td><td>Ž</td><td>8.11.1970</td><td>092/3128407</td><td>Drniška 5</td><td>Zagreb</td></tr>
<tr><td>Rajka</td><td>Jović</td><td>Ž</td><td>16.10.1943</td><td>092/5073471</td><td>Ratkaja, Jurja 5</td><td>Zagreb</td></tr>
<tr><td>Josip</td><td>Blažević</td><td>M</td><td>2.6.1991</td><td>01/8082961</td><td>Ribnjak 17</td><td>Zagreb</td></tr>
<tr><td>Zdenka</td><td>Cindrić</td><td>Ž</td><td>21.9.1940</td><td>040/4598422</td><td>Badljevinski Put 21</td><td>Zagreb</td></tr>
<tr><td>Krešimir</td><td>Lovrić</td><td>M</td><td>21.4.1940</td><td>091/6097983</td><td>Rep. Austrije 3</td><td>Zagreb</td></tr>
<tr><td>Gordan</td><td>Babić</td><td>M</td><td>2.7.1948</td><td>095/2383973</td><td>Rebar 12</td><td>Zagreb</td></tr>
<tr><td>Hrvoje</td><td>Vuk</td><td>M</td><td>1.10.1991</td><td>021/5415982</td><td>Dramaljska 3</td><td>Zagreb</td></tr>
<tr><td>Ivana</td><td>Ilić</td><td>Ž</td><td>24.8.1940</td><td>098/6754957</td><td>Rimski Put 28</td><td>Zagreb</td></tr>
</table>
<script>
var $rows = $('#tablicapacijenata tr');
$('#pretrazivanjepacijenata').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>	

</div>
<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>
</body>
</html>