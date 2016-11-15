<?php
     session_start();
    if(isset($_SESSION['username'])){
$link = mysqli_connect("localhost","root","","cricket");

$imageurl = mysqli_real_escape_string($link, $_POST['imageurl']);
$team = mysqli_real_escape_string($link, $_POST['team']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$type = mysqli_real_escape_string($link, $_POST['type']);
$speciality = mysqli_real_escape_string($link, $_POST['speciality']);
$age = mysqli_real_escape_string($link, $_POST['age']);
$iccrankingbatsman = mysqli_real_escape_string($link, $_POST['iccrankingbatsman']);
$iccrankingbowler = mysqli_real_escape_string($link, $_POST['iccrankingbowler']);
$description = mysqli_real_escape_string($link, $_POST['description']);

$sqli= "SELECT PROFILE,NAME,SPECIALITY,TYPE,TEAM FROM players WHERE TEAM='$team' and NAME='$name'";
$result=mysqli_query($link,$sqli);
$rowcount=mysqli_num_rows($result);
if($rowcount==1){
	echo "Player already exists.";
}
else {
$flag=0;
if(!empty($iccrankingbatsman) && !empty($iccrankingbowler)){
$flag=1;
$sqli = "INSERT INTO players (PROFILE,TEAM,NAME,TYPE,SPECIALITY,ICC_RANKING_BATSMAN,ICC_RANKING_BOWLER,AGE,DESCRIPTION) VALUES ('$imageurl','$team','$name','$type','$speciality',$iccrankingbatsman,$iccrankingbowler,$age,'$description')";
mysqli_query($link, $sqli);
}
else if(!empty($iccrankingbowler)){
$flag=1;
$sqli = "INSERT INTO players (PROFILE,TEAM,NAME,TYPE,SPECIALITY,ICC_RANKING_BOWLER,AGE,DESCRIPTION) VALUES ('$imageurl','$team','$name','$type','$speciality',$iccrankingbowler,$age,'$description')";
mysqli_query($link, $sqli);
}
else if(!empty($iccrankingbatsman)){
$flag=1;
$sqli = "INSERT INTO players (PROFILE,TEAM,NAME,TYPE,SPECIALITY,ICC_RANKING_BATSMAN,AGE,DESCRIPTION) VALUES ('$imageurl','$team','$name','$type','$speciality',$iccrankingbatsman,$age,'$description')";
mysqli_query($link, $sqli);
}
else if(!empty($imageurl) and !empty($team) and !empty($name) and !empty($type) and !empty($speciality) and !empty($age) and !empty($description)){
$flag=1;
$sqli = "INSERT INTO players (PROFILE,TEAM,NAME,TYPE,SPECIALITY,AGE,DESCRIPTION) VALUES ('$imageurl','$team','$name','$type','$speciality',$age,'$description')";
mysqli_query($link, $sqli);
}
if($flag==1){
echo "Record successfully inserted.";
}
else {
echo "Record not inserted.";
}
}
mysqli_close($link);
    }
    else
    {
        echo "PLease LOGIN First!";
    }
?>