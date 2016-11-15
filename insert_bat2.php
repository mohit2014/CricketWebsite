<?php
     session_start();
    if(isset($_SESSION['username'])){
            $link = mysqli_connect("localhost","root","","cricket");
            $match=0;
            for ($x = 0; $x <= 10; $x++) {
                $match=$_SESSION['matchnum'];
                $inning=2;
                $player=$_POST['batsman'][$x];
                $out=$_POST['out'][$x];
                $runs=$_POST['runs'][$x];
                $balls=$_POST['balls'][$x];
                $fours=$_POST['fours'][$x];
                $six=$_POST['six'][$x];
                $strikerate=$_POST['strikerate'][$x];
                $sqli= "INSERT INTO SCOREBOARD VALUES($match,$inning,'$player','$out',$runs,$balls,$fours,$six,'$strikerate')";
                $result=mysqli_query($link,$sqli); 
                $team=$_POST['select'];
                $sqli1 = "UPDATE players SET INNINGS=INNINGS+1, RUNS=RUNS+$runs, FOURS=FOURS+$fours, SIXES=SIXES+$six WHERE TEAM='$team'and NAME='$player'";
                mysqli_query($link,$sqli1);
                if($runs>=100){
                    $sqli2= "UPDATE players SET HUNDRED=HUNDRED+1 WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli2);
                }
                else if($runs>=50){
                   $sqli3= "UPDATE players SET FIFTY=FIFTY+1 WHERE TEAM='$team' and NAME='$player'"; 
                   $result=mysqli_query($link,$sqli3);
                }
                $sqli4= "SELECT BEST_BATSMAN_RUNS,BEST_BATSMAN_OUT_OR_NOT FROM players WHERE TEAM='$team' and NAME='$player'";
                $result=mysqli_query($link,$sqli4);
                $row=$result->fetch_assoc();
                $best=$row['BEST_BATSMAN_RUNS'];
                $notout=$row['BEST_BATSMAN_OUT_OR_NOT'];
                if($runs>$best)
                {
                    $sqli5= "UPDATE players SET BEST_BATSMAN_RUNS=$runs WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli5);
                    $sqli6= "UPDATE players SET BEST_BATSMAN_OUT_OR_NOT='OUT' WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli6);
                }
                else if($runs==$best and $out=='not out'){
                    $sqli7= "UPDATE players SET BEST_BATSMAN_OUT_OR_NOT='NOT OUT' WHERE TEAM='$team' and NAME='$player'";
                    $result=mysqli_query($link,$sqli7);
                
                }
            }
             echo "<h1 align=\"center\">"."Ist INNINGS(batting) successfully inserted"."</h1>".
                     "<h2 align=\"center\">"."Match-No:$match"."</h2>".
                     "<h1 align=\"center\">"."Ist INNINGS(bowling)"."</h1>".
                     "<form method=\"POST\" action=\"insert_bowl2.php\">". 
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
                                              "<th>". "Bowler". "</th>".
                                              "<th>". "Overs". "</th>",
                                              "<th>". "Runs". "</th>".
                                              "<th>". "Maiden". "</th>".
                                              "<th>". "wickets". "</th>".
                                              "<th>". "economy". "</th>".
                                              "<th>". "zero". "</th>".
                                              "<th>". "four". "</th>".
                                              "<th>". "six". "</th>".
                                       "</tr>".
                     "</table>".
                   "01"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "02"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "03"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "04"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "05"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "06"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "07"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "08"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "09"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "10"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                    "11"."<input style=\"width:165px\" type=\"text\" name=\"bowler[]\">". "<input style=\"width:150px\" type=\"number\" name=\"overs[]\">"."<input style=\"width:130px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:190px\" type=\"number\" name=\"maiden[]\">". "<input style=\"width:185px\" type=\"number\" name=\"wickets[]\">". "<input style=\"width:215px\" type=\"test\" name=\"economy[]\">". "<input style=\"width:110px\" type=\"number\" name=\"zero[]\">". "<input style=\"width:100px\" type=\"number\" name=\"four[]\">"."<input style=\"width:70px\" type=\"number\" name=\"six[]\">"."</br>".
                   
                    "<input style=\"height:40px;margin-left:650px;font-size:20px\" type=\"submit\" value=\"Submit\">".
                   "</form>";
      
    }
    else
    {
        echo "PLease LOGIN First!";
    }
?>
