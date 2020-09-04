<?php
    include ("function.php");
    connect();
     $users = getEverything();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="mainpage">
    <button id="create" href="creat.php">CREATE</button>
        <? foreach($users as $user){ ?>
            <div class="card">
                <p>Naam: <?= $user['naam'] ?><br>
                <p>Verjaardag: <?= $user['datum'] ?><br><br>
                <a href="edit.php">Bewerken</a>
                <a href="delete.php">Delete</a>
            </div>
        <? } ?>
        
    </div>
</body>
</html>