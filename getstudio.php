<?php
include ("database.php");
 
$pagename="Studios Confirmation";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";
 
echo "<body>";
 
$query = "SELECT * FROM studio ";
 
$result = mysqli_query($connect, $query);

 
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $sid = $row['studioId'];
    $sname = $row['studioName'];
    $saddress = $row['studioAddress'];
    $spcode = $row['studioPostCode'];
    $stel = $row['studioTelNo'];
 
    echo $sid . ") " . $sname  ."<br>" .$saddress . ", " .$spcode ."<br>" .$stel. "<br><hr><br>";
    
}
echo "</body>";
?>