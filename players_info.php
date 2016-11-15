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

<style>
#header {
    background-color:blue;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:242px;
    width:160px;
    float:left;
    padding:5px;	      
}
#section {
    width:1143px;
    float:left;
    padding:10px;	 	 
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
<?php

	$name=$_GET['name'];
	$team=$_GET['team'];
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cricket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);
} 

$sql = "SELECT PROFILE,NAME,SPECIALITY,TYPE,TEAM,AGE,DESCRIPTION,INNINGS,RUNS,WICKETS,HUNDRED,FIFTY,FOURS,SIXES,BEST_BATSMAN_RUNS,BEST_BATSMAN_OUT_OR_NOT,BEST_BOWLER_RUNS,BEST_BOWLER_WICKETS,ICC_RANKING_BATSMAN,ICC_RANKING_BOWLER FROM players WHERE TEAM='$team' and NAME='$name'";
$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	?>


<div id="header">
<h1><?php echo $_GET['name'] ?></h1>
<h2><?php echo $_GET['team'].",	".$row["AGE"]." years old" ?></h2>
</div>

<div id="nav">
<img src="<?php echo $row["PROFILE"]; ?>" height="240" width="160">
</div>

<div id="section">
<h2><?php echo $row["NAME"]?></h2>
<h3><?php echo $row["TYPE"]."	(".$row["SPECIALITY"].")"?></h3>
<p>
<?php echo $row["DESCRIPTION"] ?>
</p>
<?php 
echo "<h3 align=\"center\" style=\"background-color:blue;color:white;\">"."STATISTICS"."</h3>";
echo "<table style=\"width:100%;font-size:20px\">";
                                     echo "<tr style=\"background-color:#E5E4E2\">";
                                              echo "<th>". "Innings". "</th>";
                                              echo "<th>". "Runs". "</th>"; 
                                              echo "<th>". "Wickets". "</th>";
                                              echo "<th>". "Best(Batsman)". "</th>";
                                              echo "<th>". "Best(Bowler)". "</th>";
                                              echo "<th>". "100". "</th>";
                                              echo "<th>". "50". "</th>";
											  echo "<th>". "4s". "</th>";
											  echo "<th>". "6s". "</th>";
                                     echo "</tr>";
									 echo "<tr align=\"center\">";
									 echo "<td>".$row["INNINGS"]."</td>";
									 echo "<td>".$row["RUNS"]."</td>";
									 echo "<td>".$row["WICKETS"]."</td>";
									 echo "<td>".$row["BEST_BATSMAN_RUNS"];
									 if(!empty($row["BEST_BATSMAN_RUNS"]) and $row["BEST_BATSMAN_OUT_OR_NOT"]=='NOT OUT'){
									echo "*"."</td>";
									} else{
									echo "</td>";
									}
									 if(!empty($row["BEST_BOWLER_RUNS"])){
									echo "<td>".$row["BEST_BOWLER_RUNS"]."/".$row["BEST_BOWLER_WICKETS"]."</td>";
									}
									else{
									echo "<td>".$row["BEST_BOWLER_RUNS"]."</td>";
									}
									 echo "<td>".$row["HUNDRED"]."</td>";
									 echo "<td>".$row["FIFTY"]."</td>";
									 echo "<td>".$row["FOURS"]."</td>";
									 echo "<td>".$row["SIXES"]."</td>";
									 echo "</tr>";
