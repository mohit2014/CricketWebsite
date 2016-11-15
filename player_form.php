<?php
 session_start();
    if(isset($_SESSION['username'])){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="player_add.php" method="post">
    <p>
        <label for="imageUrl">Image URL:</label>
        <input type="text" name="imageurl" id="imageUrl">
    </p>
	<p>
        <label for="Team">Team:</label>
        <input type="text" name="team" id="Team">
    </p>
	<p>
        <label for="Name">Name:</label>
        <input type="text" name="name" id="Name">
    </p>
    <p>
        <label for="Type">Type:</label>
        <input type="text" name="type" id="Type">
    </p>
    <p>
        <label for="Speciality">Speciality:</label>
        <input type="text" name="speciality" id="Speciality">
    </p>
	<p>
        <label for="Age">Age:</label>
        <input type="text" name="age" id="Age">
    </p>
	<p>
        <label for="iccRankingBatsman">Icc Ranking Batsman:</label>
        <input type="text" name="iccrankingbatsman" id="iccRankingBatsman">
    </p>
	<p>
        <label for="iccRankingBowler">Icc Ranking Bowler:</label>
        <input type="text" name="iccrankingbowler" id="iccRankingBowler">
    </p>
	<p>
        <label for="Description">Description:</label>
        <input type="text" name="description" id="Description">
    </p>
    <input type="submit" value="Add Record">
</form>
</body>
</html>
<?php
    }
    else
    {
         echo "PLease LOGIN First!";
    }
?>