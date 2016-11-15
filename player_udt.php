<?php
     session_start();
    if(isset($_SESSION['username'])){
$link = mysqli_connect("localhost","root","","cricket");


$team = mysqli_real_escape_string($link, $_POST['team']);
$name = mysqli_real_escape_string($link, $_POST['name']);

$sqlii= "SELECT NAME FROM players WHERE TEAM='$team' and NAME='$name'";
$result=mysqli_query($link,$sqlii);
$rowcount=mysqli_num_rows($result);
if($rowcount==1){
$sqli= "DELETE FROM players WHERE TEAM='$team' and NAME='$name'";
mysqli_query($link,$sqli);
mysqli_close($link);
header("Location: player_form.php");
exit();
}
else {
echo "Record not found.";
}
    }
    else{
     echo "PLease LOGIN First!";
        
    }
?>