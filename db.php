 <?php 
 $connecttomyserver = mysql_connect("localhost","root",""); 
if(!$connecttomyserver)
die("failed".mysql_error());
$conndb = mysql_select_db("ntv",$connecttomyserver);
if(!$conndb)
die("failed".mysql_error());
?>