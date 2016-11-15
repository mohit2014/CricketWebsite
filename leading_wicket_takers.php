<?php 

     echo "<h1 align=\"center\">"."LEADING WICKET TAKERS IN WORLD CUP 2015"."</h1>";
     echo "<table style=\"width:100%;font-size:20px\">";
                                     echo "<tr style=\"background-color:27ECC8\">";
									          echo "<th>". "Rank". "</th>";
                                              echo "<th>". "Bowler". "</th>";
                                              echo "<th>". "Team". "</th>";
 											    echo "<th>". "Age". "</th>";
											   echo "<th>". "Matches". "</th>";
                                              echo "<th>". "Wickets". "</th>";
                                              echo "<th>". "Most Wickets In a Match ". "</th>";
                                             
                                           
                                              
                                     echo "</tr>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cricket";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT NAME,TEAM,AGE,INNINGS,WICKETS,BEST_BOWLER_WICKETS FROM players WHERE WICKETS!=0 || WICKETS !=NULL order by WICKETS DESC";
    $result = $conn->query($sql);
	$a=1;$b=0;$c=1; function inc() {
                         global $a,$b,$c;
						 if($b!=$c)
                         $a = $a + 1; }
          while($row = $result->fetch_assoc()) {
		  echo "<tr align=\"center\">";
		  $c="<td>".$row["WICKETS"]."</td>";
					 inc();$b=$c;
		   echo "<td>".$a."</td>";
          echo "<td >".$row["NAME"]."</td>";
          echo "<td>".$row["TEAM"]."</td>";
		  echo "<td>".$row["AGE"]."</td>";
		  echo "<td>".$row["INNINGS"]."</td>";
		  echo "<td>".$row["WICKETS"]."</td>";
		  echo "<td>".$row["BEST_BOWLER_WICKETS"]."</td>";
          echo "</tr>";
     }
         echo "</table>";
   $conn->close();
     
?> 