<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}
th
{
background-color:Aliceblue;
}
table, td,th{
    border: 2px solid black;
    padding: 5px;
    
  
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$user_name = "root";
$password = "rgukt123";
$database = "ecs";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
switch($q){
case 1:
$r="Mess";
break;
case 2:
$r="Placement";
break;
case 3:
$r="Network";
break;
case 4:
$r="HOD";
break;
case 5:
$r="Sports";
break;

}
$SQL = "SELECT a.name,count(c.complaint) FROM admins a,dept_name d,complaint c where d.name='".$r."' and a.did=d.did and c.aid=a.id";
$result = mysql_query($SQL);
echo "<table>";
echo "<tr>";
echo "<th>"."Name"."</th>";
echo "<th>"."No. of Complaints"."</th>";
echo "<th>"."solved complaints"."</th>";
echo "<th>"."working percentage"."</th>";
echo "</tr>";
while ($row = mysql_fetch_array($result))
{
    echo "<tr>";
        echo "<td>".$row['name']."</td>";
    	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[1]."</td>";
	$a=$row[1]/$row[1];
	$a=$a*100;
	echo "<td>".$a."</td>";
    echo "</tr>";

}
echo "</table>";
mysql_close($db_handle);
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}
?>
</body>
</html>
