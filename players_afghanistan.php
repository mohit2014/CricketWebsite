<!DOCTYPE html>
<html>
<head>
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

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 150px;
    margin-left: 200px;
}
</style>
<body>
<ul>
  <li><a href="final.php">HOME</a></li>
   <li><a href="teams.php">TEAMS</a></li>
   <li><a href="Schedule.php">SCHEDULE</a></li>
	<li><a href="points_table.php">POINTS TABLE</a></li>
	<li><a href="statistics.php">STATISTICS</a></li>
</ul>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cricket";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT PROFILE,NAME,SPECIALITY,TYPE,TEAM FROM players WHERE TEAM='Afghanistan' order by TYPE";
    $result = $conn->query($sql);
	$use='All Rounder';
	echo "<h1>"."<font size=\"30\">"."<center>"."All-Rounders"."</center>"."</h1>";
	echo "<table>";
          while($row = $result->fetch_assoc()) {
		  if($row["TYPE"]!=$use)
			break;
			$name=$row["NAME"];
			$team=$row["TEAM"];
			echo "<tr onclick=\"window.document.location='players_info.php?name=$name&team=$team';\" class = \"notfirst\">";
			echo "<td>";?> <img src="<?php echo $row["PROFILE"]; ?>" height="240" width="160"> <?php echo "</td>";
		  echo "<td>"."<h1>".$row["NAME"]."</h1>";
		  echo "<p>".$row["SPECIALITY"]."</p>"."</td>";
		  echo "</tr>";
     }
	 echo "</table>";
	 $use='Batsman';
	 echo "<h1>"."<font size=\"30\">"."<center>"."Batsmen"."</center>"."</h1>";
	 echo "<table>";
	 do{
		  if($row["TYPE"]!=$use)
			break;
			$name=$row["NAME"];
			$team=$row["TEAM"];
			echo "<tr onclick=\"window.document.location='players_info.php?name=$name&team=$team';\" class = \"notfirst\">";
			echo "<td>";?> <img src="<?php echo $row["PROFILE"]; ?>" height="240" width="160"> <?php echo "</td>";
		  echo "<td>"."<h1>".$row["NAME"]."</h1>";
		  echo "<p>".$row["SPECIALITY"]."</p>"."</td>";
		  echo "</tr>";
     }while($row = $result->fetch_assoc()) ;
	 echo "</table>";
	 $use='Bowler';
	 echo "<h1>"."<font size=\"30\">"."<center>"."Bowlers"."</center>"."</h1>";
	 echo "<table>";
	 do{
			$name=$row["NAME"];
			$team=$row["TEAM"];
			echo "<tr onclick=\"window.document.location='players_info.php?name=$name&team=$team';\" class = \"notfirst\">";
			echo "<td>";?> <img src="<?php echo $row["PROFILE"]; ?>" height="240" width="160"> <?php echo "</td>";
		  echo "<td>"."<h1>".$row["NAME"]."</h1>";
		  echo "<p>".$row["SPECIALITY"]."</p>"."</td>";
		  echo "</tr>";
     }while($row = $result->fetch_assoc()) ;
	 echo "</table>";
     $conn->close();
     
?> 
</body>
</html>