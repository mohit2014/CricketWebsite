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
           header ("Location:insert.php");
    }
    else
    {
        echo "please login first";
    }
   
?>


