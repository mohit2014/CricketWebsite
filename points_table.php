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
    margin-left: 100px;
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
	echo "<h1>"."<font size=\"25\">"."<center>"."ICC Cricket World Cup 2015 - Points Table"."</center>"."</h1>";
	echo "<h2>"."<font size=\"15\">"."<center>"."Pool A"."</center>"."</h2>";
	echo "<table style=\"width:90%\">";
  echo "<tr style=\"background-color:black\">";
    echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">".""."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."MAT"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."WON"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."LOST"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."TIED"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."NR"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."Pts"."</font>"."</th>";
  echo "</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='New Zealand'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_new_zealand.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."New Zealand"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Australia'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_australia.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Australia"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Sri Lanka'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_sri_lanka.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Sri Lanka"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Bangladesh'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_bangladesh.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Bangladesh"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='England'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_england.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."England"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Afghanistan'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_afghanistan.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Afghanistan"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Scotland'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_scotland.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Scotland"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	 echo "</table>";
	 echo "<h2>"."<font size=\"15\">"."<center>"."Pool B"."</center>"."</h2>";
	echo "<table style=\"width:90%\">";
  echo "<tr style=\"background-color:black\">";
    echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">".""."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."MAT"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."WON"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."LOST"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."TIED"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."NR"."</font>"."</th>";
	echo "<th>"."<font size=\"3\" face=\"cambria\" color=\"yellow\">"."Pts"."</font>"."</th>";
  echo "</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='India'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_india.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."India"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='South Africa'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_south_africa.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."South Africa"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
  $sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Pakistan'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_pakistan.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Pakistan"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='West Indies'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_west_indies.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."West Indies"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Ireland'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_ireland.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Ireland"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='Zimbabwe'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_zimbabwe.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."Zimbabwe"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	$sql = "SELECT played_matches,number_of_wins,number_of_lose,number_of_ties,number_of_no_result,POINTS FROM team WHERE name='United Arab Emirates'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<tr onclick=\"window.document.location='players_united_arab_emirates.php';\" class = \"notfirst\">";
		 echo "<td>"."<center>"."United Arab Emirates"."</td>";
         echo "<td>"."<center>".$row["played_matches"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_wins"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_lose"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_ties"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["number_of_no_result"]."</center>"."</td>";
		 echo "<td>"."<center>".$row["POINTS"]."</center>"."</td>";
		 echo '</a>'."</tr>";
	 echo "</table>";
     $conn->close();    
?> 
</body>
</html>