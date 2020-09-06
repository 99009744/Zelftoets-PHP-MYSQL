<?php
    include ("function.php");
    connect();
    $id = $_GET['id'];
    $user = getById($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <div id="mainpage">
        <h1>Edit</h1>
        <form method="post" action="main.php" style="margin: 25px">
            Naam : <input type="text" name="naam" placeholder="<?= $user[0]['naam'] ?>" required/><br />
            Datum : <input type="date" name="datum" placeholder="<?= $user[0]['datum'] ?>" required/><br>
            <input type="hidden" value="update" name="update" />
            <input type="hidden" value="<?= $user[0]['id'] ?>" name="id" />
            <input type="submit" value="Submit" />
        </form>
        </div>
</body>
</html>