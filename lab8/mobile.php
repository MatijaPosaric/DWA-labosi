<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <title>Mobilna verzija</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="lib/jquery-1.6.4.js"></script>
        <script src="lib/jquery.mobile-1.1.0.js"></script>
        <link href="src/css/jquery.mobile.structure-1.1.0.css" rel="stylesheet" />
        <link href="src/css/jquery.mobile.theme-1.1.0.css" rel="stylesheet" />
    </head>
    
    <body>
        <div data-role="page" id="page1" data-theme="c">
            <div data-role="header">
                <h1>Find patient</h1>
            </div>
            <div data-role="content">
                <form action="mobile.php" method="POST">
                    <div data-role="fieldcontain">
                        <label for="text1">Ime:</label>
                        <input type="text" id="text1" data-theme="c" />
                    </div>
                    <div data-role="fieldcontain">
                        <label for="text2">Prezime:</label>
                        <input type="text" id="text2" data-theme="c" />
                    </div>
                    <div data-role="fieldcontain">
                        <label for="text3">Krvna grupa:</label>
                        <input type="text" id="text3" data-theme="c" />
                    </div>
                    <button type="submit" value="Traži" data-role="button" data-rel="page" data-iconshadow="false" data-theme="a" data-icon="search">Traži</button>
                </form>
            </div>
            <div data-role="footer">
                <h1>Copyright ZKD</h1>
            </div>
       
		<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dwa"; // Database name 
$tbl_name="upispacijenta"; // Table name


if(isset($_POST['text1'])) {
$ime=$_POST['text1'];
}
else{
$ime=" ";
}

if(isset($_POST['text2'])) {
$prezime=$_POST['text2'];
}
else{
$prezime=" ";
}

if(isset($_POST['text3'])) {
$krvnagrupa=$_POST['text3'];
}
else{
$krvnagrupa=" ";
}

$connection=mysqli_connect("localhost","root","","dwa") or die ("Neuspjesno spajanje na server"); 

mysqli_set_charset($connection, "utf8"); //da upis radi i sa utf-8 znakovima
mysql_query("set names 'utf8'");


$sql="SELECT * FROM $tbl_name WHERE (Ime='$ime') OR (Prezime='$prezime') OR (Krvnagrupa='$krvnagrupa')";

$result=mysqli_query($connection,$sql);
		
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
    echo $row['Ime'];
    echo $row['Prezime'];
	echo $row['Krvnagrupa'];
	echo '<br>';
    }
 
		}
		?>
		</div>
    </body>

</html>