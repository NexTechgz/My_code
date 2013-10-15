<?php
// WYCLIFF HAS EDITED THIS CODE 
$p= mysql_connect("localhost","root","");
$pp=mysql_select_db("cert");
$pop="select * from loc";
$ppop=mysql_query($pop);
echo "<table>";
while($u=mysql_fetch_array($ppop))
{
echo "<tr><td>{$u[0]}</td></tr>";
}
echo "</table>";

echo "</table>";
?>
