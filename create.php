<?php
    include ("function.php");
    connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="mainpage">
        <form method="post" action="planning.php" style="margin: 25px">
            Naam : <input type="text" name="naam" placeholder="naam" required/><br />
            Datum : <input type="date" name="datum" required/><br>
            <input type="submit" value="Submit" />
        </form>
        </div>
</body>
</html>