<?php
    session_start();
$err=" ";
$username = $password  = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if($_POST['username']=='ADMIN'&&$_POST['password']=='mohit') {
       $_SESSION['username']=$_POST['username'];
       header ("Location:insert.php");}
   else
        {
            $err="* USERNAME AND PASSWORD NOT MATCH";
         }
}
echo "<html>";
  echo "<head>";
     echo "<title>"."CWC'15"."</title>";
     echo "<style>".
           "body{ 
              background-image:url(\"back51.jpg\");
              background-size:1350px 660px;
              background-repeat:no-repeat
           }".
          "div.pos_left {
                     position:fixed;
                     left:950px;
                     top:250px
          }".
          "img.pos{
                position:fixed;
                left:50px;
                top:400px
          }".

         "div {
            background-color: white;
            width: 200px;
            height:250px;
            padding: 40px;
            border: 5px solid blue;
        }".
       "ul {
         list-style-type: none;
         margin-left:200px;
         width:800px;
       }".
      "a:link, a:visited {
                      display: block;
                      font-weight: bold;
                      font-size:17px;
                      color: #FFFFFF;
                      background-color: #98bf21;
                      width: 130px;
                      height:40px;
                      text-align: center;
                      padding: 4px;
                      text-decoration: none;
                      text-transform: uppercase;
      }".
      "a:hover, a:active {
                      background-color:#7A991A;
      }".
     "li{
       float:left;
     }".
     "</style>";
     echo"<title style=\"color:black\">"."HTML marquee Tag"."</title>";

  echo "</head>";

  echo "<body>".
        "<img src=\"cricketball04.gif\" style=\"margin-left:500px;margin-top:150px;height:55px;width:60px\">".
        "<marquee bgcolor=orange>"."* ZIMBABWE SKIPPER BRENDON TAYLOR TO RETIRE AFTER THE WORLD CUP *         *RICKY PONTING SAYS INDIA IS ONE OF THE STRONG CONTENDERS OF THE WORLD CUP 2015 INSPITE OF THEIR 
	   POOR PERFORMANCE IN AUSTRALIA IN RECENT SERIES *"."</marquee>".

       "<ul>".
           "<li>"."<a href=\"final.php\">"."HOME"."</a>"."</li>".
           "<li>"."<a href=\"teams.php\">"."TEAMS"."</a>"."</li>".
           "<li>"."<a href=\"Schedule.php\">"."SCHEDULE"."</a>"."</li>".
           "<li>"."<a href=\"points_table.php\">"."POINTS TABLE"."</a>"."</li>".
		   "<li>"."<a href=\"statistics.php\">"."STATISTICS"."</a>"."</li>".

      "</ul>".
      "<img src=\"cricket2.gif\" style=\"height:200px;width:300px\" class=\"pos\">".
      "<div class=\"pos_left\">".
                            "<h2 style=\"color:blue\">"."ADMIN LOGIN"."</h2>".
                            "<form style=\"color:blue;font-size:15pt\"  method=\"POST\" action=\"final.php\" >".
                            "Username"."<input type=\"text\" name=\"username\" autocomplete=\"off\">"."<br>".
                            "Password"."<input type=\"password\" name=\"password\" >"."<br>".
                            "<input type=\"SUBMIT\" name=\"button\" value=\"submit\" style=\"background-color:blue;color:white;font-size:15pt;margin-top:10px\">".
				
			    "</form>";
                echo "<h5 style=\"color:red\">". $err."<h5>";
                $err=" ";
										
     echo "</div>".
    "<body>";

echo "</html>";
