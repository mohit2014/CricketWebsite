<?php
    session_start();
    if(isset($_SESSION['username'])){
        $link = mysqli_connect("localhost","root","","cricket");
        $match=0;
            for ($x = 0;$_POST['bowler'][$x]!=""; $x++) {
                $match=$_SESSION['matchnum'];
                $inning=1;
                $player=$_POST['bowler'][$x];
                $over=$_POST['overs'][$x];
                $maiden=$_POST['maiden'][$x];
                $runs=$_POST['runs'][$x];
                $wicket=$_POST['wickets'][$x];
                $economy=$_POST['economy'][$x];
                $zero=$_POST['zero'][$x];
                $four=$_POST['four'][$x];
                $six=$_POST['six'][$x];
                $sqli= "INSERT INTO bowling VALUES('$player',$over,$maiden,$runs,$wicket,$economy,$zero,$four,$six,$match,$inning)";
                $result=mysqli_query($link,$sqli);
                $team=$_POST['select'];
                $sqli1 = "UPDATE players SET INNINGS=INNINGS+1, WICKETS=WICKETS+$wicket WHERE TEAM='$team'and NAME='$player'";
                mysqli_query($link,$sqli1);
                $sqli4= "SELECT BEST_BOWLER_RUNS,BEST_BOWLER_WICKETS FROM players WHERE TEAM='$team' and NAME='$player'";
                $result=mysqli_query($link,$sqli4);
                $row=$result->fetch_assoc();
                $best=$row['BEST_BOWLER_RUNS'];
                $notout=$row['BEST_BOWLER_WICKETS'];
                if($wicket>$notout)
                {
                    $sqli5= "UPDATE players SET BEST_BOWLER_RUNS=$runs WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli5);
                    $sqli6= "UPDATE players SET BEST_BOWLER_WICKETS=$wicket WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli6);
                }
                else if($wicket==$notout and $runs<$best)
                {
                    $sqli5= "UPDATE players SET BEST_BOWLER_RUNS=$runs WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli5);
                }
            } 
             echo "<h1 align=\"center\">"."Ist INNINGS(bowling) successfully inserted"."</h1>".
                     "<h2 align=\"center\">"."Match-No:$match"."</h2>".
                     "<h1 align=\"center\">"."IInd INNINGS(batting)"."</h1>".
            "<form method=\"POST\" action=\"insert_bat2.php\">". 
                      "<select name=\"select\" style=\"height:40px;margin-left:550px;font-size:20px\">".
            "<option value=\"TEAM\">"."TEAM"."</option>".
            "<option value=\"NEW ZEALAND\">"."NEW ZEALAND"."</option>".
            "<option value=\"AUSTRALIA\">"."AUSTRALIA"."</option>".
            "<option value=\"ENGLAND\">"."ENGLAND"."</option>".
            "<option value=\"SOUTH AFRICA\">"."SOUTH AFRICA"."</option>".
            "<option value=\"PAKISTAN\">"."PAKISTAN"."</option>".
            "<option value=\"INDIA\">"."INDIA"."</option>".
            "<option value=\"SRILANKA\">"."SRILANKA"."</option>".
            "<option value=\"BANGLADESH\">"."BANGLADESH"."</option>".
            "<option value=\"AFGHANISTAN\">"."AFGHANISTAN"."</option>".
            "<option value=\"SCOTLAND\">"."SCOTLAND"."</option>".
            "<option value=\"ZIMBAWE\">"."ZIMBAWE"."</option>".
            "<option value=\"IRELAND\">"."IRELAND"."</option>".
            "<option value=\"UNITED ARAB EMIRATES\">"."UNITED ARAB EMIRATES"."</option>".
            "<option value=\"WEST INDIES\">"."WEST INDIES"."</option>".
       "</select>".
       "<table style=\"width:100%;font-size:20px\">".
                                     "<tr style=\"background-color:#E5E4E2\">".
                                              "<th>". "Batsman". "</th>".
                                              "<th>". "Out Desc". "</th>".
                                              "<th>". "RUNS". "</th>".
                                              "<th>". "BALLS". "</th>".
                                              "<th>". "4s". "</th>".
                                              "<th>". "6s". "</th>".
                                              "<th>". "SR". "</th>".
                                       "</tr>".
        "</table>".
        "01"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "02"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "03"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "04"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "05"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "06"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "07"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "08"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "09"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "10"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "11"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:80px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "<input style=\"height:40px;margin-left:650px;font-size:20px\" type=\"submit\" value=\"Submit\">".
       "</form>";
    }
     else
    {
        echo "PLease LOGIN First!";
    }

?>


