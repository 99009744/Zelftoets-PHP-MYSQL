<?php
    include ("function.php");
    connect();
     $users = getEverything();
    $naam = $_POST['naam'];
    $datum = $_POST['datum'];
    $update = $_POST['update'];
    $id = $_POST['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($update != NULL){
            edit($id, $datum, $naam);
            $_SESSION['postdata'] = $_POST;
            unset($_POST);
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
        else{
            insert($naam, $datum);
            $_SESSION['postdata'] = $_POST;
            unset($_POST);
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>MAIN</title>
</head>
<body>
    <div class="mainpage">
    <button id="create"><a href="create.php">Create</a> </button>
        <? foreach($users as $user){ ?>
            <div class="card">
                <p>Naam: <?= $user['naam'] ?><br>
                <p>Verjaardag: <?= $user['datum'] ?><br><br>
                <a href="edit.php?id=<?= $user['id'] ?>">Bewerken</a>
                <a id="delete" href="main.php?id=<?= $user['id'] ?>">Delete</a>
            </div>
        <? } ?>
        
    </div>
    
</body>
</html>