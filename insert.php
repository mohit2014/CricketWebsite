<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "<form align=\"right\" name=\"form1\" method=\"post\" action=\"logout.php\">".
      
      "<input style=\"width:100px;height:40px;background-color:blue;color:white;font-size:20px\" name=\"submit2\" type=\"submit\" value=\"log out\">".
      
    "</form>";
    echo "<h1 style=\"color:blue;font-size:50px\" align=\"center\">"."ADMIN"."</h1>";
     echo "<form  name=\"form1\" method=\"post\" action=\"player_form.php\">".
      
      "<input style=\"width:400px;height:40px;background-color:blue;color:white;font-size:20px\" name=\"submit3\" type=\"submit\" value=\"INSERT NEW PLAYER\">".
      
    "</form>";
     echo "<form name=\"form1\" method=\"post\" action=\"player_update.php\">".
      
      "<input style=\"width:400px;height:40px;background-color:blue;color:white;font-size:20px\" name=\"submit2\" type=\"submit\" value=\"UPDATE AN EXISTING PLAYER\">".
      
    "</form>";
     echo "<form  name=\"form1\" method=\"post\" action=\"insert_matchstats.php\">".
      
      "<input style=\"width:400px;height:40px;background-color:blue;color:white;font-size:20px\" name=\"submit2\" type=\"submit\" value=\"INSERT MATCH STATS\">".
      
    "</form>";

    }
    else
        echo "error";
        
?>