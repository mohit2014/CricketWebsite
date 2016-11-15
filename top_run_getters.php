<?php 

     echo "<h1 align=\"center\">"."LEADING RUN SCORERS IN WORLD CUP 2015"."</h1>";
     echo "<table style=\"width:100%;font-size:20px\">";
                                     echo "<tr style=\"background-color:27ECC8\">";
									          echo "<th>". "Rank". "</th>";
                                              echo "<th>". "Batsman". "</th>";
                                              echo "<th>". "Team". "</th>"; 
											  echo "<th>". "Age". "</th>";
											   echo "<th>". "Matches". "</th>";
                                              echo "<th>". "Runs". "</th>";
                                              
                                              echo "<th>". "Hundreds". "</th>";
                                              echo "<th>". "Fifties". "</th>";
                                              echo "<th>". "Highest Score". "</th>";
											  
                                     echo "</tr>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cricket";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT NAME,TEAM,AGE,INNINGS,RUNS,HUNDRED,FIFTY,BEST_BATSMAN_RUNS FROM players WHERE RUNS!=0 || RUNS !=NULL order by RUNS DESC";
    $result = $conn->query($sql);
	$a=1;$b=0;$c=1; function inc() {
                         global $a,$b,$c;
						 if($b!=$c)
                         $a = $a + 1; }
	
          while($row = $result->fetch_assoc()) {
			 $c="<td>".$row["RUNS"]."</td>";
					 inc();$b=$c;
		  echo "<tr align=\"center\">";
		  echo "<td>".$a."</td>";
          echo "<td >".$row["NAME"]."</td>";
          echo "<td>".$row["TEAM"]."</td>";
		   echo "<td>".$row["AGE"]."</td>";
		  echo "<td>".$row["INNINGS"]."</td>";
		  echo "<td>".$row["RUNS"]."</td>";
		  
		  echo "<td>".$row["HUNDRED"]."</td>";
		  echo "<td>".$row["FIFTY"]."</td>";
		  echo "<td>".$row["BEST_BATSMAN_RUNS"]."</td>";
          echo "</tr>";
     }
         echo "</table>";
   $conn->close();
     
?> 