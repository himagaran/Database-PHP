<?php

$pagename="Add a Studio";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";

echo "<body>";

echo "<form method=post action=savestudio.php>" ;
echo "<table border=0 cellpadding=10>";

echo "<tr><td>*Studio Id Number</td>";
echo "<td><input type=text name=studioId size=35></td></tr>";

echo "<tr><td>*Studio Name </td>";
echo "<td><input type=text name=studioName size=35></td></tr>";

echo "<tr><td>*Studio Address </td>";
echo "<td><input type=text name=studioAddress size=35></td></tr>";

echo "<tr><td>*Studio Postcode</td>";
echo "<td><input type=text name=studioPostCode size=35></td></tr>";

echo "<tr><td>*Telephone Number </td>";
echo "<td><input type=text name=studioTelNo size=35></td></tr>";

echo "<tr><td><input type=submit value='Add Studio'></td>";
echo "<td><input type=reset value='Clear Form'></td></tr>";
echo "</table>";
echo "</form>" ;

echo "</body>";
?>