<!DOCTYPE html>
<html>

<head>
<style>
.notfirst:hover {
    background-color: LightSkyBlue;
	color: white;
}
table, th, td {
    border: 3px solid black;
    padding: 3px;
}
table {
    border-spacing: 15px;
}
</style>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 258px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
</style>
</head>

<body>
<ul>
  <li><a href="final.php">HOME</a></li>
   <li><a href="teams.php">TEAMS</a></li>
   <li><a href="Schedule.php">SCHEDULE</a></li>
	<li><a href="points_table.php">POINTS TABLE</a></li>
	<li><a href="statistics.php">STATISTICS</a></li>
</ul>
<h1 style="font-size:400%"><center>SCHEDULE</center></h1>
<?php

echo "<table style=\"width:100%\">";
  echo "<tr style=\"background-color:black\">";
    echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."MATCH NO."."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."MATCH TYPE"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."TEAM 1"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."TEAM 2"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."DATE"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."DAY"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."TIME"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."VENUE"."</font>"."</th>";
	echo "<th>"."<font size=\"5\" face=\"cambria\" color=\"yellow\">"."RESULT"."</font>"."</th>";
  echo "</tr>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cricket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 

$sql = "SELECT match_no,match_type,team_1,team_2,date,day,time,venue,result FROM schedule";
$result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
        $data=$row["match_no"];
        $team1=$row["team_1"];
        $team2=$row["team_2"];
        $type=$row["match_type"];
        $day=$row["day"];
        $date=$row["date"];
        $venue=$row["venue"];
		echo "<tr onclick=\"window.document.location='new.php?data=$data&team1=$team1&team2=$team2&type=$type&day=$day&date=$date&venue=$venue';\" class = \"notfirst\">";
         echo "<td>".$row["match_no"]."</td>";
		 echo "<td>".$row["match_type"]."</td>";
		 echo "<td>".$row["team_1"]."</td>";
		 echo "<td>".$row["team_2"]."</td>";
		 echo "<td>".$row["date"]."</td>";
		 echo "<td>".$row["day"]."</td>";
		 echo "<td>".$row["time"]."</td>";
		 echo "<td>".$row["venue"]."</td>";
		 echo "<td>".$row["result"]."</td>";
		 echo '</a>'."</tr>";
     }
echo "</table>";

$conn->close();
?>  

</body>
</html>
