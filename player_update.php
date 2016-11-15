<?php
     session_start();
    if(isset($_SESSION['username'])){
       ?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Records Form</title>
</head>
<body>
<form action="player_udt.php" method="post">
    <p>
        <label for="Team">Team:</label>
        <input type="text" name="team" id="Team">
    </p>
	<p>
        <label for="Name">Name:</label>
        <input type="text" name="name" id="Name">
    </p>
    <input type="submit" value="Update Record">
</form>
</body>
</html>
   <?php }
 else
 {
      echo "PLease LOGIN First!";
 }

?>
 