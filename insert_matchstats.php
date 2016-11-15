<?php
    session_start();
    if(isset($_SESSION['username'])){
       echo"<form method=\"POST\" action=\"insert_bat1.php\">". 
       "<h1 align=\"center\">"."Match NO. (between 1 and 49):"."</h1>".
      "<input style=\"height:40px;margin-left:650px;font-size:20px\" type=\"number\"  name=\"match\" min=\"1\" max=\"49\">".
       "<h1 align=\"center\">"."Ist INNINGS(Batting)"."</h1>".
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
        "01"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "02"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "03"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "04"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "05"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "06"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "07"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "08"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "09"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "10"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "11"."<input style=\"width:280px\" type=\"text\" name=\"batsman[]\">". "<input style=\"width:310px\" type=\"text\" name=\"out[]\">". "<input style=\"width:215px\" type=\"number\" name=\"runs[]\">". "<input style=\"width:260px\" type=\"number\" name=\"balls[]\">". "<input style=\"width:75px\" type=\"number\" name=\"fours[]\">". "<input style=\"width:80px\" type=\"number\" name=\"six[]\">". "<input style=\"width:90px\" type=\"text\" name=\"strikerate[]\">"."</br>".
        "<input style=\"height:40px;margin-left:650px;font-size:20px\" type=\"submit\" value=\"Submit\">".
       "</form>";
    }
    else
        echo "error";
        
?>
