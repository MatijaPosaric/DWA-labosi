<!DOCTYPE html>

<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
<h2>Prethodni....Sljedeći</h2></br>
<?php

$user_name = "root";
$password = "";
$database = "dwa";
$server = "localhost";

$connection = mysql_connect($server, $user_name, $password);
$db = mysql_select_db($database, $connection);

if ($db) {
mysql_query("SET NAMES 'utf8'");
$sql = "SELECT * FROM upispacijenta";
$result = mysql_query($sql);
$total_records = mysql_num_rows($result);

$rows = array();

if($total_records >= 1){
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
    $rows[] = $row;
  }
}
  
mysql_close($connection);
  }
 
?>

<p>
					Broj: <span id="broj"></span><br />
					Ime: <span id="ime"></span><br />
					Prezime: <span id="prezime"></span><br />
					Krvna grupa: <span id="krvnagrupa"></span><br />
				</p>
				<input id="prethodni" type="button" value="Previous"/>
				<input id="sljedeci" type="button" value="Next"/>
				</div>
<footer>
<div class="futer column column-12">
<hr>
<p>Copyright &copy; ZKD, 2014</p>
</div>
</footer>
</body>
</html>

<script>

				var data = <?php  echo json_encode($rows); ?>;
				var i = 0;
				function prikaziPacijenta() {
					
					document.getElementById('broj').innerHTML = i;
					document.getElementById('ime').innerHTML = data[i].Ime;
					document.getElementById('prezime').innerHTML = data[i].Prezime;
					document.getElementById('krvnagrupa').innerHTML = data[i].Krvnagrupa;
				}
				function prethodni () {
				if (i>0) i=i-1;
					prikaziPacijenta();
				}
				
				function sljedeci () {
				if (i<(data.length-1)) i=i+1;
					prikaziPacijenta();
				}
				prikaziPacijenta();
				
				
				
					$("#prethodni").click(function() {
						prethodni();
					});
				

			
					$("#sljedeci").click(function() {
						sljedeci();
					});
				
	</script>
	