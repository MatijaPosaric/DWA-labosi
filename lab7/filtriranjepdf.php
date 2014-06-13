<?php
//PDF USING MULTIPLE PAGES
//FILE CREATED BY: Carlos José Vásquez Sáez
//YOU CAN CONTACT ME: carlos@magallaneslibre.com
//FROM PUNTA ARENAS, MAGALLANES
//INOVO GROUP - http://www.inovo.cl

define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

//Connect to your database
//include("conectmysql.php");

//Create new pdf file
$pdf=new FPDF();

//Open file
$pdf->Open();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page
$y_axis_initial = 25;
$row_height = 20;
$y_axis = 10;

//print column titles for the actual page
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Cell(40, 6, 'Ime', 1, 0, 'L', 1);
$pdf->Cell(40, 6, 'Prezime', 1, 0, 'L', 1);
$pdf->Cell(40, 6, 'Krvna grupa', 1, 0, 'R', 1);

$y_axis = $y_axis + $row_height;

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dwa"; // Database name 
$tbl_name="upispacijenta"; // Table name


if(isset($_POST['ime'])) {
$ime=$_POST['ime'];
}
else{
$ime=" ";
}

if(isset($_POST['prezime'])) {
$prezime=$_POST['prezime'];
}
else{
$prezime=" ";
}

if(($_POST['krvnagrupa'])=='nothing') {  //isset($_POST['krvnagrupa']
$krvnagrupa=" ";
}
else{
$krvnagrupa= $_POST['krvnagrupa'];
}
// Connect to server and select databse.

//$konekcija=mysql_connect("$host", "$username", "$password")or die("Nije se moguće spojiti"); 
//mysql_select_db("$db_name")or die("Nije moguće pronaći bazu");

$connection=mysqli_connect("localhost","root","","dwa") or die ("Neuspjesno spajanje na server"); 

mysqli_set_charset($connection, "utf8"); //da upis radi i sa utf-8 znakovima
mysql_query("set names 'utf8'");

//Select the Products you want to show in your PDF file
//$result=mysql_query('select Code, Name, Price from Products ORDER BY Code', $link);

$sql="SELECT * FROM $tbl_name WHERE (Ime='$ime') OR (Prezime='$prezime') OR (Krvnagrupa='$krvnagrupa')";
//$result=mysql_query($sql);
$result=mysqli_query($connection,$sql);
//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;

while($row = mysqli_fetch_array($result))
{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();

        //print column titles for the current page
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(25);
        $pdf->Cell(40, 6, 'Ime', 1, 0, 'L', 1);
        $pdf->Cell(40, 6, 'Prezime', 1, 0, 'L', 1);
        $pdf->Cell(40, 6, 'Krvna grupa', 1, 0, 'L', 1);
        
        //Go to next row
        $y_axis = $y_axis + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }
	
    $i = $row['Ime'];
    $p = $row['Prezime'];
    $k = $row['Krvnagrupa'];
	
	setlocale(LC_ALL,'hr_HR.utf8'); 
    $converted_p = iconv('UTF-8', 'ISO-8859-2', $p);

    $pdf->SetY($y_axis);
    $pdf->SetX(25);
    $pdf->Cell(40, 6, $i, 1, 0, 'L', 1);
    $pdf->Cell(40, 6, $converted_p, 1, 0, 'L', 1);
    $pdf->Cell(40, 6, $k, 1, 0, 'R', 1);

    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
}

mysqli_close($connection);

//Create file
$pdf->Output();
?>