echo "</table>";
echo "<h3 align=\"center\" style=\"background-color:black;color:yellow;\">"."BATTING STATS"."</h3>";
$s = "SELECT batsman,status,runs,balls,four,six,strike_rate,match_number FROM scoreboard WHERE batsman='$name'";
    $resul = $conn->query($s);
    while($ro = $resul->fetch_assoc()){
	$match=$ro["match_number"];
	$sq = "SELECT match_no,match_type,team_1,team_2,date,day,time,venue,result FROM schedule WHERE match_no=$match";
	$result = $conn->query($sq);
    $rowi = $result->fetch_assoc();
	$data=$rowi["match_no"];
        $team1=$rowi["team_1"];
        $team2=$rowi["team_2"];
        $type=$rowi["match_type"];
        $day=$rowi["day"];
        $date=$rowi["date"];
        $venue=$rowi["venue"];
		echo "<table style=\"width:100%;font-size:16px\">";
		echo "<tr align=\"center\" style=\"background-color:blue;color:white;\" onclick=\"window.document.location='new.php?data=$data&team1=$team1&team2=$team2&type=$type&day=$day&date=$date&venue=$venue';\" class = \"notfirst\">";
         echo "<td>"."<font face=\"cooper black\"> Match no. ".$rowi["match_no"];
		 echo ", ".$rowi["match_type"];
		 echo "		".$rowi["team_1"]." vs ";
		 echo $rowi["team_2"]." on ";
		 echo $rowi["date"];
		 echo ", ".$rowi["day"];
		 echo " at ".$rowi["venue"]." stadium </font>"."</td>";
		 echo '</a>'."</tr>";
		 echo "</table>";
     echo "<table style=\"width:100%;font-size:18px\">";
                                     echo "<tr style=\"background-color:#E5E4E2\">";
                                              echo "<th>". "Batsman". "</th>";
                                              echo "<th>". "Out Desc". "</th>"; 
                                              echo "<th>". "R". "</th>";
                                              echo "<th>". "B". "</th>";
                                              echo "<th>". "4s". "</th>";
                                              echo "<th>". "6s". "</th>";
                                              echo "<th>". "SR". "</th>";
                                     echo "</tr>";
	echo "<tr align=\"center\">";
          echo "<td >".$ro["batsman"]."</td>";
          echo "<td>".$ro["status"]."</td>";
		  echo "<td>".$ro["runs"]."</td>";
		  echo "<td>".$ro["balls"]."</td>";
		  echo "<td>".$ro["four"]."</td>";
		  echo "<td>".$ro["six"]."</td>";
          echo "<td>".$ro["strike_rate"]."</td>";
          echo "</tr>";
	echo "</table>";
	}
echo "<h3 align=\"center\" style=\"background-color:black;color:yellow;\">"."BOWLING STATS"."</h3>";
$s = "SELECT bowler,overs,maidens,runs,wickets,economy,zero,four,six,match_number FROM bowling WHERE bowler='$name'";
    $resul = $conn->query($s);
    while($ro = $resul->fetch_assoc()){
	$match=$ro["match_number"];
	$sq = "SELECT match_no,match_type,team_1,team_2,date,day,time,venue,result FROM schedule WHERE match_no=$match";
	$result = $conn->query($sq);
    $rowi = $result->fetch_assoc();
	$data=$rowi["match_no"];
        $team1=$rowi["team_1"];
        $team2=$rowi["team_2"];
        $type=$rowi["match_type"];
        $day=$rowi["day"];
        $date=$rowi["date"];
        $venue=$rowi["venue"];
		echo "<table style=\"width:100%;font-size:16px\">";
		echo "<tr align=\"center\" style=\"background-color:blue;color:white;\" onclick=\"window.document.location='new.php?data=$data&team1=$team1&team2=$team2&type=$type&day=$day&date=$date&venue=$venue';\" class = \"notfirst\">";
         echo "<td>"."<font face=\"cooper black\"> Match no. ".$rowi["match_no"];
		 echo ", ".$rowi["match_type"];
		 echo "		".$rowi["team_1"]." vs ";
		 echo $rowi["team_2"]." on ";
		 echo $rowi["date"];
		 echo ", ".$rowi["day"];
		 echo " at ".$rowi["venue"]." stadium </font>"."</td>";
		 echo '</a>'."</tr>";
		 echo "</table>";
 echo "<table style=\"width:100%;font-size:18px\">";
                                     echo "<tr style=\"background-color:#E5E4E2 \">";
                                              echo "<th>". "Bowler". "</th>";
                                              echo "<th>". "O". "</th>"; 
                                              echo "<th>". "M". "</th>";
                                              echo "<th>". "R". "</th>";
                                              echo "<th>". "W". "</th>";
                                              echo "<th>". "Econ". "</th>";
                                              echo "<th>". "0s". "</th>";
                                              echo "<th>". "4s". "</th>";
                                              echo "<th>". "6s". "</th>";
                                     echo "</tr>";
	echo "<tr align=\"center\">";
        echo "<td >".$ro["bowler"]."</td>";
         echo "<td>".$ro["overs"]."</td>";
		 echo "<td>".$ro["maidens"]."</td>";
		 echo "<td>".$ro["runs"]."</td>";
		 echo "<td>".$ro["wickets"]."</td>";
		 echo "<td>".$ro["economy"]."</td>";
		 echo "<td>".$ro["zero"]."</td>";
		 echo "<td>".$ro["four"]."</td>";
		 echo "<td>".$ro["six"]."</td>";
	echo "</table>";
}
?>
</div>
</body>
</html>
