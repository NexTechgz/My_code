<?php
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
echo "<table align=\"center\">";
echo "<tr><td>Loop<td></tr>";
echo "<tr><td>Moop<td></tr>";
echo "<tr><td>Noop<td></tr>";
echo "<tr><td>WOOP<td></tr>";
echo "<tr><td>VWET<td></tr>";
echo "</table>";
?>