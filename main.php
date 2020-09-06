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
                <p>Verjaardag: <?= $user['datum'] ?></p>
                <a href="edit.php?id=<?= $user['id'] ?>">Bewerken</a>
                <button class="delete" data-id="<?= $user['id'] ?>">Delete</button>
            </div>
        <? } ?>
        
    </div>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
   $('.delete').on('click', function(e){
       e.preventDefault(); //cancel default action

       var href = "redirect.php?id=" + $(this).data("id");
       var message = $(this).data('confirm');

       //pop up
       swal({
           title: "Are you sure ??",
           text: message, 
           icon: "warning",
           buttons: true,
           dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
           swal("Poof! Your imaginary file has been deleted!", {
             icon: "success",
           });
           window.location.href = href;
         } else {
           swal("Your imaginary file is safe!");
         }
       });
   });
});
    </script>
</body>
</html>